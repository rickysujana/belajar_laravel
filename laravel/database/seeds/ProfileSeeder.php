<?php

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Profile::insert([
        	[
        		'nama' => 'Ricky',
	        	'jenis_kelamin' => 'laki-laki',
	        	'alamat' => 'Sumedang',
	        	'no_telp' => '085728778877',
	        	'user_id' => '5'
        	],
        	[
        		'nama' => 'Sujana',
	        	'jenis_kelamin' => 'laki-laki',
	        	'alamat' => 'Bandung',
	        	'no_telp' => '085728778899',
	        	'user_id' => '6'
        	]
        ]);
    }
}
