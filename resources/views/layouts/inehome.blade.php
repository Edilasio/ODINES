@extends('layouts.app')

@section('odine')
     {{ $odine->sigla }}
@endsection

@section('page_content')
<div class="row tile_count">
    <div class="col-md-3 col-sm-4 col-xs-5 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> DADG</span>
        <div class="count blue">2 <span class="blue">Investigações</span></div>
        <span class="count_bottom"><i class="blue"> 2 dia </i> Registar a Data</span>
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
@endsection