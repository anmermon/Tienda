<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
        	'name'		=> 'andre',
        	'last_name'	=> 'vilca',
        	'email'		=> 'andre.vilca@outlook.com',
        	'user'		=> 'andrev',
        	'password'	=> \Hash::make('12345'),
        	'type'		=> 'admin',
        	'active'	=> 1,
        	'addres'	=> 'Jr labayequ 662 puno',
        	'created_at'=> new DateTime,
        	'updated_at'=> new DateTime
        ],
        [
        	'name'		=> 'mercedes',
        	'last_name'	=> 'aroapaza',
        	'email'		=> 'anime.alss@gmail.com',
        	'user'		=>'mercedesa',
        	'password'	=> \Hash::make('12345'),
        	'type'		=> 'user',
        	'active'	=> 1,
        	'addres'	=> 'Jr labayequ 662 puno',
        	'created_at'=> new DateTime,
        	'updatde_at'=> new DateTime
        ],


    );
        User::insert($data);
    }
}
