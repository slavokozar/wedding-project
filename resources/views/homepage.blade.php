<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!--
      Notice the use of %PUBLIC_URL% in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
    <title>React App</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="bg-white">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Eva a Slavo Kožárovci</span>
                    <div class="h-8 w-auto">
                        <svg width="100%" height="100%" viewBox="0 0 970 1241" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             xml:space="preserve" xmlns:serif="http://www.serif.com/"
                             style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                            <g transform="matrix(1,0,0,1,-45783.9,-555.673)">
                                <g transform="matrix(5.55556,0,0,5.55556,45491.9,0)">
                                    <path
                                        d="M141.175,225.504C164.55,225.504 174.44,213.108 183.79,199.093L189.184,191.178C188.824,190.818 188.465,190.638 187.745,190.998L182.531,198.734C172.821,213.288 162.572,223.369 141.355,223.369C129.667,223.369 119.598,220.129 110.248,216.168C119.418,209.868 126.791,200.533 134.522,188.12L153.222,158.077L174.08,158.077L167.966,168.511L170.124,168.511L181.812,148.746L179.654,148.746L175.159,156.481L154.301,156.481L188.644,101.437L226.224,101.437L227.123,100.021L161.314,100.021C108.091,100.021 83.839,127.34 83.839,150.365C83.839,167.791 96.583,182.183 125.172,187.22C117.441,199.453 111.507,208.248 105.214,214.008C92.807,208.428 81.5,202.512 68.904,202.512C57.567,202.512 52.552,207.348 52.552,212.208C52.552,218.509 61.166,224.965 79.52,224.965C91.189,224.965 100.359,222.469 108.27,217.609C117.98,221.929 128.589,225.504 141.175,225.504ZM54.148,212.388C54.148,208.608 57.927,204.107 68.544,204.107C80.78,204.107 91.728,209.868 103.595,215.449C96.763,220.849 89.211,223.189 78.261,223.189C62.066,223.189 54.148,217.609 54.148,212.388ZM85.435,150.365C85.435,128.419 108.99,101.437 161.134,101.437L185.408,101.437L174.799,107.373L126.251,185.421L126.071,185.781C98.201,181.104 85.435,167.252 85.435,150.365Z"
                                        style="fill:rgb(35,31,32);fill-rule:nonzero;"/>
                                </g>
                                <g transform="matrix(5.55556,0,0,5.55556,45491.9,0)">
                                    <g transform="matrix(1,0,0,1,178.621,188.704)">
                                        <path
                                            d="M0,134.627C-5.863,134.627 -10.973,133.923 -15.307,132.514C-19.654,131.105 -23.26,129.242 -26.137,126.914C-29.003,124.597 -31.176,121.934 -32.645,118.937C-34.113,115.952 -34.842,112.86 -34.842,109.684C-34.842,107.845 -34.603,106.281 -34.113,105.003C-33.624,103.714 -32.883,102.746 -31.904,102.066C-30.937,101.397 -29.707,101.063 -28.239,101.063C-28.239,108.275 -27.2,114.233 -25.122,118.937C-23.045,123.654 -19.892,127.129 -15.678,129.397C-11.463,131.654 -6.173,132.788 0.191,132.788C9.361,132.788 16.203,130.161 20.728,124.908C25.254,119.642 27.51,112.251 27.51,102.711C27.51,97.576 26.531,93.17 24.573,89.505C22.627,85.839 19.439,82.412 15.045,79.236C10.639,76.06 4.955,72.573 -2.018,68.776C-6.663,66.09 -10.794,63.559 -14.4,61.17C-18.006,58.782 -20.991,56.191 -23.379,53.373C-25.767,50.568 -27.594,47.356 -28.883,43.75C-30.161,40.144 -30.806,35.833 -30.806,30.818C-30.806,24.824 -29.469,19.535 -26.77,14.95C-24.084,10.365 -20.239,6.735 -15.224,4.036C-10.209,1.35 -4.334,0 2.388,0C8.251,0 13.481,0.92 18.066,2.759C22.651,4.586 26.233,7.033 28.8,10.09C31.367,13.147 32.645,16.574 32.645,20.359C32.645,22.926 32.072,24.92 30.901,26.329C29.743,27.726 28,28.43 25.684,28.43C25.684,18.89 23.725,12.084 19.809,7.989C15.893,3.893 10.03,1.839 2.209,1.839C-3.427,1.839 -8.131,2.974 -11.916,5.23C-15.713,7.499 -18.579,10.735 -20.537,14.95C-22.495,19.165 -23.475,24.275 -23.475,30.269C-23.475,35.523 -22.495,39.929 -20.537,43.475C-18.579,47.021 -15.737,50.197 -12.012,53.003C-8.287,55.821 -3.666,58.759 1.839,61.815C7.582,64.991 12.967,68.203 17.982,71.439C22.985,74.687 27.057,78.627 30.173,83.272C33.289,87.917 34.854,93.851 34.854,101.063C34.854,107.546 33.528,113.314 30.901,118.388C28.275,123.463 24.358,127.439 19.164,130.317C13.97,133.182 7.582,134.627 0,134.627"
                                            style="fill:rgb(35,31,32);fill-rule:nonzero;"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                </button>
            </div>
            {{--            <div class="hidden lg:flex lg:gap-x-12">--}}
            {{--                <a href="#" class="text-sm/6 font-semibold text-gray-900">Product</a>--}}
            {{--                <a href="#" class="text-sm/6 font-semibold text-gray-900">Features</a>--}}
            {{--                <a href="#" class="text-sm/6 font-semibold text-gray-900">Marketplace</a>--}}
            {{--                <a href="#" class="text-sm/6 font-semibold text-gray-900">Company</a>--}}
            {{--            </div>--}}
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-50"></div>
            <div
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <div class="h-8 w-auto">
                            <svg width="100%" height="100%" viewBox="0 0 970 1241" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 xml:space="preserve" xmlns:serif="http://www.serif.com/"
                                 style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                                <g transform="matrix(1,0,0,1,-45783.9,-555.673)">
                                    <g transform="matrix(5.55556,0,0,5.55556,45491.9,0)">
                                        <path
                                            d="M141.175,225.504C164.55,225.504 174.44,213.108 183.79,199.093L189.184,191.178C188.824,190.818 188.465,190.638 187.745,190.998L182.531,198.734C172.821,213.288 162.572,223.369 141.355,223.369C129.667,223.369 119.598,220.129 110.248,216.168C119.418,209.868 126.791,200.533 134.522,188.12L153.222,158.077L174.08,158.077L167.966,168.511L170.124,168.511L181.812,148.746L179.654,148.746L175.159,156.481L154.301,156.481L188.644,101.437L226.224,101.437L227.123,100.021L161.314,100.021C108.091,100.021 83.839,127.34 83.839,150.365C83.839,167.791 96.583,182.183 125.172,187.22C117.441,199.453 111.507,208.248 105.214,214.008C92.807,208.428 81.5,202.512 68.904,202.512C57.567,202.512 52.552,207.348 52.552,212.208C52.552,218.509 61.166,224.965 79.52,224.965C91.189,224.965 100.359,222.469 108.27,217.609C117.98,221.929 128.589,225.504 141.175,225.504ZM54.148,212.388C54.148,208.608 57.927,204.107 68.544,204.107C80.78,204.107 91.728,209.868 103.595,215.449C96.763,220.849 89.211,223.189 78.261,223.189C62.066,223.189 54.148,217.609 54.148,212.388ZM85.435,150.365C85.435,128.419 108.99,101.437 161.134,101.437L185.408,101.437L174.799,107.373L126.251,185.421L126.071,185.781C98.201,181.104 85.435,167.252 85.435,150.365Z"
                                            style="fill:rgb(35,31,32);fill-rule:nonzero;"/>
                                    </g>
                                    <g transform="matrix(5.55556,0,0,5.55556,45491.9,0)">
                                        <g transform="matrix(1,0,0,1,178.621,188.704)">
                                            <path
                                                d="M0,134.627C-5.863,134.627 -10.973,133.923 -15.307,132.514C-19.654,131.105 -23.26,129.242 -26.137,126.914C-29.003,124.597 -31.176,121.934 -32.645,118.937C-34.113,115.952 -34.842,112.86 -34.842,109.684C-34.842,107.845 -34.603,106.281 -34.113,105.003C-33.624,103.714 -32.883,102.746 -31.904,102.066C-30.937,101.397 -29.707,101.063 -28.239,101.063C-28.239,108.275 -27.2,114.233 -25.122,118.937C-23.045,123.654 -19.892,127.129 -15.678,129.397C-11.463,131.654 -6.173,132.788 0.191,132.788C9.361,132.788 16.203,130.161 20.728,124.908C25.254,119.642 27.51,112.251 27.51,102.711C27.51,97.576 26.531,93.17 24.573,89.505C22.627,85.839 19.439,82.412 15.045,79.236C10.639,76.06 4.955,72.573 -2.018,68.776C-6.663,66.09 -10.794,63.559 -14.4,61.17C-18.006,58.782 -20.991,56.191 -23.379,53.373C-25.767,50.568 -27.594,47.356 -28.883,43.75C-30.161,40.144 -30.806,35.833 -30.806,30.818C-30.806,24.824 -29.469,19.535 -26.77,14.95C-24.084,10.365 -20.239,6.735 -15.224,4.036C-10.209,1.35 -4.334,0 2.388,0C8.251,0 13.481,0.92 18.066,2.759C22.651,4.586 26.233,7.033 28.8,10.09C31.367,13.147 32.645,16.574 32.645,20.359C32.645,22.926 32.072,24.92 30.901,26.329C29.743,27.726 28,28.43 25.684,28.43C25.684,18.89 23.725,12.084 19.809,7.989C15.893,3.893 10.03,1.839 2.209,1.839C-3.427,1.839 -8.131,2.974 -11.916,5.23C-15.713,7.499 -18.579,10.735 -20.537,14.95C-22.495,19.165 -23.475,24.275 -23.475,30.269C-23.475,35.523 -22.495,39.929 -20.537,43.475C-18.579,47.021 -15.737,50.197 -12.012,53.003C-8.287,55.821 -3.666,58.759 1.839,61.815C7.582,64.991 12.967,68.203 17.982,71.439C22.985,74.687 27.057,78.627 30.173,83.272C33.289,87.917 34.854,93.851 34.854,101.063C34.854,107.546 33.528,113.314 30.901,118.388C28.275,123.463 24.358,127.439 19.164,130.317C13.97,133.182 7.582,134.627 0,134.627"
                                                style="fill:rgb(35,31,32);fill-rule:nonzero;"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                             aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
{{--                        <div class="space-y-2 py-6">--}}
{{--                            <a href="#"--}}
{{--                               class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Product</a>--}}
{{--                            <a href="#"--}}
{{--                               class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>--}}
{{--                            <a href="#"--}}
{{--                               class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>--}}
{{--                            <a href="#"--}}
{{--                               class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="relative isolate">
            <svg
                class="absolute inset-x-0 top-0 -z-10 h-[64rem] w-full stroke-gray-200 [mask-image:radial-gradient(32rem_32rem_at_center,white,transparent)]"
                aria-hidden="true">
                <defs>
                    <pattern id="1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84" width="200" height="200" x="50%" y="-1"
                             patternUnits="userSpaceOnUse">
                        <path d="M.5 200V.5H200" fill="none"/>
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                    <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                          stroke-width="0"/>
                </svg>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84)"/>
            </svg>
            <div
                class="absolute top-0 right-0 left-1/2 -z-10 -ml-24 transform-gpu overflow-hidden blur-3xl lg:ml-24 xl:ml-48"
                aria-hidden="true">
                <div class="aspect-801/1036 w-[50.0625rem] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                     style="clip-path: polygon(63.1% 29.5%, 100% 17.1%, 76.6% 3%, 48.4% 0%, 44.6% 4.7%, 54.5% 25.3%, 59.8% 49%, 55.2% 57.8%, 44.4% 57.2%, 27.8% 47.9%, 35.1% 81.5%, 0% 97.7%, 39.2% 100%, 35.2% 81.4%, 97.2% 52.8%, 63.1% 29.5%)"></div>
            </div>
            <div class="overflow-hidden">
                <div class="mx-auto max-w-7xl px-6 pt-36 pb-32 sm:pt-60 lg:px-8 lg:pt-32">
                    <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
                        <div class="relative w-full lg:max-w-xl lg:shrink-0 xl:max-w-2xl">
                            <h1 class="tracking-wide text-5xl text-pretty text-gray-800 sm:text-7xl uppercase notoserifdisplay font-thin">Bude svadba!</h1>
                            <p class="text-5xl text-pretty text-gray-800 sm:text-7xl uppercase notoserifdisplay font-thin">29. 8. 2025</p>

                            <p class="text-5xl text-pretty text-gray-900 sm:text-7xl">
                                <span class="notoserifdisplay uppercase">Eva</span>
                                <span class="text-4xl ppplayground">Matišáková</span>
                            </p>

                            <p class="text-5xl text-pretty text-gray-900 sm:text-7xl">
                                <span class="text-4xl ppplayground">Kožár</span>
                                <span class="notoserifdisplay uppercase">Slavo</span>
                            </p>


                            <p class="text-2xl text-pretty text-gray-900 uppercase notoserifdisplay font-thin">V Piaristickom kostole sv. Františka Xaverského V Trenčíne o 15:00</p>


                            <div class="mt-10 flex items-center gap-x-6">
                                <a href="{{ route("invitation-form") }}"
                                   class="bg-gray-700 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-gray-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">
                                    Mám pozvánku
                                </a>
                                <a href="#" class="text-sm/6 font-semibold text-gray-900">
                                    Chcem prísť do kostola <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>


                        <div class="mt-14 flex justify-end gap-8 sm:-mt-44 sm:justify-start sm:pl-20 lg:mt-0 lg:pl-0">
                            <div
                                class="ml-auto w-44 flex-none space-y-8 pt-32 sm:ml-0 sm:pt-80 lg:order-last lg:pt-36 xl:order-none xl:pt-80">
                                <div class="relative">
                                    <img
                                        src="{{ asset('photo/es1.jpeg') }}"
                                        alt=""
                                        class="aspect-2/3 w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div
                                        class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-gray-900/10 ring-inset"></div>
                                </div>
                            </div>
                            <div class="mr-auto w-44 flex-none space-y-8 sm:mr-0 sm:pt-52 lg:pt-36">
                                <div class="relative">
                                    <img
                                        src="{{ asset('photo/es2.jpeg') }}"
                                        alt=""
                                        class="aspect-2/3 w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div
                                        class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-gray-900/10 ring-inset"></div>
                                </div>
                                <div class="relative">
                                    <img
                                        src="{{ asset('photo/es3.jpeg') }}"
                                        alt=""
                                        class="aspect-2/3 w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div
                                        class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-gray-900/10 ring-inset"></div>
                                </div>
                            </div>
                            <div class="w-44 flex-none space-y-8 pt-32 sm:pt-0">
                                <div class="relative">
                                    <img
                                        src="{{ asset('photo/es4.jpeg') }}"
                                        alt=""
                                        class="aspect-2/3 w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div
                                        class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-gray-900/10 ring-inset"></div>
                                </div>
                                <div class="relative">
                                    <img
                                        src="{{ asset('photo/es5.jpeg') }}"
                                        alt=""
                                        class="aspect-2/3 w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div
                                        class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-gray-900/10 ring-inset"></div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
