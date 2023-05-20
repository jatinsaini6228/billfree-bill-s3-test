<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
   
    public function data()
    {
        return [
            [
                "key" => "0",
                "name" => "First_Invoice",
                "data" => "This is first invoice"
            ], 
            [
                "key" => "1",
                "name" => "Second Invoice",
                "data" => "This is Second Invoice invoice"
            ]
        ];
    }        

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $invoices = $this->data();
        return json_encode($invoices[1]);
    }


}
