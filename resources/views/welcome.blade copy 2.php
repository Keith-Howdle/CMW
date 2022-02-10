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

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

        <title>Welcome</title>

    </head>

    <body>
        <header>
            <img id="logo" src="{{ asset('/img/logo/Bulkhaulfullwhiteback350wide.jpg') }}">
            <nav id="navbar">
                <ul id= "navlist">
                    <li class="navitems"><a href = "#">Home</a></li>
                    <li class="navitems"><a href = "#">Services</a></li>
                    <li class="navitems"><a href = "#">Containers</a></li>
                    <li class="navitems"><a href = "#">Certification</a></li>
                    <li class="navitems"><a href = "#">Legal</a></li>
                    <li class="navitems"><a href = "#">Contacts</a></li>
                    <li class="navitems"><a href = "bhnet">Login</a></li>
                </ul>
            </nav>
        </header>
        <main>
                <section>
                    <h1>About</h1>
                    <p>Bulkhaul Ltd - International Isotank Operator<br><br>
                        Bulkhaul Limited was established in 1981 and is dedicated to the global transportation of liquids, powders and gases. With consistent annual growth and a fleet of over 23,000 deep sea liquid isotanks, which are 100% owned, Bulkhaul is one of the world's largest independent operators and a market leader in global tank transportation.
                        <br><br>
                        Headquartered in the United Kingdom, we operate in more than 150 countries, through our own strategically-located offices and extensive agency partnerships, giving us a robust presence in every region of the world.
                        <br><br>
                        The Board of Directors and management team combine many years experience in the chemical and global transportation sector, supported by a highly-skilled team of employees, all committed to continued growth and success. Safety plays a crucial role in the movement of hazardous goods and Bulkhaul continuously invests in the training and development of all employees as well as our agency partners.
                        <br><br>
                        Our development and measured growth has always been focused on our core competency of transporting the customer's product around the world in an efficient and seamless manner. In doing so, we have been rewarded by outstanding relationships with the world's premier chemical companies. These organisations set the most demanding operating standards for themselves and their suppliers and recognise that Bulkhaul's drive for quality compliments their own aspirations.
                        <br><br>
                        A worldwide service requires a truly global business - Bulkhaul
                    </p>
                </section>



        </main>
        <hr>
        <footer>

            <p>
                @copy Bulkhaul Ltd <br>
                Updated <script language="Javascript">document.write("" + document.lastModified + "");</script>
            </p>
        </footer>

    </body>
</html>
