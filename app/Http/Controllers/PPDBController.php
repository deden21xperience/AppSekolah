<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;
use Spatie\Permission\Models\Role;

class PPDBController extends Controller
{
    // pindahkan ke database (dimasukan ke profile sekolah)-----------------------
    protected $vocations = [
        "tkj" => 'TKJ - Teknik Komputer Jaringan',
        "tbsm" => 'TBSM - Teknik Bisnis Sepeda Motor',
        "tkr" => 'TKR - Teknik Kendaraan Ringan',
        "otkp" => 'OTKP',
        "ak" => 'AK - Akuntansi',
    ];
    protected $religions = [
        'islam',
        'kristen protestan',
        'kristen katolik',
        'budha',
        'hindu',
        'konghucu'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('from PpdbController@index');
        $casis = Student::where('status', 0)->get();
        // dd($casis);
        return view('PPDB.data_casis', ['casis' => $casis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // send current url
        $url = url()->current();
        // dd($url);
        return view('create', ['vocations' => $this->vocations, 'religions' => $this->religions, 'url' => $url]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // $retVal = ($request->jk === "L") ? 'img/no_image_m.svg' : 'img/no_image_f.png';
        // dd($retVal);
        // Validasi
        // $admin = User::role('admin')->get()->toArray();
        // dd($admin);
        // $admin[0]->notify(new \App\Notifications\InvoicePaid());
        // die;
        $request->validate([
            'nama' => 'required',
            'tpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'jurusan' => 'required',
            'password1' => 'required',
            'password2' => 'required',
        ]);
        // $tgl = DateTime::createFromFormat();
        // var_dump($tgl);
        // die;
        // dd(date_format($tgl, "dmy"));
        // menentukan no urut jurusan untuk siswa baru
        $studentCount = Student::where('status', 0)->count();
        // $noUrutJurusan = $request->jurusan . "2122" . str_pad($studentCount, 3, "0", STR_PAD_LEFT);
        // dd($noUrutJurusan);


        // insert data ke database
        $student = new Student;
        $student->jurusan = $request->jurusan;
        $student->no_pendaftaran = 'PPDB-' . str_pad(++$studentCount, 4, "0", STR_PAD_LEFT);
        $student->save();
        $student->biodata()->create([
            'nama' => trim($request->nama),
            'tgl_lahir' => trim($request->tgl_lahir),
            'tpt_lahir' => trim($request->tpt_lahir),
            'jk' => trim($request->jk),
            'alamat' => trim($request->alamat), //diisi kampung/dusun, rt, rw
            'rt' => trim($request->rt), //diisi kampung/dusun, rt, rw
            'rw' => trim($request->rw), //diisi kampung/dusun, rt, rw
            'prov' => trim($request->prov), //dari database indonesia
            'kab' => trim($request->kab), //dari database indonesia
            'kec' => trim($request->kec), //dari database indonesia
            'desa' => trim($request->desa), //dari database indonesia
            'kodepos' => trim($request->kodepos), //dari database indonesia
            'nik' => trim($request->nik),
            'agama' => trim($request->agama), //dari databsase indonesia
            'pekerjaan' => "pelajar", //dari database indonesia
            'sekolah' => trim($request->asal_sekolah), //diisi sekolah terakhir diambil dari database indonesia
            'foto' => ($request->jk === "L") ? 'img/no_image_m.svg' : 'img/no_image_f.png'
        ]);
        $uname = strtolower(str_replace(" ", "", $request->nama));
        $user = $student->user()->create([
            // $user = User::create([
            'name' => $request->nama,
            'username' => $uname,
            'password' => bcrypt($request->password1),
            'user_type' => 5
        ]);
        // Menambahkan role sebagai casis
        $user->assignRole('casis');
        // $admin = User::role('casis')->get();
        // $admin[0]->notify(new \App\Notifications\InvoicePaid());
        Auth::login($user);
        return redirect('/home');
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
        dd('hello world');
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

    public function casis()
    {
    }
}
