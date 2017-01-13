<?php

namespace App\Http\Controllers;

use App\Person;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonController extends Controller {

    public function index() {

        $person = Person::all();

        return response()->json($person);
    }

    public function getPerson($id) {

        $person = Person::find($id);

        return response()->json($person);
    }

    public function createPerson(Request $request) {

        $person = Person::create($request->all());

        return response()->json($person);
    }

    public function updatePerson(Request $request, $id) {

        $person = Person::find($id);
        if ($request->input('name') <> NULL)
            $person->name = $request->input('name');
        if ($request->input('lastname') <> NULL)
            $person->lastname = $request->input('lastname');
        if ($request->input('genre') <> NULL)
            $person->genre = $request->input('genre');
        if ($request->input('birthdate') <> NULL)
            $person->birthdate = $request->input('birthdate');
        if ($request->input('cel') <> NULL)
            $person->cel = $request->input('cel');
        if ($request->input('email') <> NULL)
            $person->email = $request->input('email');
        if ($request->input('married') <> NULL)
            $person->married = $request->input('married');
        if ($request->input('address_id') <> NULL)
            $person->address_id = $request->input('address_id');
        $person->save();

        return response()->json($person);
    }

    public function deletePerson($id) {

        $person = Person::find($id);
        $person->delete();

        return response()->json('Removido com sucesso.');
    }

}
