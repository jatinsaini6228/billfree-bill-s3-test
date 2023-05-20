<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use PDF;

class PdfGeneratorController extends Controller
{
    public function index($layout, $key, $download = false) 
    {
        
        $data = [
            'pdf'    => true,
            'name'         => 'John Doe'
        ]; 
        
        if($download == false)
        {
            return  PDF::loadView('invoices.invoice'.$layout, $data)->save(public_path().'/pdf/'.date('ymdhis').'_invoice.pdf')->stream('download.pdf');
        }
        else
        {
            $pdf = PDF::loadView('invoices.invoice'.$layout, $data);
        }
    }
}
