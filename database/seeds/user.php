<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         DB::table('users')->insert([
            'id_role' => '1',
            'name' => 'Rektor UI',
			'username' => '1',
			'password' => '1',
		 	'last_login' => '1',
		 	'role' => 'delivery'
		 ]); 

    }
}
