@extends('index')

@section('content_info')
<form method="POST" action="{{ route('recoverypwd') }}">
  @csrf
    <h1>Alterar Senha</h1>
    <div class="item form-group">
      <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ $email ?? old('email') }}" placeholder="Escreva o seu email" required autocomplete="email" />
    </div>
    <div class="item form-group">
      <input type="password" id="subject" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Escreva a nova senha" required autocomplete="new-password">
    </div>
    <div class="item form-group">
      <input type="password" id="subject" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Repita a nova senha" required autocomplete="new-password">
    </div>                            
    <div>
        <button Type="submit" class="btn btn-default submit" >Alterar</button>                                
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