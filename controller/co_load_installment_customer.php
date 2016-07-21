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
$payment = filter_input(INPUT_GET, 'payment');
$sno_begin_ins = filter_input(INPUT_GET, 'sno_begin_ins');


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
            $ser_no = $row['vehicle_no'];
            $ser_date = $row['ser_date'];
            $fixed_rent = $row['fix_rate'];
            $install = $row['installment'];
            $ser_duration = $row['period'];

            echo $ser_no . "#" . $ser_date . "#" . $fixed_rent . "#" . $install . "#" . $ser_duration;
        }
    }
}
//loading service details
//loading service installments
if ($service_no != "" && $service_no != null) {
    global $conn;
    $sql_query = "SELECT * FROM ser_installment WHERE ser_number='$service_no'";
    $run_query = mysqli_query($conn, $sql_query);
    if (mysqli_num_rows($run_query) > 0) {
        while ($row = mysqli_fetch_array($run_query)) {

            $installment = $row['int_id'];
//        $ser_number=$row['ser_number'];
            $date = $row['date'];
            $paid_date = $row['paid_date'];
            $payment = $row['payment'];
            $customer_due = $row['customer_due'];
            $company_due = $row['company_due'];

            echo"<tr>";
            echo "<td>$installment</td>";
            echo "<td>$date</td>";
            echo "<td>$paid_date</td>";
            echo "<td>$payment</td>";
            echo "<td>$customer_due</td>";
            echo "<td>$company_due</td>";
            echo"</tr>";
        }
    } else {

        echo "No Installment at this moment";
    }
}
if ($sno_begin_ins != "" && $sno_begin_ins != null) {
    global $conn;
    $sql_query = "SELECT * FROM service WHERE ser_number='$sno_begin_ins'";
    $run_query = mysqli_query($conn, $sql_query);
    if (mysqli_num_rows($run_query) > 0) {
        if ($row = mysqli_fetch_assoc($run_query)) {
            $installment = $row['installment'];
            $service_date = $row['ser_date'];

            list($year, $month, $date) = explode("-", $service_date);
            $fix_date=  intval($date);
            $fix_month=  intval($month);
            
            if ($fix_date>0 && $fix_date<=5) {
                $installment_date = $year . "-" . ($fix_month + 1) . "-" . '5';
                echo $installment_date . "#" . $installment;
            } else if ($fix_date>5 && $fix_date<=10) {
                $installment_date = $year . "-" . ($fix_month + 1) . "-" . '10';
                echo $installment_date . "#" . $installment;
            } else if ($fix_date>10 && $fix_date<=15) {
                $installment_date = $year . "-" . ($fix_month + 1) . "-" . '15';
                echo $installment_date . "#" . $installment;
            } else if ($fix_date>15 && $fix_date<=20) {
                $installment_date = $year . "-" . ($fix_month + 1) . "-" . '20';
                echo $installment_date . "#" . $installment;
            } else if ($fix_date>20 && $fix_date<=25) {
                $installment_date = $year . "-" . ($fix_month + 1) . "-" . '25';
                echo $installment_date . "#" . $installment;
            } else if ($fix_date>25 && $fix_date<=31) {
                $installment_date = $year . "-" . ($fix_month + 1) . "-" . '25';
                echo $installment_date . "#" . $installment;
            }
        }
    }
}
    
//loading service installments
