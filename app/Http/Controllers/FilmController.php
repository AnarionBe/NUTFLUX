<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller {
    protected $redirectTo = '/home';

    public function __construct() {
        $this->middleware('auth');
    }

    public function insert(Request $request) {
        $this->validator($request->all())->validate();
        $this->create($request->all());
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
        return Film::create([
            'title' => $data['title'],
            'link' => $data['link'],
            'poster' => $data['poster'],
            'film-director' => $data['film-director'],
            'release' => $data['release'],
            'synopsis' => $data['synopsis'],
        ]);
    }
}
