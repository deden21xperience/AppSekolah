<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class IndonesiaController extends Controller
{
    protected $connectionName = 'mysql2';
    public function provinsi()
    {
        $provinsi = DB::connection($this->connectionName)->select('select * from provinces');
        return $provinsi;
    }
    public function kabupaten()
    {
        $kabupaten = DB::connection($this->connectionName)->select("select * from regencies");
        // $kabupaten = DB::connection($this->connectionName)->select("select * from regencies where name='KABUPATEN SUMEDANG'");
        return response()->json($kabupaten, 200);
    }
    public function kecamatan()
    {
        $kecamatan = DB::connection($this->connectionName)->select('select * from districts');
        return $kecamatan;
    }
    public function jobs()
    {
        $jobs = DB::connection($this->connectionName)->select('select * from jobs');
        return $jobs;
    }
    public function job($request)
    {
        $jobs = DB::connection("mysql2")->select("SELECT * FROM jobs WHERE job LIKE '%$request%'");
        // dd($jobs);
        return response()->json($jobs);
    }
}
