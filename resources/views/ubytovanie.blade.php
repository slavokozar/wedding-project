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
<body>

<div class="bg-white px-6 py-32 lg:px-8">
    <div class="mx-auto max-w-3xl text-base/7 text-gray-700">
        <div id="info" style="padding: 10px; background: #f9f9f9;"></div>

        <div id="map"></div>

        <div>
            <p>Ul, 17. novembra 32, 914 51 Trenčianske Teplice, Slovensko</p>

            natura = {lat: 48.907768404911835, lng: 18.172837433548533};
            Ľudovíta Štúra 6, 914 51 Trenčianske Teplice, Slovensko


            fontis
            {lat: 48.90793173697368, lng: 18.16912355815917};
            Hurbanova 358, 914 51 Trenčianske Teplice, Slovensko
            http://www.penzionfontis.sk/


            const cityAp = {lat: 48.91134851865472, lng: 18.16650788146855};
            Gen. M. R. Štefánika, Generála Milana Rastislava Štefánika 625/16, 914 51 Trenčianske Teplice, Slovensko
            http://www.cityap.sk/

            const garni = {lat: 48.90710511880918, lng: 18.17130257079269};
            Pod Klepáčom 398, 914 51 Trenčianske Teplice, Slovensko

            const orava = {lat: 48.90907206084482, lng: 18.173454822533774};
            Kúpeľná 4, 914 51 Trenčianske Teplice, Slovensko
            http://aptorava.sk/

            const city = {lat: 48.90847665702842, lng: 18.169266338175795};
            Bagarova 1, 914 51 Trenčianske Teplice,
            https://www.ubytovaniecity.sk/
        </div>
    </div>
</div>

<script>
    function initMap() {

        // 48.9084993,18.1716913
        const center = {lat: 48.9092, lng: 18.170213};
        const kursalon = {lat: 48.90816641700556, lng: 18.17642979907453};


        const natura = {lat: 48.907768404911835, lng: 18.172837433548533};


        const fontis = {lat: 48.90793173697368, lng: 18.16912355815917};

        const cityAp = {lat: 48.91134851865472, lng: 18.16650788146855};

        const garni = {lat: 48.90710511880918, lng: 18.17130257079269};

        const orava = {lat: 48.90907206084482, lng: 18.173454822533774};

        const city = {lat: 48.90847665702842, lng: 18.169266338175795};

        // const parkac = {lat: 48.8960324, lng: 18.0428914};
        // const kostol = {lat: 48.8947361, lng: 18.0404259};


        // const oakland = { lat: 37.8044, lng: -122.2712 };

        // const hradIdPoIId = "ChIJ_ecBt4mhFEcRG0LJawAmM9Q";
        // const kostolPoIId = "ChIJG161KImhFEcRCCkbm_cV-MA";

        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 16,
            center,
            mapId: '40974767099439828c375eb8'
        });


        // const service = new google.maps.places.PlacesService(map);

        // service.getDetails({ placeId: kostolPoIId }, (place, status) => {
        //     if (status === google.maps.places.PlacesServiceStatus.OK) {
        //
        //         console.log(place.geometry.location.lat());
        //         console.log(place.geometry.location.lng());
        //
        //         const marker = new google.maps.Marker({
        //             map,
        //             position: place.geometry.location,
        //             title: place.name
        //         });
        //
        //         const infoWindow = new google.maps.InfoWindow({
        //             content: `
        //       <strong>${place.name}</strong><br>
        //       ${place.formatted_address}<br>
        //       ${place.formatted_phone_number || ''}<br>
        //       <a href="${place.url}" target="_blank">View on Google Maps</a>
        //     `
        //         });
        //
        //         marker.addListener("click", () => {
        //             infoWindow.open(map, marker);
        //         });
        //     } else {
        //         alert("Place details request failed: " + status);
        //     }
        // });


        // const directionsService = new google.maps.DirectionsService();
        //
        //
        // const directionsRenderer = new google.maps.DirectionsRenderer({
        //     map: map,
        //     suppressMarkers: true,
        //     disableAutoPan: true,
        //     preserveViewport: true
        // });

        // new google.maps.DirectionsRenderer();
        // directionsRenderer.setMap(map);
        //
        // Create markers

        // const parser = new DOMParser();
        // // A marker with a custom inline SVG.
        // const kostolSvgString =
        //     `<svg fill="#000000" height="24px" width="24px" version="1.1" id="wedding" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 128 128" xml:space="preserve"> <polygon points="27.4,27.4 32.5,30.3 27.4,33.2 "/> <polygon points="37.5,27.4 32.5,30.3 37.5,33.2 "/> <circle cx="32.5" cy="13.5" r="10.1"/> <circle cx="89.3" cy="18.5" r="10.1"/> <path d="M120.2,65.1c0,0,0-0.1-0.1-0.1l-9.2-25.3c-0.4-1.1-1-2.2-1.7-3.1c2.2-4.4,2.3-9.9-0.4-14.5l-6.3-10.9 c-2.7-4.7-7.7-7.6-13.1-7.6S79,6.5,76.3,11.1L70,22.1c-2.7,4.6-2.6,10-0.4,14.5c-0.7,0.9-1.3,2-1.7,3.1l-5,13.9L56,34.6 c-1.7-4.8-6.1-8.3-10.8-8.3h-5.1c0,0-7.8,21.9-7.6,22.1c0.2,0.2-7.6-22.1-7.6-22.1h-5.1c-7,0-12.6,5.7-12.6,12.6v30.9 c0,2.4,2,4.4,4.4,4.4s4.4-2,4.4-4.4V41.4c0-0.7,0.6-1.3,1.3-1.3c0.7,0,1.3,0.6,1.3,1.3V118c0,3.8,2.8,6.8,6.3,6.8s6.3-3.1,6.3-6.8 V74.3c0-0.7,0.6-1.3,1.3-1.3s1.3,0.6,1.3,1.3V118c0,3.8,2.8,6.8,6.3,6.8s6.3-3.1,6.3-6.8V41.4c0-0.7,0.6-1.3,1.3-1.3 c0.5,0,1,0.3,1.2,0.8l9.8,26.9c0.8,2.3,3.4,3.5,5.7,2.7c1.2-0.4,2.1-1.4,2.6-2.5l0,0l8.4-23c0.2-0.5,0.7-0.9,1.3-0.8l0,0l0.4,0 c0.4,5.8,1,11.4,1.9,16.9c-9.4,14.6-15,36.8-15.4,61.1l0,2.6h51.8l0-2.6c-0.4-24.4-6-46.6-15.4-61.1c0.9-5.4,1.6-11.1,1.9-16.9 l0.4,0l0,0c0.6,0,1.1,0.3,1.3,0.8l8.4,23l0,0c0.8,2.3,3.4,3.5,5.7,2.6C119.8,69.9,121,67.4,120.2,65.1z M112.7,122.3H66.1 c0.4-25,6.4-47,15.5-60.6c-1.5-8.5-2.4-17.9-2.4-27.8h2.5L89,47.7c0,0.7,8.1-13.8,8.1-13.8h0h2.5c-0.1,9.9-0.9,19.3-2.4,27.8 C106.3,75.3,112.4,97.3,112.7,122.3z M107.4,34.5c-2.3-2-5.3-3.2-8.4-3.2H79.8c-3.1,0-6.1,1.1-8.4,3.2c-1.5-3.5-1.3-7.6,0.7-11.2 l6.3-10.9c2.2-3.8,6.3-6.3,10.9-6.3c4.7,0,8.8,2.5,10.9,6.3l6.3,10.9C108.7,26.9,108.8,31,107.4,34.5z"/></svg>`;
        // const kostolSvg = parser.parseFromString(
        //     kostolSvgString,
        //     "image/svg+xml",
        // ).documentElement;

        // const markerKostol = new google.maps.marker.AdvancedMarkerElement({
        //     map,
        //     position: kostol,
        //     content: kostolSvg,
        //     title: "Piaristický kostol sv. Františka Xaverského"
        // });

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

        const markerKursalon = new google.maps.Marker({
            position: kursalon,
            map,
            title: "Kursalon"
        });

        const markerNatura = new google.maps.Marker({
            position: natura,
            map,
            title: "Dom Natura"
        });

        const markerFontis = new google.maps.Marker({
            position: fontis,
            map,
            title: "Penzión Fontis"
        });

        const markerGarni = new google.maps.Marker({
            position: garni,
            map,
            title: "Hotel Garni"
        });

        const markerCityAp = new google.maps.Marker({
            position: cityAp,
            map,
            title: "City Appartments"
        });

        const markerOrava = new google.maps.Marker({
            position: orava,
            map,
            title: "Apartmán orava"
        });

        const markerCity = new google.maps.Marker({
            position: city,
            map,
            title: "Ubytovanie City"
        });



        // const markerParkac = new google.maps.Marker({
        //     position: parkac,
        //     map,
        //     title: "Parkovací Dom"
        // });

        // // Info Windows
        // const infoKostol = new google.maps.InfoWindow({
        //     content: "<strong>San Francisco</strong>"
        // });
        // infoKostol.addListener("click", () => {
        //     infoSF.open(map, markerSF);
        // });
        //
        // const infoOakland = new google.maps.InfoWindow({
        //     content: "<strong>Oakland</strong>"
        // });
        // markerOakland.addListener("click", () => {
        //     infoOakland.open(map, markerOakland);
        // });
        //
        // // Request directions
        // const request = {
        //     origin: parkac,
        //     destination: kostol,
        //     travelMode: google.maps.TravelMode.WALKING,
        // };

        // directionsService.route(request, (result, status) => {
        //     if (status === "OK") {
        //         directionsRenderer.setDirections(result);
        //
        //         // Extract travel info
        //         const route = result.routes[0].legs[0];
        //         const duration = route.duration.text;
        //         const distance = route.distance.text;
        //
        //         document.getElementById("info").innerHTML =
        //             `<strong>Route Info:</strong><br>Duration: ${duration}<br>Distance: ${distance}`;
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
