<!DOCTYPE html>
<html lang="en">

<head>
    <!-- #title -->
    <x-partials.meta-data />
    <title>  {{ $title == '' ? 'Madinat Makadi Golf' : $title . ' | Madinat Makadi Golf' }}</title>
    <x-partials.style />
    @stack('styleSheet')
    <style>
        .images-rewardes  {
            display: flex; /* Display images in one line */
        }
        .images-rewardes img  {
            width:17%;   
        }
        ul.nav__menu-items > li > a , .nav__uncollapsed-item > a 
        {
            font-size: 14px;
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
