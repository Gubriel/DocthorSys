<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Welly - Hospital Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/dev/images/favicon.png') }}">
    <link href="{{ asset('./dev/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet') }}">
    <link rel="stylesheet" href="{{ asset('./dev/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('./dev/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./dev/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./dev/css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    @include('includes.nav')
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Chat box start
    ***********************************-->
   @include('includes.chatbox')
    <!--**********************************
        Chat box End
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    @include('includes.header')
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    @include('includes.sidebar')
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    @yield('content')
    <!--**********************************
        Content body end
    ***********************************-->

    <!--**********************************
        Footer start
    ***********************************-->
    @include('includes.footer')
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('./dev/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('./dev/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('./dev/vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('./dev/js/custom.min.js') }}"></script>
<script src="{{ asset('./dev/js/deznav-init.js') }}"></script>
<script src="{{ asset('/devvendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
<script src="{{ asset('/devvendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<!-- Chart piety plugin files -->
<script src="{{ asset('./dev/vendor/peity/jquery.peity.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset('./dev/vendor/apexchart/apexchart.js') }}"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('./dev/js/dashboard/dashboard-1.js') }}"></script>
<script>
    $(function () {
        $('#datetimepicker1').datetimepicker({
            inline: true,
        });
    });
</script>

</body>
</html>