<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => "rui",
             'email' => "rui@rui.com",
             'password' => Hash::make("rui1234"),
            ],
            ['name' => "emi",
             'email' => "emi@emi.com",
             'password' => Hash::make("emi1234"),
            ],
            ['name' => "kana",
             'email' => "kana@kana.com",
             'password' => Hash::make("kana1234"),
            ],
        ]);
    }
}
