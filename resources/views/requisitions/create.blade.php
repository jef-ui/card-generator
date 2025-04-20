<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>RIS Fuel Form</h2>

    <div>
        @if($errors->any())
        <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
        </ul>
        @endif
    </div>


    <div class="container">
        <h2>Create Card Information</h2>
        <form action="{{ route('requisition.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="code_card">Code Card</label>
                <select name="code_card" class="form-control" required>
                    <option value="Fund Cluster : Fleet Card (OPCEN), Blue Color OCDRC IVB-1-2019 - 738766030358525000">Fund Cluster : Fleet Card (OPCEN), Blue Color OCDRC IVB-1-2019 - 738766030358525000</option>
                    <option value="Fund Cluster : Fleet Card (ADMIN), Blue Color RA- OCD IVB-3 - 738766030225745104">Fund Cluster : Fleet Card (ADMIN), Blue Color RA- OCD IVB-3 - 738766030225745104</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="division_card">Division</label>
                <input type="text" class="form-control" name="division_card" id="division_card" required>
            </div>
    
            <div class="form-group">
                <label for="office_card">Office</label>
                <input type="text" class="form-control" name="office_card" id="office_card" required>
            </div>
    
            <div class="form-group">
                <label for="liter_card">Liter</label>
                <input type="text" class="form-control" name="liter_card" id="liter_card" required>
            </div>
    
            <div class="form-group">
                <label for="gasoline_card">Gasoline Type</label>
                <select name="gasoline_card" class="form-control" required>
                    <option value="XCS">XCS</option>
                    <option value="XTRA">XTRA</option>
                    <option value="DIESEL">DIESEL</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="num_card">Number</label>
                <input type="number" class="form-control" name="num_card" id="num_card" step="0.01" required>
            </div>
    
            <div class="form-group">
                <label for="amount_card">Amount</label>
                <input type="number" class="form-control" name="amount_card" id="amount_card" step="0.01" required>
            </div>
    
            <div class="form-group">
                <label for="balance_card">Balance</label>
                <input type="number" class="form-control" name="balance_card" id="balance_card" step="0.01" required>
            </div>
    
            <div class="form-group">
                <label for="invoice_card">Invoice</label>
                <input type="text" class="form-control" name="invoice_card" id="invoice_card" required>
            </div>
    
            <div class="form-group">
                <label for="plate_number">Plate Number</label>
                <input type="text" class="form-control" name="plate_number" id="plate_number" required>
            </div>
    
            <div class="form-group">
                <label for="car_card">Car Type</label>
                <input type="text" class="form-control" name="car_card" id="car_card" required>
            </div>
    
            <div class="form-group">
                <label for="purpose_card">Purpose</label>
                <textarea class="form-control" name="purpose_card" id="purpose_card" rows="3" required></textarea>
            </div>
    
            <div class="form-group">
                <label for="request_name_card">Requested By</label>
                <input type="text" class="form-control" name="request_name_card" id="request_name_card" required>
            </div>
    
            <div class="form-group">
                <label for="received_name_card">Received By</label>
                <input type="text" class="form-control" name="received_name_card" id="received_name_card" required>
            </div>
    
            <div class="form-group">
                <label for="position_card">Position</label>
                <input type="text" class="form-control" name="position_card" id="position_card" required>
            </div>
    
            <div class="form-group">
                <label for="date_card">Date</label>
                <input type="date" class="form-control" name="date_card" id="date_card" required>
            </div>
    
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>


</body>
</html>