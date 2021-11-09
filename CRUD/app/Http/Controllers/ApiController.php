<?php

namespace App\Http\Controllers;

use App\Models\citys;


use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function postCreateCity(Request $request){
        $enderecos = new citys();
        $enderecos->longradouro = $request->longradouro;
        $enderecos->numero = $request->numero;
        $enderecos->bairro = $request->bairro;
        $enderecos->save();

        return response()->json([
            "message" => "Endereço criado com sucesso!"
        ], 201);

    }

    public function getAllCitys(){
        $enderecos = citys::get()->toJson(JSON_PRETTY_PRINT);
        return response($enderecos, 200);
    }

    public function getCityByName($longradouro){
        if(citys::where('longradouro',$longradouro)->exists()){
            $enderecos = citys::where('longradouro',$longradouro)->get()->toJson(JSON_PRETTY_PRINT);
            return response($enderecos,200);
        }else{
            return response()->json([
                "message" => "Endereço não encontrado"
            ], 404);
        }
    }

   
    public function putUpdateCity(Request $request, $id){
        if(citys::where('id',$id)->exists()){
            $enderecos = citys::find($id);
            $enderecos->longradouro = is_null($request->longradouro) ? $enderecos->longradouro : $request->longradouro;
            $enderecos->numero = is_null($request->numero) ? $enderecos->numero : $request->numero;
            $enderecos->bairro = is_null($request->bairro) ? $enderecos->bairro : $request->bairro;
            $enderecos->save();

            return response()->json([
                "message" => "Endereço atualizado com sucesso!"
            ],200);

        }else{
            return response()->json([
                "message" => "Endereço não encontrado!"
            ],404);
        }
    }

    public function deleteCity($id){
        if(citys::where('id',$id)->exists()){
            $enderecos = citys::find($id);
            $enderecos->delete();

            return response()->json([
                "message" => "Endereço deletado com sucesso!"
            ],202);

        }else{
            return response()->json([
                "message" => "Endereço não encontrado!"
            ],404);
        }
    }
    
}
