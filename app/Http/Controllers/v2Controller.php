<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;

class v2Controller extends Controller {
    private $datUser;

    public function __construct()
    {
        $user = Auth::user();
        $this->datUser = $user['attributes'];
    }
    public function mapGroups(){
        $user = $this->datUser;
        return view('v2/groups-map', compact('user'));
    }
    public function mapAct(){
        $user = $this->datUser;
        return view('v2/activities-map', compact('user'));
    }
    public function template(){
        $user = $this->datUser;
        return view('v2/template', compact('user'));
    }

    public function about(){
        $user = $this->datUser;
        return view('v2/about', compact('user'));
    }

    public function groupsRegister(){
        $grupos = \DB::table('cuenta')
            ->select('nombre', 'email', 'ciudad','num_int', 'descripcion', 'latitud', 'longitud', 'foto')
            ->where('confirmada', 1)
            ->where('tipo', '<>', 'admin')
            ->get();

        $features = array();

        foreach($grupos as $grupo){
            $descripcion = str_replace("\n", "<br>", $grupo->descripcion);
            $id = $grupo->email;
            $categorias = \DB::table('grupoxcategoria')
                ->where('grupoxcategoria.grupo', $id)
                ->join('categoria', 'grupoxcategoria.categoria', '=', 'categoria.id')
                ->select('categoria.nombre')
                ->get();

            $features[] = array(
                'type' => 'Feature',
                'geometry' => array(
                    'type' => 'Point',
                    'coordinates' => array((float)$grupo->longitud, (float)$grupo->latitud),
                    'properties' => array(
                        'nombre' => $grupo->nombre,
                        'email' => $grupo->email,
                        'foto' => $grupo->foto,
                        'ciudad' => $grupo->ciudad,
                        'num_int' => $grupo->num_int,
                        'descripcion' => $descripcion,
                        'categorias' => $categorias,
                    ),
                ),
            );
        }
        $allFeatures = array('type' => 'FeatureCollection', 'features' => $features);
        return json_encode($allFeatures, JSON_PRETTY_PRINT);

    }

    public function activitiesRegister(){
        $actividades = \DB::table('actividad')
            ->join('cuenta', 'actividad.grupo', '=', 'cuenta.email')
            ->select('cuenta.nombre', 'cuenta.email', 'actividad.id', 'actividad.titulo', 'actividad.fecha', 'actividad.created_at', 'actividad.descripcion', 'actividad.latitud', 'actividad.longitud')
            ->where('actividad.confirmada', 1)
            ->orderBy('actividad.created_at', 'DESC')
            ->get();

        $features = array();

        foreach($actividades as $act){
$id = $act->id;
            $fotos = \DB::table('foto')
                ->select('url')
                ->where('actividad', $id)
                ->get();

            $features[] = array(
                'type' => 'Feature',
                'geometry' => array(
                    'type' => 'Point',
                    'coordinates' => array((float)$act->longitud, (float)$act->latitud),
                    'properties' => array(
                        'autor' => $act->nombre,
                        'email' => $act->email,
                        'id' => $act->id,
                        'titulo' => $act->titulo,
                        'fecha' => $act->fecha,
                        'creada' => $act->created_at,
                        'descripcion' => $act->descripcion,
                        'fotos' => $fotos,
                    ),
                ),
            );
        }
        $allFeatures = array('type' => 'FeatureCollection', 'features' => $features);
        return json_encode($allFeatures, JSON_PRETTY_PRINT);
    }
public function questions(){
    $user = $this->datUser;
    return view('v2/frecuent-questions', compact('user'));
}

}
