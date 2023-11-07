<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Docthor SYS</title>

    <link rel="icon" type="image/png" sizes="16x16"  href="{{ asset('../dev/favicons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"  href="{{ asset('../dev/favicons/favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('../dev/favicons/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('../dev/favicons/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('../dev/favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('../dev/favicons/apple-touch-icon-76x76.png') }}">
    <link rel="icon" type="image/png" sizes="96x96"  href="{{ asset('../dev/favicons/apple-touch-icon-96x96.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('../dev/favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('../dev/favicons/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('../dev/favicons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('../dev/favicons/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('../dev/favicons/apple-touch-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('../dev/favicons/android-icon-192x192.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" href="{{ asset('../dev/favicons/favicon.ico') }}" type="image/x-icon">
    <link rel="manifest" href="{{ asset('../dev/favicons/site.webmanifest') }}">

    @isset($page)
        @switch($page)
            @case($page == 'index')

                <!-- Favicon icon -->
                <link href="{{ asset('../dev/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet') }}">
                <link rel="stylesheet" href="{{ asset('../dev/vendor/chartist/css/chartist.min.css') }}">
                <link href="{{ asset('../dev/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
                <link href="{{ asset('../dev/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
                <link href="{{ asset('../dev/css/style.css') }}" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

                @break
            @case($page == 'agenda')


                <link href="{{ asset('../dev/vendor/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet">
                <link href="{{ asset('../dev/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
                <link href="{{ asset('../dev/css/style.css') }}" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

                @break
            @default

                <link href="{{ asset('../dev/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet') }}">
                <link rel="stylesheet" href="{{ asset('../dev/vendor/chartist/css/chartist.min.css') }}">
                <link href="{{ asset('../dev/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
                <link href="{{ asset('../dev/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
                <link href="{{ asset('../dev/css/style.css') }}" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


                @break

        @endswitch
    @endisset


</head>