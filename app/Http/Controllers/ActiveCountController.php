<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

use Illuminate\Http\Request;

class ActiveCountController extends Controller {
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

    public function index($cod){
        $user = $this->datUser;
//        return ('Estas intentado activar el codigo ' . $cod);
    $result = \DB::table('cuenta')
        ->where('confirmation_code', $cod)
        ->update(['confirmada' => 1, 'confirmation_code' => null]);
        if($result){
            return view('activate_success', compact('user'));
        }else{
            return view('activate_error', compact('user'));
        }
    }

    //

}
