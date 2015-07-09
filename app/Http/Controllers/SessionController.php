<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use \App\User;
use Hash;
use Redirect;
use Auth;

class SessionController extends Controller {

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
        //
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store()
    {
        $input = Input::all();
        $user = User::where('email', $input['email'])->first();
        if (!Hash::check($input['password'], $user['password'])) {
            return Redirect::back()->with('html_info', ['Емаил или шифра нису исправни.']);
        }
        if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']])) {
            return Redirect::intended()->with('html_info', ['Успешно сте се пријавили.']);
        }
        else {
            return Redirect::back()->with('html_info', ['Грешка! Пријава неуспешна!']);
        }

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
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy($id = 0)
    {
        if (Auth::check())
        {
            Auth::logout();
            return Redirect::route('page.index')->with('html_info', ['Налог је одјављен са овог рачунара.']);
        }
        return Redirect::route('page.index')->with('html_info', ['Потребна је пријава да би одјава била могућа.']);
    }

}
