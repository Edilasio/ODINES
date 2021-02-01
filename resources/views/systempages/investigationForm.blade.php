@extends('layouts.app')

@section('odine')
     {{ $odine->sigla }}
@endsection

@section('page_content')
<div class="">
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Nova Designação para Investigação <small>Orgãos Delegado do INE</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="POST" action="{{ route('investigation') }}" class="form-horizontal form-label-left" novalidate>
                        @csrf
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="utilizador">Designação:<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="investigacao" name="designacao" value=""  placeholder="Escreva a Designação da Investigação " required="required" type="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Descrição: </label>
                            <div class="col-md-6 col-sm-6 col-xs-12" >
                                <textarea class="form-control" rows="3" name="descricao" placeholder="Descreva a Descrição da Designação"></textarea>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <a href="" class="btn btn-danger">Cancelar</a>
                                <button id="guardar" type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Lista de Insvestigações <small>Orgaõs Delegados do INE</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nº de Ordem</th>
                                <th>Designação</th>
                                <th>Descrição</th>
                                <th>Acção</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($query as $investigacao)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $investigacao->designacao }}</td>
                                <td>{{ $investigacao->descricao }}</td>
                                <td>
                                    <a id="editar" href="" name="ir" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Editar </font></font></a>
                                    <a href="{{ route('deleteInvest', $investigacao->designacao) }}" class="btn btn-danger btn-xs"> <!-- onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                                        <form id="delete-form" action="{{ route('deleteInvest',$investigacao->id) }}" method="POST" style="display: none;">@method('DELETE') @csrf</form> -->
                                        <i class="fa fa-trash-o"></i><font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;"> Excluir </font></font>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection