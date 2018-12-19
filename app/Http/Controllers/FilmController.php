<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Film;

class FilmController extends Controller {
    protected $redirectTo = '/home';

    public function __construct() {
        $this->middleware('auth');
    }

    public function insert(Request $request) {
        $this->validator($request->all())->validate();
        $film = $this->create($request->all());
        $this->insertQuery($film);
        return redirect($this->redirectTo);
    }

    protected function Validator(array $data) {
        return Validator::make($data, [
            'title' => ['required', 'string', 'max:255'],
            'link' => ['string', 'max:255'],
            'poster' => ['string', 'max:255'],
            'film-director' => ['integer'],
            'release' => ['required', 'date'],
            'synopsis' => ['required', 'string'],
        ]);
    }

    protected function create(array $data) {
        return Film::create($data);
    }

    protected function insertQuery($film) {
        return $film->save();
    }
}
