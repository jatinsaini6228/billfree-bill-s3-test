<?php
    $id = "0";
    $invoice = "invoice0";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BillFree TEST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
   
    
  <main>
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
     
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <span><img src="<?=(URL::to('/').'/assets/img/logo.png') ?> " style="width:32px; height:32px; margin-right: 5px"  class="" alt=""></span>
        <span class="fs-4" style="color:#83b040;">BillFree</span>
      </a>

      <!-- <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Invoices</a></li>
      </ul> -->
    </header>
  </div>
  <div class="b-example-divider"></div>

  <div class="container">
  
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Payment Successful!</h1>
    <p class="lead">Thanks for purchase an item from Bill Free. Your invoice #012345 is ready please click on preview invoice.</p>
    
      <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Preview Invoice
        </button>
    
  </div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Invoice: #012345</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="padding:8px;">
        
      
      <div class="container" style="padding: 24px; border-radius: 8px; border: 1px solid #ccc;">
            @include("./invoices/".$invoice)
      </div>
      
      <div style="display:none">
        <input type="text" id="currentPreviewInvoice" value="0">
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" onclick="viewInvoice()" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Preview as PDF">Preview as PDF</button>
        <button type="button" onclick="saveInvoice()" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Save PDF on Aws & Your System">Save as PDF</button>
        <button type="button"  class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Close Popup" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>

function viewInvoice() 
{
  const invoice = $('#currentPreviewInvoice').val();
  window.location = "/invoice/0/0";
}

    /*
    alert('1');
        $.ajax(
        {
            url: "/api/get-invoice/1", 
            success: function(result){
            const obj = JSON.parse(result);
            alert(result);
            $('#logo_data').html(obj.name)

        }
    });
    */
</script>

</div>
</main>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
</body>
</html>