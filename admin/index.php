<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Administrator | Home</title>
        <?php include '../assets/include/head.php'; ?>
        <link rel="stylesheet" href="../assets/css/admin.css">

    </head>
    <body>
        <!--Navigation Bar-->
        <nav id="top">
            <div class="container">
                <div id="top-links" class="nav pull-right">
                    <ul class="list-inline">
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-earphone"></i>
                            </a>
                            <span class="hidden-xs hidden-sm hidden-md">+94714 339 339</span>
                        </li>
                        <li><a href="../admin/index.php"  title="User Management"><i class="glyphicon glyphicon-user"></i> <span class="hidden-xs hidden-sm hidden-md">User Management</span></a></li>
                        <li><a href="../user/user_home.php"  title="switch user"><i class="glyphicon glyphicon-transfer"></i> <span class="hidden-xs hidden-sm hidden-md">Switch to User</span></a></li>
                        <li><a  href="../controller/co_logout.php" style="text-decoration: none;"><i class="glyphicon glyphicon-user"></i> <span class="hidden-xs hidden-sm hidden-md">Logout</span></a></li>	
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navigation Bar-->

        <!--Administrative Panel-->
        <div class="container">
            <!--Process Div Panel Set-->
            <div class="row">
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Customers</h3>
                        </div>
                        <div class="panel-body" style="background-color: #FAFAFA;">
                            <img class="panelimage"src="../assets/images/home/customer.png"/>
                        </div>
                        <div class="list-group">
                            <a href="../customer/customer_registration.php" style="text-decoration: none;"><button type="button" class="list-group-item">New Registration</button></a>
                            <a href="../customer/customer_view.php" style="text-decoration: none;"><button type="button" class="list-group-item">Update Customers</button></s>
                                <a href="../customer/customer_view.php" style="text-decoration: none;"><button type="button" class="list-group-item">Search Customers</button></s>
                                    <a href="../customer/customer_addlease.php" style="text-decoration: none;"><button type="button" class="list-group-item">Add a Vehicle Lease</button></s>
                                        <a href="../customer/customer_addpawn.php" style="text-decoration: none;"><button type="button" class="list-group-item">Add a Land Pawn</button></s>
                                            <a href="../customer/customer_installment.php" style="text-decoration: none;"><button type="button" class="list-group-item">Add Installment</button></s>
                                                </div>
                                                <div class="panel-footer"><div style="height: 15px;"></div></div>
                                                </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" id="panelheading">
                                                            <h3 class="panel-title">Services</h3>
                                                        </div>
                                                        <div class="panel-body">
                                                            <img class="panelimage" src="../assets/images/home/servicee.png"/>
                                                        </div>
                                                        <div class="list-group">
                                                            <a href="../customer/customer_addlease.php" style="text-decoration: none;"><button type="button" class="list-group-item">Add Vehicle Lease</button></a>
                                                            <a href="../customer/customer_addpawn.php" style="text-decoration: none;"><button type="button" class="list-group-item">Add Land Pawn</button></a>
                                                            <a href="../customer/customer_serviceview.php" style="text-decoration: none;"><button type="button" class="list-group-item">View Vehicle Leases</button></a>
                                                            <a href="../customer/customer_serviceview.php" style="text-decoration: none;"><button type="button" class="list-group-item">View Land Pawns</button></a>
                                                            <a href="../customer/view_vehicles.php" style="text-decoration: none;"><button type="button" class="list-group-item">View Vehicle Rates</button><a>
                                                                    <a href="../customer/view_vehicles.php" style="text-decoration: none;"><button type="button" class="list-group-item">View Land Rates</button></a>
                                                                    </div>
                                                                    <div class="panel-footer"><div style="height: 15px;"></div></div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading" id="panelheading">
                                                                                <h3 class="panel-title">Reports</h3>
                                                                            </div>
                                                                            <div class="panel-body">
                                                                                <img class="panelimage" style="width: 130px;margin-left: 60px;"src="../assets/images/home/reportt.png"/>
                                                                            </div>
                                                                            <div class="list-group">
                                                                                <a href="#" style="text-decoration: none;"><button type="button" class="list-group-item">Lease Reports</button></a>
                                                                                <a href="#" style="text-decoration: none;"><button type="button" class="list-group-item">Pawn Reports</button></a>
                                                                                <a href="#" style="text-decoration: none;"><button type="button" class="list-group-item">Vehicle Reports</button></a>
                                                                                <a href="#" style="text-decoration: none;"><button type="button" class="list-group-item">Land Reports</button></a>
                                                                                <a href="#"style="text-decoration: none;"><button type="button" class="list-group-item">Customer Reports</button></a>
                                                                                <a href="#" style="text-decoration: none;"><button type="button" class="list-group-item">Account Reports</button></a>
                                                                            </div>
                                                                            <div class="panel-footer"><div style="height: 15px;"></div></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading" id="panelheading">
                                                                                <h3 class="panel-title">Re-Process Management</h3>
                                                                            </div>
                                                                            <div class="panel-body">
                                                                                <img class="panelimage" style="width: 100px;margin-left: 70px;"src="../assets/images/home/settingss.png"/>
                                                                            </div>
                                                                            <div class="list-group">
                                                                                <a href="../admin/customer/addsis.php" style="text-decoration: none;"><button type="button" class="list-group-item">Re-Process Registration</button></a>
                                                                                <a href="../admin/customer/viewsis.php" style="text-decoration: none;"><button type="button" class="list-group-item">View Re-Processes</button></a>
                                                                                <a href="../admin/customer/checksis.php" style="text-decoration: none;"><button type="button" class="list-group-item">Release Sis</button></a>
                                                                                <a href="../admin/customer/checksis.php" style="text-decoration: none;"><button type="button" class="list-group-item">Check Re-Process</button></a>
                                                                                <a href="../customer/customer_installment.php" style="text-decoration: none;"><button type="button" class="list-group-item">View Settlement</button></a>
                                                                                <a href="../admin/customer/viewsis.php" style="text-decoration: none;"><button type="button" class="list-group-item">Re-Process Report</button></a>
                                                                            </div>
                                                                            <div class="panel-footer"><div style="height: 15px;"></div></div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <!--Process Div Panel Set-->

                                                                    </div>
                                                                    <!--Administrative Panel-->
                                                                    <?php include '../assets/include/footer.php'; ?>
                                                                    </body>
                                                                    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
                                                                    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
                                                                    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
                                                                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                                                    <style>

                                                                    </style>
                                                                    </html>