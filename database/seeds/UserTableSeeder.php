<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_patient = Role::where('name', 'patient')->first();
        $role_doctor  = Role::where('name', 'doctor')->first();
        $role_admin  = Role::where('name', 'admin')->first();

    $patient = new User();
    $patient->name = 'Juan Dela Cruz';
    $patient->email = 'patient1@gmail.com';
    $patient->password = bcrypt('secret');
    $patient->save();
    $patient->roles()->attach($role_patient);


    $doctor = new User();
    $doctor->name = 'Juan Dela Torre';
    $doctor->email = 'doctor1@gmail.com';
    $doctor->password = bcrypt('secret');
    $doctor->save();
    $doctor->roles()->attach($role_doctor);

    $admin = new User();
    $admin->name = 'Solaris Admin';
    $admin->email = 'admin@gmail.com';
    $admin->password = bcrypt('secret');
    $admin->save();
    $admin->roles()->attach($role_admin);
    }
}
