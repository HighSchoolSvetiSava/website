<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\School_Class;
use Illuminate\Http\Request;
use Input;
use Validator;
use Hash;
use App\User;

class UserController extends Controller {

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
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:8',
            'grade' => 'numeric|required',
            'school_class_index' => 'numeric|required',
            'gender' => 'numeric|required',
        ];

        $messages = [
            'required' => 'Морате попунити :attribute поље.',
            'unique' =>  'Вредност унета у поље :attribute се већ користи и није јединствена.',
            'numeric' =>  'Вредност у пољу :attribute мора бити искључиво бројчана.',
            'min' => "Вредност у пољу :attribute нема довољно карактера.",
            'password.min:8' =>  'Шифра мора имати више од 8 карактера.',
        ];

        $validator = Validator::make($input, $rules, $messages);

        $input['password'] = Hash::make($input['password']);

        $input['school_class_id'] = School_Class::where('grade', $input['grade'])->where('school_class_index', $input['school_class_index'])->firstOrFail()->id;

        if ($validator->passes())
        {
            User::create($input);
        } else {
            return redirect()->route('page.index')->with('html_info', $validator->errors()->all());
        }

        return redirect()->intended()->with('html_info', ['Успешно сте се регистровали.']);
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
	public function destroy($id)
	{
		//
	}

}
