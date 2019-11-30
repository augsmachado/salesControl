<?php { include('header.php'); } ?>

<?php
    echo<<<HTML
    <html>
        <body>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <!-- Content Register page -->
            <div class="container">
                
                <!-- Form to request's informations -->
                <form class="form-group" id="individualRegister" method="post">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Customer Register</legend>
                        
                        <div class="row">
                            <form class="form-inline">
                                <!-- If the record exists, returns the Customer code here -->
                                <div class="form-group col-sm-4">
                                    <input type="text" class="form-control" id="customerCodeRequest" placeholder="Customer code" disabled>
                                </div>

                                <!-- Data Customer -->
                                <div class="form-group col-sm-4">
                                    <input type="text" class="form-control" id="customerNameInput" placeholder="Customer's full name">
                                </div>
                                <div class="form-group col-sm-4">
                                    <input type="text" class="form-control" id="customerCpfInput" placeholder="CPF: 123.123.123-12">
                                </div>

                                <!-- Data Customer about adress -->
                                <div class="form-group col-sm-3">
                                    <input type="text" class="form-control"  id="customerCepInput" placeholder="CEP: 12345-123">
                                </div>
                                <div class="form-group col-sm-5">
                                    <input type="text" class="form-control"  id="customerAdressInput" placeholder="Adress: 0000 Saint John St.">
                                </div>
                                <div class="form-group col-sm-2">
                                    <input type="text" class="form-control"  id="customerCityInput" placeholder="City">
                                </div>
                                <div class="form-group col-sm-2">
                                    <input type="text" class="form-control"  id="customerStateInput" placeholder="State: NY">
                                </div>

                                <!-- Data Customer about contact -->
                                <div class="form-group col-sm-3">
                                    <input type="text" class="form-control"  id="customerDDDInput" placeholder="DDD: (12)">
                                </div>
                                <div class="form-group col-sm-3">
                                    <input type="text" class="form-control"  id="customerTelephoneInput" placeholder="Telephone: 12345-1234">
                                </div>
                                
                                <!-- Data Customer about financial status -->
                                <div class="col-sm-12">
                                    <legend class="w-auto">Financial</legend>
                                </div>
                                <div class="form-group col-sm-5">
                                    <input type="number" class="form-control"  id="customerCreditLimitInput" placeholder="Credit Limit">
                                </div>
                                <div class="form-group col-sm-5">
                                    <input type="text" class="form-control"  id="customerCreditAvailabletInput" placeholder="Credit Available" disabled>
                                </div>

                            </form>
                        </div>
                    </fieldset>
                </form>
            </div>
        </body>
    </html>
HTML;
?>

<?php
    echo<<<HTML
    <html>
        <body>
            <div class="container">
                <!--Add and remove products-->
                <div class="row">
                    <form class="form-inline" >
                        <div class="form-group col-sm-5">
                            <button class="btn btn-danger" type="reset" value="clear" onclick="javascript:window.location.href='customer.php'">Cancel</button>
                        </div>
                        <div class="form-group col-sm-5">
                            <script>
                                function saveCustomer() {
                                    $.ajax({
                                        type: "POST",
                                        url: '..\class\classCustomer.php',
                                        data:{action:'saveClientQuery'},
                                        success:function(html) {
                                            alert(html);
                                        }

                                    });
                                }
                            </script>
                            <button class="btn btn-success" type="submit" onclick="saveCustomer()">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </body>
    <html>
HTML;
?>

<?php { include('footer.php'); } ?>