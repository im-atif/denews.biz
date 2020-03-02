<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
        	'site_name'			=>	'DeNews',
        	'contact_number'	=>	'+92 (302) 469 8165',
        	'contact_email'		=>	'contact@denews.biz',
        	'address'			=>	'Lahore, Punjab, Pakistan'
        ]);
    }
}
