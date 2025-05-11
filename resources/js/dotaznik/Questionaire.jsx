import {useEffect, useState} from "react";
import Email from "./Email.jsx";

import axios from "axios";
import GuestRequirements from "./GuestRequirements.jsx";

function Questionaire(Props) {
    const [restrictions, setRestrictions] = useState(null);
    const [invitation, setInvitation] = useState(null);

    const [emails, setEmails] = useState([]);
    const [guestRestrictions, setGuestRestrictions] = useState(null);
    const [nights, setNights] = useState([false, true, false]);

    const [success, setSuccess] = useState(false);
    /*
     - email
     - stravovace obmedzenia
        - pr kazdeho ucastnika z pozvanky
        - checkboxy pre jednotlive obmedzenia

    - ubytovanie
        - mate zaujem o ubytovanie uz zo stvrtka na piatok?
        - mate zaujem o ubytovanie aj na dalsiu noc po svadbe?



     */
    const getCode = () => {
        const href = window.location.href;

        const indexOfLastSlash = href.lastIndexOf('/');
        const indexOfQuestionMark = href.indexOf('?');
        if (indexOfQuestionMark > 0) {
            return href.substring(indexOfLastSlash + 1, indexOfQuestionMark);
        } else {
            return href.substring(indexOfLastSlash + 1);
        }
    }

    useEffect(() => {

        async function loadRestrictions() {
            const response = await axios.get("/api/restrictions");

            console.log(response);
            setRestrictions(response.data);

        }

        loadRestrictions();

        async function loadInvitation() {
            const response = await axios.post("/api/invitation", {code: getCode()});

            setInvitation(response.data)

            setEmails(response.data.emails !== null ? response.data.emails.split(',') : [])

            const nights = [false, true, false];
            response.data.nights.forEach(night => {
                nights[night.night - 1] = true;
            })
            setNights(nights);


            const guestIds = [response.data.main_guest.id, ...response.data.main_guest.children.map(ch => ch.id)]
            const guestRestrictions = guestIds.reduce((a, c) => {
                a[c] = [];
                return a;
            }, {})

            guestRestrictions[response.data.main_guest.id] = response.data.main_guest.restrictions.map(r => r.id);
            response.data.main_guest.children.forEach(guest => {
                guestRestrictions[guest.id] = guest.restrictions.map(r => r.id);
            })

            setGuestRestrictions(guestRestrictions)
        }

        loadInvitation();
    }, []);


    if (restrictions == null || invitation == null) return (
        <div className="loader"></div>
    );

    async function updateInvitation() {
        console.log({
            emails,
            guestRestrictions,
            nights
        });

        const response = await axios.put("/api/invitation", {
            code: getCode(),
            emails: emails.join(','),
            guestRestrictions,
            nights: nights.map((night, index) => index + 1).filter((night, index) => nights[index])
        });

        setSuccess(true);

        console.log(response);
    }

    console.log({guestRestrictions});

    return (
        <>
            {
                success && (
                    <div className="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

                        {/*Background backdrop, show/hide based on modal state.*/}

                        {/*Entering: "ease-out duration-300"*/}
                        {/*  From: "opacity-0"*/}
                        {/*  To: "opacity-100"*/}
                        {/*Leaving: "ease-in duration-200"*/}
                        {/*  From: "opacity-100"*/}
                        {/*  To: "opacity-0"*/}

                        <div className="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>

                        <div className="fixed inset-0 z-10 w-screen overflow-y-auto">
                            <div
                                className="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                                {/*Modal panel, show/hide based on modal state.*/}

                                {/*Entering: "ease-out duration-300"*/}
                                {/*  From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"*/}
                                {/*  To: "opacity-100 translate-y-0 sm:scale-100"*/}
                                {/*Leaving: "ease-in duration-200"*/}
                                {/*  From: "opacity-100 translate-y-0 sm:scale-100"*/}
                                {/*  To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"*/}
                                <div
                                    className="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                                    <div>
                                        <div
                                            className="mx-auto flex size-12 items-center justify-center rounded-full bg-green-100">
                                            <svg className="size-6 text-green-600" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                                 data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="m4.5 12.75 6 6 9-13.5"/>
                                            </svg>
                                        </div>
                                        <div className="mt-3 text-center sm:mt-5">
                                            <h3 className="text-base font-semibold text-gray-900 notoserifdisplay"
                                                id="modal-title">
                                                Dotazník odoslaný!
                                            </h3>
                                            <div className="mt-2">
                                                <p className="text-sm text-gray-500 notoserifdisplay">
                                                    Ďakujeme za vyplnenie odpovedí.
                                                    <br/>
                                                    K zadaným odpovediam sa môžete kedykoľvek vrátit a upraviť ich.
                                                </p>
                                                <p className="mt-2 mb-5 text-4xl text-center text-gray-800 ppplayground">
                                                    Tešíme sa na Vás.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="mt-5 sm:mt-6">
                                        <button type="button"
                                                onClick={() => setSuccess(false)}
                                                className="inline-flex w-full justify-center bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                            Zavrieť
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                )
            }


            <form
                style={{fontWeight: 200}}
                onSubmit={(e) => {
                    e.preventDefault();

                    updateInvitation();
                }}
            >
            <span
                className="notoserifdisplay text-gray-700  mb-5">Ahoj{invitation.main_guest.children.length > 0 ? "te" : ""},</span>
                <h1 className="ppplayground text-6xl text-gray-900 mb-5">{invitation.label}</h1>
                <p className="mb-1 notoserifdisplay  text-gray-700  mb-3">
                    Vyplň{invitation.main_guest.children.length > 0 ? "te" : ""} nám prosím odpovede na niekoľko
                    rýchlych
                    otázok,<br/> aby sme mohli všetko dokonale naplánovať.
                </p>

                <h2 className="mt-8 mb-3 text-lg font-semibold tracking-tight text-gray-900  notoserifdisplay">Email</h2>
                <p className="mb-1 notoserifdisplay  text-gray-700">
                    Emailovú adresu (prípadne adresy) zaradíme do <strong>svadobného newslettra</strong> a budeme
                    na ňu priebežne posielať <strong>organizačné informácie</strong> potrebné pre hladký priebeh nášho
                    veľkého dňa.
                </p>


                <Email emails={emails} setEmails={setEmails}/>

                <h2 className="mt-8 mb-3 text-lg font-semibold tracking-tight text-gray-900 sm:text-lg notoserifdisplay">Stravovanie</h2>

                <p className="mb-1 notoserifdisplay  text-gray-700">
                    {invitation.main_guest.children.length > 0 ? "Je niekto z vás" : "Si"} vegán, celiatik, alebo
                    alergik?
                </p>

                <fieldset>

                    <div className="mt-4 divide-y divide-gray-200 border-b border-t border-gray-200">
                        <div>
                            {
                                invitation !== null ? (
                                    <GuestRequirements
                                        name={invitation.main_guest.children.length > 0 ? invitation.main_guest.firstName : null}
                                        restrictions={restrictions}
                                        guestRestrictions={guestRestrictions[invitation.main_guest.id]}
                                        setGuestRestrictions={(restrictions) => {
                                            const newGuestRestrictions = {};
                                            newGuestRestrictions[invitation.main_guest.id] = restrictions;

                                            setGuestRestrictions(
                                                Object.assign({}, guestRestrictions, newGuestRestrictions)
                                            )
                                        }}
                                    />
                                ) : null
                            }
                        </div>


                        {
                            invitation.main_guest.children.length > 0 ? (
                                invitation.main_guest.children.map(guest => (
                                    <GuestRequirements
                                        name={guest.firstName}
                                        restrictions={restrictions}
                                        guestRestrictions={guestRestrictions[guest.id]}
                                        setGuestRestrictions={(restrictions) => {
                                            const newGuestRestrictions = {};

                                            newGuestRestrictions[guest.id] = restrictions;

                                            setGuestRestrictions(
                                                Object.assign({}, guestRestrictions, newGuestRestrictions)
                                            )
                                        }}
                                    />
                                ))
                            ) : null
                        }
                    </div>
                </fieldset>

                <h2 className="mt-8 mb-3 text-lg font-semibold tracking-tight text-gray-900  notoserifdisplay ">Ubytovanie</h2>

                <p className="text-gray-500 mb-3 notoserifdisplay ">
                    Svadobná hostina sa bude konať v <strong>piatok 29. Augusta</strong> v Trenčianskych Tepliciach.
                    <br/>
                    Veľmi radi pre Vás sprostredkujeme ubytovanie v blízkosti konania hostiny.
                </p>
                <p className="text-gray-500 mb-1 notoserifdisplay ">
                    Dajte nám prosím vedieť, či do miesta konania svadby <strong>dorazíte už večer pred svadbou</strong>,
                    alebo až v deň
                    konania svadby.
                </p>
                <p className="text-gray-500 mb-1 notoserifdisplay ">
                    Taktiež na deň po svadbe - <strong>sobotu 30. 8.</strong> máme v pláne
                    menšiu <strong>afterparty</strong>.
                    <br/>
                    V prípade, že by ste si s nami chceli užiť víkend naplno je možné ostať v Trenčianských Tepliciach
                    až do
                    Nedele.
                </p>

                <fieldset className="border-t border-b border-gray-200">
                    <legend className="sr-only">Notifications</legend>
                    <div className="divide-y divide-gray-200">
                        <div className="relative flex gap-3 pt-3.5 pb-4">
                            <div className="min-w-0 flex-1">
                                <label htmlFor="comments" className="font-medium text-gray-900 notoserifdisplay">
                                    Ubytovanie zo štvrtka 28. na piatok 29. Augusta
                                    <br/>
                                    ( noc pred svadbou )
                                </label>
                                <p id="comments-description" className="text-gray-500 notoserifdisplay ">
                                    Zaškrtnite prosím v prípade, že máte zájem do Trenčianskych Teplíc
                                    doraziť večer pred svadbou.
                                </p>
                            </div>
                            <div className="flex h-6 shrink-0 items-center">
                                <div className="group grid size-4 grid-cols-1">
                                    <input
                                        defaultChecked
                                        id="comments"
                                        name="comments"
                                        type="checkbox"
                                        aria-describedby="comments-description"
                                        className="col-start-1 row-start-1 appearance-none border border-gray-300 bg-white checked:border-gray-600 checked:bg-gray-600 indeterminate:border-gray-600 indeterminate:bg-gray-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto"
                                        checked={nights[0]}
                                        onChange={(e) => {
                                            setNights(
                                                nights.map((a, i) => (
                                                    i === 0 ? e.target.checked : a
                                                ))
                                            )
                                        }}
                                    />
                                    <svg
                                        fill="none"
                                        viewBox="0 0 14 14"
                                        className="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"
                                    >
                                        <path
                                            d="M3 8L6 11L11 3.5"
                                            strokeWidth={2}
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                            className="opacity-0 group-has-checked:opacity-100"
                                        />
                                        <path
                                            d="M3 7H11"
                                            strokeWidth={2}
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                            className="opacity-0 group-has-indeterminate:opacity-100"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div className="relative flex gap-3 pt-3.5 pb-4">
                            <div className="min-w-0 flex-1">
                                <label htmlFor="comments" className="font-medium text-gray-900 notoserifdisplay">
                                    Ubytovanie zo štvrtka 28. na piatok 29. Augusta
                                    <br/>
                                    ( noc pred svadbou )
                                </label>
                                <p id="comments-description" className="text-gray-500 notoserifdisplay ">
                                    Zaškrtnite prosím v prípade, že máte zájem do Trenčianskych Teplíc
                                    doraziť večer pred svadbou.
                                </p>
                            </div>
                            <div className="flex h-6 shrink-0 items-center">
                                <div className="group grid size-4 grid-cols-1">
                                    <input
                                        defaultChecked
                                        id="comments"
                                        name="comments"
                                        type="checkbox"
                                        aria-describedby="comments-description"
                                        className="col-start-1 row-start-1 appearance-none border border-gray-300 bg-white checked:border-gray-600 checked:bg-gray-600 indeterminate:border-gray-600 indeterminate:bg-gray-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto"
                                        checked={nights[0]}
                                        onChange={(e) => {
                                            setNights(
                                                nights.map((a, i) => (
                                                    i === 0 ? e.target.checked : a
                                                ))
                                            )
                                        }}
                                    />
                                    <svg
                                        fill="none"
                                        viewBox="0 0 14 14"
                                        className="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"
                                    >
                                        <path
                                            d="M3 8L6 11L11 3.5"
                                            strokeWidth={2}
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                            className="opacity-0 group-has-checked:opacity-100"
                                        />
                                        <path
                                            d="M3 7H11"
                                            strokeWidth={2}
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                            className="opacity-0 group-has-indeterminate:opacity-100"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div className="relative flex gap-3 pt-3.5 pb-4">
                            <div className="min-w-0 flex-1">
                                <label htmlFor="offers" className="font-medium text-gray-900 notoserifdisplay">
                                    Ubytovanie počas "svadobnej noci" - z piatka 29. 8. na 30. 8.
                                </label>
                                {/*<p id="offers-description" className="text-gray-500 notoserifdisplay ">*/}
                                {/*    Ubytovanie*/}
                                {/*</p>*/}
                            </div>
                            <div className="flex h-6 shrink-0 items-center">
                                <div className="group grid size-4 grid-cols-1">
                                    <input
                                        id="offers"
                                        name="offers"
                                        type="checkbox"
                                        aria-describedby="offers-description"
                                        className="col-start-1 row-start-1 appearance-none border border-gray-300 bg-white checked:border-gray-600 checked:bg-gray-600 indeterminate:border-gray-600 indeterminate:bg-gray-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto"
                                        checked={nights[1]}
                                        onChange={(e) => {
                                            setNights(
                                                nights.map((a, i) => (
                                                    i === 1 ? e.target.checked : a
                                                ))
                                            )
                                        }}
                                    />
                                    <svg
                                        fill="none"
                                        viewBox="0 0 14 14"
                                        className="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"
                                    >
                                        <path
                                            d="M3 8L6 11L11 3.5"
                                            strokeWidth={2}
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                            className="opacity-0 group-has-checked:opacity-100"
                                        />
                                        <path
                                            d="M3 7H11"
                                            strokeWidth={2}
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                            className="opacity-0 group-has-indeterminate:opacity-100"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <button
                    className="mt-8 block py-2.5 px-3.5 text-center text-sm font-semibold focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 sm:mt-10 bg-gray-600 text-white shadow-sm hover:bg-gray-500">
                    Odoslať
                </button>
            </form>
        </>


    )
}

export default Questionaire;
