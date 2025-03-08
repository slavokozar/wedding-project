import {useEffect, useState} from "react";
import Email from "./email.jsx";

import axios from "axios";
import {Description, Field, Label, Switch} from "@headlessui/react";

function GuestRequirements({name, restrictions}) {
    const [enabled, setEnabled] = useState(false)
    const [moreRestrictions, setEnabled] = useState(false)

    if (restrictions == null) return null;

    return (
        <>
    <Field className="flex items-center justify-between">
          <span className="flex grow flex-col">
            <Label as="span" passive className="text-sm/6 font-medium text-gray-900">
              Available to hire
            </Label>
            <Description as="span" className="text-sm text-gray-500">
              Nulla amet tempus sit accumsan. Aliquet turpis sed sit lacinia.
            </Description>
          </span>
        <Switch
            checked={enabled}
            onChange={setEnabled}
            className="group relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-gray-200 transition-colors duration-200 ease-in-out focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 focus:outline-hidden data-checked:bg-indigo-600"
        >
            <span
                aria-hidden="true"
                className="pointer-events-none inline-block size-5 transform rounded-full bg-white ring-0 shadow-sm transition duration-200 ease-in-out group-data-checked:translate-x-5"
            />
        </Switch>


    </Field>
    <div className="mt-4 sm:col-span-2 sm:mt-0">
        <div className="max-w-lg space-y-6">
            {
                restrictions.map(restriction => (
                    <div className="flex gap-3">
                        <div className="flex h-6 shrink-0 items-center">
                            <div className="group grid size-4 grid-cols-1">
                                <input id="comments" aria-describedby="comments-description"
                                       name="comments" type="checkbox" checked=""
                                       className="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto"/>
                                <svg
                                    className="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"
                                    viewBox="0 0 14 14" fill="none">
                                    <path
                                        className="opacity-0 group-has-checked:opacity-100"
                                        d="M3 8L6 11L11 3.5" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        className="opacity-0 group-has-indeterminate:opacity-100"
                                        d="M3 7H11" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </div>
                        <div className="text-sm/6">
                            <label htmlFor="comments"
                                   className="font-medium text-gray-900">{restriction.name}</label>
                            {/*<p id="comments-description" className="text-gray-500">Get*/}
                            {/*    notified when*/}
                            {/*    someones posts a comment on a posting.</p>*/}
                        </div>
                    </div>
                ))
            }
        </div>
    </div>

</>
)
}

export default GuestRequirements;
