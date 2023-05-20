<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <style>
        /* Add your custom CSS styles here */
        /* For example: */
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: left;
            width:100%;
            display:block;
            min-height: 60px;
        }
        .billing-details {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        .billing-details .billing-address,
        .billing-details .company-address {
            width: 49%;
            border: 1px solid #0000FF;
            border-radius: 8px;
            padding: 16px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #text-logo {
            width:350px;
            padding: 16px;
            border: 1px solid #0000FF;
            border-radius: 8px;
        }

        .m-top {
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <br>

    <div class="header">
       
        <span id="text-logo">
            YOUR LOGO
        </span>
        

    </div>
  
    <div style="width:100%">
    

            <table width="100%">
            <tbody>
            <tr>
            
            <td style="width:49%;   border-radius: 10px; border: 1px solid #000; ">
                <div style="width:100%; min-height: 340px; padding: 8px; border-radius: 10px;
            overflow: hidden;">
                    <h5>Your details:</h5>
                    <p>FROM</p>
                    <p>ABC Seller</p>
                    <p>Web Developer Location <br> Street, City</p>
                    <br>
                    <p>web-dev@web-developer-email.com</p>
                    <p>+00-300-1234567</p>
                </div>
            </td>
            <td style="width:2%"></td>
            <td style="width:49%;  border-radius: 10px; border: 1px solid #000; ">
                <div style="width:100%; min-height: 340px; border-radius: 10px;
            overflow: hidden; padding: 8px">
                    <h5>Client's details:</h5>
                    <p>TO</p>
                    <p>XYZ Buyer</p>
                    <p>ABC Company <br> Client's Location, Street, City</p>
                    <br>
                    <p>client@client-email.com</p>
                </div>    
            </td>
            </tr>
            </tbody>
            </table>

    </div>

    <div style="width:100%">
    <div class="m-top">
    <table width="100%">
    <tbody>
    <tr>
        <td> <p>Invoice No: 012345</p> </td>
        <td> <p>Due Date: May 27th, 2020</p></td>
    </tr>
    <tr>
    <td>
        <p>Invoice Date: May 27th, 2020</p>
    </td>
    <td> &nbsp; </td>
    </tr>
    </tbody>
    </table>
            <table class="table mt-10">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>HRS/QTY</th>
                        <th>RATE</th>
                        <th>TAX</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GUI Design</td>
                        <td>1</td>
                        <td>1200.00</td>
                        <td>&nbsp;</td>
                        <td>USD 1,2000.00</td>
                    </tr>
                    <tr>
                        <td>API Development</td>
                        <td>1</td>
                        <td>1200.00</td>
                        <td>&nbsp;</td>
                        <td>USD 1,2000.00</td>
                    </tr>
                </tbody>
            </table>

            <table>
            <tbody>
            <tr>
            <th>Invoice Subtotal</th>
            </tr>
            <tr>
            <td>USD, 24,000.00</td>
            </tr>
            </tbody>
            </table>

    </div>
    
    </div>

</body>
</html>

