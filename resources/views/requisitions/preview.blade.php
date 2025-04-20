<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-8bgf{border-color:inherit;font-style:italic;text-align:center;vertical-align:top}
    .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
    .tg .tg-fymr{border-color:inherit;font-weight:bold;text-align:left;vertical-align:top}
    .tg .tg-7btt{border-color:inherit;font-weight:bold;text-align:center;vertical-align:top}
    .tg .tg-f8tv{border-color:inherit;font-style:italic;text-align:left;vertical-align:top}
    </style>
</head>
<body>

  <div>
    <table class="tg" style="undefined;table-layout: fixed; width: 1387px"><colgroup>
        <col style="width: 2.111111px">
        <col style="width: 89.111111px">
        <col style="width: 96.111111px">
        <col style="width: 307.111111px">
        <col style="width: 137.111111px">
        <col style="width: 135.111111px">
        <col style="width: 142.111111px">
        <col style="width: 118.111111px">
        <col style="width: 161.111111px">
        <col style="width: 199.111111px">
        </colgroup>
        <thead>
          <tr>
            <th class="tg-0pky"></th>
            <th class="tg-fymr" colspan="2">Entity Name:</th>
            <th class="tg-fymr" colspan="3">OFFICE OF CIVIL DEFENSE MIMAROPA</th>
            <th class="tg-7btt" colspan="4">{{ $card->code_card }}</th>
          </tr></thead>
        <tbody>
          <tr>
            <td class="tg-0pky">Division</td>
            <td class="tg-fymr" colspan="2">Division:</td>
            <td class="tg-7btt" colspan="3">{{ $card->division_card }}</td>
            <td class="tg-fymr" colspan="2">Responsibility Center Code</td>
            <td class="tg-c3ow" colspan="2"></td>
          </tr>
          <tr>
            <td class="tg-0pky">Office</td>
            <td class="tg-fymr" colspan="2">Office:</td>
            <td class="tg-7btt" colspan="3">{{ $card->office_card }}</td>
            <td class="tg-fymr" colspan="2">RIS Number</td>
            <td class="tg-c3ow" colspan="2"></td>
          </tr>
          <tr>
            <td class="tg-f8tv"></td>
            <td class="tg-8bgf" colspan="4">Requistion</td>
            <td class="tg-8bgf" colspan="2">Stock Available ?</td>
            <td class="tg-8bgf" colspan="3">Issue</td>
          </tr>
          <tr>
            <td class="tg-0pky">Stock No.</td>
            <td class="tg-c3ow">Stock No.</td>
            <td class="tg-c3ow">Unit</td>
            <td class="tg-c3ow">Description</td>
            <td class="tg-c3ow">Quantity</td>
            <td class="tg-c3ow">Yes</td>
            <td class="tg-c3ow">No</td>
            <td class="tg-c3ow">Quantity</td>
            <td class="tg-c3ow" colspan="2">Remarks</td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-7btt">{{ $card->liter_card }}</td>
            <td class="tg-7btt">{{ $card->gasoline_card }}</td>
            <td class="tg-7btt">{{ $card->num_card }}</td>
            <td class="tg-c3ow">/</td>
            <td class="tg-c3ow"></td>
            <td class="tg-7btt">{{ $card->num_card }}</td>
            <td class="tg-fymr">Amount Utilized</td>
            <td class="tg-7btt">{{ $card->amount_card }}</td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-fymr">Balance</td>
            <td class="tg-7btt">{{ $card->balance_card }}</td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-fymr">Invoice</td>
            <td class="tg-7btt">{{ $card->invoice_card }}</td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-fymr">Plate Number</td>
            <td class="tg-7btt">{{ $card->plate_number }}</td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-fymr">Type of Car</td>
            <td class="tg-7btt">{{ $card->car_card }}</td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-7btt" colspan="2">Purpose</td>
            <td class="tg-fymr" colspan="7">{{ $card->purpose_card }}</td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="9"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"></td>
            <td class="tg-fymr">Requested By:</td>
            <td class="tg-fymr" colspan="2">Approved By:</td>
            <td class="tg-fymr" colspan="2">Issued By:</td>
            <td class="tg-fymr" colspan="2">Received By:</td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-fymr" colspan="2">Signature:</td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky" colspan="2"></td>
            <td class="tg-0pky" colspan="2"></td>
            <td class="tg-0pky" colspan="2"></td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-fymr" colspan="2">Printed Name:</td>
            <td class="tg-7btt">{{ $card->request_name_card }}</td>
            <td class="tg-7btt" colspan="2">MARC REMBRANDT P. VICTORE</td>
            <td class="tg-7btt" colspan="2">JERVIS LLOYD M. ATILANO</td>
            <td class="tg-7btt" colspan="2">{{ $card->received_name_card }}</td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-fymr" colspan="2">Designation:</td>
            <td class="tg-7btt">{{ $card->position_card }}</td>
            <td class="tg-7btt" colspan="2">OIC, OCD MIMAROPA</td>
            <td class="tg-7btt" colspan="2">SUPPLY ACCOUNTABLE OFFICER</td>
            <td class="tg-7btt" colspan="2">{{ $card->position_card }}</td>
          </tr>
          <tr>
            <td class="tg-0pky"></td>
            <td class="tg-fymr" colspan="2">Date:</td>
            <td class="tg-7btt">{{ $card->date_card }}</td>
            <td class="tg-7btt" colspan="2">{{ $card->date_card }}</td>
            <td class="tg-7btt" colspan="2">{{ $card->date_card }}d</td>
            <td class="tg-7btt" colspan="2">{{ $card->date_card }}</td>
          </tr>
        </tbody></table>
  </div>

  <a href="{{ route('requisition.download', $card->id) }}" class="btn btn-primary">Download PDF</a>

  
</body>
</html>