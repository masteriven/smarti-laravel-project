<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dog;

class DogController extends Controller
{

    public function __invoke(){
        
    }
    public function getDog(){
        return response()->json(dog::all(),200);
    }

    public function addNewDog(Request $request){
        $dog = dog::create($request->all());
        return response($dog,201);
    }

    public function deleteDog(Request $request , $id){
        $dog = dog::find($id);
        if(is_null($dog)){
            return response()->json(['message' => 'This Dog Not Found'],404);
        }else{
            $dog->delete();
            return response()->json(null,204);
        }
    }
}
