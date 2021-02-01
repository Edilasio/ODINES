@extends('index')

@section('content_info')
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <h1>Lamentamos</h1>
    <div class="row"> 
        <div class="row" >
            <div class="content">
                <h5>
                    @if( Auth::user()->estado_id == 2 )
                            O utilizador <i style="color: blue">{{ Auth::user()->email }}</i> está inactivo.
                            <br>Por favor, entre em contacto com o Administrador.
                        @elseif( Auth::user()->estado_id == 6 )
                            O utilizador <i style="color: blue">{{ Auth::user()->email }}</i> tem o estado pendente.
                            <br>Por favor, entre em contacto com o Administrador.   
                    @endif
                </h5>
            </div>
        </div>
        <div>
            <button class="btn btn-default submit">Voltar</button>                                
        </div>
    </div>
    <div class="separator">
        <br />                                    
        <div>
            <h1><i class="fa fa-paw"></i> Orgãos Delegados do INE</h1>
            <p>©2021 Todos Direitos Reservados. ODINES</p>
        </div>
    </div>
</form>
@endsection