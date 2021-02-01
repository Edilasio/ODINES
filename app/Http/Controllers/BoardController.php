<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investigacao;
use App\Models\Actividade;
use App\Models\Difusao;
use App\Models\Custo;

class BoardController extends Controller
{
    public function info($request){
        
        //$idOdine = Auth::user()->odine_id;
        $idInvest = Investigacao::getId($request);

        //Actividade
        $query1 = Investigacao::where('investigacaos.id',$idInvest)
                    ->join('publicados','publicados.investigacao_id','=','investigacaos.id')                        
                    ->join('odines','odines.id','=','publicados.odines_id')
                    ->join('actividades','actividades.investigacao_id','=','investigacaos.id')
                    ->select('actividades.ende as ende','actividades.caea as caea','actividades.designacao as designacao',
                            'actividades.descricao as descricao','actividades.entidade as odine','actividades.estatistica as estatistica',
                            'actividades.unidade_observacao as unidade','actividades.variavel_observada as variavel',
                            'actividades.periodo_referencia as referencia','actividades.periocidade as periocidade','actividades.justificacao as justificacao',
                            'actividades.unidade_observacao as observacao','actividades.nivel_desag_geografica as geografia',
                            'actividades.data_disp_publico as data')
                    ->get();

        $query2 = Investigacao::where('investigacaos.id',$idInvest)
                    ->join('publicados','publicados.investigacao_id','=','investigacaos.id')                        
                    ->join('odines','odines.id','=','publicados.odines_id')
                    ->join('custos','custos.investigacao_id','=','investigacaos.id')
                    ->select('custos.ende as ende','custos.caea as caea','custos.designacao as designacao',
                            'custos.dc_custo_fisico as dc','custos.ts_custo_fisico as ts','custos.t_custo_fisico as t',
                            'custos.tm_custo_fisico as tm','custos.ad_outro_custo_fisico as ad_fisico',
                            'outro_custo_financeiro_directo as c_directo','custos.dc_custo_financeiro as dc_f',
                            'custos.ts_custo_financeiro as ts_f','custos.t_custo_financeiro as t_f',
                            'custos.tm_custo_financeiro as tm_f','custos.ad_outro_custo_financeiro as ad_financeiro',
                            'outro_custo_financeiro_ind as c_indirecto')
                    ->get();
        
        $query3 = Investigacao::where('investigacaos.id',$idInvest)
                    ->join('publicados','publicados.investigacao_id','=','investigacaos.id')                        
                    ->join('odines','odines.id','=','publicados.odines_id')
                    ->join('difusaos','difusaos.investigacao_id','=','investigacaos.id')
                    ->select('difusaos.caea as caea','difusaos.designacao as designacao','difusaos.publicacao as publicacao',
                            'difusaos.descricao as descricao','difusaos.entidade as odine',
                            'difusaos.periodo_referencia as referencia','difusaos.periocidade as periocidade',
                            'difusaos.data_colocacao as data_c','custos.data_disp_papel as data_p',
                            'custos.custo_impressao as impressao')
                    ->get();

        return view('systempages.showInvestigation',compact('query1','query2','query3'));
    }

    public function store(Request $request){ 

        $idInvest = Investigacao::getId($request->investigacao);

        $actividade = new Actividade();
        $actividade->ende = $request->ende;
        $actividade->caea = $request->caea;
        $actividade->designacao = $request->designacao1;
        $actividade->descricao = $request->descricao1;
        $actividade->entidade = "GEPE/".$request->odines1;
        $actividade->estatistica = $request->operacao;
        $actividade->unidade_observada = $request->unidade;
        $actividade->variavel_observada = $request->variavel;
        $actividade->periodo_referencia = $request->referencia1;
        $actividade->periodicidade = $request->periodicidade1;
        $actividade->unidade_observacao = $request->observacao;
        $actividade->nivel_desag_geografica = $request->geografia;
        $actividade->data_disp_publico = $request->datadisp;
        $actividade->investigacao_id = $idInvest;
        $actividade->save();


        $custo = new Custo();
        $custo->ende = $request->ende;
        $custo->caea = $request->caea;
        $Custo->designacao = $request->designacao1; 
        $custo->dc_custo_fisico = $request->chefia1;
        $custo->ts_custo_fisico = $request->tecsup1;
        $custo->t_custo_fisico = $request->tecnico1;
        $custo->tm_custo_fisico = $request->tecmed1;
        $custo->ad_outro_custo_fisico = $request->custadmin1; 
        $custo->outro_custo_financeiro_directo = $request->custodirecto;
        $custo->dc_custo_financeiro = $request->chefia2;
        $custo->ts_custo_financeiro = $request->tecsup2;
        $custo->t_custo_financeiro = $request->tecnico2;
        $custo->tm_custo_financeiro = $request->tecmed2;
        $custo->ad_outro_custo_financeiro = $request->custadmin2; 
        $custo->outro_custo_financeiro_ind = $request->custoind;
        $custo->investigacao_id = $idInvest;
        $custo->save();


        $difusao = new Difusao();
        $difusao->caea = $request->caea;
        $difusao->designacao = $request->designacao2;
        $difusao->publicacao = $request->publicacao;
        $difusao->descricao = $request->descricao2;
        $difusao->entidade = "GEPE/".$request->odines2;
        $difusao->periodo_referencia = $request->referencia2;
        $difusao->periodicidade = $request->periodicidade2;
        $difusao->data_colocacao = $request->site;
        $difusao->data_disp_papel = $request->papel;
        $difusao->custo_impressao = $request->impressao;
        $difusao->investigacao_id = $idInvest;
        $difusao->save();        
    }
}
