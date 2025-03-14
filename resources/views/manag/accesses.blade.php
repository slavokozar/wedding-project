<!DOCTYPE html>
<html lang="en" class="h-full">
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
    <title>Accesses</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full">

<div class="min-h-full">

    <div class="py-10">
        <main>
            <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
                <div class="bg-gray-900">
                    <div class="mx-auto max-w-7xl px-4">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                <table class="min-w-full divide-y divide-gray-700">
                                    <thead>
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 pr-3 pl-4 text-left text-sm font-semibold text-white">
                                            Datum
                                        </th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                            Pozvanka
                                        </th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                            Hlavny host
                                        </th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                            kod
                                        </th>

                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                            IP
                                        </th>

                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                            agent
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-800">
                                    @foreach($accesses as $access)
                                        <tr class="even:bg-gray-800">
                                            <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-white ">
                                                {{ $access->created_at }}
                                            </td>

                                            <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-300">
                                                {{ $access->invitation->label }}
                                            </td>
                                            <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-300">
                                                {{ $access->invitation->mainGuest->name }}
                                            </td>
                                            <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-300">
                                                {{ $access->invitation->code }}
                                            </td>
                                            <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-300">
                                                {{ $access->ip_address }}
                                            </td>
                                            <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-300">
                                                {{ $access->agent }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    <!-- More people... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
