<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Models\IncomeCategory;

class IncomeCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new IncomeCategory();
        $p->categoryName = "salario";
        $p->save();

        $p = new IncomeCategory();
        $p->categoryName = "baloto";
        $p->save();

    }
}
