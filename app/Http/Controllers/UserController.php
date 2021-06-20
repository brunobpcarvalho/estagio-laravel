<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    private $objUser;

    public function __construct()
    {
        $this->objUser = new User();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = $this->objUser->all();
      return view('index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
      $cad=$this->objUser->create([
          'name'=>$request->name,
          'email'=>$request->email,
          'password'=>$request->password,
          'rg'=>$request->rg,
          'cpf'=>$request->cpf,
          'birthDate'=>$request->birthDate,
          'gender'=>$request->gender,
          'phone'=>$request->phone,
          'cell'=>$request->cell,
          'status'=>$request->status,
          'cep'=>$request->cep,
          'address'=>$request->address,
          'number'=>$request->number,
          'district'=>$request->district,
          'city'=>$request->city,
          'state'=>$request->state,
          'comp'=>$request->comp,
          'status'=>'Active',
          'type'=>'User',
      ]);

      if($cad){
          return redirect('users');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user = $this->objUser->find($id);
      return view('show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = $this->objUser->find($id);
      return view('edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->objUser->where(['id'=>$id])->update([
          'name'=>$request->name,
          'email'=>$request->email,
          'rg'=>$request->rg,
          'cpf'=>$request->cpf,
          'birthDate'=>$request->birthDate,
          'gender'=>$request->gender,
          'phone'=>$request->phone,
          'cell'=>$request->cell,
          'cep'=>$request->cep,
          'address'=>$request->address,
          'number'=>$request->number,
          'district'=>$request->district,
          'city'=>$request->city,
          'state'=>$request->state,
          'comp'=>$request->comp,
          'status'=>$request->status,
          'type'=>$request->type,
      ]);
      return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $del=$this->objUser->destroy($id);
      return($del)?"sim":"não";
    }
}
