<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'Administrador']);//rol de administrador
        $func = Role::create(['name' => 'Funcionario']);//rol de funcionario
        $egre = Role::create(['name' => 'Egresado']);//rol de egresado

        Permission::create(['name' => 'admin.users.show'])//administradores ver 
        ->syncRoles([$admin, $func, $egre]);
        Permission::create(['name' => 'funcionario.users.show'])//funcionarios ver
        ->syncRoles([$func]);
        Permission::create(['name' => 'egresado.users.show'])//egresados ver 
        ->syncRoles([$egre]);


        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


    }
}
