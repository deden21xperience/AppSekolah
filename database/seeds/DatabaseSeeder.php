<?php

use App\TataUsaha;
use App\User;
use Database\Seeders\PermissionsDemoSeeder;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(BiodataSeeder::class);
        // $this->call(TataUsahaSeeder::class);
        // $this->call(PermissionsDemoSeeder::class);
        // $this->call(TeacherSeeder::class);
        // $this->call(StudentSeeder::class);


        Permission::create(['name' => 'create data']);
        Permission::create(['name' => 'read data']);
        Permission::create(['name' => 'update data']);
        Permission::create(['name' => 'delete data']);
        Permission::create(['name' => 'edit data']);

        // gets all permissions via Gate::before rule; see AuthServiceProvider
        $role1 = Role::create(['name' => 'super-admin']);

        // create roles and assign existing permissions
        $role2 = Role::create(['name' => 'operator']);
        $role2->givePermissionTo('read data');
        $role2->givePermissionTo('update data');
        $role2->givePermissionTo('delete data');
        $role2->givePermissionTo('edit data');

        $role3 = Role::create(['name' => 'casis']);
        $role3->givePermissionTo('read data');
        $role3->givePermissionTo('update data');
        $role3->givePermissionTo('edit data');

        // create demo users superadmin
        // $tataUsaha1 = factory(App\TataUsaha::class)->create();
        // $tataUsaha1->each(function ($tataUsaha1) {
        //     $tataUsaha1->biodata()->save(factory(\App\Biodata::class)->make());
        //     $tataUsaha1->user()->save(factory(\App\User::class)->make());
        // });
        // $user = App\User::find($tataUsaha1->user['id']);
        // $user->assignRole($role1);

        // // // create demo users operator
        // $tataUsaha = factory(App\TataUsaha::class)->create();
        // $tataUsaha->each(function ($tataUsaha) {
        //     $tataUsaha->biodata()->save(factory(\App\Biodata::class)->make());
        //     $tataUsaha->user()->save(factory(\App\User::class)->make());
        // });
        // $user = App\User::find($tataUsaha->user['id']);
        // $user->assignRole($role2);

        // // // create demo users casis
        // $student = factory(App\Student::class)->create();
        // $student->each(function ($student) {
        //     $student->biodata()->save(factory(\App\Biodata::class)->make());
        //     $student->user()->save(factory(\App\User::class)->make());
        // });
        // $user = App\User::find($student->user['id']);
        // $user->assignRole($role3);
    }
}
