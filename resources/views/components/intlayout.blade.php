<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon  -->
        <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="/img/favicon_io/site.webmanifest">

        <!-- css & sass -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

        <title>WorkShop</title>

    </head>

    <body>
        <header>
            <img id="logo" src="{{ asset('/img/logo/Bulkhaulfullwhiteback350wide.jpg') }}">
            <nav id="navbar">
                <ul id= "navlist">
                    <li class="navitems"><a href = "#">Clients</a></li>
                    <li class="navitems"><a href = "#">Suppliers</a></li>
                    <li class="navitems"><a href = "twrkshp">Maintenance</a></li>
                    <li class="navitems"><a href = "#">Tariffs</a></li>
                    <li class="navitems"><a href = "#">Legal</a></li>
                    <li class="navitems"><a href = "#">Planning</a></li>
                    <li class="navitems"><a href = "#">Log Out</a></li>
                </ul>
            </nav>
        </header>

        {{ $content }}


        <hr>
        <footer>

            <p>
                @copy Bulkhaul Ltd <br>
                Updated <script language="Javascript">document.write("" + document.lastModified + "");</script>
            </p>
        </footer>

    </body>
</html>
