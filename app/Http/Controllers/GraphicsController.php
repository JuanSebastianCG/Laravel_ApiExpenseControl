<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Expense;
use App\Models\Income;
use App\Models\User;
use App\Models\IncomeCategory;
use App\Models\ExpenseCategory;



class GraphicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('graphics.graphics',  compact('user'));
    }
    public function sendData(Request $request ){
        $user = Auth::user();



        $response[0] = IncomeCategory::all();
        $response[1] = ExpenseCategory::all();
        $response[3] = $user->expenses()
        ->orderBy('created_at', 'desc')->get();;

        $response[2] = $user->incomes()
        ->orderBy('created_at', 'desc')->get();


    	return response()->json($response);

    }
}
