<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfGeneratorController;
use App\Http\Controllers\AwsStorageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/invoice/{layout}/{key}', [PdfGeneratorController::class, 'index']);



// Check AWS S3 Connection
Route::get('/aws-s3', [AwsStorageController::class, 'index']);

// Get List of AWS S3 Files
Route::get('/aws-s3/files', [AwsStorageController::class, 'getS3Files']);

?>
