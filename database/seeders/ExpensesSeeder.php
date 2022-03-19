<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Models\Expense;

class ExpensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Expense();
        $p->value = 3000;
        $p->user_id = 1;
        $p->expense_category_id = 1;
        $p->created_at = date("2022-03-15 01:52:43");
        $p->save();

        $p = new Expense();
        $p->value = 2000;
        $p->user_id = 1;
        $p->expense_category_id = 1;
        $p->created_at = date("2022-03-17 01:52:43");
        $p->save();

        $p = new Expense();
        $p->value = 6000;
        $p->user_id = 2;
        $p->expense_category_id = 1;
        $p->created_at = date("2022-03-18 01:52:43");
        $p->save();
    }
}
