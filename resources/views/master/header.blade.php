<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Laraj')</title>

    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/css/app.css" type="text/css">

    @if (Auth::user())
        <style>
            body {
                padding-top: 70px;
            }
        </style>
        @if (isset($page))
            <meta id="page-id" name="page-id" content="{!! $page->id !!}">
            <meta id="csrf-token" name="csrf-token" content="{!! csrf_token() !!}">
        @endif
    @endif

    @if (isset($page) && isset($page->slug))
        <link rel="canonical" href="/{!! $page->slug !!}"/>
    @endif
</head>
<body>

@if (Auth::user())
    @include('partials.adminmenu')
@endif