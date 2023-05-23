<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Aws\S3\S3Client;
use Aws\Exception\AwsException;

class AwsStorageController extends Controller
{

    public function __construct()
    {
        $this->awsRegion = config('app.aws_region');
        $this->awsAccessKey = config('app.aws_key');
        $this->awsSecretKey = config('app.aws_secret');
        $this->awsBucket = config('app.aws_bucket');
        
        $this->awsKey = "uploaded-file.pdf";    // File Name
        
    
        // Create a s3 client
        $this->s3Client  = new S3Client([
            'version' => 'latest',
            'region' => $this->awsRegion,
            'credentials' => [
                'key' => $this->awsAccessKey,
                'secret' => $this->awsSecretKey
            ]
        ]);

    }

    public function index() 
    {
            $fileName = 'uploaded-file.pdf';
            if (Storage::disk('s3')->exists($fileName)) {
                $url = $this->read();
                dd($url);
            } else {
                dd ("Unable to connect to AWS S3 or file does not exist.");
            }
    }


    public function getS3Files($folder = null) 
    {
      
        // Create an S3 client
        $s3 = $this->s3Client;

        // Specify the bucket name
        $bucketName = $this->awsBucket;

        // Create an array to store the file names
        $fileList = [];

        try {
            // Use the listObjectsV2 method to retrieve the list of files
            $objects = $s3->listObjectsV2([
                'Bucket' => $bucketName
            ]);

            if (!isset($objects['Contents']))
            { return "No files, please go to home page and save atlead one pdf."; }


            // Iterate through the objects and store the file names in the array
            foreach ($objects['Contents'] as $object) {
                $fileList[] = $object['Key'];
            }

            
            echo "List of all files in S3 Buket: <b>".$bucketName."</b>";
            echo "<pre>";
            print_r($fileList);
            echo "</pre>";

        } catch (AwsException $e) {
            // Handle any errors
            echo $e->getMessage();
        }

    }

    public function read ($file_name = "uploaded-file.pdf") 
    {

        try {

            if($file_name == null) return ["status" => "error", "message" => "Empty file name provided."];

            $this->awsKey = $file_name;

            $s3Client = $this->s3Client;

            // Retrieve the file from S3
            $result = $s3Client->getObject([
                'Bucket' => $this->awsBucket,
                'Key' => $this->awsKey
            ]);

            // Get the file contents
            $fileContents = $result['Body']->getContents();

            // Generate a pre-signed URL for the file
            $command = $s3Client->getCommand('GetObject', [
                'Bucket' => $this->awsBucket,
                'Key' => $this->awsKey
            ]);

            $request = $s3Client->createPresignedRequest($command, '+5 minutes');
            $presignedUrl = (string)$request->getUri();

            // Open the URL in a new tab using JavaScript
            return ["status" => "success", "message" => "File url is genrated.", "url" => $presignedUrl];
              

           
        } 
        
        catch (AwsException $e) {
            // Handle any errors
            return ["status" => "error", "message" =>  $e->getMessage()];
        }
        
    }




}
