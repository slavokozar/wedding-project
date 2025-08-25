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
            width: 100%;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
{{--        <div>--}}
{{--            <p>Ul, 17. novembra 32, 914 51 Trenčianske Teplice, Slovensko</p>--}}

@php
    $places = [
        [
            'name' => 'Dom Natura',
            'label' => 'N',
            'address' => 'Ľudovíta Štúra 6, Trenčianske Teplice',
            'web' => 'https://domnatura.sk/',
            'parking' => "Sukromné parkovisko na rohu Hurbanovej ulice <br/>- na mape označené PN",
            'gps' => ['lat' => 48.907768404911835, 'lng' => 18.172837433548533]

        ],
        [
            'name' => 'Penzión Fontis',
            'label' => 'F',
            'address' => 'Hurbanova 358, Trenčianske Teplice',
            'web' => 'http://www.penzionfontis.sk',
            'parking' => "Priamo pod oknami penzióna",
            'gps' => ['lat' => 48.90793173697368, 'lng' => 18.16912355815917]
        ],
        [
            'name' => 'Pelech',
            'label' => 'P',
            'address' => 'Generála Milana Rastislava Štefánika 625/16, Trenčianske Teplice',
            'web' => 'http://www.cityap.sk',
            'parking' => "Parkovanie priamo pri apartmáne",
            'gps' => ['lat' => 48.91134851865472, 'lng' => 18.16650788146855]
        ],
        [
            'name' => 'Hotel Sonáta',
            'label' => 'S',
            'address' => 'Pod Klepáčom 398, Trenčianske Teplice',
            'parking' => "Súkromné parkovisko pri hoteli",
            'gps' => ['lat' => 48.90710511880918, 'lng' => 18.17130257079269]
        ],
        [
            'name' => 'Apartmán Orava',
            'label' => 'AO',
            'address' => 'Kúpeľná 4, Trenčianske Teplice',
            'web' => 'https://aptorava.sk/',
            'parking' => "Parkovanie priamo pri apartmáne",
            'gps' => ['lat' => 48.90907206084482, 'lng' => 18.173454822533774]
        ],
        [
            'name' => 'Ubytovanie City',
            'label' => 'C',
            'address' => 'Bagarova 1, Trenčianske Teplice',
            'web' => 'https://www.ubytovaniecity.sk/',
            'gps' => ['lat' => 48.90847665702842, 'lng' => 18.169266338175795]
        ]
    ]

@endphp
<body>
<div class="bg-white px-6 py-16 lg:px-8">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="text-4xl sm:text-5xl tracking-tight text-pretty text-gray-900 notoserifdisplay font-thin mb-6">Ubytovanie a príchod na svadbu</h1>

        <p class="text-lg/8 text-gray-700">Všetky ubytovania sú objednané bez akéhokoľvek stravovania.</p>
        <p class="text-lg/8 text-gray-700 mb-6">Raňajky sú poskytované niekoľkými hotelmi a kaviarňami v okolí. Každá z izieb disponuje chladničkou. </p>


        <p class="font-bold text-lg/8 text-gray-700 mb-12">Nezabúdajte, prosím, že 29. 8. je na Slovensku štátny sviatok a preto nie sú otvorené obchody.</p>

        <h3 class="text-3xl sm:text-4xl tracking-tight text-pretty text-gray-900 notoserifdisplay font-thin mb-6">Mapa ubytovaní v Trenčianskych Tepliciach</h3>

        <div id="map"></div>


        <dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base/7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach($places as $place)
                <div>
                    <dt class="text-2xl font-semibold text-gray-900"><span class="font-bold">{{ $place['label'] }}</span> - {{ $place['name'] }}</dt>
                    <dd class="mt-1 text-gray-600">
                        <p class="mb-2">{{ $place['address'] }}</p>
                        @if(isset($place['web']))
                            <p class="mb-2"><a class="underline text-indigo-600" href="{{ $place['web'] }}" target="_blank">{{ $place['web'] }}</a></p>
                        @endif
                        @if(isset($place['parking']))
                            <p class="mb-2"><span class="font-bold">Parkovanie:</span><br/>{!! $place['parking'] !!}</a></p>
                        @endif
                    </dd>
                </div>
            @endforeach
        </dl>


        <h2 class="text-3xl sm:text-4xl tracking-tight text-pretty text-gray-900 notoserifdisplay mb-4">Príchod vo štvrtok</h2>


        <p class="font-bold text-lg/8 text-gray-700 mb-8">Vo štvrtok 28. 8. 2025 Vás radi privítame na záhradnej párty u Matišákovcov so začiatkom o 17:30 hod.</span>

        <p class="text-lg/8 text-gray-700 mb-4">Pripravená bude večera, alko aj nealko občerstvenie a skvelá nálada.</p>
        <p class="text-lg/8 text-gray-700 mb-4">Zvoľte prosím <span class="font-bold">voľnočasové až športové oblečenie</span> a pamätajte aj na <span class="font-bold">chladné augustové večery</span>, takže si prihoďte do auta mikinu, trigovicu, bundu či gerok.</>

        <p class="text-lg/8 text-gray-700 mb-6">
            <span class="font-bold">Adresa:</span>
            <br/>
            Družstevná 1285/57, 911 01 Trenčín
            <br/>

            <a class="underline text-indigo-600"  href="https://maps.app.goo.gl/YYYM2iK9CK9nNnPJ6" target="_blank" >
                <svg style="width: 3rem;" class="inline-block" fill="#4f39f6" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60" xml:space="preserve">
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
        </p>

        <p class="text-lg/8 text-gray-700 mb-4">Parkovanie je možné na ulici pred domom alebo pri garážach oproti.</p>

        <p class="text-lg/8 text-gray-700 mb-4">Priamo u Matišákovcov dostanete pokyny a kľúče od svojho ubytovania v mieste konania svadobnej hostiny v <span class="font-bold">Trenčianskych Tepliciach</span>.</p>
        <p class="text-lg/8 text-gray-700 mb-4">Tam Vás v chladničkách na izbách už bude čakať výslužka - krabička koláčov a svadobná pálenka.</p>

        <p class="text-lg/8 text-gray-700 mb-4">Ak cestu do Trenčína plánujete <span class="font-bold">verejnou dopravou</span>, ozvite sa nám a individuálne zorganizujeme dopravu z vlakovej alebo autobusovej stanice.</p>

        <p class="text-lg/8 text-gray-700 mb-12"><span class="font-bold">O 21:30</span> bude od záhrady Matišákovcov vyrážať súkromný autobus, ktorý Vás dopraví na ubytovanie.</p>

        <h2 class="text-3xl sm:text-4xl tracking-tight text-pretty text-gray-900 notoserifdisplay font-thin mb-6">Príchod vo štvrtok po 21:30</h2>

        <p class="text-lg/8 text-gray-700 mb-12">V prípade, že Váš príchod do Trenčína plánujete až po 21:30 dorazte prosím <span class="font-bold">priamo na ubytovanie v Trenčianskych Tepliciach</span>.</p>

        <p class="text-lg/8 text-gray-700 mb-12">Od 22:00 Vám kľúče od Vašich izieb odovzdá Adam, ktorého nájdete v apartmáne Pelech.</p>

        <p class="text-lg/8 text-gray-700 mb-12">Po príchode do Trenčianskych Teplíc, kontaktujte Adama, v Pelechu si od neho prevezmite svoje kľúče a presuňte sa na svoje ubytovanie, kde Vás bude čakať v chladničke privítací balíček.</p>

        <h2 class="text-3xl sm:text-4xl tracking-tight text-pretty text-gray-900 notoserifdisplay font-thin mb-6">Príchod v piatok</h2>

        <p class="text-lg/8 text-gray-700 mb-4">V piatok dorazte priamo na svoje ubytovanie.</p>
        <p class="font-bold text-lg/8 text-gray-700 mb-4">Check-in je možný od 12:00 v ubytovaní Natura a Fontis.</p>
        <p class="text-lg/8 text-gray-700 mb-4">Kľúče nájdete priamo v svojich izbách - pre detaily priamo v piatok kontaktujte Martina Gergela.</p>
        <p class="font-bold text-lg/8 text-gray-700 mb-6">O 14:00  bude z Trenčianskych Teplíc vypravený autobus priamo ku kostolu.</p>

        <p class="font-bold text-lg/8 text-gray-700 mb-4">Svadobný obrad začne o 15:00 v Kostole sv. Františka Xaverského v Trenčíne (Mierové námestie, Trenčín).</p>
        <p class="text-lg/8 text-gray-700">Autobus bude znova pristavený ku kostolu o 16:00 a prevezie svadobčanov do Kursalónu v Trenčianskych Tepliciach, kde bude o 16:30  pripravené privítanie.</p>


    </div>
</div>

<script>
    function initMap() {

        // 48.9084993,18.1716913
        const center = {lat: 48.9092, lng: 18.170213};
        const kursalon = {lat: 48.90816641700556, lng: 18.17642979907453};
        const parkingNatura = {lat: 48.9072686, lng: 18.1735651};

        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 16,
            center,
            mapId: '40974767099439828c375eb8'
        });

        @foreach($places as $place)
            new google.maps.Marker({
                position: {lat: {{ $place['gps']['lat'] }}, lng: {{ $place['gps']['lng'] }}},
                map,
                label: "{{ $place['label'] }}",
                title: "{{ $place['name'] }}"
            });
        @endforeach

        const markerKursalon = new google.maps.Marker({
            position: kursalon,
            map,
            label: "K",
            title: "Kursalon"
        });

        const markerParkingNatura = new google.maps.Marker({
            position: parkingNatura,
            map,
            label: "PN",
            title: "Parking Dom Natura"
        });



        // const directionsRenderer = new google.maps.DirectionsRenderer({
        //     map: map,
        //     suppressMarkers: true,
        //     disableAutoPan: true,
        //     preserveViewport: true
        // });

        // new google.maps.DirectionsRenderer();
        // directionsRenderer.setMap(map);
        //

        // directionsService.route(request, (result, status) => {
        //     if (status === "OK") {
        //         directionsRenderer.setDirections(result);
        //     } else {
        //         alert("Directions request failed due to " + status);
        //     }
        // });
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
