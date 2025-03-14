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

        const code = href.substring(indexOfLastSlash + 1, indexOfQuestionMark);

        console.log({code});

        return code;
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

            const guestIds = [response.data.main_guest.id, ...response.data.main_guest.children.map(ch => ch.id)]

            setGuestRestrictions(
                guestIds.reduce((a, c) => {
                    a[c] = [];
                    return a;
                }, {})
            )
        }

        loadInvitation();
    }, []);


    if (restrictions == null || invitation == null) return null;

    async function updateInvitation() {
        console.log({
            emails,
            guestRestrictions,
            nights
        });

        const response = await axios.put("/api/invitation", {
            code: getCode(),
            emails: emails.join(','),
            nights: nights.map((night, index) => index + 1).filter((night, index) => nights[index])
        });

        console.log(response);
    }

    return (
        <form
            onSubmit={(e) => {
                e.preventDefault();

                updateInvitation();
            }}
        >
            <span  className="notoserifdisplay text-gray-700 font-thin mb-5">Ahoj{invitation.main_guest.children.length > 0 ? "te" : ""},</span>
            <h1 className="ppplayground text-6xl text-gray-900 mb-5">{invitation.label}</h1>
            <p className="mb-1 notoserifdisplay font-thin text-gray-700  mb-3">
                Vyplň{invitation.main_guest.children.length > 0 ? "te" : ""} nám prosím odpovede na niekoľko rýchlych
                otázok,<br/> aby sme mohli všetko dokonale naplánovať.
            </p>

            <h2 className="mt-8 mb-3 text-lg font-semibold tracking-tight text-gray-900  notoserifdisplay">Email</h2>
            <p className="mb-1 notoserifdisplay font-thin text-gray-700">
                Emailovú adresu (prípadne adresy) zaradíme do <strong>svadobného newslettra</strong> a budeme
                na ňu priebežne posielať <strong>organizačné informácie</strong> potrebné pre hladký priebeh nášho
                veľkého dňa.
            </p>


            <Email emails={emails} setEmails={setEmails}/>

            <h2 className="mt-8 mb-3 text-lg font-semibold tracking-tight text-gray-900 sm:text-lg notoserifdisplay">Stravovanie</h2>

            <p className="mb-1 notoserifdisplay font-thin text-gray-700">
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
                                        console.log("setGuestRestrictions", invitation.main_guest.id, restrictions)

                                        console.log(Object.keys(guestRestrictions));
                                        // .map((gr) => (gr === invitation.main_guest.id ? restrictions : guestRestrictions[gr])))

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
                                    // guestRestrictions={guestRestrictions[guest.id]}
                                    // setGuestRestrictions((restrictions) => {
                                    //     console.log(setGuestRestrictions, guest.id, restrictions)
                                    // })
                                />
                            ))
                        ) : null
                    }
                </div>
            </fieldset>

            <h2 className="mt-8 mb-3 text-lg font-semibold tracking-tight text-gray-900  notoserifdisplay ">Ubytovanie</h2>

            <p className="text-gray-500 mb-3 notoserifdisplay font-thin">
                Svadobná hostina sa bude konať v <strong>piatok 29. Augusta</strong> v Trenčianskych Tepliciach.
                <br/>
                Veľmi radi pre Vás sprostredkujeme ubytovanie v blízkosti konania hostiny.
            </p>
            <p className="text-gray-500 mb-1 notoserifdisplay font-thin">
                Dajte nám prosím vedieť, či do miesta konania svadby <strong>dorazíte už večer pred svadbou</strong>, alebo až v deň
                konania svadby.
            </p>
            <p className="text-gray-500 mb-1 notoserifdisplay font-thin">
                Taktiež na deň po svadbe - <strong>sobotu 30. 8.</strong> máme v pláne menšiu <strong>afterparty</strong>.
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
                            <p id="comments-description" className="text-gray-500 notoserifdisplay font-thin">
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
                                Ubytovanie zo soboty 30. na nedeľu 31. Augusta
                            </label>
                            <p id="offers-description" className="text-gray-500 notoserifdisplay font-thin">
                                Zaškrtnite v prípade, že máte zájem predĺžiť si pobyt v
                                Trenčianskych Tepliciach až do nedele.
                            </p>
                        </div>
                        <div className="flex h-6 shrink-0 items-center">
                            <div className="group grid size-4 grid-cols-1">
                                <input
                                    id="offers"
                                    name="offers"
                                    type="checkbox"
                                    aria-describedby="offers-description"
                                    className="col-start-1 row-start-1 appearance-none border border-gray-300 bg-white checked:border-gray-600 checked:bg-gray-600 indeterminate:border-gray-600 indeterminate:bg-gray-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto"
                                    checked={nights[2]}
                                    onChange={(e) => {
                                        setNights(
                                            nights.map((a, i) => (
                                                i === 2 ? e.target.checked : a
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


    )
}

export default Questionaire;
