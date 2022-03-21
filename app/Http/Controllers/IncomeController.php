<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\IncomeCategory;
use Illuminate\Http\Request;
use App\Http\Requests\IncomeRequest;
use Illuminate\Support\Facades\Auth;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = IncomeCategory::All();
        return view('incomes.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IncomeRequest $request)
    {
        $user = Auth::user();
        $income = new Income();
        $income->fill($request->input());
        $income->user_id = Auth::id();
        $income->income_category_id = $request->get('expense_category_id');
        $income->save();

        return redirect(route('account',$user->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit(Income $income)
    {
        $categories = IncomeCategory::All();

        if($income->user_id==Auth::id()){
            return view('incomes.edit', compact('categories', 'income'));
        }
        else{
            return redirect(route('home'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(IncomeRequest $request, Income $income)
    {
        $user = Auth::user();
        $income->fill($request->input());
        $income->save();

        return redirect(route('account',$user->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(Income $income)
    {
        $user = AUTH::user();
        $income->delete();

        return redirect(route('account',$user->id));
    }
}
