<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SistemasController extends Controller
{
    public function index()
    {
        
        $data = DB::select('SELECT * FROM sistemas');
        
        return view('SuperAdmin.Sistemas.Sistemas',compact('data'));
    }
    public function store(Request $req)
    {
     $id = DB::table('sistemas')->insertGetId(
                [
                "nombre" => $req->nombre,
                 "url" => $req->url,
                 "estatus" => $req->estatus,
                 "created_at" =>  \Carbon\Carbon::now(),
                 "updated_at" => \Carbon\Carbon::now()
                 ]
        );

        return redirect()->route('sistemas.index')
                        ->with('success','Product created successfully.');
    }
}
