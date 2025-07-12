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
    <title>Tables</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .tables {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }

        .tables > div{
            border: 1px solid white;

        }

        .tables > div > h2{
            font-size: 2rem;
            text-align: center;
        }

        .tables > div > ul{
            margin: 20px;
        }
    </style>
</head>
<body class="h-full">
    <div class="tables">
    @foreach($tables as $i => $guests)
        <div>
            <h2>Stol {{$i}}</h2>
            <ul>
                @foreach($guests as $guest)
                    <li>{{ $guest->name }}</li>
                @endforeach
            </ul>
        </div>
    @endforeach
    </div>
</body>
