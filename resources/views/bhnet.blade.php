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

        <title>BHNET</title>

    </head>

<x-intlayout>
    <x-slot name="content">
        <main>
            <section>
                 <h1>BHNET</h1>
                 <h2> Blade Component</h2>
                 <p> Display user ID, Name, logon date & time</p>

            </section>
        </main>
    </x-slot>
</x-intlayout>

