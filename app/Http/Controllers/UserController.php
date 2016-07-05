<?php namespace App\Http\Controllers;


use App\Actividad;
use App\Foto;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EditReportRequest;
use Symfony\Component\HttpKernel\Tests\DataCollector\DumpDataCollectorTest;

class UserController extends Controller {
	private $datUser;

	/**
	 * UserController constructor.
	 * @param $user
	 */
	public function __construct()
	{
		$user = Auth::user();
		$this->datUser = $user['attributes'];
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function index()
	{

		return view('user/upload_activity', compact('user'));
		//
	}

	public function uploadActivity(){
		$user = $this->datUser;
		return view('user/upload_activity', compact('user'));

	}


	public function uploadActivityPost(Request $request){


		$user = $this->datUser;
		$email = $user['email'];

		$titulo = $request->get('titulo');
		$fecha = $request->get('fecha');
		$descripcion = $request->get('descripcion');
		$latitud = $request->get('latitud');
		$longitud = $request->get('longitud');


		$search = array("á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", " ");
		$replace = array("a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "-");
		$search1 = array(":", " ");
		$replace1 = array("-", "_");
		$nomMod = str_replace($search, $replace, $titulo);


		$result = Actividad::create([
			'grupo' => $email,
			'titulo' => $titulo,
			'fecha' => $fecha,
			'descripcion' => $descripcion,
			'latitud' => $latitud,
			'longitud' => $longitud,
			'confirmada' => 0
		]);

		$path = 'files/actividades/';

		$files = $request->file('file');


		if($result->id > 0){
			$exito = true;
			$insertedId = $result->id;
			$num = 1;
			if($files != null){
				foreach($files as $file){
//				$date = Carbon::now();
//				$date = $date->toDateTimeString();
//				$dateMod = str_replace($search1, $replace1, $date);

					$ruta = $nomMod."_".$num.".jpg";
					$rutaComp = $path.$ruta;

					while(file_exists($rutaComp)){
						$num++;
						$ruta = $nomMod."_".$num.".jpg";
						$rutaComp = $path.$ruta;
					}

//			$ruta = $file->getClientOriginalName();
					$file->move($path, $ruta);

					if(file_exists($rutaComp)){
						$result2 = Foto::create([
							'actividad' => $insertedId,
							'url' => $ruta
						]);
					}
				}
			}

		}

		return redirect("/user/upload-activity")->with('message', "Se registro el reporte $titulo exitosamente");

	}

	public function uploadPhotos($id){
		$user = $this->datUser;
		$actividad = Actividad::find($id);
		$datos = $actividad['attributes'];

		if($user['email'] == $datos['grupo']){
			return view('user/upload-photos', compact('user', 'datos'));
		}else{
			return redirect("/user/publications/$id")->with('message', "No tienes permiso para editar este reporte");
		}

	}

	public function uploadPhotosPost(Request $request){

		$id = $request->get('id');
		$actividad = Actividad::find($id);
		$datos = $actividad['attributes'];
		$titulo = $datos['titulo'];
		$path = 'files/actividades/';
		$files = $request->file('file');

		$search = array("á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", " ");
		$replace = array("a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "-");
		$search1 = array(":", " ");
		$replace1 = array("-", "_");
		$nomMod = str_replace($search, $replace, $titulo);
		$num = 1;
		if($files != null){
			foreach($files as $file){

				$ruta = $nomMod."_".$num.".jpg";
				$rutaComp = $path.$ruta;

				while(file_exists($rutaComp)){
					$num++;
					$ruta = $nomMod."_".$num.".jpg";
					$rutaComp = $path.$ruta;
				}

				$file->move($path, $ruta);

				if(file_exists($rutaComp)){
					$result2 = Foto::create([
						'actividad' => $id,
						'url' => $ruta
					]);
				}
			}
		}
	}

	public function publications(){
		$user = $this->datUser;
		$cuentas = DB::table('cuenta')
			->select('nombre', 'email')
			->get();
		$actividades = DB::table('actividad')
			->where('confirmada', 1)
			->orderBy('id', 'DESC')
			->get();
		$fotos = DB::table('foto')
			->orderBy('actividad', 'DESC')
			->get();

		return view('user/publications', compact('user', 'actividades', 'fotos', 'cuentas'));
	}

	public function showPost($id){
	$user = $this->datUser;
	$datos = DB::table('cuenta')
			->join('actividad', 'cuenta.email', '=', 'actividad.grupo')
			->select('cuenta.nombre', 'cuenta.email', 'actividad.titulo', 'actividad.fecha', 'actividad.created_at', 'actividad.descripcion', 'actividad.latitud', 'actividad.longitud', 'actividad.confirmada')
			->where('actividad.id', $id)
			->get();
	$fotos = DB::table('foto')
			->select('url')
			->where('actividad', $id)
			->get();

		if($datos[0]->confirmada == 0){
			if($user['email'] == $datos[0]->email){
				return view('user/show-post', compact('user', 'datos', 'fotos'));
			}else{
				return redirect()->back()->with('message', "No tienes permiso para visualizar este reporte");
			}
		}else{
			return view('user/show-post', compact('user', 'datos', 'fotos'));
		}

	}

	public function showAutor($id){
		$user = $this->datUser;
		$cuenta = DB::table('cuenta')
			->select('nombre', 'email', 'ciudad', 'latitud', 'longitud', 'num_int', 'descripcion', 'foto')
			->where('email', $id)
			->get();
		$actividades = DB::table('actividad')
			->where('grupo', $id)
			->where('confirmada', 1)
			->select('id', 'titulo', 'fecha', 'descripcion', 'latitud', 'longitud')
			->orderBy('id', 'DESC')
			->get();
		$fotos = DB::table('cuenta')
			->where('cuenta.email', $id)
			->join('actividad', 'cuenta.email', '=', 'actividad.grupo')
			->join('foto', 'actividad.id', '=', 'foto.actividad')
			->where('actividad.confirmada', 1)
			->select('foto.actividad', 'foto.url')
			->orderBy('foto.actividad', 'DESC')
			->get();
		$categorias = DB::table('grupoxcategoria')
			->where('grupoxcategoria.grupo', $id)
			->join('categoria', 'grupoxcategoria.categoria', '=', 'categoria.id')
			->select('categoria.nombre')
			->get();
		return view('user/show-autor', compact('user', 'cuenta', 'actividades', 'categorias', 'fotos'));
	}

	public function search(Request $request){
		$cadena = $request->inputSearch;
		$user = $this->datUser;
		$grupos = DB::table('cuenta')
			->select('nombre', 'email', 'ciudad', 'num_int', 'descripcion', 'foto')
			->where('nombre', 'LIKE', "%$cadena%")
			->orwhere('descripcion', 'LIKE', "%$cadena%")
			->where('confirmada', 1)
			->orderBy('nombre', 'ASC')
			->get();

		$actividades = DB::table('actividad')
			->join('cuenta', 'actividad.grupo', '=', 'cuenta.email')
			->where('actividad.confirmada', 1)
			->where('actividad.titulo', 'LIKE', "%$cadena%")
			->orwhere('actividad.descripcion', 'LIKE', "%$cadena%")
			->select('cuenta.nombre', 'cuenta.email', 'actividad.id', 'actividad.titulo', 'actividad.fecha', 'actividad.descripcion')
			->orderBy('id', 'DESC')
			->get();

		$fotos = DB::table('actividad')
			->join('foto', 'actividad.id', '=', 'foto.actividad')
			->where('actividad.titulo', 'LIKE', "%$cadena%")
			->orwhere('actividad.descripcion', 'LIKE', "%$cadena%")
			->where('actividad.confirmada', 1)
			->select('foto.actividad', 'foto.url')
			->get();

		return view('user/search', compact('cadena', 'user', 'grupos', 'actividades', 'fotos'));
	}

	public function searchPost(Request $request){
		$cadena = $request->post;
		$user = $this->datUser;



		return view('user/result-post', compact('cadena', 'user', 'actividades', 'fotos'));

	}

	public function myPublications(){
		$user = $this->datUser;
		$email = $user['email'];
		$actividades = DB::table('actividad')
			->where('grupo', $email)
			->select('id', 'titulo', 'fecha', 'created_at', 'descripcion', 'confirmada')
			->orderBy('id', 'DESC')
			->get();
		$num = count($actividades);
		return view('user/my-publications', compact('user', 'num', 'actividades'));

	}

	public function deleteReport($id){
		$fotos = DB::table('foto')
			->where('actividad', $id)
			->select('url')
			->get();
		foreach($fotos as $foto){
			\Storage::delete("actividades/$foto->url");
		}

		DB::table('foto')
			->where('actividad', $id)
			->delete();

		$actividad = Actividad::find($id);
		$titulo = $actividad['attributes']['titulo'];
		$actividad->delete();
		return redirect("/user/my-publications")->with('message', "Se elimino el reporte $titulo exitosamente");

	}

	public function editReport($id){
		$user = $this->datUser;
		$actividad = Actividad::find($id);
		$datos = $actividad['attributes'];
		return view('user/edit-report', compact('datos', 'user'));
	}

	public function updateReport(EditReportRequest $request){
		$id = $request['id'];

		$actividad = Actividad::find($id);
		$titulo = $actividad->titulo;
		$actividad->titulo = $request['titulo'];
		$actividad->fecha = $request['fecha'];
		$actividad->descripcion = $request['descripcion'];
		$actividad->latitud = $request['latitud'];
		$actividad->longitud = $request['longitud'];
		$actividad->save();

		return redirect("/user/my-publications")->with('message', "Se actualizo el reporte $titulo exitosamente");
	}
}