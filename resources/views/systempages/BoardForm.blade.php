@extends('layouts.app')

@section('odine')
     {{ $odine->sigla }}
@endsection

@section('page_content')
<div class="">

    <div class="page-title">
        <div class="title_left">
            <h3>Preencher Insvestigação</h3>
        </div>

        <div class="title_right">
            <div class="col-md-10 col-sm-10 col-xs-12 form-group pull-right top_search">
                <select class="select2_single form-control" tabindex="-5" name="investigacao" >
                    <option>Seleccione a Designação da Investigação</option>
                    @foreach($query as $investigacao)
                        <option value="{{ $investigacao->designacao }}">{{ $investigacao->designacao }}</option>
                    @endforeach                    
                </select>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <form method="POST" action="{{ route('boards') }}" class="form-horizontal form-label-left input_mask">
            @csrf
            <div class="col-lg-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Quadro de Actividades<small>Orgãos Delegado do INE</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Código ENDE: * </label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <select class="select2_single form-control" tabindex="-1" name="ende">
                                        <option>Descreva o código ENDE</option>
                                        <option value="B2223">B2223-Inquerito Mensal</option>
                                        <option value="B2224">B2224-Censo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Código CAEA: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <select class="select2_single form-control" tabindex="-1" name="caea">
                                        <option>Descreva o código CAEA</option>
                                        <option value="2453">2453-Inquerito Mensal</option>
                                        <option value="2451">2451-Censo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Designação: * </label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="designacao1" placeholder="Descreva a designação">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Descrição: * </label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <textarea class="form-control" rows="2" name="descricao1" placeholder="Descreva a descrição"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Entidade: * </label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <select class="select2_single form-control" tabindex="-1" name="odines1" >
                                        <option>Descreva a Entidade</option>
                                        @foreach($ministerios as $min1)
                                            <option value="{{ $min1->sigla }}">{{ $min1->sigla }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Operação: * </label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <select class="select2_single form-control" tabindex="-1" name="operacao">
                                        <option>Descreva o Tipo de Operação Estatística</option>
                                        <option value="Recenseamento">Recenseamento</option>
                                        <option value="Inquérito Amostral">Inquérito Amostral</option>
                                        <option value="Estudo Estatístico">Estudo Estatístico </option>
                                        <option value="Estudo Analítico">Estudo Analítico </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nº. Unidades: </label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" name="unidade" class="form-control" placeholder="Descreva o Número de Unidades Observadas">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nº. Variáveis: </label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" name="variavel" class="form-control" placeholder="Descreva o Número de Variáveis Observadas">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Referência.: * </label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" name="referencia1" class="form-control" placeholder="Descreva o Período de Referência">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Periodicidade: * </label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <select class="select2_single form-control" tabindex="-1" name="periodicidade1">
                                        <option value="">Seleccione a Periodicidade</option>
                                        <option value="Anual">Anual</option>
                                        <option value="Bienal">Bienal</option>
                                        <option value="Decenal">Decenal</option>
                                        <option value="Mensal">Mensal</option>
                                        <option value="Semestral">Semestral</option>
                                        <option value="Trienal">Trienal</option>
                                        <option value="Quadrienal">Quadrienal</option>
                                        <option value="Quinquenal">Quinquenal</option>
                                        <option value="Quinzenal">Quinzenal</option>
                                        <option value="Não periódica">Não periódica</option>
                                    </select>
                                </div>                                
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Justificação: * </label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="just" class="flat" > CI – Compromissos Internacionais (ex: ODM, FMI) 
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="just"  class="flat"> CR – Compromissos Regionais (ex: SADC)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="just" class="flat" > LN – Legislação Nacional
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="just" class="flat" > NN – Necessidade Nacional identificada no âmbito do SEN ou de utilizadores institucionais
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">U. Observação: * </label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="observacao" placeholder="Descreva a Unidade de Observação">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Geográfica: * </label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <select class="select2_single form-control" tabindex="-1" name="geografia">
                                        <option>Descreva o Nível de Desagregação Geográfica</option>
                                        <option value="Aldeia">Aldeia</option>
                                        <option value="Bairro">Bairro</option>
                                        <option value="Comuna">Comuna</option>
                                        <option value="Município">Município</option>
                                        <option value="Província">Província</option>
                                        <option value="País">País</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Disponibilização: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="date" class="form-control" name="datadisp" placeholder="Descreva a Data de Disponibilização">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!---------------------- SEGUNDA QUADRO -------------------------------------->
            <div class="col-lg-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Quadro de Custos<small>Orgãos Delegado do INE</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <div class="x_title">
                                <small>Custos Físicos Directos de Pessoal (P/M)</small>

                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Direcção e Chefia: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="chefia1" placeholder="Descreva o Custo Físico da Direcção e Chefia">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Técnico Superior: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="tecsup1" placeholder="Descreva o Custo Físico do Técnico Superior">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Técnico: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="tecnico1" placeholder="Descreva o Custo Físico do Técnico">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Técnico Médio: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="tecmed1" placeholder="Descreva o Custo Físico do Técnico Médio">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Administrativos e Outros: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="custadmin1" placeholder="Descreva o Custo Físico dos Administrativos e Outros">
                                </div>
                            </div>
                            <div class="x_title">
                                <small>Outros Custos Financeiros Directos (Kwanzas)</small>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Outros Custos Directos: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="custodirecto" placeholder="Descreva Outros Custos Financeiros Directos">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <div class="x_title">
                                <small>Custos Físicos Financeiros Directos de Pessoal (1000 Kwanzas)</small>

                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Direcção e Chefia: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="chefia2" placeholder="Descreva o Custo Físico da Direcção e Chefia">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Técnico Superior: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="tecsup2" placeholder="Descreva o Custo Físico do Técnico Superior">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Técnico: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="tecnico1" placeholder="Descreva o Custo Físico do Técnico">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Técnico Médio: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="tecmed2" placeholder="Descreva o Custo Físico do Técnico Médio">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Administrativos e Outros: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="custadmin2" placeholder="Descreva o Custo Físico dos Administrativos e Outros">
                                </div>
                            </div>
                            <div class="x_title">
                                <small>Outros Custos Financeiros Indirectos (Kwanzas)</small>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Outros Custos Indirectos: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="custoind" placeholder="Descreva Outros Custos Financeiros Indirectos">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!---------------------- TERCEIRO QUADRO -------------------------------------->
            <div class="col-lg-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Quadro de Difusão<small>Orgãos Delegado do INE</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Designação da Publicação: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="designacao2" placeholder="Descreva a Designação da Publicação">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Publicação: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <select class="select2_single form-control" tabindex="-1" name="publicacao" >
                                        <option>Descreva o Tipo de Publicação</option>
                                        <option value="AE">AE - Anuário Estatístico</option>
                                        <option value="B">B - Boletim </option>
                                        <option value="FIR">FIR - Folha de Informação Rápida (trimestral, mensal, quinzenal) </option>
                                        <option value="NI">NI - Nota de Imprensa </option>
                                        <option value="EE">EE - Estudo estatístico  </option>
                                        <option value="O">O - Outro tipo  </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Descrição: * </label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <textarea class="form-control" rows="2" name="descricao2" placeholder="Descreva a Descrição da Publicação"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Entidade: * </label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <select class="select2_single form-control" tabindex="-1" name="odines2">
                                        <option>Descreva a Entidade da Publicação</option>
                                        @foreach($ministerios as $min2)
                                            <option value="{{ $min2->sigla }}">{{ $min2->sigla }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Período de Referência: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="referencia2" placeholder="Descreva o Período de Referência">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Periodicidade: * </label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <select class="select2_single form-control" tabindex="-1" name="periodicidade2">
                                        <option value="">Seleccione a Periodicidade</option>
                                        <option value="Anual">Anual</option>
                                        <option value="Bienal">Bienal</option>
                                        <option value="Decenal">Decenal</option>
                                        <option value="Mensal">Mensal</option>
                                        <option value="Semestral">Semestral</option>
                                        <option value="Trienal">Trienal</option>
                                        <option value="Quadrienal">Quadrienal</option>
                                        <option value="Quinquenal">Quinquenal</option>
                                        <option value="Quinzenal">Quinzenal</option>
                                        <option value="Não periódica">Irregular</option>
                                    </select>
                                </div>  
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Colocação no Site: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="date" class="form-control" name="site" placeholder="Descreva a Data de Colocação no Site">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Disponibilização em Papel: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="date" class="form-control" name="papel" placeholder="Descreva a Data da Disponibilização em Papel">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Custo de Imprensão: *</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" >
                                    <input type="text" class="form-control" name="imprensao" placeholder="Descreva o Custo de Imprensão">
                                </div>
                            </div>
                        </div>
                        <div class="form-group"></div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
                                <a href="{{ route('index') }}" type="button" class="btn btn-danger">Cancelar</a>
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>





        </form>
    </div>
</div>
@endsection