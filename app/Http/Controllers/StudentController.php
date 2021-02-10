e<?php

  namespace App\Http\Controllers;

  use App\Student;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\Auth;

  class StudentController extends Controller
  {
    // protected $noUrutCasis = 20210000; //diambil dari tahun ajaran

    // simpan ke database --------------------------------------------
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
      $students = Student::all();
      // dd($students[0]->biodata['nama_ayah']);

      return view('siswa', ["students" => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('create', [
        'religions' => $this->religions,
        'vocations' => $this->vocations
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      dd($request->jk);
      // Validasi
      $request->validate([
        'nama' => 'required',
        'tpt_lahir' => 'required',
        'tgl_lahir' => 'required',
        'alamat' => 'required',
        'asal_sekolah' => 'required',
        'jk' => 'required'
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
        'nama' => $request->nama,
        'tgl_lahir' => $request->tgl_lahir,
        'tpt_lahir' => $request->tpt_lahir,
        'jk' => $request->jk,
        'alamat' => $request->alamat, //diisi kampung/dusun, rt, rw
        'rt' => $request->rt, //diisi kampung/dusun, rt, rw
        'rw' => $request->rw, //diisi kampung/dusun, rt, rw
        'prov' => $request->prov, //dari database indonesia
        'kab' => $request->kab, //dari database indonesia
        'kec' => $request->kec, //dari database indonesia
        'desa' => $request->desa, //dari database indonesia
        'kodepos' => $request->kodepos, //dari database indonesia
        'nik' => $request->nik,
        'agama' => $request->agama, //dari databsase indonesia
        'pekerjaan' => "pelajar", //dari database indonesia
        'sekolah' => $request->asal_sekolah, //diisi sekolah terakhir diambil dari database indonesia
        'foto' => $request->jk = "P" ? 'img/no_image_m.svg' : 'img/no_image_f.png',
      ]);
      $uname = strtolower(str_replace(" ", "", $request->nama));
      $user = $student->user()->create([
        // $user = User::create([
        'name' => $request->nama,
        'username' => $uname,
        'password' => bcrypt('12345'),
        // 'user_type' => 5
      ]);

      $user->assignRole('casis');
      Auth::login($user);
      return redirect('/home');

      // Tambahkan event dan Listener
      // ketika dibuat user diriderect ke halaman dashboard
      // admin mendapat informasi jika ada siswa baru yang mendaftar
      // return redirect('/siswa')->with('status', 'Data siswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
      return view('edit', [
        'student' => $student,
        'religions' => $this->religions,
        'vocations' => $this->vocations
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
      // dd($request);
      // cek apakah jurusan berubah?
      $studentUpadate = Student::find($student->id);

      $studentUpadate->jurusan = $request->jurusan;
      $studentUpadate->tgl_masuk = $request->tgl_masuk;
      $studentUpadate->nisn = $request->nisn;
      $studentUpadate->nis = $request->nis;
      // $studentUpadate->status = $request->status;
      $studentUpadate->nama_ayah = $request->nama_ayah;
      $studentUpadate->nama_ibu = $request->nama_ibu;
      $studentUpadate->nama_wali = $request->nama_wli;
      $studentUpadate->save();

      $studentUpadate->biodata()
        ->update([
          'nama' => $request->nama,
          'tgl_lahir' => $request->tgl_lahir,
          'tpt_lahir' => $request->tpt_lahir,
          'jk' => $request->jk,
          'alamat' => $request->alamat, //diisi kampung/dusun, rt, rw
          'rt' => $request->rt, //diisi kampung/dusun, rt, rw
          'rw' => $request->rw, //diisi kampung/dusun, rt, rw
          'prov' => $request->prov, //dari database indonesia
          'kab' => $request->kab, //dari database indonesia
          'kec' => $request->kec, //dari database indonesia
          'desa' => $request->desa, //dari database indonesia
          'kodepos' => $request->kodepos, //dari database indonesia
          'nik' => $request->nik,
          'agama' => $request->agama, //dari databsase indonesia
          'pekerjaan' => "pelajar", //dari database indonesia
          'sekolah' => $request->asal_sekolah, //diisi sekolah terakhir diambil dari database indonesia
        ]);
      return redirect('/siswa')->with('status', 'Data siswa berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
      $studentDelete = Student::find($student->id);
      $biodata = $studentDelete->biodata;
      $userStudent = $studentDelete->user;
      if ($biodata !== null) {
        # code...
        $userStudent->delete();
        $biodata->delete();
      }
      $studentDelete->delete();
      return redirect('/siswa')->with('status', 'Data Siswa Berhasil dihapus!');
    }
  }
