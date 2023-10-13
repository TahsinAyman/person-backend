<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonStoreRequest;
use App\Http\Requests\PersonUpdateRequest;
use App\Models\Person;

class PersonController extends Controller
{
    public static function index() {
        return response()->json(Person::all());
    }
    public static function store(PersonStoreRequest $request) {
        $person = Person::create($request->validated());
        return response()->json($person);
    }
    public static function show(Person $person) {
        return response()->json($person);
    }
    public function update(Person $person, PersonUpdateRequest $request) {
        $person->update($request->validated());
        return response()->json($person);
    }
    public function destroy(Person $person) {
        $person->delete();
        return response()->json($person);
    }
}
