<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store = \App\Models\Store::create([
            'name' => 'The Great Burger',
            'phone' => '+55 (41) 99749-8795',
            'address' => 'Rua Francisco Dal Negro',
            'number' => '3057',
            'postcode' => '83025320',
            'neighborhood' => 'Santo Antônio',
            'city' => 'São José dos Pinhais',
            'state' => 'Paraná',
        ]);

        $store->users()->create([
            'name' => 'Lucas Kaiut',
            'email' => 'lucas.kaiut@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
