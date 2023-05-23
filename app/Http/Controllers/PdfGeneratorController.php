<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;
use Aws\S3\S3Client;
use Dompdf\Dompdf;
use Aws\Exception\AwsException;

use App\Http\Controllers\AwsStorageController;

class PdfGeneratorController extends Controller
{

    public function index($layout = 0, $key = 0) 
    {
        $AwsStorageController = new AwsStorageController;
        $data = [];
        // Create a new instance of Dompdf
        $pdf = PDF::loadView('invoices.invoice'.$layout, $data)->stream('invoice.pdf');

        // Generate a unique file name
        $fileName = uniqid('pdf_') . '.pdf';

        // Create an instance of the AWS S3 client
        $s3 = $AwsStorageController->s3Client;

        // Upload the PDF to AWS S3
        $s3->putObject([
            'Bucket' => config('filesystems.disks.s3.bucket'),
            'Key' => $fileName,
            'Body' => $pdf,
            'ContentType' => 'application/pdf',
        ]); 

        $s3Uploadedfile = $AwsStorageController->read($fileName);  // Calling file reading function from Aws Controller


        return json_encode($s3Uploadedfile);

    }




}
