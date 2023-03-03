<?php

namespace App\Http\Controllers;

use App\Http\Requests\TacheFormRequest;
use App\Models\Tache;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TacheController extends Controller
{
    public function index(): View {
        $taches = Tache::incomplete();
        return view('taches.index', ['taches' => $taches]);
    }

    public function show(Tache $tache): View {
        return view('taches.show', ['tache' => $tache]);
    }

    public function create() : View {
        return view('taches.create');
    }

    public function store(TacheFormRequest $request): RedirectResponse
    {
        /*$tache = new Tache();
        $tache->titre = $request->titre;
        $tache->save();*/

        $attributes = $request->validated();

        Tache::create($attributes);
        return redirect()->route('taches.index');
    }

    public function edit(Tache $tache) : View {
        return view('taches.edit', ['tache' => $tache]);
    }

    public function update(TacheFormRequest $request, Tache $tache): RedirectResponse
    {

        $attributes = $request->validated();
        $tache->update($attributes);

        return redirect()->route('taches.edit', $tache->id);
    }
}


