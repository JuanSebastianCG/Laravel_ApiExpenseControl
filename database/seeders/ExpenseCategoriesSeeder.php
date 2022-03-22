<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Models\ExpenseCategory;

class ExpenseCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new ExpenseCategory();
        $p->categoryName = "comida";
        $p->save();

        $p = new ExpenseCategory();
        $p->categoryName = "hogar";
        $p->save();

        $p = new ExpenseCategory();
        $p->categoryName = "hogar";
        $p->save();

    }
}
