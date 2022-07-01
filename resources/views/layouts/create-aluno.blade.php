@extends('adminlte::page')

@section('title', 'Home')

@section('content')
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
                @endcomponent
                {{-- <table class="table table-striped table-hover  table-inverse table-responsive" style="border-radius: 10px 10px 0px 0px">
                    <thead class="table-dark">
                        <tr>
                            <th class="col-md-4">Nome</th>
                            <th class="col-md-3">Email</th>
                            <th class="col-md-3">Projeto</th>
                            <th class="col-md-3">Faixa</th>
                            <th class="col-md-3">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
                </table> --}}
            </div>
        </div>

    </div>
@endsection
