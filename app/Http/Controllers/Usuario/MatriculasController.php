<?php

namespace App\Http\Controllers\Usuario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Hash;
use Illuminate\Support\Facades\Validator;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Auth;
use Carbon\Carbon;
use Mail;

use App\User;
use App\Models\Configuracion;
use App\Models\Ciclo;
use App\Models\Inscripcion;
use App\Models\DetalleInscripcion;
use App\Models\Banco;

class MatriculasController extends Controller
{
    public function listaMatriculas()
    {
        $matriculas=Inscripcion::where('usuario_id',Auth::user()->id)->where('estado','3')->orWhere('estado','5')->with('detalles')->orderBy('anio','desc')->orderBy('numero','desc')->get();
        return view('usuario.matriculas.index')
            ->with('matriculas',$matriculas);
    }
}
