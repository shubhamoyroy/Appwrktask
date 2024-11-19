<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transactionmodel;

class Transcontroller extends Controller
{
    public function showform()
    {
        return view('makeTansaction');
    }
    public function makeTans(Request $request) {
        $message = ([
            't_type.required' => "Select any type",
            'amount_col.required' => "Enter any amount",
            'amount_col.numeric' => "Enter only numeric value",
            'des_col.required' => "Enter description",
        ]);
        $request->validate([
            't_type' => 'required',
            'amount_col' => 'required|numeric',
            'des_col' => 'required|string'
        ],$message);

        $type = $request->t_type;
        $amount = $request->amount_col;
        $desc = $request->des_col;
        $currentamount = Transactionmodel::latest()->value('running_balance');
        if($type == "credit"){
            $credit_amm = $amount;
            $finalamount = $currentamount + $amount;
        }
        else{
            $credit_amm = 0;
            $debit_amm = $amount;
            $finalamount = $currentamount - $amount;
        }
        Transactionmodel::create([
            'amount' => $amount,
            'running_balance' => $finalamount,
            'description' => $desc,
            'type' => $type
        ]);
        return redirect()->route('showform')->with('success','Your form is submitted successfully' );
    }

    public function showtransaction() {
        $alltransaction = Transactionmodel::latest()->get();
        return view('transactionshow',compact('alltransaction'));
    }
}
