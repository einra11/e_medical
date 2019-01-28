<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    $role_patient = new Role();
    $role_patient->name = 'Patient';
    $role_patient->description = 'A patient user';
    $role_patient->save();

   $role_doctor = new Role();
   $role_doctor->name = 'Doctor';
   $role_doctor->description = 'A doctor user';
   $role_doctor->save();

    $role_admin = new Role();
    $role_admin->name = 'Admin';
    $role_admin->description = 'An Admin user and Super user';
    $role_admin->save();
    }
}
