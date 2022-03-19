<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Expense;
use App\Models\Income;
use App\Models\User;
use App\Models\IncomeCategory;
use App\Models\ExpenseCategory;


class AccountController extends Controller
{



    public function findCategory(Request $request){


        if ($request->id === "1") {
            $data=IncomeCategory::all();

        }elseif ($request->id === "2") {
            $data=ExpenseCategory::all();

        }else{
            $data=null;
        }

        return response()->json($data);


	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $incomes = $user->incomes()
        ->orderBy('created_at', 'desc')->get();
        ;

        $expenses = $user->expenses()
        ->orderBy('created_at', 'desc')->get();
        ;

        $collections=collect(array_merge($incomes->all(),$expenses->all()))->sortByDesc('created_at');

        //$this->limitDate($collections);

        //$collections = $incomess->merge($expensess)->sortByDesc('user_id');

       return view('account.index', compact('collections', 'user'));
    }


    public function limitDate($collection){
         dd($collection);



    }








}
