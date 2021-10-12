<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $rules = [
            'invoice_number' => 'required|unique:invoices,invoice_number',
            'patient_name' => 'required|min:2|max:30',
            'tech_name' => 'required|min:2|max:30',
            'hospital_name' => 'required|min:2|max:30',
            'doctor_name' => 'required|min:2|max:30',
            'date' => 'required',

            'product' => 'required|array|min:1',
            'product.*.product_id' =>'required|exists:products,id',
            'product.*.quantity' =>'required|numeric',
            'product.*.price'  =>'required|numeric',
            'product.*.discount' =>'required|numeric',
            'product.*.total' => 'required|numeric'
        ];
        
        return $rules;
    }
}
