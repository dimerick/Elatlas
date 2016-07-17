<?php namespace App\Http\Controllers;

use \Eventviva\ImageResize;
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
            $descripcion = substr($grupo->descripcion, 0, 430);
            $descripcion = str_replace("\n", "<br>", $descripcion);
            $id = $grupo->email;
            $categorias = \DB::table('grupoxcategoria')
                ->where('grupoxcategoria.grupo', $id)
                ->join('categoria', 'grupoxcategoria.categoria', '=', 'categoria.id')
                ->select('categoria.nombre', 'categoria.icon', 'grupoxcategoria.tipo')
                ->orderBy('grupoxcategoria.tipo', 'ASC')
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
            ->join('categoria', 'actividad.categoria', '=', 'categoria.id')
            ->select('cuenta.nombre', 'cuenta.email', 'actividad.id', 'actividad.titulo', 'actividad.fecha', 'actividad.created_at', 'actividad.descripcion', 'actividad.latitud', 'actividad.longitud', 'categoria.nombre as nomCat', 'categoria.icon')
            ->where('actividad.confirmada', 1)
            ->orderBy('actividad.created_at', 'DESC')
            ->get();

        $features = array();

        foreach($actividades as $act){
$id = $act->id;
            $descripcion = str_replace("\n", "<br>", $act->descripcion);
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
                        'nom-cat' => $act->nomCat,
                        'icon' => $act->icon,
                        'creada' => $act->created_at,
                        'descripcion' => $descripcion,
                        'fotos' => $fotos,
                    ),
                ),
            );
        }
        $allFeatures = array('type' => 'FeatureCollection', 'features' => $features);
        return json_encode($allFeatures, JSON_PRETTY_PRINT);
    }

    public function activitiesGroupRegister($id){
        $actividades = \DB::table('actividad')
            ->join('cuenta', 'actividad.grupo', '=', 'cuenta.email')
            ->join('categoria', 'actividad.categoria', '=', 'categoria.id')
            ->select('cuenta.nombre', 'cuenta.email', 'actividad.id', 'actividad.titulo', 'actividad.fecha', 'actividad.created_at', 'actividad.descripcion', 'actividad.latitud', 'actividad.longitud', 'categoria.nombre as nomCat', 'categoria.icon')
            ->where('cuenta.email', $id)
            ->where('actividad.confirmada', 1)
            ->orderBy('actividad.created_at', 'DESC')
            ->get();

        $features = array();

        foreach($actividades as $act){
            $id = $act->id;
            $descripcion = str_replace("\n", "<br>", $act->descripcion);
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
                        'nom-cat' => $act->nomCat,
                        'icon' => $act->icon,
                        'creada' => $act->created_at,
                        'descripcion' => $descripcion,
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

    public function reescalarPerfil(){
//        return "Reescalando imagenes de perfil";
//        $directorio = '/files/fotos_perfil';
        $path = public_path().'/files/actividades/';
        $ficheros  = scandir($path);
//        foreach ($ficheros as $file){
////            $rutaComp = $path.$file;
//            echo $file.'<br>';
////            $image = new ImageResize($rutaComp);
////            $image->resizeToWidth(1200);
////            $image->save($rutaComp);
//        }
        for($i=2;$i<count($ficheros);$i++){
            echo $ficheros[$i].'<br>';
            $rutaComp = $path.$ficheros[$i];
            $image = new ImageResize($rutaComp);
            $image->resizeToWidth(1200);
            $image->save($rutaComp);
        }

    }

    public function reescalarActi(){
//        return "Reescalando imagenes de actividades";
    }
}
