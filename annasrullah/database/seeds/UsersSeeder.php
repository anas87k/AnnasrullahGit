<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Membuat role admin
        $adminRole = new Role();
        $adminRole->username = "qW3rtY";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //Membuat role member
        $memberRole = new  Role();
        $memberRole->username = "m3mBer";
        $memberRole->display_name = "Member";
        $memberRole->save();

        //Membuat sample admin
        $admin = new User();
        $admin->nik = '3321120406000001';
        $admin->username = 'Admin1';
        $admin->nama_lengkap = 'Administrator';
        $admin->email = 'admin@larakod.com';
        $admin->password = 'admin12';
        $admin->save();
        $admin->attachRole($adminRole);

        //Membuat sample user
        $member = new User();
        $member->nik = '3321120406000002';
        $member->username = 'member1';
        $member->nama_lengkap = 'Member';
        $member->email = 'member@larakod.com';
        $member->password = 'member12';
        $member->save();
        $member->attachRole($memberRole);
    }
}
