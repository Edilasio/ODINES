@extends('layouts.app')

@section('odine')
     {{ $odine->sigla }}
@endsection

@section('page_content')
<!-- top tiles -->
<div class="row tile_count">
    <div class="col-md-3 col-sm-4 col-xs-5 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> DADG</span>
        <div class="count green">2 <span class="green">Investigações</span></div>
        <span class="count_bottom"><i class="green"> 2 dia </i> Registar a Data</span>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-5 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> DGAs</span>
        <div class="count blue">2 <span class="blue">Investigações</span></div>
        <span class="count_bottom"><i class="blue"> 2 dia </i> Apreciacão do Trabalho</span>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-5 tile_stats_count">
        <span class="count_top"><i class="fa fa-clock-o"></i> Ponto Focal</span>
        <div class="count blue">7 <span class="blue">Investigações</span></div>
        <span class="count_bottom"><i class="blue"> 2 dias </i> Parecer Tecnico</span>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-5 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> DID</span>
        <div class="count blue">5 <span class="blue">Investigações</span></div>
        <span class="count_bottom"><i class="blue">34 dias</i> Publicações</span>
    </div>
</div>
<!-- /top tiles -->

<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Analise de Planos</h3>
        </div>

        <div class="title_right">
            <div class="col-md-8 col-sm-8 col-xs-12 form-group pull-right top_search">
                <select class="select2_single form-control" tabindex="-5" >
                    <option>Todos Ministerios</option>
                    <option value="1">MINSA</option>
                    <option value="2">MED</option>
                </select>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Lista de Planos à Analisar<small>Orgãos Delegados do INE</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>N. Ordem</th>
                                <th>Designação da Investigação</th>
                                <th>Ministerio</th>
                                <th>Visualizar</th>
                                <th>Exportar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Estudo Sobre o turismo</td>
                                <td>MINSA</td>
                                <td class="last">
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Visualizar </font></font></a>
                                </td>
                                <td class="last">
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-file-word-o"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> DOCX </font></font></a>
                                    <a href="#" class="btn btn-success btn-xs"><i class="fa fa-file-excel-o"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> XLSX </font></font></a>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Estudo Sobre o turismo</td>
                                <td>MINSA</td>
                                <td class="last">
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Visualizar </font></font></a>
                                </td>
                                <td class="last">
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-file-word-o"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> DOCX </font></font></a>
                                    <a href="#" class="btn btn-success btn-xs"><i class="fa fa-file-excel-o"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> XLSX </font></font></a>
                                </td>

                            </tr>
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
                        <li>
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="clearfix"></div>
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
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="even">
                                    <td class=" ">1</td>
                                    <td class=" ">B2223</td>
                                    <td class=" ">2.4.5.3</td>
                                    <td class=" ">Inquerito Mensal as Agencias de viagens e turismo</td>
                                    <td class=" ">Recolha, tratamento, analise e difusão de dados.</td>
                                    <td class=" ">GEPE</td>
                                    <td class=" ">Recenseamento</td>
                                    <td class=" ">350</td>
                                    <td class=" ">16</td>
                                    <td class=" ">2021</td>
                                    <td class=" ">Mensal</td>
                                    <td class=" ">LN CI</td>
                                    <td class=" ">Agencia de V. T.</td>
                                    <td class=" ">Provincia</td>
                                    <td class=" ">10 Setembro 2021</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tabela de Custos <small>Designação da Investigação</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="clearfix"></div>
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
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="even">
                                    <td class=" ">1</td>
                                    <td class=" ">B2223</td>
                                    <td class=" ">2.4.5.3</td>
                                    <td class=" ">Inquerito Mensal as Agencias de viagens e turismo</td>
                                    <td class=" ">21,1</td>
                                    <td class=" ">21,1</td>
                                    <td class=" ">21,1</td>
                                    <td class=" ">21,1</td>
                                    <td class=" ">21,1</td>
                                    <td class=" ">21,1</td>
                                    <td class=" ">21,1</td>
                                    <td class=" ">21,1</td>
                                    <td class=" ">21,1</td>
                                    <td class=" ">21,1</td>
                                    <td class=" ">21,1</td>
                                    <td class=" ">21,1</td>
                                    <td class=" ">21,1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>

        </div>
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tabela de Difusão <small>Designação da Investigação</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="clearfix"></div>
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
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="even">
                                    <td class=" ">1</td>
                                    <td class=" ">2.4.3</td>
                                    <td class=" ">Inquerito Mensal as Agencias de viagens e turismo</td>
                                    <td class=" ">Anuário</td>
                                    <td class=" ">Recolha, tratamento, analise e difusão de dados sobre a actividade.</td>
                                    <td class=" ">GEPE/MINHOTUR</td>
                                    <td class=" ">2020</td>
                                    <td class=" ">Anual</td>
                                    <td class=" ">30 de Março de 2021</td>
                                    <td class=" "> </td>
                                    <td class=" "> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection