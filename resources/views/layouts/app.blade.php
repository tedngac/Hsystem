<!DOCTYPE HTML>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>H System</title>

    <link href="{{ URL::asset('css/bootstrap-theme-paper.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap-datepicker3.min.css') }}" rel="stylesheet">

</head>

<body>

@include('includes.navbar')

@yield('content')

<script src="{{ URL::asset('js/jquery-2.1.4.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>

@yield('script')

</body>

</html>