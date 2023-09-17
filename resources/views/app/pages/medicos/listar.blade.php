<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Lista de Médicos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">



            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900  relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table id="minha-tabela" class="table-auto w-full text-sm text-left text-gray-800 py-6">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nome</th>
                            <th scope="col" class="px-6 py-3">Nº de Registro</th>
                            <th scope="col" class="px-6 py-3">Especialidade</th>
                            <th scope="col" class="px-6 py-3">Telefone</th>
                            <th scope="col" class="px-6 py-3">E-mail</th>
                            <th scope="col" class="px-6 py-3">CPF</th>
                            <th scope="col" class="px-6 py-3">RG</th>
                            <th scope="col" class="px-6 py-3">Endereço</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($medicos as $medico)
                            <tr class="bg-white border-b border-gray-700">
                                <td class="px-6 py-4">{{ $medico['nome'] }}</td>
                                <td class="px-6 py-4">{{ $medico['registro']}}</td> 
                                <td class="px-6 py-4">{{ $medico['especialidade'] }}</td>
                                <td class="px-6 py-4">{{ $medico['telefone'] }}</td>
                                <td class="px-6 py-4">{{ $medico['email']}}</td>
                                <td class="px-6 py-4">{{ $medico['cpf']}}</td>
                                <td class="px-6 py-4">{{ $medico['rg']}}</td>
                                <td class="px-6 py-4">{{ $medico['endereco']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function() {
            $('#minha-tabela').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json'
                },
                initComplete: function() {
                    // Adiciona classes ao input de busca
                    $('.dataTables_filter input').addClass(
                        'peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50'
                    );

                    // Adiciona classes ao select
                    $('select[name="minha-tabela_length"]').addClass(
                        'peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50'
                    );

                    $('.dataTables_paginate a.paginate_button').addClass(
                        'middle none center rounded-lg bg-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none'
                    ).attr('data-ripple-light', 'true');

                    // Personalização específica para os botões numéricos
                    $('.dataTables_paginate a.paginate_button:not(.previous):not(.next)').addClass(
                        'some-other-class-if-needed'
                    );

                    // Se você quiser diferenciar o botão da página atual, você pode fazer assim:
                    $('.dataTables_paginate .paginate_button.current').addClass(
                        'another-class-for-current-page'
                    );
                }
            });
        });

    </script>
</x-app-layout>
