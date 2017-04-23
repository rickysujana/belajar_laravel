<?php

use Illuminate\Database\Seeder;

class UserTableSeede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
    		[
    			'name' => 'Ricky',
    			'email' => 'ricky@gmail.com',
    			'password' => \Hash::make('Ricky')
    		],
    		[
    			'name' => 'Sujana',
    			'email' => 'sujana@gmail.com',
    			'password' => \Hash::make('Sujana')
    		]
    	]);
    }
}
