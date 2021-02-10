<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['register' => false]);




/* -----------------TEACHERS ROUTE---------------------*/
// Route::get('/guru', 'TeacherController@index')->name('teachers');



/* -----------------TEACHERS ROUTE---------------------*/
// Route::get('/kelas', function(){})
// Route::view('/kelas', 'classroom');

/* -----------------ATTENDANCE ROUTE---------------------*/
// Route::post('/absensi', 'AttendanceController@store')->name('absensi');

/* ----------------------------------*/
// Route untuk database Indonesia
// todo = buat middleware
// Route::get('/jobs', 'IndonesiaController@jobs');
// Route::get('/job/{id}', 'IndonesiaController@job');
// Route::get('/job', function () {
//     $request = "p";
//     $jobs = DB::connection("mysql2")->select("SELECT * FROM jobs WHERE job LIKE '%$request%'");
//     return $jobs;
// });

Route::view('/vue', 'tes');
Route::get('/tes', function () {

  // echo url()->current();
  // \Carbon\Carbon::setLocale('id');
  // $jam   = Carbon\Carbon::now();

  // echo $jam->format('l d F Y');
  /* --------------------------------------------*/
  // create permission & role -----------------------
  // $users = [
  //   'admin',
  //   'operator',
  //   'guru',
  //   'siswa',
  //   'casis'
  // ];
  // $permisi = [
  //   'menu opearator',
  //   'menu guru',
  //   'menu siswa',
  //   'menu casis',
  // ];
  // for ($i = 0; $i < sizeof($users); $i++) {
  //   # code...
  //   $role = Role::create(['name' => $users[$i]]);
  // }
  // for ($i = 0; $i < count($permisi); $i++) {
  //   # code...
  //   $permission = Permission::create(['name' => $permisi[$i]]);
  // }
  /* --------------------------------------------*/

  // role has permission -----------------------
  // $role = Role::findById(1);
  // for ($i = 1; $i < 4; $i++) {
  //   # code...
  //   $permission = Permission::findById($i);
  //   $role->givePermissionTo($permission);
  //   $permission->syncRoles($role);
  // }
  /* --------------------------------------------*/

  // $role = Role::findById(2);
  // for ($i = 1; $i < 4; $i++) {
  //   # code...
  //   $permision = Permission::findById($i);
  //   $role->givePermissionTo($permision);
  // }

  // // memberikan izin
  // $permision = Permission::findById(1);
  // $casis = User::find(1);
  // $casis->givePermissionTo($permision);
  // // memberikan role
  //   $role = Role::findById(2);
  //   $user = User::find(2);
  //   $casis->givePermissionTo($permision);

  // auth()->user()->assignRole('admin');
  // auth()->user()->givePermissionTo('menu operator');

  // dd(sizeof(auth()->user()->unreadNotifications));
  dd(auth()->user()->role);
});

/* ----------------------------------*/

/* -----------------PPDB ROUTE AS GUEST---------------------*/
Route::view('/', 'ppdb');
Route::get('/daftar', 'PPDBController@create')->name('register_ppdb');
Route::post('/daftar', 'PPDBController@store')->name('store_ppdb');
Route::get('/home', 'HomeController@index')->name('home');

/* -----------------USERS HAS ROLES AND PERMISSIONS---------------------*/
Route::group(['middleware' => ['role:operator']], function () {
  /* -----------------PERMISSIONS ROUTE---------------------*/
  Route::get('/home/permissions', 'PermissionsManagementController@index')->name('show_permissions');
  Route::post('/home/permission/create', 'PermissionsManagementController@store')->name('create_permission');
  Route::delete('/home/permission/{id}', 'PermissionsManagementController@destroy')->name('delete_permission');

  /* -----------------ROLE ROUTE---------------------*/
  Route::get('/home/role', 'RoleManagementController@index')->name('show_roles');
  Route::post('/home/role/create', 'RoleManagementController@store')->name('create_role');
  Route::delete('/home/role/{id}', 'RoleManagementController@destroy')->name('delete_role');
});
Route::get('/home/{profile}/edit', 'HomeController@edit')->name('edit_profile_home');
Route::get('/home/users', 'HomeController@users')->name('home_users');


/* -----------------PPDB ROUTE---------------------*/

Route::get('/casis', 'PPDBController@index')->name('data_ppdb');
// Route::get('/casis/{casis}/edit', 'PPDBController@edit')->name('profile_ppdb');
Route::get('/panitia', 'PPDBController@panitia')->name('panitia_ppdb');
/* -----------------STUDENTS ROUTE---------------------*/
Route::get('/siswa', 'StudentController@index')->name('show_students'); //->middleware('auth');
Route::get('/siswa/create', 'StudentController@create')->name('create_student'); //->middleware('auth');
Route::post('/siswa', 'StudentController@store')->name('store_student'); //->middleware('auth');
Route::delete('/siswa/{student}', 'StudentController@destroy');
Route::get('/siswa/{student}/edit', 'StudentController@edit')->name('edit_student');
Route::patch('/siswa/{student}', 'StudentController@update')->name('update_student');
