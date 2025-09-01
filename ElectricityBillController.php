<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectricityBillController extends Controller
{
    public function compute()
    {
        $customerName = "Kise Sike";
        $customertype = "commercial";
        $consumption = 150;   

        $rpk = 0;
        $fixedcharge = 0;
        $discount = 0;

        switch ($customertype) {
            case "lifeline":
                $rpk = 5.00;
                $fixedcharge = 0;
                $discount = 0.20;
                break;

            case "regular":
                $rpk = 9.50;
                $fixedcharge = 50;
                $discount = 0;
                break;

            case "commercial":
                $rpk = 12.00;
                $fixedcharge = 200;
                $discount = 0.05;
                break;
        }

        $basebill = $consumption * $rpk;

        switch ($customertype) {
            case "lifeline":
                $totabill = $basebill - ($basebill * $discount);
                break;

            case "regular":
                $totabill = $basebill + $fixedcharge;
                break;

            case "commercial":
                $totabill = ($basebill + $fixedcharge) - ($basebill * $discount);
                break;
        }

        $basebillformat = number_format($basebill);
        $totalbillformat = number_format($totabill);

        return view('electricitybills', compact(
            'customerName',
            'customertype',
            'consumption',
            'basebillformat',
            'totalbillformat'
        ));
    }    
}