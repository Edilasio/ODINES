@extends('index')

@section('content_info')
<form>
    <h1>Seja Bem-Vindo</h1>
    <div class="row"> 
       <!-- <div class="col-md-3 col-sm-3 col-xs-6" >
            <a href="{{ route('login') }}" title="ODINE" style=" background-color: transparent">
                <img src="{{ asset('images/ministerios.png') }}" alt="" style="width: 130px; height: 150px;" />
            </a>
        </div> -->
        <div class="col-md-3 col-sm-3 col-xs-6 col" style="width: 38rem;">
            <a href="{{ route('authenticate') }}" title="INE" style=" background-color: transparent">
                <img src="{{ asset('images/ine.png') }}" alt="" style="width: 150px; height: 150px;"/>
            </a>
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