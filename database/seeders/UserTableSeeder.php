<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\{ Role, Permission };

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create([
            'name' => 'Administrador',
            'guard_name' => 'Acceso total al sistema',
        ]);
        $role->permissions()->sync(Permission::all());
        $role = Role::create([
            'name' => 'Suspendidos',
            'guard_name' => 'Sin acceso al sistema',
        ]);
        $role = Role::create([
            'name' => 'Auditor',
            'guard_name' => 'Puede ver o Generar reportes de los modulos',
        ]);
        $role->permissions()->sync([1, 2, 3, 4, 5, 10, 15, 24,25,26,27,29,30]);
        $role = Role::create([
            'name' => 'Coordinador',
            'guard_name' => "Asignado a los Coordinadores: &nbsp; Permite: Crear, actualizar desactivar.",
        ]);
        $role = Role::create([
            'name' => 'Inquilinos',
            'guard_name' => 'Asignado a los Inquilinos: &nbsp; Permite: Crear, actualizar.',
        ]);
        $role->permissions()->sync([1, 2, 3, 4, 5]);
        $user = User::create([
            'name' => 'ISMAEL E. LASTRE ALVAREZ',
            'email' => 'ismaelfac@gmail.com',
            'password' => bcrypt('BrwQ12-123'),
            'is_active' => true,
        ]);
        $role = Role::find(1);
        $user->roles()->sync($role);
        $user = User::create([
            'name' => 'VANESSA DE LAS SALAS',
            'email' => 'vdelassalas@aliadosinmobiliariossa.com',
            'password' => bcrypt('123'),
            'is_active' => true,
        ]);
        $role = Role::find(3);
        $user->roles()->sync($role);
        $user = User::create([
            'name' => 'SUAREZ RANGEL MARIA ',
            'email' => 'suarez@mail.com',
            'password' => bcrypt('123'),
            'is_active' => true,
        ]);
        $role = Role::find(5);
        $user->roles()->sync($role);
        $user = User::create([
            'name' => 'RINCON MEDINA ARIANA ',
            'email' => 'mail@mail.com',
            'password' => bcrypt('123'),
            'is_active' => true,
        ]);
        $role = Role::find(5);
        $user->roles()->sync($role);
        $user = User::create([
            'name' => 'ESTRUCTURACIONES Y ESTRATEGIAS ',
            'email' => 'correo@mail.com',
            'password' => bcrypt('123'),
            'is_active' => true,
        ]);
        $role = Role::find(5);
        $user->roles()->sync($role);
    }
}
