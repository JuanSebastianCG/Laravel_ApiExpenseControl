<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersSeeder::class]);
        $this->call([IncomeCategoriesSeeder::class]);
        $this->call([ExpenseCategoriesSeeder::class]);
        $this->call([ExpensesSeeder::class]);
        $this->call([IncomesSeeder::class]);
    }
}
