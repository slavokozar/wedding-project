import {useEffect, useState} from "react";
import Email from "./Email.jsx";

import axios from "axios";
import {Description, Field, Label, Switch} from "@headlessui/react";

function GuestRequirements({name, restrictions, guestRestrictions, setGuestRestrictions}) {
    const [enabled, setEnabled] = useState(false)
    const [moreRequirements, setMoreRequirements] = useState(false)

    if (restrictions == null) return null;

    return (
        <>
            <Field className="flex items-center justify-between py-3">

                <span className="flex grow flex-col">
                    <Label as="span" passive className=" font-medium text-gray-700 notoserifdisplay font-thin">
                        {
                            name !== null ? (
                                <span><span className="ppplayground text-3xl text-gray-900">{name}</span> má </span>
                            ) : (
                            "Mám "
                            )
                        }
                        špeciálne stravovacie požiadavky
                    </Label>
                </span>
                <Switch
                    checked={enabled}
                    onChange={setEnabled}
                    className="group relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-gray-200 transition-colors duration-200 ease-in-out focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 focus:outline-hidden data-checked:bg-gray-700"
                >
                    <span
                        aria-hidden="true"
                        className="pointer-events-none inline-block size-5 transform rounded-full bg-white ring-0 shadow-sm transition duration-200 ease-in-out group-data-checked:translate-x-5"
                    />
                </Switch>
            </Field>

            {
                enabled && (
                    <fieldset className="ml-3">
                        {
                            restrictions
                                .filter(restriction => restriction.main)
                                .map(restriction => (
                                    <RequirementCheck
                                        requirement={restriction}
                                        checked={guestRestrictions.indexOf(restriction.id) >= 0}
                                        setChecked={(checked) => {
                                            if (checked) {
                                                setGuestRestrictions([...guestRestrictions, restriction.id])
                                            } else {
                                                setGuestRestrictions(guestRestrictions.filter((r) => r !== restriction.id))
                                            }
                                        }}
                                    />
                                ))
                        }
                        {
                            moreRequirements ? (
                                <>
                                    {
                                        restrictions
                                            .filter(restriction => !restriction.main)
                                            .map(restriction => (
                                                <RequirementCheck
                                                    requirement={restriction}
                                                    checked={guestRestrictions.indexOf(restriction.id) >= 0}
                                                    setChecked={(checked) => {
                                                        if (checked) {
                                                            setGuestRestrictions([...guestRestrictions, restriction.id])
                                                        } else {
                                                            setGuestRestrictions(guestRestrictions.filter((r) => r !== restriction.id))
                                                        }
                                                    }}
                                                />
                                            ))
                                    }
                                    <button
                                        className="border border-transparent py-1 text-sm transition-all text-slate-600 disabled:pointer-events-none text-gray-700 select-none notoserifdisplay font-thin"
                                        type="button"
                                        onClick={(e) => {
                                            setMoreRequirements(false);
                                        }}
                                    >
                                        Menej...
                                    </button>
                                </>
                            ) : (
                                <button
                                    className="border border-transparent py-1 text-sm transition-all text-slate-600 disabled:pointer-events-none text-gray-700 select-none notoserifdisplay font-thin"
                                    type="button"
                                    onClick={(e) => {
                                        setMoreRequirements(true);
                                    }}
                                >
                                    Ďalšie...
                                </button>
                            )
                        }
                    </fieldset>
                )
            }


            {/*<div className="mt-4 sm:col-span-2 sm:mt-0">*/}
            {/*    <div className="max-w-lg space-y-6">*/}
            {/*        */}
            {/*        {*/}
            {/*            moreRequirements ? (*/}
            {/*                restrictions*/}
            {/*                    .filter(restriction => !restriction.main)*/}
            {/*                    .map(restriction => (*/}
            {/*                        <div className="flex gap-3">*/}
            {/*                            <div className="flex h-6 shrink-0 items-center">*/}
            {/*                                <div className="group grid size-4 grid-cols-1">*/}
            {/*                                    <input id="comments" aria-describedby="comments-description"*/}
            {/*                                           name="comments" type="checkbox" checked=""*/}
            {/*                                           className="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto"/>*/}
            {/*                                    <svg*/}
            {/*                                        className="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"*/}
            {/*                                        viewBox="0 0 14 14" fill="none">*/}
            {/*                                        <path*/}
            {/*                                            className="opacity-0 group-has-checked:opacity-100"*/}
            {/*                                            d="M3 8L6 11L11 3.5" stroke-width="2"*/}
            {/*                                            stroke-linecap="round"*/}
            {/*                                            stroke-linejoin="round"></path>*/}
            {/*                                        <path*/}
            {/*                                            className="opacity-0 group-has-indeterminate:opacity-100"*/}
            {/*                                            d="M3 7H11" stroke-width="2" stroke-linecap="round"*/}
            {/*                                            stroke-linejoin="round"></path>*/}
            {/*                                    </svg>*/}
            {/*                                </div>*/}
            {/*                            </div>*/}
            {/*                            <div className="text-sm/6">*/}
            {/*                                <label htmlFor="comments"*/}
            {/*                                       className="font-medium text-gray-900">{restriction.name}</label>*/}
            {/*                                /!*<p id="comments-description" className="text-gray-500">Get*!/*/}
            {/*                                /!*    notified when*!/*/}
            {/*                                /!*    someones posts a comment on a posting.</p>*!/*/}
            {/*                            </div>*/}
            {/*                        </div>*/}
            {/*                    ))*/}
            {/*            ) : (*/}
            {/*                <button*/}
            {/*                    className="rounded-md border border-transparent py-2 px-4 text-center text-sm transition-all text-slate-600 hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"*/}
            {/*                    type="button"*/}
            {/*                    onClick={(e) => {*/}
            {/*                        setMoreRequirements(true);*/}
            {/*                    }}*/}
            {/*                >*/}
            {/*                    Viac...*/}
            {/*                </button>*/}
            {/*            )*/}
            {/*        }*/}
            {/*    </div>*/}
            {/*</div>*/}


        </>
    )
}


function RequirementCheck({requirement, checked, setChecked}) {
    return (
        <div key={requirement.id} className="relative flex gap-3 py-1">
            <div className="min-w-0 flex-1 text-sm/6">
                <label htmlFor={`person-${requirement.id}`}
                       className="text-gray-700 select-none notoserifdisplay font-thin">
                    {requirement.name}
                </label>
            </div>
            <div className="flex h-6 shrink-0 items-center">
                <div className="group grid size-4 grid-cols-1">
                    <input
                        // defaultChecked={person.selected}
                        id={`restriction-${requirement.id}`}
                        name={`restriction-${requirement.id}`}
                        type="checkbox"
                        className="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-gray-600 checked:bg-gray-800 indeterminate:border-gray-600 indeterminate:bg-gray-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-800 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto"
                        checked={checked}
                        onChange={(e) => setChecked(e.target.checked)}
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
    )
}

export default GuestRequirements;
