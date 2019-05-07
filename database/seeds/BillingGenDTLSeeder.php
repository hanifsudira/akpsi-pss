<?php

use Illuminate\Database\Seeder;

class BillingGenDTLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('billing_generate_dtl')->insert([
            'id_bg_dtl' => '5',
			'customer_ref' => '21',
			'kl_start_date' => '2018-02-21 00:00:00',
		 	'kl_end_date' => '2020-02-21 00:00:00',
		 	'product' => 'Fiber Optic',
		 	'monthly_reccuring_charge' => '125000000',
		 	'usage_charge' => '27500000',
		 	'non_reccuring_charge' => '10000000',
		 	'termin_charge' => '5000000',
		 	'total_charge' => '167500000',
		 	'bill_period' => '2019-11-05 00:00:00',
		 	'partner_name' => 'Biznet',
		 	'description' => 'none'
		 ]); 


		 DB::table('billing_generate_dtl')->insert([
            'id_bg_dtl' => '9',
			'customer_ref' => '5',
			'kl_start_date' => '2017-04-17 00:00:00',
		 	'kl_end_date' => '2019-04-17 00:00:00',
		 	'product' => 'Cable TCP',
		 	'monthly_reccuring_charge' => '8000000',
		 	'usage_charge' => '700000',
		 	'non_reccuring_charge' => '5000000',
		 	'termin_charge' => '124000',
		 	'total_charge' => '13824000',
		 	'bill_period' => '2019-09-05 00:00:00',
		 	'partner_name' => 'Kencana Indonesia',
		 	'description' => 'none'
		 ]); 

		 DB::table('billing_generate_dtl')->insert([
            'id_bg_dtl' => '10',
			'customer_ref' => '8',
			'kl_start_date' => '2018-02-21 00:00:00',
		 	'kl_end_date' => '2021-02-21 00:00:00',
		 	'product' => 'Network Enhance',
		 	'monthly_reccuring_charge' => '15000000',
		 	'usage_charge' => '670000',
		 	'non_reccuring_charge' => '8000000',
		 	'termin_charge' => '890600',
		 	'total_charge' => '24560600',
		 	'bill_period' => '2019-10-21 00:00:00',
		 	'partner_name' => 'Buzz Flexi',
		 	'description' => 'none'
		 ]); 
    }
}
