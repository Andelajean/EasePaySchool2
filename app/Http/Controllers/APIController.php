<?php

namespace App\Http\Controllers;

use App\Models\Payement2024;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getPayments(Request $request)
    {
        $ecole = $request->input('account_holder');
        $classe = $request->input('classe');

        $payments = Payement2024::where('account_holder', $ecole)
                                 ->where('classe', $classe)
                                 ->get();

        return response()->json($payments);
    }
}
