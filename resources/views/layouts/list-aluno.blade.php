@extends('adminlte::page')

@section('title', 'Alunos')

@section('content')
    {{-- listagem de usuários --}}
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 mt-1">
                <div class="h1">Alunos</div>
            </div>
            <div class="col-md-8 mt-1 font-italic text-right">
                <a href="{{ route('home') }}"><span class="">Home </span></a>/
                <span class="">Alunos</span>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-12">
                <a type="button" href="{{ route('aluno.create') }}" class="btn btn-outline-primary">
                    <i class="fa-solid fa-plus"></i> Novo
                </a>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-md-12 justify-content">
                @component('vendor.adminlte.components.tool.datatable',
                    [
                        'id'         => 'table-list-aluno',
                        'heads' => [
                            'Nome',
                            'Email',
                            'Projeto',
                            'Faixa',
                            'Ações',
                        ],
                    ])
                    {{-- @foreach ($trs as $tr) --}}
                        <tr>
                            <td scope="row">Renildo</td>
                            <td>renildo@gmail.com</td>
                            <td>Academia</td>
                            <td>Branca</td>
                            <td>btn</td>
                        </tr>
                        <tr>
                            <td scope="row">Renildo</td>
                            <td>renildo@gmail.com</td>
                            <td>Academia</td>
                            <td>Branca</td>
                            <td>btn</td>
                        </tr> 
                    {{-- @endforeach --}}
                    
                @endcomponent
            </div>
        </div>
    </div>
@endsection
