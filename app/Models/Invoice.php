<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

    protected $fillable = ['invoice_number','patient_name','hospital_name','doctor_name','tech_name','date'];


   
    
    public function products()
    {
        
        return $this->belongsToMany(Product::class, 'invoice_product')->withPivot('quantity','price','discount','total');
    }
}
