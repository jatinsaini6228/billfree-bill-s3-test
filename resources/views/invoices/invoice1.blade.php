<!DOCTYPE html>
<html>
<head>
  <style>
    .invoice {
      width: 100%;
      max-width: 800px;
      margin: 0 auto;
      font-family: Arial, sans-serif;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 10px;
    }

    .logo {
      width: 100%;
      text-align: center;
      margin-bottom: 20px;
    }

    .address {
      width: 100%;
      margin-bottom: 20px;
    }

    .address-column {
      width: 50%;
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

    .amount {
      width: 50%;
      float: left;
    }

    .date {
      width: 50%;
      float: right;
      text-align: right;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ccc;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <div class="invoice">
    <div class="logo">
      <h1>Company Name</h1>
    </div>
    <div class="address">
      <div class="address-column">
        <div class="address-details">
          <p>Billing Address:</p>
          <p>123 Billing Street</p>
          <p>City, State, ZIP</p>
        </div>
      </div>
      <div class="address-column">
        <div class="address-details">
          <p>Shipping Address:</p>
          <p>456 Shipping Street</p>
          <p>City, State, ZIP</p>
        </div>
      </div>
      <div style="clear: both;"></div>
    </div>
    <div class="amount">
      <p>Total Amount: $100.00</p>
    </div>
    <div class="date">
      <p>Date: May 23, 2023</p>
    </div>
    <table>
      <thead>
        <tr>
          <th>Item</th>
          <th>Quantity</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Item 1</td>
          <td>2</td>
          <td>$50.00</td>
        </tr>
        <tr>
          <td>Item 2</td>
          <td>1</td>
          <td>$50.00</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
