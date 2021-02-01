@extends('layouts.app')

@section('odine')
     {{ $odine->sigla }}
@endsection

@section('page_content')
<div class="">
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Editar Utilizador <small>Orgãos Delegado do INE</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="GET" action="{{ route('editProfile') }}" class="form-horizontal form-label-left" novalidate>
                        @csrf
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="primeiro_nome">Primeiro Nome: <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="ultimo_nome">Último Nome: <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control col-md-7 col-xs-12"  >
                                </div>
                            </div>                        
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email: <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="email" value="{{ $user->email }}" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="senha">Senha: <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="password" value="{{ $user->password }}" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <form>                                
                                <small>Foto Perfil</small>                                
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input id="imageUpload" type='file' name="foto" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview" style="background-image: url({{ asset('images/user.png')}});">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <a href="{{ route('index') }}" class="btn btn-danger">Cancelar</a>
                                <button class="btn btn-success">Atualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection