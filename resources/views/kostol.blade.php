<!DOCTYPE html>
<html class="h-full bg-white" lang="sk">
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
    <title>Bude svadba! Kožárovci</title>

    <style>
        .text-bordeaux {
            color: #5a272c;
        }

        #map {
            height: 400px;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="bg-white px-6 py-16 lg:px-10">
    <div class="mx-auto max-w-5xl text-base/7 text-gray-700 mb-40">
        <p class="text-3xl text-pretty text-gray-900 text-center md:text-left sm:text-5xl mb-5">
            <span class="notoserifdisplay uppercase">Eva</span>
            <svg class="block" height="3rem" viewBox="0 0 189 175" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-miterlimit:10;display:inline;margin-top: -3rem;">
                    <g transform="matrix(1,0,0,1,-11652.5,-25541.4)">
                        <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                            <g transform="matrix(1,0,0,1,74.4119,238.615)">
                                <path d="M0,-3.6C2.09,-4 1.955,-5.122 2.681,-5.787C3.407,-6.453 4.113,-6.482 4.113,-6.482C4.113,-6.482 4.168,-6.533 4.141,-6.508C4.113,-6.482 2.182,-7.586 1.258,-7.443C0.333,-7.3 -0.264,-6.898 -0.925,-6.826C-1.585,-6.754 -3.67,-7.595 -2.659,-6.983C-1.649,-6.371 -1.02,-7.129 -1.02,-7.129C0.933,-9.328 -1.959,-12.054 -3.994,-13.472C-6.03,-14.89 -9.43,-15.887 -12.697,-15.281C-15.965,-14.674 -15.356,-12.315 -15.105,-11.553C-14.855,-10.791 -13.104,-10.461 -13.892,-11.038C-14.68,-11.615 -15.622,-10.868 -15.668,-10.362C-15.715,-9.855 -15.293,-8.591 -13.137,-7.378C-10.98,-6.166 -9.975,-7.137 -10.611,-7.762C-11.248,-8.387 -12.219,-7.638 -12.219,-7.638C-13.906,-4.648 -8.805,-4.353 -8.805,-4.353C-8.805,-4.353 -10.389,-3.017 -12.978,-3.377C-15.567,-3.736 -16.958,-5.871 -19.027,-6.122C-21.097,-6.373 -22.174,-5.394 -22.08,-4.989C-21.985,-4.584 -21.389,-3.667 -19.016,-3.225C-19.016,-3.225 -21.749,-3.53 -21.825,-1.767C-21.9,-0.003 -18.818,0.512 -18.818,0.512C-18.818,0.512 -21.333,0.386 -21.212,1.843C-21.091,3.299 -19.38,3.335 -18.514,2.998C-17.649,2.661 -14.025,0.81 -12.709,0.339C-11.394,-0.133 -10.19,-0.053 -9.913,0.38C-9.636,0.813 -9.624,1.608 -11.363,2.263C-13.102,2.918 -12.291,1.495 -11.567,1.414C-10.843,1.332 -10.222,2.217 -10.88,2.707C-11.538,3.197 -14.552,4.315 -14.58,5.791C-14.608,7.267 -13.259,7.845 -11.536,7.188C-11.536,7.188 -10.559,6.868 -10.53,6.805C-10.502,6.742 -13.776,7.548 -13.908,9.557C-14.04,11.566 -11.981,12.287 -10.224,11.718C-8.468,11.148 -2.634,8.667 -0.678,5.689C1.278,2.712 1.577,-3.463 -3.269,-3.73" style="fill:none;fill-rule:nonzero;stroke:rgb(35,31,32);stroke-width:0.4px;"></path>
                            </g>
                        </g>
                        <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                            <g transform="matrix(0.934724,-0.355374,-0.355374,-0.934724,76.2428,232.333)">
                                <path d="M-0.011,0.059L0.324,0.06" style="fill:none;fill-rule:nonzero;stroke:rgb(35,31,32);stroke-width:0.4px;"></path>
                            </g>
                        </g>
                        <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                            <g transform="matrix(1,0,0,1,76.7448,229.947)">
                                <path d="M0,5.331C0.039,5.197 1.38,4.636 1.9,1.996C1.9,1.996 2.193,0.778 3.213,0" style="fill:none;fill-rule:nonzero;stroke:rgb(35,31,32);stroke-width:0.4px;"></path>
                            </g>
                        </g>
                        <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                            <g transform="matrix(1,0,0,1,80.0456,228.263)">
                                <path d="M0,1.392C-0.038,1.371 -1.518,2.09 -1.295,0.819C-1.071,-0.453 0.1,1.04 0.11,1.001C0.12,0.962 -0.811,-0.921 -0.019,-0.883C0.772,-0.846 0.599,0.347 0.599,0.347C0.599,0.347 1.318,-0.695 1.738,-0.117C2.157,0.461 0.914,0.835 0.904,0.808C0.894,0.782 2.533,0.676 2.003,1.417C1.473,2.157 0.5,2.313 0.307,1.465" style="fill:none;fill-rule:nonzero;stroke:rgb(35,31,32);stroke-width:0.4px;"></path>
                            </g>
                        </g>
                    </g>
                </svg>
            <span class="notoserifdisplay uppercase">Slavo</span>
        </p>
        <h1 class="text-5xl text-pretty text-gray-800 text-center md:text-left sm:text-7xl my-20 uppercase notoserifdisplay font-thin">
            Bude svadba!
            <svg height="4rem" viewBox="0 0 420 281" version="1.1"
                 class="-mt-32 ml-48 sm:-mt-48 md:-mt-48 lg:-mt-14 lg:-ml-40"
                 {{--                                     margin-top: -4rem; margin-left: -10rem;--}}
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 xml:space="preserve" xmlns:serif="http://www.serif.com/"
                 style="fill-rule:evenodd;clip-rule:evenodd;stroke-miterlimit:10;display: inline;">
                                <g transform="matrix(1,0,0,1,-12341.7,-24560.2)">
                                    <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                                        <g transform="matrix(1,0,0,1,218.077,47.7133)">
                                            <path
                                                d="M0,13.415C0,13.415 -0.914,12.329 -1.379,7.932C-1.845,3.535 -4.414,-0.465 -10.587,-1.103C-16.759,-1.741 -18.759,2.087 -19.104,3.277C-19.449,4.466 -20.466,8.88 -15.552,11.07C-10.638,13.26 -9.311,12.57 -7.207,13.001C-5.104,13.432 -2.641,15.156 -2.641,15.156"
                                                style="fill:white;fill-rule:nonzero;stroke:rgb(132,52,63);stroke-width:0.4px;"/>
                                        </g>
                                    </g>
                                    <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                                        <g transform="matrix(1,0,0,1,219.974,58.3527)">
                                            <path
                                                d="M0,2.948C0,2.948 1.164,0.879 2.224,-1.294C3.285,-3.466 4.319,-5.82 8.328,-5.846C12.337,-5.871 16.113,-6.518 17.949,-4.501C19.785,-2.483 20.044,1.293 18.415,3.983C16.785,6.672 14.794,8.638 12.518,9.052C10.242,9.466 6.595,9.336 4.914,8.845C3.233,8.353 0.052,5.741 0.052,5.741"
                                                style="fill:white;fill-rule:nonzero;stroke:rgb(132,52,63);stroke-width:0.4px;"/>
                                        </g>
                                    </g>
                                    <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                                        <g transform="matrix(1,0,0,1,216.956,82.0167)">
                                            <path
                                                d="M0,-19.147C0,-19.147 -5.311,-19.147 -9.587,-18.837C-13.863,-18.526 -15.665,-15.88 -16.363,-14.871C-17.061,-13.862 -20.579,-13.009 -21.329,-11.923C-22.079,-10.836 -21.38,-7.836 -22.518,-4.629C-23.656,-1.422 -28.208,-3.543 -32.657,-6.595C-37.105,-9.647 -41.605,-8.353 -40.364,-8.198C-39.122,-8.043 -36.071,-5.25 -36.071,-5.25C-36.071,-5.25 -39.122,-4.681 -39.795,-3.284C-39.795,-3.284 -36.174,-3.879 -34.26,-3.439C-32.346,-3 -31.208,-0.982 -27.95,-0.543C-24.691,-0.103 -20.785,0 -18.277,-2.146C-15.768,-4.293 -14.682,-11.457 -13.673,-12.957C-12.664,-14.457 -9.25,-17.25 -6.897,-17.199C-4.543,-17.147 0.356,-17.22 0.356,-17.22"
                                                style="fill:white;fill-rule:nonzero;stroke:rgb(132,52,63);stroke-width:0.4px;"/>
                                        </g>
                                    </g>
                                    <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                                        <g transform="matrix(1,0,0,1,218.767,92.9654)">
                                            <path
                                                d="M0,-27.837C0,-27.837 0.224,-24.682 1.328,-23.061C2.431,-21.44 3.621,-21.63 3.742,-17.13C3.862,-12.629 3.181,-9.246 3.595,-7.396C4.009,-5.547 5.819,-2.793 8.819,-1.862C11.82,-0.931 17.328,-2.275 21.182,-1.965C25.036,-1.655 29.148,0 29.148,0C29.148,0 27.337,-4.267 24.699,-4.396C24.699,-4.396 26.381,-6.931 28.734,-6.517C28.734,-6.517 24.13,-9.31 18.234,-6.672C12.337,-4.034 8.612,-7.552 8.199,-8.276C7.785,-9 7.009,-12.362 7.785,-15.569C8.561,-18.776 9.647,-20.742 6.492,-23.535C3.336,-26.328 3.834,-26.962 3.834,-26.962"
                                                style="fill:white;fill-rule:nonzero;stroke:rgb(132,52,63);stroke-width:0.4px;"/>
                                        </g>
                                    </g>
                                    <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                                        <g transform="matrix(1,0,0,1,220.448,54.4206)">
                                            <path
                                                d="M0,8.587C0,8.587 2.371,9.018 4.681,7.552C6.992,6.087 8.699,3.466 10.888,2.276C13.078,1.087 14.027,-0.431 15.992,0.345"
                                                style="fill:none;fill-rule:nonzero;stroke:rgb(132,52,63);stroke-width:0.4px;"/>
                                        </g>
                                    </g>
                                    <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                                        <g transform="matrix(1,0,0,1,237.571,66.2319)">
                                            <path
                                                d="M0,-9.766C0,-9.766 1.369,-8.121 -0.889,-4.983C-3.148,-1.845 -7.441,0 -13.131,-1.397C-13.131,-1.397 -14.614,-1.948 -15.787,-3.19"
                                                style="fill:none;fill-rule:nonzero;stroke:rgb(132,52,63);stroke-width:0.4px;"/>
                                        </g>
                                    </g>
                                    <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                                        <g transform="matrix(1,0,0,1,221.767,55.4108)">
                                            <path d="M0,6.252C0,6.252 1.757,3.034 3.498,2.069C5.24,1.103 8.063,0 8.063,0"
                                                  style="fill:none;fill-rule:nonzero;stroke:rgb(132,52,63);stroke-width:0.4px;"/>
                                        </g>
                                    </g>
                                    <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                                        <g transform="matrix(1,0,0,1,216.146,47.7717)">
                                            <path d="M0,13.46C0,13.46 -3.276,10.787 -4.69,7.011C-6.104,3.235 -8.589,0 -12.762,1.156"
                                                  style="fill:white;fill-rule:nonzero;stroke:rgb(132,52,63);stroke-width:0.4px;"/>
                                        </g>
                                    </g>
                                    <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                                        <g transform="matrix(1,0,0,1,202.663,60.2665)">
                                            <path
                                                d="M0,-10.794C0,-10.794 -1.828,-9.19 -1.138,-6.277C-0.448,-3.363 1.983,-2.345 4.448,-2.069C6.914,-1.794 8.931,-1.656 10.725,0"
                                                style="fill:white;fill-rule:nonzero;stroke:rgb(132,52,63);stroke-width:0.4px;"/>
                                        </g>
                                    </g>
                                    <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                                        <g transform="matrix(1,0,0,1,211.801,59.9899)">
                                            <path d="M0,-8C0,-8 1.035,-7.897 2.173,-5.896C3.31,-3.896 4,-1.103 4.517,0"
                                                  style="fill:white;fill-rule:nonzero;stroke:rgb(132,52,63);stroke-width:0.4px;"/>
                                        </g>
                                    </g>
                                    <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                                        <g transform="matrix(-0.905446,0.424462,0.424462,0.905446,227.272,77.7689)">
                                            <path
                                                d="M0.947,-12.005C0.947,-12.005 0.926,-10.709 0.555,-9.307C0.184,-7.905 1.006,-7.491 0.947,-6.52C0.888,-5.551 0.381,-5.169 0.77,-4.095C1.159,-3.021 1.555,-2.178 3.142,-0.009"
                                                style="fill:white;fill-rule:nonzero;stroke:rgb(132,52,63);stroke-width:0.4px;"/>
                                        </g>
                                    </g>
                                    <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                                        <g transform="matrix(0.991439,0.130572,0.130572,-0.991439,226.012,86.5886)">
                                            <path d="M-0.215,-0.774C-0.215,-0.774 1.712,-4.603 11.472,-0.774"
                                                  style="fill:white;fill-rule:nonzero;stroke:rgb(132,52,63);stroke-width:0.4px;"/>
                                        </g>
                                    </g>
                                    <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                                        <g transform="matrix(1,0,0,1,195.477,69.2151)">
                                            <path
                                                d="M0,10.345C0,10.345 0.759,8.655 1.966,6.552C3.173,4.448 3.086,3.69 3.345,2.552C3.604,1.414 4.897,0.793 5.69,0"
                                                style="fill:white;fill-rule:nonzero;stroke:rgb(132,52,63);stroke-width:0.4px;"/>
                                        </g>
                                    </g>
                                    <g transform="matrix(5.55556,0,0,5.55556,11373,24312.9)">
                                        <g transform="matrix(-0.997483,0.0709111,0.0709111,0.997483,219.068,65.2498)">
                                            <path
                                                d="M0.291,-4.161C0.291,-4.161 2.101,-3.512 2.062,-1.876C2.022,-0.239 1.218,-0.066 0.291,-0.142C-0.634,-0.219 -1.43,-1.298 -1.536,-2.139C-1.655,-3.09 -1.896,-3.928 0.291,-4.161Z"
                                                style="fill:white;fill-rule:nonzero;stroke:rgb(132,52,63);stroke-width:0.4px;"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>
        </h1>

         <!-- Vertical Timeline #3 -->
            <div class="space-y-8 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:ml-[8.75rem] md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-slate-300 before:to-transparent">

                <!-- Item #2 -->
                <div class="relative">
                    <div class="md:flex items-center md:space-x-4 mb-3">
                        <div class="flex items-center space-x-4 md:space-x-2 md:space-x-reverse">
                            <!-- Icon -->
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full bg-white shadow md:order-1 p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     version="1.1" id="_x32_" viewBox="0 0 512 512" xml:space="preserve">
                                    <g>
                                        <path class="st0"
                                              d="M390.305,235.134H237.759v-12.689l-93.676-107.348V72.594h35.682V33.46h-35.682V0h-39.142v33.46H69.26v39.134   h35.681v42.518L11.265,222.444V512h93.782v-88.388c0.03-10.748,8.732-19.45,19.473-19.465c10.741,0.015,19.442,8.717,19.457,19.465   V512h71.575h16.028h6.178h149.737h113.239V361.667L390.305,235.134z M225.387,287.939v211.682h-9.835h-59.203v-76.009   c0-17.584-14.246-31.837-31.829-31.837c-17.584,0-31.845,14.253-31.845,31.837v76.009H23.637V227.09l93.676-107.34V60.214H81.632   V45.833l35.681,0.008V12.372h14.397V45.84h35.682v14.374h-35.682v59.528l93.676,107.348v20.417h159.299L480.93,357.8H237.759   v-69.86H225.387z M488.362,499.621H387.495H237.759V370.18h250.604V499.621z"/>
                                        <path class="st0"
                                              d="M349.351,460.676v-52.601h-51.045v58.787h51.045V460.676z M336.979,454.482h-26.3v-34.035h26.3V454.482z"/>
                                        <path class="st0"
                                              d="M430.564,460.676v-52.601h-51.045v58.787h51.045V460.676z M418.192,454.482h-26.301v-34.035h26.301V454.482z"/>
                                        <path class="st0"
                                              d="M97.493,305.274h54.913v-6.186v-48.726H97.493V305.274z M109.867,262.734h30.167v30.168h-30.167V262.734z"/>
                                    </g>
                                </svg>
                            </div>
                            <!-- Date -->
                            <time class="font-caveat text-xl text-bordeaux md:w-28 ml-4 -mr-4">14:45</time>
                        </div>
                        <!-- Title -->
                        <div class="text-bordeaux ml-20"><span class="font-bold">Stretnutie</span> na Mierovom Námestí v
                            Trenčíne
                        </div>
                    </div>
                </div>

                <!-- Item #3 -->
                <div class="relative">
                    <div class="md:flex items-center md:space-x-4 mb-3">
                        <div class="flex items-center space-x-4 md:space-x-2 md:space-x-reverse">
                            <!-- Icon -->
                            <div
                                class="flex items-center justify-center w-20 h-20 rounded-full bg-white shadow md:order-1 p-2">
                                <svg fill="#000000" height="800px" width="800px" version="1.1" id="wedding"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     viewBox="0 0 128 128" xml:space="preserve">
                                    <polygon points="27.4,27.4 32.5,30.3 27.4,33.2 "/>
                                    <polygon points="37.5,27.4 32.5,30.3 37.5,33.2 "/>
                                    <circle cx="32.5" cy="13.5" r="10.1"/>
                                    <circle cx="89.3" cy="18.5" r="10.1"/>
                                    <path d="M120.2,65.1c0,0,0-0.1-0.1-0.1l-9.2-25.3c-0.4-1.1-1-2.2-1.7-3.1c2.2-4.4,2.3-9.9-0.4-14.5l-6.3-10.9
                                        c-2.7-4.7-7.7-7.6-13.1-7.6S79,6.5,76.3,11.1L70,22.1c-2.7,4.6-2.6,10-0.4,14.5c-0.7,0.9-1.3,2-1.7,3.1l-5,13.9L56,34.6
                                        c-1.7-4.8-6.1-8.3-10.8-8.3h-5.1c0,0-7.8,21.9-7.6,22.1c0.2,0.2-7.6-22.1-7.6-22.1h-5.1c-7,0-12.6,5.7-12.6,12.6v30.9
                                        c0,2.4,2,4.4,4.4,4.4s4.4-2,4.4-4.4V41.4c0-0.7,0.6-1.3,1.3-1.3c0.7,0,1.3,0.6,1.3,1.3V118c0,3.8,2.8,6.8,6.3,6.8s6.3-3.1,6.3-6.8
                                        V74.3c0-0.7,0.6-1.3,1.3-1.3s1.3,0.6,1.3,1.3V118c0,3.8,2.8,6.8,6.3,6.8s6.3-3.1,6.3-6.8V41.4c0-0.7,0.6-1.3,1.3-1.3
                                        c0.5,0,1,0.3,1.2,0.8l9.8,26.9c0.8,2.3,3.4,3.5,5.7,2.7c1.2-0.4,2.1-1.4,2.6-2.5l0,0l8.4-23c0.2-0.5,0.7-0.9,1.3-0.8l0,0l0.4,0
                                        c0.4,5.8,1,11.4,1.9,16.9c-9.4,14.6-15,36.8-15.4,61.1l0,2.6h51.8l0-2.6c-0.4-24.4-6-46.6-15.4-61.1c0.9-5.4,1.6-11.1,1.9-16.9
                                        l0.4,0l0,0c0.6,0,1.1,0.3,1.3,0.8l8.4,23l0,0c0.8,2.3,3.4,3.5,5.7,2.6C119.8,69.9,121,67.4,120.2,65.1z M112.7,122.3H66.1
                                        c0.4-25,6.4-47,15.5-60.6c-1.5-8.5-2.4-17.9-2.4-27.8h2.5L89,47.7c0,0.7,8.1-13.8,8.1-13.8h0h2.5c-0.1,9.9-0.9,19.3-2.4,27.8
                                        C106.3,75.3,112.4,97.3,112.7,122.3z M107.4,34.5c-2.3-2-5.3-3.2-8.4-3.2H79.8c-3.1,0-6.1,1.1-8.4,3.2c-1.5-3.5-1.3-7.6,0.7-11.2
                                        l6.3-10.9c2.2-3.8,6.3-6.3,10.9-6.3c4.7,0,8.8,2.5,10.9,6.3l6.3,10.9C108.7,26.9,108.8,31,107.4,34.5z"/>
                                </svg>
                            </div>
                            <!-- Date -->
                            <time class="font-caveat font-bold text-bordeaux md:w-28 text-3xl -mr-4">15:00</time>
                        </div>
                        <!-- Title -->
                        <div class="text-bordeaux ml-14 text-5xl notoserifdisplay uppercase">
                            <span class="font-bold">Svadba!</span><br/>
                            <span class="text-2xl font-thin">Piaristický kostol <br/>sv. Františka Xaverského</span>
                        </div>
                    </div>
                </div>

                <!-- Item #4 -->
                <div class="relative">
                    <div class="md:flex items-center md:space-x-4 mb-3">
                        <div class="flex items-center space-x-4 md:space-x-2 md:space-x-reverse">
                            <!-- Icon -->
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full bg-white shadow md:order-1 p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     fill="#000000" height="800px" width="800px" version="1.1" id="Capa_1"
                                     viewBox="0 0 377.798 377.798" xml:space="preserve">
                                    <path
                                        d="M330.348,115.073h-34.232c11.486-8.011,17.037-17.842,15.624-27.707c-2.234-15.588-21.836-26.061-48.778-26.061  c-5.124,0-10.389,0.382-15.649,1.136c-3.462,0.496-6.763,1.251-9.902,2.191c0.494-2.741,0.776-5.544,0.776-8.391  c0-32.062-21.49-56.24-49.987-56.24s-49.987,24.178-49.987,56.24c0,2.701,0.262,5.364,0.719,7.975  c-2.699-0.747-5.513-1.355-8.445-1.775c-5.26-0.753-10.525-1.136-15.649-1.136c-26.942,0-46.544,10.473-48.778,26.061  c-1.414,9.864,4.137,19.696,15.624,27.707H47.45c-9.649,0-17.5,7.851-17.5,17.5v79.458v71.997v76.27c0,9.649,7.851,17.5,17.5,17.5  h282.898c9.649,0,17.5-7.851,17.5-17.5v-76.27v-71.997v-79.458C347.848,122.923,339.998,115.073,330.348,115.073z M249.44,77.29  c4.558-0.653,9.107-0.984,13.521-0.984c20.055,0,33,6.706,33.93,13.189c0.556,3.88-2.993,8.88-9.494,13.377  c-8.1,5.602-19.989,9.853-32.62,11.663c-2.494,0.357-5.075,0.539-7.672,0.539c-13.653,0-25.814-4.86-33.209-9.145  c1.552-1.585,2.955-3.106,4.139-4.462c3.628-4.156,8.438-10.342,12.45-17.789C236.085,80.683,242.478,78.287,249.44,77.29z   M167.9,130.073h41.997v81.958H167.9V130.073z M188.198,15c20.273,0,34.987,17.344,34.987,41.24  c0,23.903-27.576,47.98-34.893,51.042c-7.378-3.311-35.082-27.857-35.082-51.042C153.211,32.344,167.925,15,188.198,15z   M123.021,114.534c-12.631-1.81-24.521-6.061-32.62-11.663c-6.5-4.497-10.05-9.497-9.494-13.377  c0.929-6.483,13.875-13.189,33.93-13.189c4.415,0,8.964,0.331,13.521,0.984c6.249,0.896,12.032,2.924,17.201,5.492  c4.161,7.844,9.282,14.372,13.105,18.71c1.289,1.463,2.828,3.116,4.535,4.836c-7.449,4.182-19.277,8.744-32.506,8.744  C128.095,115.073,125.513,114.892,123.021,114.534z M44.95,132.573c0-1.355,1.145-2.5,2.5-2.5h83.242h0.004H152.9v81.958H44.95  V132.573z M152.9,362.798H47.45c-1.355,0-2.5-1.145-2.5-2.5v-76.27H152.9V362.798z M209.897,361.798H167.9v-77.77h41.997V361.798z   M332.848,360.298c0,1.355-1.145,2.5-2.5,2.5H224.897v-78.77h107.951V360.298z M332.848,269.028H44.95v-41.997h287.898V269.028z   M332.848,212.031H224.897v-81.958h105.451c1.355,0,2.5,1.145,2.5,2.5V212.031z"/>
                                </svg>
                            </div>
                            <!-- Date -->
                            <time class="font-caveat font-medium text-xl text-bordeaux md:w-28 ml-4 -mr-4">15:30</time>
                        </div>
                        <!-- Title -->
                        <div class="text-bordeaux ml-20"><span class="font-bold">Gratulácie</span> a spoločné fotenie
                        </div>
                    </div>
                    <!-- Card -->
                    {{--<div class="bg-white p-4 rounded border border-slate-200 text-bordeaux shadow ml-14 md:ml-44">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>--}}
                </div>



            </div>
            <!-- End: Vertical Timeline #3 -->
    </div>

    <div class="relative mx-auto max-w-5xl text-base/7 text-gray-700 mb-12">
        <h2 class="text-4xl sm:text-5xl tracking-tight text-pretty text-gray-900 notoserifdisplay font-thin">Piaristický kostol <span class="ppplayground text-5xl sm:text-7xl"> sv. Františka Xaverského</span></h2>
    </div>

    <div class="relative mx-auto max-w-5xl mb-30">
        <img class="mx-auto w-full bg-gray-50 object-cover lg:absolute lg:w-2/5" src="{{ asset('img/namestie-kostol.jpg') }}" alt="Piaristický kostol sv. Františka Xaverského V Trenčíne na Mierovom Námestí" />
        <div class="mx-auto grid max-w-7xl lg:grid-cols-2">
            <div class="px-6 pt-16 pb-24 sm:pt-20 sm:pb-32 lg:col-start-2 lg:px-5 lg:pt-32">
                <div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
                    <dl class="mt-16 grid max-w-xl grid-cols-1 gap-8 sm:mt-20 xl:mt-16">
                        <div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
                            <dt class="text-sm/6 text-gray-600">Adresa</dt>
                            <dd class="order-first text-2xl font-semibold tracking-tight text-gray-900">Mierové námestie 43,<br/> Trenčín</dd>
                        </div>
                        <div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
                            <dt class="text-sm/6 text-gray-600">GPS poloha</dt>
                            <dd class="order-first text-2xl font-semibold tracking-tight text-gray-900">48.8947361, 18.040425899999946</dd>
                        </div>
                        <div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">
                                <a href="https://maps.app.goo.gl/7fWEAcvFCNgvhsoH8" target="_blank" >
                                    <svg style="width: 3rem;" class="inline-block" fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60" xml:space="preserve">
                                        <g>
                                            <path d="M44.394,13.091L8.633,29.503c-0.399,0.184-0.632,0.605-0.574,1.041s0.393,0.782,0.826,0.854l15.833,2.653l1.809,14.95
                                                c0.054,0.438,0.389,0.791,0.824,0.865c0.057,0.01,0.113,0.015,0.169,0.015c0.375,0,0.726-0.211,0.896-0.556l17.291-34.882
                                                c0.188-0.38,0.117-0.837-0.178-1.141S44.776,12.914,44.394,13.091z M28.11,45.438l-1.496-12.369
                                                c-0.054-0.44-0.391-0.793-0.828-0.866l-13.362-2.239L42.66,16.087L28.11,45.438z"/>
                                            <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30 S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                                        </g>
                                    </svg>
                                    Navigovať
                                </a>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>


    <div class="relative mx-auto max-w-5xl text-base/7 text-gray-700 mb-12">
        <h2 class="text-4xl sm:text-5xl tracking-tight text-pretty text-gray-900 notoserifdisplay font-thin mb-6">Parkovanie</h2>

        <p class="text-xl text-gray-700">Odporúčame parkovanie v nedalekom <span class="font-bold">parkovacom dome</span> vo vzialenosti <span class="font-bold">~300m chôdze od kostola</span>.</p>

    </div>
    <div class="relative mx-auto max-w-5xl mb-30">
{{--        <img src="{{ asset('img/namestie-kostol.jpg') }}" alt="Piaristický kostol sv. Františka Xaverského V Trenčíne na Mierovom Námestí" />--}}
        <div class="mx-auto w-full bg-gray-50 object-cover lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-1/2" id="map"></div>
        <div class="mx-auto grid max-w-7xl lg:grid-cols-2">
            <div class="px-6 pb-24 sm:pb-32 lg:col-start-2 lg:px-5">
                <div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
                    <dl class="grid max-w-xl grid-cols-1 gap-8">
                        <div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
                            <dt class="text-base/7 text-gray-600">web</dt>
                            <dd class="order-first text-2xl font-semibold tracking-tight text-gray-900"><a href="https://parkovacidom-trencin.sk">parkovacidom-trencin.sk</a></dd>
                        </div>
                        <div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
                            <dt class="text-base/7 text-gray-600">Adresa</dt>
                            <dd class="order-first text-2xl font-semibold tracking-tight text-gray-900">Palackého 101, Trenčín</dd>
                        </div>
                        <div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
                            <dt class="text-sm/6 text-gray-600">GPS poloha</dt>
                            <dd class="order-first text-2xl font-semibold tracking-tight text-gray-900">48.8947361, 18.040425899999946</dd>
                        </div>
                        <div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
                            <dd class="order-first text-2xl font-semibold tracking-tight text-gray-900">
                                <a href="https://maps.app.goo.gl/FcYDZw91eqb6Eyx19" target="_blank" >
                                    <svg style="width: 3rem;" class="inline-block" fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60" xml:space="preserve">
                                            <g>
                                                <path d="M44.394,13.091L8.633,29.503c-0.399,0.184-0.632,0.605-0.574,1.041s0.393,0.782,0.826,0.854l15.833,2.653l1.809,14.95
                                                    c0.054,0.438,0.389,0.791,0.824,0.865c0.057,0.01,0.113,0.015,0.169,0.015c0.375,0,0.726-0.211,0.896-0.556l17.291-34.882
                                                    c0.188-0.38,0.117-0.837-0.178-1.141S44.776,12.914,44.394,13.091z M28.11,45.438l-1.496-12.369
                                                    c-0.054-0.44-0.391-0.793-0.828-0.866l-13.362-2.239L42.66,16.087L28.11,45.438z"/>
                                                <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30 S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
                                            </g>
                                        </svg>
                                    Navigovať
                                </a>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function initMap() {

        const center = {lat: 48.8954462, lng: 18.0411891};
        const parking = {lat: 48.8960324, lng: 18.0428914};
        const kostol = {lat: 48.8947361, lng: 18.0404259};

        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 17.2,
            center,
            mapId: '40974767099439828c375eb8'
        });

        const directionsService = new google.maps.DirectionsService();
        const parser = new DOMParser();


        const svadbaSvgString = `<svg fill="#000000" width="64px" height="64px" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" viewBox="129.12 87.06 108.53 186.49"> <path d="m 0,0 c -20.788,0 -37.701,-17.122 -37.701,-38.167 0,-5.203 3.103,-15.251 11.848,-26.446 13.075,-16.735 22.476,-41.346 25.852,-60.042 3.377,18.696 12.778,43.307 25.853,60.042 C 34.597,-53.418 37.7,-43.37 37.7,-38.167 37.7,-17.122 20.788,0 0,0 m 1.625,-136.87 h -3.251 l -0.073,1.423 c -0.949,18.441 -11.127,49.288 -26.517,68.987 -9.205,11.783 -12.485,22.341 -12.485,28.293 0,22.7 18.258,41.167 40.7,41.167 C 22.441,3 40.7,-15.467 40.7,-38.167 40.7,-44.119 37.42,-54.677 28.215,-66.46 12.825,-86.159 2.647,-117.006 1.698,-135.447 Z" style="fill:#000000;fill-opacity:1;stroke:none" transform="matrix(1.3333333,0,0,-1.3333333,183.38667,91.062533)"></path> <g transform="matrix(0.54964908,0,0,0.5188104,147.12922,102.29467)"> <polygon points="27.4,27.4 32.5,30.3 27.4,33.2 "></polygon> <polygon points="37.5,27.4 32.5,30.3 37.5,33.2 "></polygon> <circle cx="32.5" cy="13.5" r="10.1"></circle> <circle cx="89.300003" cy="18.5" r="10.1"></circle> <path d="m 120.2,65.1 c 0,0 0,-0.1 -0.1,-0.1 l -9.2,-25.3 c -0.4,-1.1 -1,-2.2 -1.7,-3.1 2.2,-4.4 2.3,-9.9 -0.4,-14.5 L 102.5,11.2 C 99.8,6.5 94.8,3.6 89.4,3.6 84,3.6 79,6.5 76.3,11.1 l -6.3,11 c -2.7,4.6 -2.6,10 -0.4,14.5 -0.7,0.9 -1.3,2 -1.7,3.1 l -5,13.9 -6.9,-19 C 54.3,29.8 49.9,26.3 45.2,26.3 h -5.1 c 0,0 -7.8,21.9 -7.6,22.1 0.2,0.2 -7.6,-22.1 -7.6,-22.1 h -5.1 c -7,0 -12.6,5.7 -12.6,12.6 v 30.9 c 0,2.4 2,4.4 4.4,4.4 2.4,0 4.4,-2 4.4,-4.4 V 41.4 c 0,-0.7 0.6,-1.3 1.3,-1.3 0.7,0 1.3,0.6 1.3,1.3 V 118 c 0,3.8 2.8,6.8 6.3,6.8 3.5,0 6.3,-3.1 6.3,-6.8 V 74.3 c 0,-0.7 0.6,-1.3 1.3,-1.3 0.7,0 1.3,0.6 1.3,1.3 V 118 c 0,3.8 2.8,6.8 6.3,6.8 3.5,0 6.3,-3.1 6.3,-6.8 V 41.4 c 0,-0.7 0.6,-1.3 1.3,-1.3 0.5,0 1,0.3 1.2,0.8 l 9.8,26.9 c 0.8,2.3 3.4,3.5 5.7,2.7 1.2,-0.4 2.1,-1.4 2.6,-2.5 v 0 l 8.4,-23 c 0.2,-0.5 0.7,-0.9 1.3,-0.8 v 0 h 0.4 c 0.4,5.8 1,11.4 1.9,16.9 -9.4,14.6 -15,36.8 -15.4,61.1 v 2.6 h 51.8 v -2.6 C 115,97.8 109.4,75.6 100,61.1 c 0.9,-5.4 1.6,-11.1 1.9,-16.9 h 0.4 v 0 c 0.6,0 1.1,0.3 1.3,0.8 l 8.4,23 v 0 c 0.8,2.3 3.4,3.5 5.7,2.6 2.1,-0.7 3.3,-3.2 2.5,-5.5 z m -7.5,57.2 H 66.1 c 0.4,-25 6.4,-47 15.5,-60.6 -1.5,-8.5 -2.4,-17.9 -2.4,-27.8 h 2.5 L 89,47.7 c 0,0.7 8.1,-13.8 8.1,-13.8 v 0 h 2.5 c -0.1,9.9 -0.9,19.3 -2.4,27.8 9.1,13.6 15.2,35.6 15.5,60.6 z m -5.3,-87.8 c -2.3,-2 -5.3,-3.2 -8.4,-3.2 H 79.8 c -3.1,0 -6.1,1.1 -8.4,3.2 -1.5,-3.5 -1.3,-7.6 0.7,-11.2 l 6.3,-10.9 c 2.2,-3.8 6.3,-6.3 10.9,-6.3 4.7,0 8.8,2.5 10.9,6.3 l 6.3,10.9 c 2.2,3.6 2.3,7.7 0.9,11.2 z"></path> </g> </svg>`;
        const svadbaSvg = parser.parseFromString(svadbaSvgString, "image/svg+xml",).documentElement;

       const parkingSvgString = `<svg fill="#000000" width="64px" height="64px" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" version="1.1" id="svg1" xml:space="preserve" viewBox="129.12 87.06 108.53 186.49"> <path style="background:#ffffff" d="m 0,0 c -20.788,0 -37.701,-17.122 -37.701,-38.167 0,-5.203 3.103,-15.251 11.848,-26.446 13.075,-16.735 22.476,-41.346 25.852,-60.042 3.377,18.696 12.778,43.307 25.853,60.042 C 34.597,-53.418 37.7,-43.37 37.7,-38.167 37.7,-17.122 20.788,0 0,0 m 1.625,-136.87 h -3.251 l -0.073,1.423 c -0.949,18.441 -11.127,49.288 -26.517,68.987 -9.205,11.783 -12.485,22.341 -12.485,28.293 0,22.7 18.258,41.167 40.7,41.167 C 22.441,3 40.7,-15.467 40.7,-38.167 40.7,-44.119 37.42,-54.677 28.215,-66.46 12.825,-86.159 2.647,-117.006 1.698,-135.447 Z" transform="matrix(1.3333333,0,0,-1.3333333,183.38667,91.062533)"/> <path d="m 195.33419,147.78342 c -2.81663,2.34886 -6.25202,3.49337 -9.7184,3.23777 h -8.0633 v 15.69836 h -8.06331 v -44.15161 h 16.63587 c 3.31062,-0.2031 6.57117,1.00126 9.1667,3.38495 2.45253,2.74476 3.71338,6.61441 3.43752,10.54733 0.44221,4.16596 -0.81142,8.33386 -3.39508,11.2832 z m -6.36576,-15.89459 c -1.22647,-1.03953 -2.72498,-1.55904 -4.24384,-1.47172 h -7.1721 v 13.00019 h 7.1721 c 1.53287,0.0937 3.04283,-0.46457 4.24384,-1.56983 1.086,-1.31229 1.64109,-3.09454 1.52778,-4.90573 0.20031,-1.86762 -0.36497,-3.73621 -1.52778,-5.05291 z m 22.9592,-13.19643 c 0.48379,-1.21956 0.0297,-2.66234 -1.01853,-3.23778 l -28.30644,-15.20777 -28.4762,15.20777 c -1.06647,0.56907 -1.53203,2.02951 -1.03974,3.26232 0.49228,1.23281 1.75569,1.77097 2.82216,1.2019 v 0 l 26.69378,-14.27569 26.69378,14.22664 c 1.05502,0.55924 2.30314,0.0344 2.80094,-1.17739 z"/> </svg>`;
        const parkingSvg = parser.parseFromString(parkingSvgString, "image/svg+xml",).documentElement;


        const markerSvadba = new google.maps.marker.AdvancedMarkerElement({
            map,
            position: kostol,
            content: svadbaSvg,
            title: "Piaristický kostol sv. Františka Xaverského"
        });

        const markerParking = new google.maps.marker.AdvancedMarkerElement({
            map,
            position: parking,
            content: parkingSvg,
            title: "Parkovací dom"
        });



        // const namestieTag = document.createElement("div");
        //
        // // namestieTag.className = "price-tag";
        // namestieTag.textContent = "Mierové námestie";
        //
        // const namestieMarker = new google.maps.marker.AdvancedMarkerElement({
        //     map,
        //     position: namestie,
        //     content: namestieTag,
        // });
        //
        // const markerKostol = new google.maps.marker.AdvancedMarkerElement({
        //     map,
        //     position: kostol,
        //     content: kostolSvg,
        //     title: "Piaristický kostol sv. Františka Xaverského"
        // });
        // // namestie

        // const markerKostol = new google.maps.Marker({
        //     position: kostol,
        //     map,
        //     title: "Piaristický kostol sv. Františka Xaverského"
        // });


        //
        const directionsRendererParking = new google.maps.DirectionsRenderer({
            map: map,
            suppressMarkers: true,
            disableAutoPan: true,
            preserveViewport: true
        });

        // Request directions
        const requestParking = {
            origin: parking,
            destination: kostol,
            travelMode: google.maps.TravelMode.WALKING,
        };


        directionsService.route(requestParking, (result, status) => {
            if (status === "OK") {
                directionsRendererParking.setDirections(result);
            } else {
                alert("Directions request failed due to " + status);
            }
        });
    }

</script>

{{--<script async defer--}}
{{--        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJqdELwOm6VLuLaswDJePJO6XJd9o1QEc&callback=initMap"></script>--}}
{{--<script async defer--}}
{{--        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJqdELwOm6VLuLaswDJePJO6XJd9o1QEc&callback=initMap&libraries=marker"></script>--}}

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJqdELwOm6VLuLaswDJePJO6XJd9o1QEc&callback=initMap&libraries=marker,places"
    defer></script>
</body>
</html>
