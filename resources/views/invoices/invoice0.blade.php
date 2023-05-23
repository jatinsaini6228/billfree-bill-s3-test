<!DOCTYPE html>
<html>
   <head>
      <title>Invoice</title>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

      <style>
         /* Add your custom CSS styles here */
         /* For example: */

         * {
         font-family: Roboto, sans-serif;
         }

         body {
         font-family: Roboto, sans-serif;
         }
         .header {
         text-align: left;
         width:100%;
         display:block;
         min-height: 60px;
         font-family: Roboto, Helvetica, sans-serif;
         }
         .address {
         width: 100%;
         margin-bottom: 20px;
         font-family: Roboto, Helvetica, sans-serif;
         }
         .address-column {
         width: 48%;
         float: left;
         }
         .address-column:first-child {
         margin-right: 10px;
         }
         .address-column:last-child {
         margin-left: 10px;
         }
         .address-details {
         border: 1px dotted #ccc;
         border-radius: 5px;
         padding: 10px;
         margin-bottom: 20px;
         }
         
         .table {
         width: 100%;
         border-collapse: collapse;
         }
         .table th,
         .table td {
         border: 1px solid #eee;
         padding: 8px;
         font-family: Roboto, Helvetica, sans-serif;
         }
         #text-logo {
         width:350px;
         padding: 16px;
         border: 2px solid #537FE7;
         border-radius: 8px;
         font-family: Roboto, Helvetica, sans-serif;
         }
         .m-top {
         margin-top: 4px;
         }
         .blu-clr {
         color: #537FE7
         }
         .blk-clr {
         color: #000
         }
         .eee-clr {
         color: #eee
         }
         . {
         }
         .fonts14 {
         font-size: 14px
         }
         .table {
         width: 100%;
         border-collapse: collapse;
         }
         .table th,
         .table td {
         border-top: 1px solid #ddd;
         border-bottom: 1px solid #ddd;
         padding: 8px;
         font-family: Roboto, sans-serif;
         }
         .table th:first-child,
         .table td:first-child {
         border-left: none;
         }
         .table th:last-child,
         .table td:last-child {
         border-right: none;
         }
         .table td, th {
         border: none;
         }
         .table th {
         background-color: #f2f2f2;
         font-weight: bold;
         text-align: center;
         font-family: Roboto, Helvetica, sans-serif;
         }
         .table tr.grey-row {
         background-color: #f2f2f2;
         }
         .table tr.white-row {
         background-color: #fff;
         }
         .invoice-summary {
         width: 40%;
         margin-left: auto;
         margin-right: 0;
         margin-top: 16px;
         }
         .invoice-summary table {
         width: 100%;
         border-collapse: collapse;
         }
         .invoice-summary th,
         .invoice-summary td {
         border: 1px solid #ddd;
         padding: 4px;
         text-align: center;
         font-family: Roboto, Helvetica, sans-serif;
         }
         .invoice-summary th {
         background-color: #f2f2f2;
         }
         .invoice-summary th:first-child,
         .invoice-summary td:first-child {
         border-left: none;
         }
         .invoice-summary th:last-child,
         .invoice-summary td:last-child {
         border-right: none;
         }
      </style>
   </head>
   <body>
      <br>
      <div class="header">
         <span id="text-logo">
         <span class="blu-clr">   <b> YOUR LOGO </b> </spaan>
         </span>
      </div>
      <div style="width:100%">
         <div class="address">
            <div class="address-column">
               <div class="address-details">
                  <div style="width:100%; min-height: 280px;
                     overflow: hidden;">
                     <p class="blu-clr  fonts14"><b>Your details:</b></p>
                     <p class="fonts14 " >FROM</p>
                     <p class="" ><b>ABC Seller</b></p>
                     <p  class="" >Web Developer Location <br> Street, City</p>
                     <p  class="" >web-dev@web-developer-email.com</p>
                     <p  class="" >+00-300-1234567</p>
                  </div>
               </div>
            </div>
            <div class="address-column">
               <div class="address-details">
                  <div style="width:100%; min-height: 280px;">
                     <p class="blu-clr  fonts14"><b>Client's details:</b></p>
                     <p class="fonts14" >TO</p>
                     <p class="" ><b>XYZ Buyer</b></p>
                     <p class="" >ABC Company <br> Client's Location, Street, City</p>
                     <br>
                     <p class="" >client@client-email.com</p>
                  </div>
               </div>
            </div>
            <div style="clear: both;"></div>
         </div>
      </div>
      <div style="width:100%">
      <div class="m-top">
         <table width="100%">
            <tbody>
               <tr>
                  <td>
                     <p><b>   Invoice No: </b> 012345</p>
                  </td>
                  <td>
                     <p><b>Due Date:</b> May 27th, 2020</p>
                  </td>
               </tr>
               <tr>
                  <td>
                     <p><b>Invoice Date:</b> May 27th, 2020</p>
                  </td>
                  <td> &nbsp; </td>
               </tr>
            </tbody>
         </table>
         <table class="table mt-10">
            <thead>
               <tr class="grey-row">
                  <th>Item</th>
                  <th>HRS/QTY</th>
                  <th>RATE</th>
                  <th>TAX</th>
                  <th>Subtotal</th>
               </tr>
            </thead>
            <tbody>
               <tr class="white-row">
                  <td>GUI Design</td>
                  <td>1</td>
                  <td>1200.00</td>
                  <td>&nbsp;</td>
                  <td>USD 1,2000.00</td>
               </tr>
               <tr class="grey-row">
                  <td>API Development</td>
                  <td>1</td>
                  <td>1200.00</td>
                  <td>&nbsp;</td>
                  <td>USD 1,2000.00</td>
               </tr>
            </tbody>
         </table>
      </div>
      <div class="invoice-summary">
         <table>
            <tr>
               <th colspan="2">Invoice Summary</th>
            </tr>
            <tr>
               <td style="border:none; text-align: left" >Subtotal</td>
               <td colspan="2" style="border:none; text-align: right" >USD 24,000.00</td>
            </tr>
         </table>
      </div>
   </body>
</html>