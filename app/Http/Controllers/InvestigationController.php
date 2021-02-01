<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Investigacao;
use App\Models\Publicado;
use DateTime;
//use Request;

class InvestigationController extends Controller
{
    
    public function edit($request){
        $invest = Investigacao::where('designacao',$request)->select('investigacaos.designacao as designacao','investigacaos.descricao as descricao')->get();
        return view('systempages.investigationForm', compact('invest'));
    }
    
    public function store(Request $request){
        /*
        $investigation = Investigacao::updateOrCreate(['designacao' => $request->designacao],
                                            ['designacao' => $request->designacao, 'descricao' => $request->descricao, 
                                            'datacriacao' => new DateTime(), 'estado_id' => 6]);
        
        $investigation = Investigacao::where('designacao', '=', $request->designacao)->first();
        if ($investigation) {
            Investigacao::create(['designacao' => $request->designacao, 'descricao' => $request->descricao, 
                            'datacriacao' => new DateTime(), 'estado_id' => 6]);
        }
        else{
            Investigacao::whereupdate(['designacao' => $request->designacao, 'descricao' => $request->descricao, 
                            'datacriacao' => new DateTime(), 'estado_id' => 6]);
        }
        return redirect()
            ->route('investigationForm') 
            ->with('Erro','Não foi possível guardar a investigação.');
                                            */
        
        $investigation = new Investigacao();
        $investigation->designacao = $request->designacao;
        $investigation->descricao = $request->descricao;
        $investigation->datacriacao = new DateTime();
        $investigation->estado_id = 6;
        $investigation->save();
                
        if($investigation == null){
            return redirect()
                    ->route('investigationForm') 
                    ->with('Erro','Não foi possível guardar a investigação.');
        }
        else{
            $idInvest = Investigacao::all()->last()->id;
            $idOdine = Auth::user()->odine_id;

            $publicado = new Publicado();
            $publicado->odine_id = $idOdine;
            $publicado->investigacao_id = $idInvest;
            $publicado->save();

            return redirect()
                    ->route('investigationForm') 
                    ->with('Êxito','A investigação foi guardada.');
        } 

    }

    public function destroy($request){
        $query = Investigacao::getId($request);        
        $query->delete();

        Request::session()->flash('Êxito','A investigação foi eliminada.');
        return redirect('showInvestigation')->back();
        //return back()->with('Êxito','A investigação foi eliminada.');
    }

}
