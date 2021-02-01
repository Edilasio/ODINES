<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Odine;
use App\Models\Rol;
use App\Models\Estado;
use App\Models\Investigacao;
use App\Models\Publicados;

class ViewController extends Controller
{   

    public function noAccess()
    {   
        return view('systempages.noAccess');
    }
    
    public function home()
    {   
        $id = Auth::user()->odine_id;
        $odine = User::where('odine_id',$id)
                        ->join('odines','odines.id','=','users.odine_id')
                        ->select('odines.sigla')->first();

        return view('layouts.home', compact('odine'));
    }

    public function inehome()
    {   
        $id = Auth::user()->odine_id;
        $odine = User::where('odine_id',$id)
                        ->join('odines','odines.id','=','users.odine_id')
                        ->select('odines.sigla')->first();

        return view('layouts.inehome', compact('odine'));
    }

    public function dadgAnalise()
    {   
        $id = Auth::user()->odine_id;
        $odine = User::where('odine_id',$id)
                        ->join('odines','odines.id','=','users.odine_id')
                        ->select('odines.sigla')->first();

        return view('systempages.dadg-analise', compact('odine'));
    }

    public function dadgAprovado()
    {   
        $id = Auth::user()->odine_id;
        $odine = User::where('odine_id',$id)
                        ->join('odines','odines.id','=','users.odine_id')
                        ->select('odines.sigla')->first();

        return view('systempages.dadg-aprovado', compact('odine'));
    }

    public function authenticate()
    {           
        return view('layouts.login');
    }

    public function recoveryForm()
    {           
        return view('layouts.reset');
    }

    public function registerForm(){

        $odines = Odine::all();        
        $rols = Rol::all();
        $id = Auth::user()->odine_id;
        $query = User::where('odine_id',$id)
                        ->join('odines','odines.id','=','users.odine_id')
                        ->select('odines.sigla')->first();

        return view('layouts.register', compact('odines', 'rols', 'query'));
    }

    public function profileForm() {
        $idUser = Auth::user()->id;
        $id = Auth::user()->odine_id;
        $odine = User::where('odine_id',$id)
                        ->join('odines','odines.id','=','users.odine_id')
                        ->select('odines.sigla')->first();
        
        $user = User::findOrFail($idUser);
        return view('systempages.profileForm', compact('user', 'odine')); 
    }

    public function solicitForm() {
        $id = Auth::user()->odine_id;
        $odine = User::where('odine_id',$id)
                        ->join('odines','odines.id','=','users.odine_id')
                        ->select('odines.sigla')->first();

        return view('systempages.solicitForm', compact('odine')); 
    }

    public function investigationForm() {
        $id = Auth::user()->odine_id;
        $odine = User::where('odine_id',$id)
                        ->join('odines','odines.id','=','users.odine_id')
                        ->select('odines.sigla')->first();
        $query = Odine::where('odines.id',$id)
                        ->join('publicados','publicados.odine_id','=','odines.id')
                        ->join('investigacaos','investigacaos.id','=','publicados.investigacao_id')
                        ->select('investigacaos.id as id','investigacaos.designacao as designacao','investigacaos.descricao as descricao')->get();        

        return view('systempages.investigationForm', compact('odine','query')); 
    }

    public function BoardForm() {
        $id = Auth::user()->odine_id;
        $odine = User::where('odine_id',$id)
                        ->join('odines','odines.id','=','users.odine_id')
                        ->select('odines.sigla')->first();
        $query = Odine::where('odines.id',$id)
                        ->join('publicados','publicados.odine_id','=','odines.id')
                        ->join('investigacaos','investigacaos.id','=','publicados.investigacao_id')
                        ->select('investigacaos.id as id','investigacaos.designacao as designacao')->get();
        $ministerios = Odine::where('id','>',1)->select('sigla')->get();

        return view('systempages.BoardForm', compact('odine','query','ministerios')); 
    }

    public function showInvestigation() {
        $id = Auth::user()->odine_id;
        $odine = User::where('odine_id',$id)
                        ->join('odines','odines.id','=','users.odine_id')
                        ->select('odines.sigla')->first();
        
        $query = Odine::where('odines.id',$id)
                        ->join('publicados','publicados.odine_id','=','odines.id')
                        ->join('investigacaos','investigacaos.id','=','publicados.investigacao_id')
                        ->join('estados','estados.id','=','investigacaos.estado_id')
                        ->select('investigacaos.id as id','investigacaos.designacao as designacao','estados.designacao as estado')->get();
        /*
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
                    ->get(); */
                

        //return view('systempages.showInvestigation', compact('odine','query','query1','query2','query3'));
        return view('systempages.showInvestigation', compact('odine','query')); 
    }

    public function inactiveList() {
        $id = Auth::user()->odine_id;
        $odine = User::where('odine_id',$id)
                        ->join('odines','odines.id','=','users.odine_id')
                        ->select('odines.sigla')->first();
        
        $query = Estado::where('estados.id', 2)                        
                        ->join('users','users.estado_id','=','estados.id')
                        ->join('rols','rols.id','=','users.rol_id')
                        ->join('odines','odines.id','=','users.odine_id')
                        ->select('users.name as name','users.lastname as lastname','users.email as email',
                                'odines.sigla as sigla','estados.designacao as estado','rols.designacao as rol'
                                )->get();

        return view('systempages.inactiveUser', compact('query','odine')); 
    }

    public function waitingList() {
        $id = Auth::user()->odine_id;
        $odine = User::where('odine_id',$id)
                        ->join('odines','odines.id','=','users.odine_id')
                        ->select('odines.sigla')->first();
        
        $query = Estado::where('estados.id', 6)                        
                        ->join('users','users.estado_id','=','estados.id')
                        ->join('rols','rols.id','=','users.rol_id')
                        ->join('odines','odines.id','=','users.odine_id')
                        ->select('users.name as name','users.lastname as lastname','users.email as email',
                                'odines.sigla as sigla','estados.designacao as estado','rols.designacao as rol'
                                )->get();

        return view('systempages.waitingUser', compact('query','odine')); 
    }

    public function activityBoard() {
        $id = Auth::user()->odine_id;
        $odine = User::where('odine_id',$id)
                        ->join('odines','odines.id','=','users.odine_id')
                        ->select('odines.sigla')->first();

        return view('systempages.activityBoard', compact('odine')); 
    }
}
