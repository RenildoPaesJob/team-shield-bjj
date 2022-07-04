@extends('layouts.new-aluno')

@section('input_group_item')

<form action="{{ route("$route") }}" method="post">

    {{-- label --}}
    @isset($labels)
        @foreach ($labels as $label)
            <label for="{{ $id }}" @isset($labelClass) class="{{ $labelClass }}" @endisset>
                {{ $label }}
            </label>
        @endforeach
    @endisset


    {{-- Input --}}
    @isset($inputs)
        @foreach ($inputs as $input)
            <input
                id="{{ $id }}"
                name="{{ $name }}"
                {{-- value="{{ $value }}" --}}
                class="{{ $class }}"
                type="{{ $type }}"
                placeholder="{{ $placeholder }}"
            >
        @endforeach
    @endisset
</form>

<div class="mt-1">
    <div class="col-md-10">
        <button class="btn btn-primary" type="submit">Salvar</button>
        <a href='{{ route("$routeBtnVoltar") }}' class="btn btn-primary" type="submit">Submit form</a>
    </div>
</div>

@endsection
