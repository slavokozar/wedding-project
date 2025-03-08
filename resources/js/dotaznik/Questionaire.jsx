import React from 'react';
import ReactDOM from 'react-dom/client';
import Email from "./email.jsx";

const root = ReactDOM.createRoot(document.getElementById('dotaznik-root'));
root.render(
    <React.StrictMode>
        <>
            <h1>Svadobny dotaznik</h1>


            <form action="#" method="POST" className="mx-auto mt-16 max-w-xl sm:mt-20">
                <div className="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">

                    <div className="sm:col-span-2">
                        Vyplňte nám prosím email(y) na ktoré môžeme priebežne zasielať všetky dôležité informácie.

                        <Email/>
                    </div>

                    <div className="sm:col-span-2">
                        <fieldset>
                            <legend className="text-base font-semibold text-gray-900">Stravovacie obmedzenia</legend>
                            <div className="mt-4 divide-y divide-gray-200 border-b border-t border-gray-200">

                            </div>
                        </fieldset>
                    </div>
                    <div className="flex gap-x-4 sm:col-span-2">
                        <div className="flex h-6 items-center">
                            <button type="button"
                                    className="flex w-8 flex-none cursor-pointer rounded-full bg-gray-200 p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                    role="switch" aria-checked="false" aria-labelledby="switch-1-label">
                                <span className="sr-only">Agree to policies</span>
                                <span aria-hidden="true"
                                      className="size-4 translate-x-0 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
                            </button>
                        </div>
                        <label className="text-sm/6 text-gray-600" id="switch-1-label">
                            By selecting this, you agree to our
                            <a href="#" className="font-semibold text-indigo-600">privacy&nbsp;policy</a>.
                        </label>
                    </div>
                </div>
                <div className="mt-10">
                    <button type="submit"
                            className="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's
                        talk
                    </button>
                </div>
            </form>


        </>
    </React.StrictMode>
);
