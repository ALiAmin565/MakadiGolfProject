<!DOCTYPE html>
<html lang="en">

<head>
    <!-- #title -->
    <x-partials.meta-data />
    <title>  {{ $title == '' ? 'Madinat Makadi Golf' : $title . ' | Madinat Makadi Golf' }}</title>
    <x-partials.style />
    @stack('styleSheet')
</head>

<body>

    <x-partials.pre-loader />


    <x-partials.header />



    {{ $slot }}

    <x-partials.footer />

    <x-partials.back-to-top />

    <x-partials.scripts />

</body>

</html>
