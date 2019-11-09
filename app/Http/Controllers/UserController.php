<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Alert;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('users')->get();
        return view('users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
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
        $data = DB::table('users')->where('id', $id)->first();
        return view('users.create', compact('data'));
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
        $valid = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($valid->fails()) {
            Alert::info("Nama Masih Kosong", "Info");
            return redirect()->back();
        } else {
            $trx = DB::transaction(function () use ($request, $id) {
                try {
                    $post = DB::table('users')->where('id', $id)->update([
                        'name' => $request->name
                    ]);

                    if ($post) {

                    } else {
                        
                    }
                } catch (\Exception $e) {
                    DB::rollback();
                    Alert::error($e->getMessage(), "Error");
                    return redirect()->back();
                }
            });

            return $trx;
        }
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
        $del = DB::table('users')->where('id', base64_decode($id))->delete();
        if ($del) {
            Alert::success("User Berhasil Dihapus", "Success");
            return redirect()->back();
        } else {
            Alert::error("User Gagal Dihapus", "Error");
            return redirect()->back();
        }
    }
}
