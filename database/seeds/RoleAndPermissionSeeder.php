<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $role = [
        'admin',
        'operator',
        'guru',
        'siswa',
        'casis'
    ];
    protected $permission = [
        'menu admin',
        'menu operator',
        'menu guru',
        'menu siswa',
        'menu casis'
    ];
    public function run()
    {
        for ($i = 0; $i < count($this->role); $i++) {
            Role::create([
                'name' => $this->role[$i],
                'guard_name' => 'web',
            ]);
        }
        for ($i = 0; $i < count($this->permission); $i++) {
            Permission::create([
                'name' => $this->permission[$i],
                'guard_name' => 'web'
            ]);
        }
    }
}
