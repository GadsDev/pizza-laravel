<?php

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'telephone'      => '98203391',
            'name'     => 'Pedro Da Silva Ferro',
        ]);
    }
}
