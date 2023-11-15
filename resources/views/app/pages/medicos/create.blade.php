@extends('layouts.app')

@section('content')

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <h4>Cadastro Médico</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Medicos</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Create</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Etapa 1</h4>
                        </div>
                        <div class="card-body">
                            <div id="smartwizard" class="form-wizard order-create">
                                <ul class="nav nav-wizard">
                                    <li><a class="nav-link" href="#wizard_Service">
                                            <span>1</span>
                                        </a></li>
                                    <li><a class="nav-link" href="#wizard_Time">
                                            <span>2</span>
                                        </a></li>
                                </ul>
                                <form action="{{ route('medico.store') }}" id="cadastroMédico">
                                    @csrf
                                    <div class="tab-content">
                                    <div id="wizard_Service" class="tab-pane" role="tabpanel">
                                        <div class="row">

                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Nome*</label>
                                                    <input type="text" name="nome" class="form-control" placeholder="Medico Exemplo" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">CRM*</label>
                                                    <input type="text" name="crm" class="form-control" placeholder="4403" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">E-mail*</label>
                                                    <input type="email" name="email" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="example@example.com.com" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Telefone*</label>
                                                    <input type="text" name="telefone" class="form-control" placeholder="(+55) 46 9 9900-0000" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label class="text-label">Endereço*</label>
                                                    <input type="text" name="endereco" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="wizard_Time" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Email Login*</label>
                                                    <input type="email" name="emailLogin" class="form-control" id="emailLogin" aria-describedby="inputGroupPrepend2" placeholder="example@example.com.com" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Senha*</label>
                                                    <input type="password" name="password" class="form-control" placeholder="Digite sua Senha">

                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Confirme sua Senha*</label>
                                                    <input type="password" name="confirmPassword" class="form-control" placeholder="Confirme sua Senha">
                                                </div>
                                            </div>

                                            <!-- Botão de envio -->
                                            <div class="col-lg-12 mb-2">
                                                <button type="submit" class="btn btn-primary">Enviar</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->

@endsection