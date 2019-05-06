<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
            'name' => 'Afif',
			'username' => '900231',
			'password' => 'afif',
		 	'last_login' => '2017-08-19 12:17:55',
		 	'role' => 'delivery'
		 ]); 

		 DB::table('users')->insert([
            'id_role' => '2',
            'name' => 'Ann',
			'username' => '900232',
			'password' => 'ann',
		 	'last_login' => '2017-08-19 12:17:55',
		 	'role' => 'partner'
		 ]); 

		 DB::table('users')->insert([
            'id_role' => '3',
            'name' => 'Hilman',
			'username' => '900233',
			'password' => 'hilman',
		 	'last_login' => '2017-08-19 12:17:55',
		 	'role' => 'reviewer'
		 ]); 

		 DB::table('users')->insert([
            'id_role' => '4',
            'name' => 'Hanif',
			'username' => '900234',
			'password' => 'hanif',
		 	'last_login' => '2017-08-19 12:17:55',
		 	'role' => 'evaluator'
		 ]); 

		 DB::table('users')->insert([
            'id_role' => '5',
            'name' => 'Mulyani',
			'username' => '900235',
			'password' => 'mulyani',
		 	'last_login' => '2017-08-19 12:17:55',
		 	'role' => 'super admin'
		 ]); 
    }
}
