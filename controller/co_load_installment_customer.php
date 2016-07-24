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

            $service_date="2016-07-21";
            $curr_ser_date = split("-", $service_date)[2];
            
            $serv_mon_year = split("-", $service_date)[0]."-".split("-", $service_date)[1];
            
            
            $default_service_date = 5;
            
            if($curr_ser_date>=21){
                $default_service_date=25;
            }elseif($curr_ser_date>15){
                $default_service_date=20;
            }elseif($curr_ser_date>10){
                $default_service_date=15;
            }elseif($curr_ser_date>5){
                $default_service_date=10;
            }
            
            //echo $default_service_date;
            $rounded_off_date=$serv_mon_year."-".$default_service_date;
           // $_frst_serv_date = date('Y-m-d', strtotime('+1 month', strtotime($rounded_off_date)));
           $dis_round_date = date('Y-m-d', strtotime('+1 month', strtotime($rounded_off_date)));
            
            $now_date= date("Y-m-d");
            
            
            $d1 = new DateTime($rounded_off_date);
            $d2 = new DateTime($now_date);

            $no_of_months=($d1->diff($d2)->m); // int(4)
          
            $customer_due=0.0;
            $prv_round_date=$service_date;
            
            $installment_amount=4043;
            
            
            for($i=0;$i<$no_of_months;$i++){
               if($customer_due==0){
               
               $temp_due=$customer_due;
               $mon_pay=0.0;
               global $conn;
               $sql_payment="SELECT SUM(payment) FROM ser_installment where paid_date<=$rounded_off_date and paid_date>=$prv_round_date";
               $run_payment=  mysqli_query($conn, $sql_payment);
               if($row=  mysqli_fetch_array($run_payment)){
                   $mon_pay=$row[0];
               }
               
               $temp_due = (($installment_amount+$temp_due)-$mon_pay);
               
               
               if($temp_due>0){
                   
                   $temp_rounded_off_date = date('Y-m-d', strtotime('+1 week', strtotime($rounded_off_date)));
                   $dis_round_date=$temp_rounded_off_date;
                   $sql_payment="SELECT SUM(payment) FROM ser_installment where paid_date<=$temp_rounded_off_date and paid_date>=$rounded_off_date";
                   $run_payment=  mysqli_query($conn, $sql_payment);
                    if($row=  mysqli_fetch_array($run_payment)){
                        $mon_pay=$row[0];
                    }
                    $temp_due = ($temp_due-$mon_pay);
                   
               }
               if($temp_due>0){
                   $temp_due=($temp_due)*(105/100);
                   $temp_rounded_off_date = date('Y-m-d', strtotime('+2 week', strtotime($rounded_off_date)));
                   $dis_round_date=$temp_rounded_off_date;
                   $sql_payment="SELECT SUM(payment) FROM ser_installment where paid_date<=$temp_rounded_off_date and paid_date>=$rounded_off_date";
                   $run_payment=  mysqli_query($conn, $sql_payment);
                    if($row=  mysqli_fetch_array($run_payment)){
                        $mon_pay=$row[0];
                    }
                    $temp_due = ($temp_due-$mon_pay);
                   
               }
               if($temp_due>0){
                   $temp_due=($temp_due)*(110/100);
                   $temp_rounded_off_date = date('Y-m-d', strtotime('+3 week', strtotime($rounded_off_date)));
                   $dis_round_date=$temp_rounded_off_date;
                   $sql_payment="SELECT SUM(payment) FROM ser_installment where paid_date<=$temp_rounded_off_date and paid_date>=$rounded_off_date";
                   $run_payment=  mysqli_query($conn, $sql_payment);
                    if($row=  mysqli_fetch_array($run_payment)){
                        $mon_pay=$row[0];
                    }
                    $temp_due = ($temp_due-$mon_pay);
                   
               }
            
               
            }else{
                
               $temp_due=$customer_due;
               $temp_due=$temp_due*(110/100);
               $mon_pay=0.0;
               global $conn;
               $sql_payment="SELECT SUM(payment) FROM ser_installment where paid_date<=$rounded_off_date and paid_date>=$prv_round_date";
               $run_payment=  mysqli_query($conn, $sql_payment);
               if($row=  mysqli_fetch_array($run_payment)){
                   $mon_pay=$row[0];
               }
               
               $temp_due = (($installment_amount+$temp_due)-$mon_pay);
               $temp_due=$temp_due*(110/100);
               $dis_round_date=date('Y-m-d', strtotime('+1 month', strtotime($rounded_off_date)));
                
                
            }
              
               $prv_round_date = $rounded_off_date; 
               $rounded_off_date = date('Y-m-d', strtotime('+1 month', strtotime($rounded_off_date)));
              
               $customer_due=$temp_due;
               
            
            
            
            }
             echo $customer_due;
             echo $dis_round_date;
            
           
            
            $now = time(); 
            
            $your_date = strtotime($service_date);
            $datediff = $now - $your_date;
            $datediff = floor($datediff/(60*60*24));
            
            //$temp_date = 
            
            
            
            
        }
    }
}  
//loading service installments
