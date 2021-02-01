@extends('layouts.app')

@section('odine')
     {{ $odine->sigla }}
@endsection

@section('page_content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Visualizar Insvestigações <small>Orgãos Delegados do INE</small></h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Investigações à Enviar<small>Orgãos Delegados do INE</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>N. Ordem</th>
                                <th>Designação da Investigação</th>
                                <th>Status</th>
                                <th>Visualizar</th>
                                <th>Enviar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($query as $investigacao)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $investigacao->designacao }}</td>
                                    <td>
                                        @if( $investigacao->estado == 'Pendente')
                                            <span class="label label-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pendente</font></font></span>
                                            @elseif( $investigacao->estado == 'Concluido')
                                                <span class="label label-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Concluido</font></font></span>
                                            @elseif( $investigacao->estado == 'Rejeitado')
                                                <span class="label label-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rejeitado</font></font></span>
                                        @endif
                                    </td>
                                    <td class="last">
                                        <a id="info" href="{{ route('showInvestigation') }}" class="btn btn-primary btn-xs"> <!-- onclick="event.preventDefault(); document.getElementById('ifo').;"> -->
                                        <i class="fa fa-folder"></i><font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;"> Visualizar </font></font></a>
                                    </td>
                                    <td class="last">
                                        <a href="#" class="btn btn-success btn-xs"><i class="fa fa-send-o"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Enviar </font></font></a>
                                    </td>
                                    <td class="last">
                                        <a href="{{ route('deleteInvest', $investigacao->designacao) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Excluir </font></font></a>
                                    </td>
                                </tr>
                            @endforeach                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        
        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12 col-xs-12 data">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tabela de Actividades <small>Designação da Investigação</small></h2>
                    <ul class="nav navbar-right panel_toolbox" >
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    
                    <div class="table-responsive">
                        <table class="table table-bordered jambo_table bulk_action">
                            <thead>
                                <tr class="headings">

                                    <th class="column-title">Nº. </th>
                                    <th class="column-title">Código ENDE</th>
                                    <th class="column-title">Código CAEA</th>
                                    <th class="column-title">Designação</th>
                                    <th class="column-title">Descrição</th>
                                    <th class="column-title">Entidade </th>
                                    <th class="column-title">Tipo de Operação Estatística </th>
                                    <th class="column-title">Nº Unidades Observadas </th>
                                    <th class="column-title">Nº Variaveis Observadas </th>
                                    <th class="column-title">Período de Referência </th>
                                    <th class="column-title">Periodicidade </th>
                                    <th class="column-title">Justificação </th>
                                    <th class="column-title">Unidade de Observação </th>
                                    <th class="column-title">Nível de Desagregação Geográfica </th>
                                    <th class="column-title">Disponibilização ao Público </th>
                                    <th class="column-title no-link last"><span class="nobr">Acção</span>
                                    </th>
                                    <th class="bulk-actions" colspan="7">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                              
                            </tbody>
                        </table>
                    </div>
                    
                    <br/>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Comentario da Tabela Actividade: </label>
                    <textarea class="form-control" rows="2" placeholder="Escreva o seu comentario referente a tabela de actividade"></textarea>

                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tabela de Custos <small>Designação da Investigação</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">

                    <div class="table-responsive">
                        <table class="table table-bordered jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">Nº. </th>
                                    <th class="column-title">Código ENDE</th>
                                    <th class="column-title">Código CAEA</th>
                                    <th class="column-title">Designação</th>
                                    <th class="column-title">DC</th>
                                    <th class="column-title">TS </th>
                                    <th class="column-title">T</th>
                                    <th class="column-title">TM</th>
                                    <th class="column-title">Ad/Outros</th>
                                    <th class="column-title">DC</th>
                                    <th class="column-title">TS </th>
                                    <th class="column-title">T</th>
                                    <th class="column-title">TM</th>
                                    <th class="column-title">Ad/Outros</th>
                                    <th class="column-title">Outros Custos Financeiros Directos(Kz)</th>
                                    <th class="column-title">Custos Financeiros Indirectos(Kz)</th>
                                    <th class="column-title">Custo Total (1000 Kz)</th>
                                    <th class="column-title no-link last"><span class="nobr">Acção</span>
                                    </th>
                                    <th class="bulk-actions" colspan="7">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                             
                            </tbody>
                        </table>
                    </div>
                    
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Comentario da Tabela Custo: </label>
                    <textarea class="form-control" rows="2" placeholder="Escreva o seu comentario referente a tabela de custo"></textarea>
                </div>
            </div>
            
        </div>

        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tabela de Difusão <small>Designação da Investigação</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">

                    <div class="table-responsive">
                        <table class="table table-bordered jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">Nº. </th>
                                    <th class="column-title">Código CAEA</th>
                                    <th class="column-title">Designação da Publicação</th>
                                    <th class="column-title">Tipo de Publicação</th>
                                    <th class="column-title">Descrição </th>
                                    <th class="column-title">Entidade</th>
                                    <th class="column-title">Período de Referência</th>
                                    <th class="column-title">Periodicidade</th>
                                    <th class="column-title">Data de Colocação no Site</th>
                                    <th class="column-title">Data de Disponibilização em Papel </th>
                                    <th class="column-title">Custo de Impressão (Kw) </th>
                                    <th class="column-title no-link last"><span class="nobr">Acção</span>
                                    </th>
                                    <th class="bulk-actions" colspan="7">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                             
                            </tbody>
                        </table>
                    </div>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Comentario da Tabela Difusão: </label>
                    <textarea class="form-control" rows="2" placeholder="Escreva o seu comentario referente a tabela de difusão"></textarea>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection