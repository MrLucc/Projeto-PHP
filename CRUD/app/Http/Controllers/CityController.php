<?php

namespace App\Http\Controllers;

use App\Models\city;

use Illuminate\Http\Request;

class CityController extends Controller
{

    public function postCreateCity(Request $request)
    {
        $enderecos = new city();
        $enderecos->logradouro = $request->logradouro;
        $enderecos->numero = $request->numero;
        $enderecos->bairro = $request->bairro;
        $enderecos->save();

        return response()->json([
            "message" => "Endereço criado com sucesso!"
        ], 201);

    }

    public function getAllCitys()
    {
        $enderecos = city::get()->toJson(JSON_PRETTY_PRINT);
        return response($enderecos, 200);
    }

    public function getCityByName($logradouro)
    {
        if(city::where('logradouro',$logradouro)->exists()){
            $enderecos = city::where('logradouro',$logradouro)->get()->toJson(JSON_PRETTY_PRINT);
            return response($enderecos,200);
        }else{
            return response()->json([
                "message" => "Endereço não encontrado"
            ], 404);
        }
    }

   
    public function putUpdateCity(Request $request, $id)
    {
        if(city::where('id',$id)->exists()){
            $enderecos = city::find($id);
            $enderecos->logradouro = is_null($request->logradouro) ? $enderecos->logradouro : $request->logradouro;
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

    public function deleteCity($id)
    {
        if(city::where('id',$id)->exists()){
            $enderecos = city::find($id);
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
