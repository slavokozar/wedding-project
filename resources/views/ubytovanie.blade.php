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
            'gps' => ['lat' => 48.907768404911835, 'lng' => 18.172837433548533]

        ],
        [
            'name' => 'Penzión Fontis',
            'label' => 'F',
            'address' => 'Hurbanova 358, Trenčianske Teplice',
            'web' => 'http://www.penzionfontis.sk',
            'gps' => ['lat' => 48.90793173697368, 'lng' => 18.16912355815917]
        ],
        [
            'name' => 'City Appartments',
            'label' => 'CA',
            'address' => 'Generála Milana Rastislava Štefánika 625/16, Trenčianske Teplice',
            'web' => 'http://www.cityap.sk',
            'gps' => ['lat' => 48.91134851865472, 'lng' => 18.16650788146855]
        ],
        [
            'name' => 'Hotel Garni',
            'label' => 'G',
            'address' => 'Pod Klepáčom 398, Trenčianske Teplice',
            'gps' => ['lat' => 48.90710511880918, 'lng' => 18.17130257079269]
        ],
        [
            'name' => 'Apartmán Orava',
            'label' => 'AO',
            'address' => 'Kúpeľná 4, Trenčianske Teplice',
            'web' => 'https://aptorava.sk/',
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
<div class="bg-white px-6 py-32 lg:px-8">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-4xl sm:text-5xl tracking-tight text-pretty text-gray-900 notoserifdisplay font-thin">Ubytovanie</h2>

            <p class="mt-6 text-lg/8 text-gray-700">Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.</p>
        </div>

        <div id="map"></div>


        <dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base/7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach($places as $place)
                <div>
                    <dt class="font-semibold text-gray-900"><span class="font-bold">{{ $place['label'] }}</span> - {{ $place['name'] }}</dt>
                    <dd class="mt-1 text-gray-600">
                        <p class="mb-2">{{ $place['address'] }}</p>
                        @if(isset($place['web']))
                            <p class="mb-2"><a class="underline text-indigo-600" href="{{ $place['web'] }}" target="_blank">{{ $place['web'] }}</a></p>
                        @endif
                    </dd>
                </div>
            @endforeach
        </dl>
    </div>

</div>

<script>
    function initMap() {

        // 48.9084993,18.1716913
        const center = {lat: 48.9092, lng: 18.170213};
        const kursalon = {lat: 48.90816641700556, lng: 18.17642979907453};

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
