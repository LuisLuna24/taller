<?php

namespace App\View\Composers;

use App\Models\rutas;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PersonalComposer
{

    public $rutas, $flujos;

    public $titulo;

    public function __construct()
    {
        switch (Auth::user()->id_type_user) {

            case 1:
                $this->rutas = rutas::where('estatus', 1)->where('tipo_usuario', 1)->orderBy('nombre', 'asc')->get();
                break;

            case 3:
                $this->rutas = rutas::where('estatus', 1)->where('tipo_usuario', 3)->orderBy('nombre', 'asc')->get();
                break;

            case 5:
                $this->rutas = rutas::where('estatus', 1)->where('tipo_usuario', 5)->orderBy('nombre', 'asc')->get();
                break;
        }
    }



    public function compose(View $view): void
    {
        $view->with('rutas', $this->rutas);
    }
}
