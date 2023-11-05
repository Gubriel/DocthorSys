
@isset($page)

    @switch($page)

        @case($page == 'index')
            <script src="{{ asset('../dev/vendor/global/global.min.js') }}"></script>
            <script src="{{ asset('../dev/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
            <script src="{{ asset('../dev/vendor/chart.js/Chart.bundle.min.js') }}"></script>
            <script src="{{ asset('../dev/js/custom.min.js') }}"></script>
            <script src="{{ asset('../dev/js/deznav-init.js') }}"></script>
            <script src="{{ asset('../dev/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
            <script src="{{ asset('../dev/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
            <!-- Chart piety plugin files -->
            <script src="{{ asset('../dev/vendor/peity/jquery.peity.min.js') }}"></script>

            <!-- Apex Chart -->
            <script src="{{ asset('../dev/vendor/apexchart/apexchart.js') }}"></script>

            <!-- Dashboard 1 -->
            <script src="{{ asset('../dev/js/dashboard/dashboard-1.js') }}"></script>
            <script>
                $(function () {
                    $('#datetimepicker1').datetimepicker({
                        inline: true,
                    });
                });
            </script>

            @break
        @case($page == 'agenda')

            <!-- Required vendors -->
            <script src="{{ asset('../dev/vendor/global/global.min.js') }}"></script>
            <script src="{{ asset('../dev/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
            <script src="{{ asset('../dev/js/custom.min.js') }}"></script>
            <script src="{{ asset('../dev/js/deznav-init.js') }}"></script>

            <!--removeIf(production)-->
            <script src="{{ asset('../dev/vendor/jqueryui/js/jquery-ui.min.js') }}"></script>
            <script src="{{ asset('../dev/vendor/moment/moment.min.js') }}"></script>

            <script src="{{ asset('../dev/vendor/fullcalendar/js/fullcalendar.min.js') }}"></script>
            <script src="{{ asset('../dev/js/plugins-init/fullcalendar-init.js') }}"></script>

            @break
        @default
            <script src="{{ asset('../dev/vendor/global/global.min.js') }}"></script>
            <script src="{{ asset('../dev/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
            <script src="{{ asset('../dev/vendor/chart.js/Chart.bundle.min.js') }}"></script>
            <script src="{{ asset('../dev/js/custom.min.js') }}"></script>
            <script src="{{ asset('../dev/js/deznav-init.js') }}"></script>
            <script src="{{ asset('../dev/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
            <script src="{{ asset('./dev/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
            <!-- Chart piety plugin files -->
            <script src="{{ asset('../dev/vendor/peity/jquery.peity.min.js') }}"></script>

            <!-- Apex Chart -->
            <script src="{{ asset('../dev/vendor/apexchart/apexchart.js') }}"></script>

            <!-- Dashboard 1 -->
            <script src="{{ asset('../dev/js/dashboard/dashboard-1.js') }}"></script>
            <script>
                $(function () {
                    $('#datetimepicker1').datetimepicker({
                        inline: true,
                    });
                });
            </script>

            @break

    @endswitch
@endisset