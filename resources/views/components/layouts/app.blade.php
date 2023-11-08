<!DOCTYPE html>
<html lang="en">

<head>
    <!-- #title -->
    <x-partials.meta-data />
    <title> {{ $title == '' ? 'Madinat Makadi Golf' : $title . ' | Madinat Makadi Golf' }}</title>
    <x-partials.style />
    @stack('styleSheet')
    <style>
        .images-rewardes {
            display: flex;
            /* Display images in one line */
        }

        .images-rewardes img {
            width: 17%;
        }

        ul.nav__menu-items>li>a,
        .nav__uncollapsed-item>a {
            font-size: 16px;
        }
    </style>
    <style>
        /* div.SetPos {
            left: 30%;
        }

        div.eapp-weather-weather-info.jsx-3173546960 {
            width: 600px;
        }

        div.eapp-weather-weather-component>a[href="https://elfsight.com/weather-widget/?utm_source=websites&utm_medium=clients&utm_content=weather&utm_term=makadigolf.test&utm_campaign=free-widget"][style] {
            display: none !important;
        }

        */
        .eapps-widget-toolbar-panel {
            display: none !important;
        }

        .eapps-widget-toolbar-panel-share {
            display: none !important;
        }

        .eapps-widget-toolbar-panel-only-you {
            display: none !important;
        }

        /* @media only screen and (max-width: 424.98px) {
            div.eapp-weather-weather-info.jsx-3173546960 {
                width: 360px;
            }

            div.SetPosMobile {
                left: 0% !important;
            }
        }  */

        .date-info {
            font-size: 18px;
            color: white;
        }

        .day-color {
            color: white;
            font-size: 25px;
            font-weight: 600;
            /* Set the color for the day of the week */
        }
    </style>
</head>

<body>

    <x-partials.pre-loader />


    <x-partials.header />



    {{ $slot }}

    <x-partials.footer :contactUs="$contactUs" />

    <x-partials.back-to-top />

    <x-partials.scripts />

    @stack('scripts')
</body>

</html>
