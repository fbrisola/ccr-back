<?php

namespace App\Http\Controllers;

use App\Individual;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndividualController extends Controller {

    public function index() {

        $individual = Individual::all();

        return response()->json($individual);
    }

    public function getIndividual($id) {

        $individual = Individual::find($id);

        return response()->json($individual);
    }

    public function createIndividual(Request $request) {

        $individual = Individual::create($request->all());

        return response()->json($individual);
    }

    public function updateIndividual(Request $request, $id) {

        $individual = Individual::find($id);
        if ($request->input('name') <> NULL)
            $individual->name = $request->input('name');
        if ($request->input('lastname') <> NULL)
            $individual->lastname = $request->input('lastname');
        if ($request->input('genre') <> NULL)
            $individual->genre = $request->input('genre');
        if ($request->input('birthdate') <> NULL)
            $individual->birthdate = $request->input('birthdate');
        if ($request->input('cel') <> NULL)
            $individual->cel = $request->input('cel');
        if ($request->input('email') <> NULL)
            $individual->email = $request->input('email');
        if ($request->input('married') <> NULL)
            $individual->married = $request->input('married');
        if ($request->input('address_id') <> NULL)
            $individual->address_id = $request->input('address_id');
        $individual->save();

        return response()->json($individual);
    }

    public function deleteIndividual($id) {

        $individual = Individual::find($id);
        $individual->delete();

        return response()->json('Removido com sucesso.');
    }

}
