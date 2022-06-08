<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
        	'site_name' => 'Jibika',
        	'contact_number' => '025-421165',
        	'contact_email' => 'jsaccos14@gmail.com',
        	'address' =>  'Itahari, Sunsari'
        ]);
    }
}
