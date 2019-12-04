<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2">Summary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr class="store">
                            <td>SUBTOTAL</td>
                        </tr>
                        <tr>
                            <td>INTERNATION SHIPPING FEE</td>
                        </tr>
                        <tr>
                            <td>CUSTOM FEE</td>
                        </tr>
                        <tr>
                            <td>MARKETPLACE SHIPPING COST</td>
                        </tr>
                        <tr>
                            <td>TAX & VAT</td>
                        </tr>
                        <tr>
                            <td>SERVICE FEE</td>
                        </tr>
                        <tr>
                            <td>INSURENCE FEE</td>
                        </tr>
                        <tr>
                            <td>LOCAL DELIVERY</td>
                        </tr>
                        <tr>
                             <td>ORDER TOTAL</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>

        </div>
        <script>
            $.ajax({
                type: "POST",
                url: "page1.php",
                success: function(data) {
                    console.log(data);
                    var pagedata = JSON.parse(data);
                    console.log(pagedata);
                    $("tbody").append("<tr><td>Shipping</td><td>" + pagedata.subtotal + "</td><td>"+pagedata.base_clikpak_admin_fee_amount+"</td><tr>")
                }
            })
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>