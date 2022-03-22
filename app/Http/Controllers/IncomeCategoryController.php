<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomeCategory;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\IncomeCategoryRequest;


class IncomeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $incomesCategories = IncomeCategory::all();

        return view('incomes-categories.index', compact('incomesCategories', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incomes-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IncomeCategoryRequest $request)
    {
        $incomeCategory = new IncomeCategory();
        $incomeCategory->fill($request->input());
        $incomeCategory->save();

        return redirect(route('welcome'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IncomeCategory  $incomeCategory
     * @return \Illuminate\Http\Response
     */
    public function show(IncomeCategory $incomeCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IncomeCategory  $incomeCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(IncomeCategory $incomeCategory)
    {
        $user = Auth::user();
        /* if ($user->user_id === 1 || $user->user_id === 2) { */
            return($incomeCategory);
            return view('incomes-categories.edit', compact('incomeCategory'));
        /* }else {
            return redirect(route('account', $user));
        } */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IncomeCategory  $incomeCategory
     * @return \Illuminate\Http\Response
     */
    public function update(IncomeCategoryRequest $request, IncomeCategory $incomeCategory)
    {
        $user = Auth::user();
        $incomeCategory->fill($request->input());
        $incomeCategory->save();

        return redirect(route('incomesCategories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IncomeCategory  $incomeCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(IncomeCategory $incomeCategory)
    {

        $incomeCategory->delete();

        return redirect(route('incomesCategories.index'));
    }
}
