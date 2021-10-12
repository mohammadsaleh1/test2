<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceRequest;
use App\Models\Invoice;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function create()
    {
        $products = Product::all();
        return view('Invoice.Add', compact('products'));
    }

    public function store(InvoiceRequest $request)
    {
     /*    DB::beginTransaction();

        try { */
            $invoice = Invoice::create([
                'invoice_number'=> $request->invoice_number,
                'patient_name'  => $request->patient_name,
                'hospital_name' => $request->hospital_name,
                'doctor_name'   => $request->doctor_name,
                'tech_name'     => $request->tech_name,
                'date'          => $request->date,
            ]);

            foreach($request->product as $prod){
                $invoice->products()->attach($prod['product_id'],
                [
                    'quantity'=>$prod['quantity'],
                    'price'=>$prod['price'],
                    'discount'=>$prod['discount'],
                    'total'=>$prod['total']
                ]);

            }

        /*     DB::commit();

        } catch (Exception $ex) { 
            DB::rollBack();
            return back()->with('error', 'Invoice Not add');

        } */
        return back()->with('success', 'Succesfully Added');
    }
}
