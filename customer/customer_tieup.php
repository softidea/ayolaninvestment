<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer|Tie up</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Latest compiled and minified CSS -->

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Optional theme -->

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,700,600italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../assets/css/customer_service.css">
        <link rel="icon" href="favicon.ico">
    </head>
    <body>
        <?php include '../assets/include/navigation_bar.php'; ?>

        <!--Service View Main Panel-->
        <div class="container" style="margin-top: 80px;display: block;" id="one">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Customer Tie-up Information</h3>
                        </div>
                        <div class="panel-body" style="background-color: #FAFAFA;">
                            <div class="col-sm-6">
                                <fieldset id="account">
                                    <legend>Customer Information</legend>
                                    <div class="form-group required">
                                        <span style="color:red;">*</span><label class="control-label" for="input-email">Customer NIC:</label>
                                        <div class="form-inline required">
                                            <input type="text" name="customer_nic" id="cus_nic" placeholder="Enter Customer NIC" class="form-control" style="width: 85%;" required/>
                                            <button type="button" id="cservicebtn" class="btn btn">Search</button>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <span style="color:red;">*</span><label class="control-label" for="input-email">Customer Telephone:</label>
                                        <div class="form-inline required">
                                            <input type="text" name="customer_search_bar" id="customer_searchbar" placeholder="Enter Customer Telephone" class="form-control" style="width: 85%;" required/>
                                            <button type="button" id="cservicebtn" class="btn btn">Search</button>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Customer Name:</label>
                                        <input type="text" readonly name="customer_name" id="cus_name"  placeholder="Customer Name" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Permanent Address:</label>
                                        <input type="text" readonly name="customer_address" id="cus_address" placeholder="Permanent Address" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Service No:</label>
                                        <select name="cbo_service_search" id="cboservice" class="form-control" required>
                                            <option value=""> --- Please Select Service --- </option>
                                            <option value="">HOR-23432</option>
                                            <option value="">HOR-324</option>
                                        </select>
                                    </div>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Service Rental:</label>
                                            <input type="text" readonly name="service_rental" id="servicerent" value="" placeholder="Service Rental" id="input-email" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Service Period:</label>
                                            <input type="text" readonly name="service_period" id="serviceperiod" value="" placeholder="Service Period" id="input-email" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Installment:</label>
                                            <input type="text" readonly name="installment" id="installemnt_des" value="" placeholder="Installment" id="input-email" class="form-control" required/>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-sm-6">
                                <div id="searchOptionPanel">
                                    <fieldset id="account">
                                        <legend>Guarantor Information</legend>
                                        <div class="form-group required">
                                            <span style="color:red;">*</span><label class="control-label" for="input-email">Guarantor NIC:</label>
                                            <input type="text" readonly name="customer_nic" id="cus_nic" placeholder="Guarantor NIC" class="form-control" required/>
                                        </div>
                                        <div class="form-group required">
                                            <span style="color:red;">*</span><label class="control-label" for="input-email">Customer Telephone:</label>
                                            <input type="text" readonly name="customer_search_bar" id="customer_searchbar" placeholder="Customer Telephone" class="form-control" required/>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Customer Name:</label>
                                            <input type="text" readonly name="customer_name" id="cus_name"  placeholder="Customer Name" class="form-control" required/>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Permanent Address:</label>
                                            <input type="text" readonly name="customer_address" id="cus_address" placeholder="Permanent Address" class="form-control" required/>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Services as a Customer:</label>
                                            <select name="cbo_service_search" id="cboservice" class="form-control" required>
                                                <option value=""> --- Please Select --- </option>
                                                <option value="">HOR-23432</option>
                                                <option value="">HOR-324</option>
                                            </select>
                                        </div>
                                        <div class="form-group required">
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Service Rental:</label>
                                                <input type="text" readonly name="service_rental" id="servicerent" value="" placeholder="Service Rental" id="input-email" class="form-control" required/>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Service Period:</label>
                                                <input type="text" readonly name="service_period" id="serviceperiod" value="" placeholder="Service Period" id="input-email" class="form-control" required/>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Installment:</label>
                                                <input type="text" readonly name="installment" id="installemnt_des" value="" placeholder="Installment" id="input-email" class="form-control" required/>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <!--Service View Main Panel-->

                            <!--Customer Service Loader-->
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-body" style="height: 250px;">



                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form">

                                    <button type="submit" class="btn btn" id="cservicebtn">Print</button>
                                    <button type="submit" class="btn btn" id="cservicebtn"><a href="customer_installment.php" style="text-decoration: none;color: white;">Add Installment</a></button>
                                    <button type="submit" class="btn btn" id="cservicebtn"><a href="customer_installment.php" style="text-decoration: none;color: white;">View Installments</a></button>
                                    <button type="submit" class="btn btn" id="cservicebtn"><a href="customer_addlease.php" style="text-decoration: none;color: white;">Add New Lease</a></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Customer Service Loader-->

        <?php include '../assets/include/footer.php'; ?>
    </body>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</html>
