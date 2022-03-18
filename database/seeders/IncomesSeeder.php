<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Models\Income;


class IncomesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Income();
        $p->value = 1000;
        $p->user_id = 1;
        $p->income_category_id = 1;
        $p->save();

        $p = new Income();
        $p->value = 2000;
        $p->user_id = 1;
        $p->income_category_id = 2;
        $p->save();

        $p = new Income();
        $p->value = 5000;
        $p->user_id = 2;
        $p->income_category_id = 1;
        $p->save();

    }
}
