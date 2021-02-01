@extends('index')

@section('content_info')
<form method="POST" action="{{ route('password.email') }}">
    <h1>Recuperar Senha</h1>
    <div class="row">
        <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" :value="old('email')" placeholder="Escreva o seu email" required autocomplete="email" />
    </div>                            
    <div>
        <button Type="submit" class="btn btn-default submit" >Recuperar</button>                                
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