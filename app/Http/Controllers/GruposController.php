<?php namespace App\Http\Controllers;

use \Eventviva\ImageResize;
use App\Cuenta;
use App\Http\Requests\CreateGrupoRequest;
use App\Http\Controllers\Controller;


use App\Http\Requests\EditGrupoRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Auth;

class GruposController extends Controller {
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



		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categorias = \DB::table('categoria')
			->orderBy('id', 'ASC')
			->get();
		$user = $this->datUser;
		return view('v2/register', compact('user', 'categorias'));
	}

	public function generarRutaPerfil($nombre){

//		return $ruta;
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateGrupoRequest $request, Redirector $redirect)
	{
		$file = $request->file('foto');
		$date = Carbon::now();
		$date = $date->toDateTimeString();
		$search1 = array(":", " ");
		$replace1 = array("-", "_");
		$dateMod = str_replace($search1, $replace1, $date);
		$search = array("á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", " ");
		$replace = array("a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "-");
		$nomMod = str_replace($search, $replace, $request->nombre);

		$num = 1;
		$path = public_path().'/files/fotos_perfil/';
		$originalName = $file->getClientOriginalName();
		$arrayName = explode('.', $originalName);
		$ext = end($arrayName);
		$ruta = $nomMod."_".$num.".".$ext;
		$rutaComp = $path.$ruta;

		while(file_exists($rutaComp)){
			$num++;
			$ruta = $nomMod."_".$num.".".$ext;
			$rutaComp = $path.$ruta;
		}
		$file->move($path, $ruta);
		if(file_exists($rutaComp)) {
			$image = new ImageResize($rutaComp);
			$image->resizeToWidth(1200);
			$image->save($rutaComp);
		}

		$descripcion = $request->descripcion;
		$cuenta = Cuenta::create([
			'nombre' => $request->nombre,
			'tipo' => 'user',
			'representante' => $request->nom_repre,
			'telefono' => $request->telefono,
			'email' => $request->email,
			'ciudad' => $request->ciudad,
			'latitud' => $request->latitud,
			'longitud' => $request->longitud,
			'num_int' => $request->num_int,
			'descripcion' => $descripcion,
			'foto' => $ruta,
			'password' => bcrypt($request->password),
			'confirmada' => 0,
			'confirmation_code' => str_random(40)
		]);
		$email = $request->email;
		$nombre = $request->nombre;
		if($cuenta){
			\DB::table('grupoxcategoria')->insert(
				['grupo' => $email, 'categoria' => $request->cat_prin, 'tipo' => 1]//Inserto la categoria principal del grupo
			);
			$categorias = \DB::table('categoria')
				->orderBy('id', 'ASC')
				->get();
			foreach($categorias as $categoria){
				$idCategoria = $categoria->id;
				if($request->$idCategoria != null){
					\DB::table('grupoxcategoria')->insert(
						['grupo' => $email, 'categoria' => $request->$idCategoria]
					);
				}
			}
			$datCuenta = Cuenta::findOrFail($email);
			$datUser = $datCuenta['attributes'];
			Mail::send('email_conf', ['nombre' => $datUser['nombre'], 'email' => $datUser['email'], 'cod_act' => $datUser['confirmation_code']], function($message) use ($email, $nombre)
			{

				$message->to($email, $nombre)->from('atlasdelafecto@gmail.com', 'El atlas')->subject('Codigo de activación!');
			});
			$user = $this->datUser;
		return view('v2/conf_registro', compact('email', 'user'));
//		return $redirect->route('grupos.index');
		}else{
			return("Se produjo un error al crear el registro");
		}
//		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(){
		$items = array();

		$categorias = \DB::table('categoria')
			->orderBy('id', 'ASC')
			->get();
		$user = $this->datUser;
		$descripcion = $user['descripcion'];
		$email = $user["email"];
		$marcadas = \DB::table('grupoxcategoria')
			->where('grupo', $email)
			->get();

		//selecciono categoria principal
		$catPrin = \DB::table('grupoxcategoria')
			->where('grupo', $email)
			->where('tipo', 1)
			->select('categoria')
			->get();
		if($catPrin!=null){
			$idCatPrin = $catPrin[0]->categoria;
		}else{
			$idCatPrin = null;
		}

		$i= 0;
		$estado = false;
		foreach($categorias as $categoria){
foreach($marcadas as $marcada){
	if($categoria->id == $marcada->categoria){
$estado = true;
		break;
	}

}
			$items[$i]["id"] = $categoria->id;
			$items[$i]["nombre"] = $categoria->nombre;
			if($estado){
				$items[$i]["checked"] = true;
				$estado = false;
			}else{
				$items[$i]["checked"] = false;
			}
			$i++;
		}

		return view('v2/edit', compact('user', 'items', 'categorias', 'idCatPrin', 'descripcion'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditGrupoRequest $request, Redirector $redirect)
	{
		$user = $this->datUser;
		\DB::table('grupoxcategoria')
			->where('grupo',$user['email'])
			->where('tipo',2)
			->delete();
		$categorias = \DB::table('categoria')
			->orderBy('id', 'ASC')
			->get();
		\DB::table('grupoxcategoria')
			->where('grupo',$user['email'])
			->where('tipo',1)
			->update(['categoria' => $request->cat_prin]);//actualizo la categoria principal del grupo
		$categorias = \DB::table('categoria')
			->orderBy('id', 'ASC')
			->get();
		foreach($categorias as $categoria){
			$idCategoria = $categoria->id;
			if($request->$idCategoria != null){
				\DB::table('grupoxcategoria')->insert(
					['grupo' => $user['email'], 'categoria' => $request->$idCategoria]
				);
			}
		}
		$cuenta = Cuenta::find($user['email']);
		$activo = $request->fotoAct;

//		$descripcion = nl2br($request->descripcion);
//		$descripcion = str_replace("\n", "<br>", $request->descripcion);
		$descripcion = $request->descripcion;
		$cuenta->nombre = $request->nombre;
		$cuenta->representante = $request->nom_repre;
		$cuenta->telefono = $request->telefono;
		$cuenta->email = $request->email;
		$cuenta->ciudad = $request->ciudad;
		$cuenta->latitud = $request->latitud;
		$cuenta->longitud = $request->longitud;
		$cuenta->num_int = $request->num_int;
		$cuenta->descripcion = $descripcion;

		if(!$activo){
			$file = $request->file('foto');
			if($file != null){
				$date = Carbon::now();
				$date = $date->toDateTimeString();
				$search1 = array(":", " ");
				$replace1 = array("-", "_");
				$dateMod = str_replace($search1, $replace1, $date);
				$search = array("á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", " ");
				$replace = array("a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "-");
				$nomPerfilMod = str_replace($search, $replace, $request->nombre);

				$ruta = "fotos_perfil/".$dateMod."_".$nomPerfilMod.".jpg";
				\Storage::disk('local')->put($ruta, \File::get($file));
			$cuenta->foto = $ruta;
			}else{
				$ruta = "fotos_perfil/logo-atlas.png";
				$cuenta->foto = $ruta;
			}
		}

		if($request->password != null){
			$cuenta->password = bcrypt($request->password);
		}

		$cuenta->save();

		return redirect('/publications')->with('message', 'Actualizacion Exitosa');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
