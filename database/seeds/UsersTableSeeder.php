<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array(
            array(
                'name'=> 'Admin ',
                'email'=>'admin@employ.com',
                'password'=>Hash::make('admin@bussiness.com'),
                'role'=>'admin',
                'status'=>'active'

            ),

            array(
                'name'=> 'Employee',
                'email'=>'employee@bussiness.com',
                'password'=>Hash::make('employee@bussiness.com'),
                'role'=>'employ',
                'status'=>'active'

            ),

            array(
                'name'=> 'Chef',
                'email'=>'chef@bussiness.com',
                'password'=>Hash::make('chef@bussiness.com'),
                'role'=>'chef',
                'status'=>'active'

            )
        );

        foreach ($array as $user_data){
            $user = User::where('email',$user_data['email'])->first();
            if(!$user) {
                $user = new User();
            }

            $user->fill($user_data);
            $user->save();

        }
    }
}
