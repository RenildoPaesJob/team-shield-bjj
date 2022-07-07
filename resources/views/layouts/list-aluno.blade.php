@extends('adminlte::page')

@section('title', 'Alunos')

@section('content')
    {{-- listagem de usuários --}}
    <div class="content-fluid">
        <div class="row p-1">
            <div class="card col-12 mt-1 mb-1">
                <div class="card-body">
                    <div class="row align-middle">

                        <div class="col-md">
                            <div class="h1">Alunos
                                <span>
                                    <a type="button" href="{{ route('aluno.create') }}" class="btn btn-outline-primary">
                                        <i class="fa-solid fa-plus"></i> Novo
                                    </a>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-8 font-italic text-right">
                            <span>
                                <a href="{{ route('home') }}"><span class="">Home </span></a>/
                                <span class="">Alunos</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-1">
            <div class="card col-md-12">
                <div class="card-body">
                    @component('vendor.adminlte.components.tool.datatable',
                            [
                                'id'    => 'table-list-aluno',
                                'heads' => [
                                    'Nome',
                                    'Email',
                                    'Projeto',
                                    'Faixa',
                                    'status',
                                    'Ações',
                                ],
                            ]
                        )
                        @foreach ($alunos as $aluno)
                            <tr>
                                <td>{{ $aluno->name }}</td>
                                <td>{{ $aluno->email }}</td>
                                <td>{{ $aluno->telphone }}</td>
                                <td>{{ $aluno->belt }}</td>
                                <td>{{ $aluno->status }}</td>
                                <td class="col-md-4">
                                    <a href="#" title="{{ 'Detalhes' }}" class="btn btn-outline-warning" type="submit"><i class="fa fa-search"></i></a>
                                    <a href="#" title="{{ 'Editar' }}" class="btn btn-outline-info" type="submit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" title="{{ 'Excluir' }}" class="btn btn-outline-danger" type="submit"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
    @section('footer')
        @include('footer')
    @endsection
@endsection
