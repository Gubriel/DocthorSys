<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Docthor SYS</title>

    @isset($page)
        @switch($page)
            @case($page == 'index')

                <!-- Favicon icon -->
                <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('../dev/images/favicon.png') }}">
                <link href="{{ asset('../dev/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet') }}">
                <link rel="stylesheet" href="{{ asset('../dev/vendor/chartist/css/chartist.min.css') }}">
                <link href="{{ asset('../dev/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
                <link href="{{ asset('../dev/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
                <link href="{{ asset('../dev/css/style.css') }}" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

                @break
            @case($page == 'agenda')

                <!-- Favicon icon -->
                <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('../dev/images/favicon.png') }}">

                <link href="{{ asset('../dev/vendor/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet">
                <link href="{{ asset('../dev/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
                <link href="{{ asset('../dev/css/style.css') }}" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

                @break
            @default

                <!-- Favicon icon -->
                <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('../dev/images/favicon.png') }}">
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