<div class="row mt-1 justify-content-md-center">
    <div class="col-md-8">
        <form action="{{ '' ?? route($routes) }}" 
            method="{{ $method ?? 'post' }}">
            {{-- <form action="{{ route('aluno.store') }}" method="post"> --}}
            @csrf
            <div class="mb-1">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ex. Maria da Silva" value="{{ $nameValue ?? old('name') }}">
                {{-- {{ old('name') }} --}}
            </div>
            <div class="mb-1">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="exemple@gmail.com" value="{{ $emailValue ?? old('email') }}">
            </div>
            <div class="mb-1">
                <label for="celular" class="form-label">Celular</label> <i class="fa-brands fa-whatsapp"></i>
                <input type="text" class="form-control" id="name" name="telphone" placeholder="Celular" value="{{ $telphoneValue ?? old('telphone') }}">
            </div>
            <div class="mb-1">
                <label for="faixa" class="form-label">Faixa</label>
                <input type="text" class="form-control" id="faixa" name="belt" placeholder="Preta" value="{{ $beltValue ?? old('belt') }}">
            </div>
            <div class="mb-1">
                <label for="type" class="form-label">Tipo</label> <br>
                <input type="radio" class="radio-control" id="ativo" name="type" value="1" checked> Academia
                <input type="radio" class="radio-control" id="ativo" name="type" value="0"> Projeto Social
            </div>
            <div class="mb-1">
                <label for="ativo" class="form-label">Ativo</label> <br>
                <input type="radio" class="radio-control" id="ativo" name="active" value="1" checked> Sim
                <input type="radio" class="radio-control" id="ativo" name="active" value="0"> Não
            </div>

            <button class="btn btn-outline-success" type="submit">Salvar</button>
            <a href="{{ route('aluno.index') }}" class="btn btn-outline-danger">Voltar</a>
        </form>
    </div>
</div>