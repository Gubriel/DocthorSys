
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
        @case($page == 'medicosCreate')

            <!--**********************************
                Scripts
            ***********************************-->
            <!-- Required vendors -->
            <script src="{{ asset('../dev/vendor/global/global.min.js') }}"></script>
            <script src="{{ asset('../dev/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
            <script src="{{ asset('../dev/js/custom.min.js') }}"></script>
            <script src="{{ asset('../dev/js/deznav-init.js') }}"></script>

            <script src="{{ asset('../dev/vendor/jquery-steps/build/jquery.steps.min.js') }}"></script>
            <script src="{{ asset('../dev/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
            <!-- Form validate init -->
            <script src="{{ asset('../dev/js/plugins-init/jquery.validate-init.js') }}"></script>

            <!-- Form Steps -->
            <script src="{{ asset('../dev/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js') }}"></script>

            <script>
                $(document).ready(function(){
                    // SmartWizard initialize
                    $('#smartwizard').smartWizard();
                });
            </script>

            @break
        @case($page == 'medicos')

            <!--**********************************
        Scripts
    ***********************************-->
            <!-- Required vendors -->
            <script src="{{ asset('../dev/vendor/global/global.min.js') }}"></script>
            <script src="{{ asset('../dev/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
            <script src="{{ asset('../dev/vendor/chart.js/Chart.bundle.min.js') }}"></script>
            <script src="{{ asset('../dev/js/custom.min.js') }}"></script>
            <script src="{{ asset('../dev/js/deznav-init.js') }}"></script>

            <!-- Datatable -->
            <script src="{{ asset('../dev/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
            <script>
                (function($) {
                    var table = $('#example5').DataTable({
                        searching: false,
                        paging:true,
                        select: false,
                        //info: false,
                        lengthChange:false

                    });
                    $('#example tbody').on('click', 'tr', function () {
                        var data = table.row( this ).data();

                    });
                })(jQuery);
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