@extends('index')

@section('content_info')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <h1>LOGIN</h1>
    <div>
        <input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="exemplo@exemplo.com" required="" />
    </div>
    <div>
        <input id="password" class="form-control" type="password" name="password" placeholder="Senha" required="" />
    </div>
    <div>
        <button Type="submit" class="btn btn-default submit">Entrar</button>
        
            <a class="reset_pass" href="{{ route('recoveryForm') }}">Perdeu a Senha?</a>
        
    </div>

    <div class="clearfix"></div>

    <div class="separator">
        <div class="clearfix"></div>
        <br />

        <div>
        <h1><i class="fa fa-paw"></i> Orgãos Delegados do INE</h1>
        <p>©2021 Todos Direitos Reservados. ODINES</p>
        </div>
    </div>
</form>
@endsection