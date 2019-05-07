<?php

use Illuminate\Database\Seeder;

class BillingGenSumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('billing_generate_sum')->insert([
            'id_bg_sum' => '1',
            'id_user' => '1',
			'customer_ref' => '21',
			'kl_start_date' => '2018-02-21 00:00:00',
		 	'kl_end_date' => '2020-02-21 00:00:00',
		 	'product' => 'Fiber Optic',
		 	'monthly_reccuring_charge' => '125000000',
		 	'usage_charge' => '27500000',
		 	'one_time_charge' => '12829100',
		 	'termin_charge' => '5000000',
		 	'total_charge' => '170329100',
		 	'bill_period' => '2019-11-05 00:00:00',
		 	'partner_name' => 'Biznet'
		 ]); 

		 DB::table('billing_generate_sum')->insert([
            'id_bg_sum' => '2',
            'id_user' => '1',
			'customer_ref' => '5',
			'kl_start_date' => '2017-04-17 00:00:00',
		 	'kl_end_date' => '2019-04-17 00:00:00',
		 	'product' => 'Cable TCP',
		 	'monthly_reccuring_charge' => '8000000',
		 	'usage_charge' => '700000',
		 	'one_time_charge' => '2700000',
		 	'termin_charge' => '124000',
		 	'total_charge' => '1152400',
		 	'bill_period' => '2019-09-05 00:00:00',
		 	'partner_name' => 'Kencana Indonesia'
		 ]); 

		 DB::table('billing_generate_sum')->insert([
            'id_bg_sum' => '3',
            'id_user' => '13',
			'customer_ref' => '8',
			'kl_start_date' => '2018-02-21 00:00:00',
		 	'kl_end_date' => '2021-02-21 00:00:00',
		 	'product' => 'Network Enhance',
		 	'monthly_reccuring_charge' => '15000000',
		 	'usage_charge' => '670000',
		 	'one_time_charge' => '1255000',
		 	'termin_charge' => '890600',
		 	'total_charge' => '17815600',
		 	'bill_period' => '2019-10-21 00:00:00',
		 	'partner_name' => 'Buzz Flexi'
		 ]); 
    }
}
