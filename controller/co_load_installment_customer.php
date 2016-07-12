<?php

//session_start();

$conn = mysqli_connect("77.104.142.97", "ayolanin_dev", "WelComeDB1129", "ayolanin_datahost");
if (mysqli_connect_errno()) {
    echo "Falied to Connect the Database" . mysqli_connect_error();
}


$customer_nic = filter_input(INPUT_GET, 'cus_nic');
$c_nic = filter_input(INPUT_GET, 'c_nic');
$s_no = filter_input(INPUT_GET, 's_no');
$service_no = filter_input(INPUT_GET, 'service_no');
$payment=  filter_input(INPUT_GET, 'payment');


//loading customer details
if ($customer_nic != "" && $customer_nic != null) {
    global $conn;
    $sql_query = "SELECT * FROM customer WHERE cus_nic='$customer_nic'";
    $run_query = mysqli_query($conn, $sql_query);

    if (mysqli_num_rows($run_query) > 0) {
        if ($row = mysqli_fetch_assoc($run_query)) {
            $cus_name = $row['cus_fullname'];
            $cus_tp = $row['cus_tp'];
            $cus_address = $row['cus_address'];
            $cus_regdate = $row['cus_reg_date'];
            echo $cus_name . "#" . $cus_tp . "#" . $cus_address . "#" . $cus_regdate;
        }
    }
}
//loading customer details
//loading service numbers of the customer
if ($c_nic != "" && $c_nic != null) {
    global $conn;
    $sql_query = "SELECT ser_number FROM service WHERE cus_nic='$c_nic'";
    $run_query = mysqli_query($conn, $sql_query);
    if (mysqli_num_rows($run_query) > 0) {
        echo "<option value='0'>~~Select Service~~</option>";
        while ($row = mysqli_fetch_array($run_query)) {
            $sno = $row['ser_number'];
            echo "<option value='$sno'>$sno</option>";
        }
    }
}
//loading service numbers of the customer
//loading service details
$ser_duration = 0;
if ($s_no != "" && $s_no != null) {
    global $conn;
    $sql_query = "SELECT * FROM service WHERE ser_number='$s_no'";
    $run_query = mysqli_query($conn, $sql_query);
    if (mysqli_num_rows($run_query) > 0) {
        if ($row = mysqli_fetch_assoc($run_query)) {
            $ser_no = $row['ser_number'];
            $ser_date = $row['ser_date'];
            $fixed_rent = $row['ser_fixedrental'];
            $install = $row['ser_instalment'];
            $ser_duration = $row['ser_duration'];

            echo $ser_no . "#" . $ser_date . "#" . $fixed_rent . "#" . $install . "#" . $ser_duration;
        }
    }
}
//loading service details
//loading service installments
if ($service_no != "" && $service_no != null) {
    global $conn;
    $duration = '0';
    $sql_duration = "SELECT ser_duration FROM service WHERE ser_number='$service_no'";
    $run_duration = mysqli_query($conn, $sql_duration);
    if (mysqli_num_rows($run_duration) > 0) {
        if ($row = mysqli_fetch_assoc($run_duration)) {
            $duration = $row['ser_duration'];
            $duration++;
        }
    }

    $sql_query = "SELECT * FROM ser_installment WHERE ser_number='$service_no'";
    $run_query = mysqli_query($conn, $sql_query);
    if (mysqli_num_rows($run_query) > 0) {
        
    } else {
        echo "No Installments available at this moment for Service";
    }
}
//loading service installments


//save installment

if($payment!="" && $payment!=null){
    
    
    //$sql_query="INSERT INTO ser_installment (ser_number,date,paid_date,payment,customer_due,company_due) VALUES ()";
}

//save installment