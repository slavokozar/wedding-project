<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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

    <style>
        .react-multi-email {
             border-radius: 0;
        }

        /* HTML: <div class="loader"></div> */
        .loader {
            margin: auto;
            width: 60px;
            aspect-ratio: 2;
            --_g: no-repeat radial-gradient(circle closest-side,#231f20 90%,#0000);
            background:
                var(--_g) 0%   50%,
                var(--_g) 50%  50%,
                var(--_g) 100% 50%;
            background-size: calc(100%/3) 50%;
            animation: l3 1s infinite linear;
        }
        @keyframes l3 {
            20%{background-position:0%   0%, 50%  50%,100%  50%}
            40%{background-position:0% 100%, 50%   0%,100%  50%}
            60%{background-position:0%  50%, 50% 100%,100%   0%}
            80%{background-position:0%  50%, 50%  50%,100% 100%}
        }
    </style>
</head>
<body>

<div class="bg-white">
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>

        <div class="flex min-h-full flex-1 flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <div class="h-16 w-auto">
                    <svg width="100%" height="100%" viewBox="0 0 970 1241" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                            <g transform="matrix(1,0,0,1,-45783.9,-555.673)">
                                <g transform="matrix(5.55556,0,0,5.55556,45491.9,0)">
                                    <path d="M141.175,225.504C164.55,225.504 174.44,213.108 183.79,199.093L189.184,191.178C188.824,190.818 188.465,190.638 187.745,190.998L182.531,198.734C172.821,213.288 162.572,223.369 141.355,223.369C129.667,223.369 119.598,220.129 110.248,216.168C119.418,209.868 126.791,200.533 134.522,188.12L153.222,158.077L174.08,158.077L167.966,168.511L170.124,168.511L181.812,148.746L179.654,148.746L175.159,156.481L154.301,156.481L188.644,101.437L226.224,101.437L227.123,100.021L161.314,100.021C108.091,100.021 83.839,127.34 83.839,150.365C83.839,167.791 96.583,182.183 125.172,187.22C117.441,199.453 111.507,208.248 105.214,214.008C92.807,208.428 81.5,202.512 68.904,202.512C57.567,202.512 52.552,207.348 52.552,212.208C52.552,218.509 61.166,224.965 79.52,224.965C91.189,224.965 100.359,222.469 108.27,217.609C117.98,221.929 128.589,225.504 141.175,225.504ZM54.148,212.388C54.148,208.608 57.927,204.107 68.544,204.107C80.78,204.107 91.728,209.868 103.595,215.449C96.763,220.849 89.211,223.189 78.261,223.189C62.066,223.189 54.148,217.609 54.148,212.388ZM85.435,150.365C85.435,128.419 108.99,101.437 161.134,101.437L185.408,101.437L174.799,107.373L126.251,185.421L126.071,185.781C98.201,181.104 85.435,167.252 85.435,150.365Z" style="fill:rgb(35,31,32);fill-rule:nonzero;"/>
                                </g>
                                <g transform="matrix(5.55556,0,0,5.55556,45491.9,0)">
                                    <g transform="matrix(1,0,0,1,178.621,188.704)">
                                        <path d="M0,134.627C-5.863,134.627 -10.973,133.923 -15.307,132.514C-19.654,131.105 -23.26,129.242 -26.137,126.914C-29.003,124.597 -31.176,121.934 -32.645,118.937C-34.113,115.952 -34.842,112.86 -34.842,109.684C-34.842,107.845 -34.603,106.281 -34.113,105.003C-33.624,103.714 -32.883,102.746 -31.904,102.066C-30.937,101.397 -29.707,101.063 -28.239,101.063C-28.239,108.275 -27.2,114.233 -25.122,118.937C-23.045,123.654 -19.892,127.129 -15.678,129.397C-11.463,131.654 -6.173,132.788 0.191,132.788C9.361,132.788 16.203,130.161 20.728,124.908C25.254,119.642 27.51,112.251 27.51,102.711C27.51,97.576 26.531,93.17 24.573,89.505C22.627,85.839 19.439,82.412 15.045,79.236C10.639,76.06 4.955,72.573 -2.018,68.776C-6.663,66.09 -10.794,63.559 -14.4,61.17C-18.006,58.782 -20.991,56.191 -23.379,53.373C-25.767,50.568 -27.594,47.356 -28.883,43.75C-30.161,40.144 -30.806,35.833 -30.806,30.818C-30.806,24.824 -29.469,19.535 -26.77,14.95C-24.084,10.365 -20.239,6.735 -15.224,4.036C-10.209,1.35 -4.334,0 2.388,0C8.251,0 13.481,0.92 18.066,2.759C22.651,4.586 26.233,7.033 28.8,10.09C31.367,13.147 32.645,16.574 32.645,20.359C32.645,22.926 32.072,24.92 30.901,26.329C29.743,27.726 28,28.43 25.684,28.43C25.684,18.89 23.725,12.084 19.809,7.989C15.893,3.893 10.03,1.839 2.209,1.839C-3.427,1.839 -8.131,2.974 -11.916,5.23C-15.713,7.499 -18.579,10.735 -20.537,14.95C-22.495,19.165 -23.475,24.275 -23.475,30.269C-23.475,35.523 -22.495,39.929 -20.537,43.475C-18.579,47.021 -15.737,50.197 -12.012,53.003C-8.287,55.821 -3.666,58.759 1.839,61.815C7.582,64.991 12.967,68.203 17.982,71.439C22.985,74.687 27.057,78.627 30.173,83.272C33.289,87.917 34.854,93.851 34.854,101.063C34.854,107.546 33.528,113.314 30.901,118.388C28.275,123.463 24.358,127.439 19.164,130.317C13.97,133.182 7.582,134.627 0,134.627" style="fill:rgb(35,31,32);fill-rule:nonzero;"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                </div>
                <h1 class="mt-6 text-center text-xl/9 font-bold tracking-tight text-gray-900 notoserifdisplay font-thin">
                    Bude svadba, ale už teraz je tu dotaznik!
                </h1>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[640px]">
{{--                <h2 class="text-gray-900">--}}
{{--                    {{ $invitation->label }}--}}
{{--                </h2>--}}
{{--    --}}
{{--                <ul>--}}
{{--                    <li class="text-gray-900">{{ $invitation->mainGuest->name }}</li>--}}
{{--                    @foreach($invitation->mainGuest->children as $guest)--}}
{{--                        <li class="text-gray-900">{{ $guest->name }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}

                <div id="dotaznik-root" class="bg-white px-6 py-12 shadow-sm sm:px-12">

                    <div class="loader"></div>
                    <noscript>You need to enable JavaScript to run this app.</noscript>
                </div>
            </div>
        </div>




        @viteReactRefresh
        @vite('resources/js/dotaznik/index.jsx')
    </div>
</div>

</body>
</html>
