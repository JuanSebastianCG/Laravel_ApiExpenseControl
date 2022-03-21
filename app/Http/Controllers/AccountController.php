<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Expense;
use App\Models\Income;
use App\Models\User;
use App\Models\IncomeCategory;
use App\Models\ExpenseCategory;
use Carbon\Carbon;



class AccountController extends Controller
{
    public function index(Request $request)
    {

        $user = Auth::user();
        $expenses = $user->expenses()
        ->orderBy('created_at', 'desc')->get();

        $incomes = $user->incomes()
        ->orderBy('created_at', 'desc')->get();

        $vista = $request->get('status_view');
        $category = $request->get('category');

        $startDate = date($request->get('startDate'));
        $endDate = date($request->get('endDate'));

        $incomeCategory = IncomeCategory::all();
        $expenseCategory = ExpenseCategory::all();

        if ($vista) {
            if ($vista === "1") {
                $collections = $incomes;
                if ($category) {
                    $collections = $incomes->where('income_category_id',  "$category");
                }

            }elseif ($vista === "2") {
                $collections = $expenses;
                if ($category) {
                    $collections = $incomes->where('income_category_id',  "$category");
                }
            }

        }else {
            $collections=collect(array_merge($incomes->all(),$expenses->all()))->sortByDesc('created_at');
        }

        if ($startDate &&  $endDate) {

           $collections = $collections->whereBetween('created_at', [$startDate, $endDate]);
        }

        $SumIncomes = $this->totalSalary($incomes);
        $SumExpenses = $this->totalSalary($expenses);
        $salary = $this->totalSalary($collections);

       return   view('account.index', compact('collections', 'user', 'salary', 'SumIncomes', 'SumExpenses'));

}


    public function totalSalary($collections){
        $salary = 0;

        foreach($collections as $c)
        {
          if($c instanceof Income){

            $salary += $c->value;

          }elseif($c instanceof Expense){

            $salary -= $c->value;

          }
        }
        return $salary;
    }


    public function findCategories(Request $request){

        $data =  NULL;
		if ($request->id === "1") {
            $data = IncomeCategory::all();
        }else if ($request->id === "2") {
            $data = ExpenseCategory::all();
        }

    	return response()->json($data);
	}




}
