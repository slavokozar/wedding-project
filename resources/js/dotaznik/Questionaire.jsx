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

    console.log({
        emails,
        guestRestrictions,
        nights
    })
/*
 - email
 - stravovace obmedzenia
    - pr kazdeho ucastnika z pozvanky
    - checkboxy pre jednotlive obmedzenia

- ubytovanie
    - mate zaujem o ubytovanie uz zo stvrtka na piatok?
    - mate zaujem o ubytovanie aj na dalsiu noc po svadbe?



 */


    useEffect( () => {

        async function loadRestrictions() {
            const response= await axios.get("/api/restrictions");

            console.log(response);
            setRestrictions(response.data);

        }
        loadRestrictions();
        async function loadInvitation() {
            const response= await axios.get("/api/invitation");

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


    if(restrictions == null || invitation == null) return null;

    return (


        <>

            <form action="">
                <div className="flex min-h-full flex-1 flex-col justify-center py-12 sm:px-6 lg:px-8">
                    <div className="sm:mx-auto sm:w-full sm:max-w-md">
                        <img
                            alt="Your Company"
                            src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                            className="mx-auto h-10 w-auto"
                        />
                        <h1 className="mt-6 text-center text-xl/9 font-bold tracking-tight text-gray-900">
                            Svadobny dotaznik
                        </h1>
                    </div>

                    <div className="mt-10 sm:mx-auto sm:w-full sm:max-w-[640px]">
                        <div className="bg-white px-6 py-12 shadow-sm sm:rounded-lg sm:px-12">
                            <h2 className="mt-2 text-xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Email</h2>
                            <p className="text-gray-500 mb-1">
                                Vyplňte nám prosím emailovú adresu (prípadne adresy) ktorú zaradíme do svadobného
                                newslettra a budeme Vám na ňu posielať organizačné informácie potrebné pre hladký
                                priebeh svadby.
                            </p>


                            <Email emails={emails} setEmails={setEmails}/>


                            <h2 className="mt-2 text-xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Stravovacie
                                požiadavky</h2>

                            <fieldset>

                                <div className="mt-4 divide-y divide-gray-200 border-b border-t border-gray-200">
                                    <div>
                                        {
                                            invitation !== null ? (
                                                <GuestRequirements
                                                    name={invitation.main_guest.firstName}
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

                            <h2 className="mt-2 mb-3 text-xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Ubytovanie</h2>

                            <p className="text-gray-500 mb-1">
                                Svadba sa bude konať v Piatok 29. Augusta v Trenčianských Tepliciach.
                                Veľmi radi pre Vás sprostredkujeme ubytovanie v blízkosti konania svadby.
                            </p>
                            <p className="text-gray-500 mb-1">
                                Dajte nám prosím vedieť, či do miesta konania svadby dorazíte už večer pred svadbou,
                                alebo až v deň konania svadby.
                            </p>
                            <p className="text-gray-500 mb-1">
                                Taktiež na deň po svadbe - Sobotu 30. 8. máme v pláne menšiu afterparty. V prípade,
                                že
                                by ste si s nami chceli užiť víkend naplno je možné ostať v Trenčianských Tepliciach
                                až
                                do Nedele.
                            </p>

                            <fieldset className="border-t border-b border-gray-200">
                                <legend className="sr-only">Notifications</legend>
                                <div className="divide-y divide-gray-200">
                                    <div className="relative flex gap-3 pt-3.5 pb-4">
                                        <div className="min-w-0 flex-1 text-sm/6">
                                            <label htmlFor="comments" className="font-medium text-gray-900">
                                                Ubytovanie v noci z 28. na 29. Augusta
                                            </label>
                                            <p id="comments-description" className="text-gray-500">
                                                Zaškrtnite prosím v prípade, že máte zájem do Trenčianských Teplíc
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
                                                    className="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto"
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
                                        <div className="min-w-0 flex-1 text-sm/6">
                                            <label htmlFor="offers" className="font-medium text-gray-900">
                                                Ubytovanie v noci z 30. na 31. Augusta
                                            </label>
                                            <p id="offers-description" className="text-gray-500">
                                                Zaškrtnite v prípade, že máte zájem predĺžiť si pobyt v
                                                Trenčianských Tepliciach až do Nedele.
                                            </p>
                                        </div>
                                        <div className="flex h-6 shrink-0 items-center">
                                            <div className="group grid size-4 grid-cols-1">
                                                <input
                                                    id="offers"
                                                    name="offers"
                                                    type="checkbox"
                                                    aria-describedby="offers-description"
                                                    className="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto"
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
                        </div>
                    </div>
                </div>

            </form>


        </>
    )
}

export default Questionaire;
