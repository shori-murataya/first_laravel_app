<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | MyFirstRalavelApp</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
      body {background-color: #1a202c; font-family: 'Nunito';color: white;}
    </style>
  </head>
  <body>
    @yield('header')
    @yield('errors')
    @yield('main')
    <div id="app">
      @yield('container')
    </div>
    @yield('footer')
    <script src="{{ mix('js/app.js') }}"></script> 
  </body>
</html>