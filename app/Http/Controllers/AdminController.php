<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data = DB::table('user')->get();
            return view('lihat_user',['data' => $data]);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('tambahUser');
        
    }

    public function add_user(Request $request){
        $user = DB::table('user')->get();
        $password = bcrypt($request->password);
        DB::table('user')->insert(['username'=>$request->username,
        'password'=>$password,
        'role'=>$request->role,
        'mall'=>$request->mall]);
        return redirect('/');
    }
    public function edit_user($user){
        $data = DB::table('user')->where('id_user',$user)->get();
        return view('edit_user', ['data'=>$data]);
        }
        public function edit_user_aksi(Request $request){
            $password = bcrypt($request->password);
            DB::table('user')->where('username',$request->username)
            ->update(['username'=>$request->username,
            'password'=>$password,
            'role'=>$request->role]);
            return redirect('/');
            }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
