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
                                    <a type="button" href="{{ route('aluno.create') }}" class="btn btn-outline-primary">
                                        <i class="fa fa-user-plus"></i> Novo
                                    </a>
                            </div>
                        </div>

                        <div class="col-md-8 font-italic text-right mt-3">
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
                    {{-- <div class="col-md-3">
                        <form action="#" method="get">
                            <input  class="form-control" type="search" name="search" placeholder="Pesquisar">
                            <button class="btn btn-outline-primary" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div> --}}
                    
                    @component('vendor.adminlte.components.tool.datatable',
                            [
                                'id'    => 'table-list-aluno',
                                'heads' => [
                                    'Nome',
                                    'Email',
                                    'Ativo',
                                    'Ações',
                                ],
                            ]
                        )
                        @foreach ($alunos as $aluno)
                            <tr class="text-center">
                                <td>{{ $aluno->name }}</td>
                                <td>{{ $aluno->email }}</td>
                                <td>
                                    @if ($aluno->active == 1)
                                        {{ 'Ativo' }}
                                    @elseif($aluno->active == 0)
                                        {{ 'Inativo' }}
                                    @endif
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('aluno.show', ['id' => $aluno->id]) }}" 
                                        title="{{ 'Detalhes' }}" class="btn btn-outline-warning" 
                                        type="submit"><i class="fa fa-search"></i>
                                    </a>

                                    <a href="{{ route('aluno.update', $aluno->id) }}" 
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
    @section('footer')
        @include('footer')
    @endsection
@endsection
