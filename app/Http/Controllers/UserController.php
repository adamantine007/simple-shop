<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Http\Requests\Request;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = User::all();

        return view('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return back();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        return back();
	}

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return Response
     * @internal param int $id
     */
	public function show(User $user)
	{
        return view('users.show', compact('user'));
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return Response
     * @internal param int $id
     */
	public function edit(User $user)
	{
        return view('users.edit', compact('user'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param User $user
     * @param UserRequest $request
     * @return Response
     * @internal param int $id
     */
	public function update(User $user, UserRequest $request)
	{
        $user->update($request->all());

        return redirect('/users/' . $user->id);
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return Response
     * @internal param int $id
     */
	public function destroy(User $user)
	{
        return back();
	}

}
