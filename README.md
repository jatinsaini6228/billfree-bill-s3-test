# billfree-bill-s3-test
BillFree Test




Application is no Laravel 10 version




Installation on Server
- To Install Laravel Project From GitHub Take a Git Clone
- After clone run command composer install
- Make sure you have .env file in your root folder with aws keys
- run laravel project with command : php artisan serve

Home page
- after run the home page you will have Payment Successful page
    I assume that customer have paid for the service now he will get home page with invoice preview button
    I have created a desin of invoice 

- save button will save a pdf on S3 server and after it will show pdf button it will fetch the file form s3 


Routes

Home Page : /
Invoice PDF : invoice/0/0
Aws : h/aws-s3/files   - it i will retrieve the the files from S3 server


Packages Used:
    - Dom PDF,
    - Aws Sdk
    
