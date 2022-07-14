@extends('adminlte::page')

@section('title', 'Historico de Pagamento')

@section('content')
    {{-- listagem de usuários --}}
    <div class="content-fluid">

        {{-- title --}}
        @component('components.title-header', [
            'title' => 'Histórico de Pagamento',
            'paths' => [
                'path' => [
                    [
                        'name' => 'home',
                        'route' => 'home'
                    ]
                ]
            ],

            'titlePath' => 'Histórico'
        ])
            <a type="button" href="{{ route('historic.create') }}" class="btn btn-outline-primary">
                <i class="fa fa-plus"></i> Novo
            </a>
        @endcomponent

        {{-- registros --}}
        <div class="row p-1">
            <div class="card col-md-12">
                <div class="card-body">

                    @component('vendor.adminlte.components.tool.datatable',
                            [
                                'id'    => 'table-list-historic',
                                'heads' => [
                                    'Nome Aluno',
                                    'Status',
                                    'Data de Pagamento',
                                    'Ações',
                                ],
                            ]
                        )
                        @foreach ($historics as $historic)
                            <tr class="text-center">
                                <td>{{ $historic->aluno_id }}</td>
                                <td>{{ $historic->payment_statuses_id }}</td>
                                <td>{{ $historic->payment_date }}</td>

                                <td class="text-center">
                                    {{-- <a href="{{ route('historic.show', ['id' => $historic->id]) }}"  --}}
                                        <a href="#"
                                        title="{{ 'Detalhes' }}" class="btn btn-outline-warning"
                                        type="submit"><i class="fa fa-search"></i>
                                    </a>

                                    {{-- <a href="{{ route('historic.update', $historic->id) }}"  --}}
                                        <a href="#"
                                        title="{{ 'Editar' }}"
                                        class="btn btn-outline-primary"
                                        type="submit"><i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endcomponent
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    @section('footer')
        @include('footer')
    @endsection
@endsection
