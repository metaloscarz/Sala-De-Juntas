<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class registerController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	//muestra la vista de registro
	public function showregister() {
		return view('register');
	}

	public function register(Request $req) {
		$data = $req->all();
		// validamos los datos
		$this->validate($req, [
			'name' => 'required',
			'email' => 'email|required',
			'password' => 'required',
		]);

		// ciframos el password
		$data['password'] = Crypt::encrypt($data['password']);

		// creamos un nuevo usuario
		$user = User::create($data);
		return response()->json(['status' => 'success', 'data' => $user]);
	}
}
