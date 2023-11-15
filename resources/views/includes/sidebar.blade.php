<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    {{--<li><a href="./app-profile.html">Profile</a></li>--}}
                   {{--  <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="./email-compose.html">Compose</a></li>
                            <li><a href="./email-inbox.html">Inbox</a></li>
                            <li><a href="./email-read.html">Read</a></li>
                        </ul>
                    </li>--}}
                    <li><a href="{{ route('index.agenda') }}">Calendar</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Médicos</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('medico.create') }}">Criar</a></li>
                            <li><a href="{{ route('medico.index') }}">Listar</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        <div class="copyright">
            <p><strong>Painel de administração DOCTHORS SYS</strong> © 2020 Todos os direitos reservados</p>
            <p>Feito com ♥ por EQUIPE DOCTHORS SYS</p>
        </div>
    </div>
</div>