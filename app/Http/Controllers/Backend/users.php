<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Application
    {
        $users=user::all();
        return view("admin/master",["users"=>$users]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        return view("admin.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store ($request): \Illuminate\Http\RedirectResponse
    {

        $name= $request->get("name");
        $email= $request->get("email",);
        $password= $request->get("password");

        $user= new user();
        $user-> name =$name;
        $user-> email =$email;
        $user-> password =$password;

        $user->save();

        return Redirect::to("/users");

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "show";

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(int $id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|Application
    {
        $user=user::find($id);
        return view("admin.update" ,["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id): \Illuminate\Http\Response
    {
        $email= $request->get("email",);

        $name= $request->get("name");

        $user = user:: find ($id);
        $user->name = $name;
        $user->email = $email;

        $user->save();
        return Redirect::to("/user");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): \Illuminate\Http\Response|string
    {
        return "destroy";
    }


}
