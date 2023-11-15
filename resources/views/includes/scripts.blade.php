
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

            <script src="{{ asset('../dev/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
            <script src="{{ asset('../dev/js/plugins-init/sweetalert.init.js') }}"></script>

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

                    // Evento de envio do formulário
                    $('#cadastroMédico').on('submit', function(e) {
                        e.preventDefault(); // Impede o envio padrão do formulário

                        $.ajax({
                            url: $(this).attr('action'), // URL para onde o formulário será enviado
                            type: 'POST', // Método de envio
                            data: $(this).serialize(), // Dados do formulário
                            success: function(response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Cadastro bem-sucedido',
                                    text: 'Médico cadastrado com sucesso!',
                                }).then(() => {
                                    // Redirecione para a rota 'medico.lista'
                                    window.location.href = "{{ route('medico.index') }}";
                                });
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                // Tratamento de erro
                                if (jqXHR.status === 422) {
                                    // Se houver erros de validação, você pode exibir mensagens de erro
                                    var errors = jqXHR.responseJSON.errors;

                                    // Exiba mensagens de erro específicas, se existirem
                                    if (errors.email) {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Erro ao cadastrar',
                                            text: 'Este e-mail já foi Cadastrado!.', // Mensagem de erro para o campo 'email'
                                        });
                                    } else if (errors.emailLogin) {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Erro ao cadastrar',
                                            text: 'Este e-mail já foi Cadastrado!.', // Mensagem de erro para o campo 'emailLogin'
                                        });
                                    } else {
                                        // Exiba uma mensagem de erro padrão
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Erro ao cadastrar',
                                            text: 'Ocorreu um erro ao processar a solicitação. Tente novamente mais tarde.',
                                        });
                                    }
                                } else {
                                    // Tratamento de erro, se necessário
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Erro ao cadastrar',
                                        text: 'Ocorreu um erro ao processar a solicitação. Tente novamente mais tarde.',
                                    });
                                }
                            }
                        });
                    });
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