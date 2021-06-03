<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Administrador',
            'guard_name' => 'Acceso total al sistema',
        ]);
        Role::create([
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
            'guard_name' => 'Asignado a los Coordinadores: <br> Permite: Crear, actualizar desactivar.',
        ]);
        $role = Role::create([
            'name' => 'Inquilinos',
            'guard_name' => 'Asignado a los Inquilinos: <br> Permite: Crear, actualizar.',
        ]);
        $role->permissions()->sync([1, 2, 3, 4, 5]);
        $user1 = User::create([
            'name' => 'ISMAEL E. LASTRE ALVAREZ',
            'email' => 'ismaelfac@gmail.com',
            'password' => bcrypt('BrwQ12-123'),
            'is_active' => true,
        ]);
        $user1->assignRole('Administrador'); //update roles
        $user2 = User::create([
            'name' => 'VANESSA DE LAS SALAS',
            'email' => 'vdelassalas@aliadosinmobiliariossa.com',
            'password' => bcrypt('123'),
            'is_active' => true,
        ]);
        $user2->assignRole('Auditor'); //update roles
        $user3 = User::create([
            'name' => 'SUAREZ RANGEL MARIA ',
            'email' => 'suarez@mail.com',
            'password' => bcrypt('123'),
            'is_active' => true,
        ]);
        $user3->assignRole('Coordinador'); //update roles 3, 4 en usuario3
        $user4 = User::create([
            'name' => 'RINCON MEDINA ARIANA ',
            'email' => 'mail@mail.com',
            'password' => bcrypt('123'),
            'is_active' => true,
        ]);
        $user4->assignRole('Coordinador'); //update roles 3, 4 en usuario3
        $user5 = User::create([
            'name' => 'ESTRUCTURACIONES Y ESTRATEGIAS ',
            'email' => 'correo@mail.com',
            'password' => bcrypt('123'),
            'is_active' => true,
        ]);
        $user5->assignRole('Coordinador'); //update roles 3, 4 en usuario3
    }
}
