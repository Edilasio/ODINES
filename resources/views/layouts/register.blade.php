@extends('layouts.app')

@section('odine')
     {{ $query->sigla }}
@endsection

@section('page_content')
<div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Registrar Utilizador <small>Orgãos Delegado do INE</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="POST" action="{{ route('addUser') }}" class="form-horizontal form-label-left" novalidate>
                        @csrf
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="primeiro_nome">Primeiro Nome: <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="name" placeholder="Escreva o Primeiro Nome" required="" class="form-control col-md-7 col-xs-12" />
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="ultimo_nome">Último Nome: <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="lastname" placeholder="Escreva o Último Nome" required="" class="form-control col-md-7 col-xs-12" />
                            </div>
                        </div>                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" id="email" name="email" placeholder="Escreva o Seu Email" required="" class="form-control col-md-7 col-xs-12" />
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Senha <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" id="password" name="password" placeholder="Escreva a Sua Senha" required="" class="form-control col-md-7 col-xs-12" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Odine: * </label>
                            <div class="col-md-6 col-sm-6 col-xs-12" >
                                <select class="select2_single form-control" tabindex="-1" name="odine">                                    
                                    <option>Especifique o ODINE em que pertence</option>
                                    @foreach($odines as $odine)
                                        <option value="{{ $odine->sigla }}">{{ $odine->sigla }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Utilizador: * </label>
                            <div class="col-md-6 col-sm-6 col-xs-12" >
                                <select class="select2_single form-control" tabindex="-1" name="rol">
                                    <option>Especifique o tipo de utilizador</option>
                                    @foreach($rols as $rol)
                                        <option value="{{ $rol->designacao }}">{{ $rol->designacao }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <a href="{{ route('index') }}" class="btn btn-danger">Cancelar</a>
                                <!-- <button class="btn btn-success">Guardar</button> -->
                                <button class="btn btn-success">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection