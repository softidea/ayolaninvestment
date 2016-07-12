<?php

session_start();

$conn = mysqli_connect("77.104.142.97", "ayolanin_dev", "WelComeDB1129", "ayolanin_datahost");
if (mysqli_connect_errno()) {
    echo "Falied to Connect the Database" . mysqli_connect_error();
}

if (isset($_POST['register_lease']) || isset($_POST['register_pawn'])) {
    
    global $conn;
    $cus_salutation = $_POST['cus_salutation'];
    $cus_fullname = $_POST['cus_fullname'];
    $cus_initialname = $_POST['cus_initialname'];
    $cus_address = $_POST['cus_address'];
    $cus_tp = $_POST['cus_tp'];
    $cus_nic = $_POST['cus_nic'];
    $cus_dob = $_POST['cus_dob'];
    $cus_ms = $_POST['cus_ms'];
    $cus_dependdency = $_POST['cus_dependdency'];
    $cus_position = $_POST['cus_position'];
    $cus_monthly_salary = $_POST['cus_monthly_salary'];
    $cus_emp_name = $_POST['cus_emp_name'];
    $cus_emp_address = $_POST['cus_emp_address'];
    $cus_addr_map_link = $_POST['cus_addr_map_link'];
    $reg_date = $_POST['reg_date'];
    $cus_status = "1";
    
    echo $cus_salutation;
    echo $cus_fullname;echo $cus_position;echo $cus_emp_address;
    
    
//over-customer

    $cus_bhalf_name = $_POST['cus_hhalf_name'];
    $cus_bhalf_dob = $_POST['cus_bhalf_dob'];
    $cus_bhalf_position = $_POST['cus_bhalf_position'];
    $cus_bhalf_monthly_salary = $_POST['cus_bhalf_monthly_salary'];
    $cus_bhalf_emp_name = $_POST['cus_bhalf_emp_name'];
// Over -customer wf

    $gua_salutation = $_POST['gua_salutation'];
    $gua_fullname = $_POST['gua_fullname'];
    $gua_initial_name = $_POST['gua_initial_name'];
    $gua_address = $_POST['gua_address'];
    $gua_tp = $_POST['gua_tp'];
    $gua_dob = $_POST['gua_dob'];
    $gua_ms = $_POST['gua_ms'];
    $gua_nic = $_POST['gua_nic'];
    $gua_dependency = $_POST['gua_dependency'];
    $gua_position = $_POST['gua_position'];
    $gua_monthly_salary = $_POST['gua_monthly_salary'];
    $gua_emp_name = $_POST['gua_emp_name'];
    $gua_emp_address = $_POST['gua_emp_address'];
    $gua_status = "1";
//Over-gerenter 
    $gua_bhalf_fullname = $_POST['gua_bhalf_fullname'];
    $gua_bhalf_dobs = $_POST['gua_bhalf_dob'];
    $gua_bhalf_position = $_POST['gua_bhalf_position'];
    $gua_bhalf_monthly_salary = $_POST['gua_bhalf_monthly_salary'];
    $gua_bhalf_emp_name = $_POST['gua_bhalf_emp_name'];
// Over-gerenter wf

    $real_prp_house_position = $_POST['real_prp_house_position'];
    $real_prp_house_size = $_POST['real_prp_house_size'];
    $real_prp_house_value = $_POST['real_prp_house_value'];
    $real_prp_house_pawned = $_POST['real_prp_house_pawned'];
    $real_prp_house_pawn_getter = $_POST['real_prp_house_pawn_getter'];
//Over-customer real propty

    $real_prp_other_position = $_POST['real_prp_other_position'];
    $real_prp_other_size = $_POST['real_prp_other_size'];
    $real_prp_other_value = $_POST['real_prp_other_value'];
    $real_prp_other_pawned = $_POST['real_prp_other_pawned'];
    $real_prp_other_pawn_getter = $_POST['real_prp_other_pawn_getter'];
//Over-customer real propty other

    $cus_savings_bank_branch_1 = $_POST['cus_savings_bank_branch'];
    $cus_savings_facilities_2 = $_POST['cus_savings_facilities'];
    $cus_savings_account_no_3 = $_POST['cus_savings_account_no'];

    $cus_mobile_bank_branch_1 = $_POST['cus_mobile_bank_branch'];
    $cus_mobile_facilities_2 = $_POST['cus_mobile_facilities'];
    $cus_mobile_account_no_3 = $_POST['cus_mobile_account_no'];

    $cus_daily_loan_bank_branch_1 = $_POST['cus_daily_loan_bank_branch'];
    $cus_daily_loan_facilities_2 = $_POST['cus_daily_loan_facilities'];
    $cus_daily_loan_account_no_3 = $_POST['cus_daily_loan_account_no'];

    //Over customer bank account
//Query ========================================================================
    $sql_query_cus = "INSERT INTO customer (
    cus_salutation,
    cus_fullname,
    cus_initialname,
    cus_address,
    cus_tp,
    cus_nic,
    cus_dob,
    cus_ms,
    cus_dependdency,
    cus_position,
    cus_monthly_salary,
    cus_emp_name,
    cus_emp_address,
    cus_addr_map_link,
    cus_reg_date,
    cus_status
    ) 
    VALUES
      (
    '$cus_salutation',
    '$cus_fullname',
    '$cus_initialname',
    '$cus_address',
    '$cus_tp',
    '$cus_nic',
    '$cus_dob',
    '$cus_ms',
    '$cus_dependdency',
    '$cus_position',
    '$cus_monthly_salary',
    '$cus_emp_name',
    '$cus_emp_address',
    '$cus_addr_map_link',
    '$reg_date',
    '$cus_status'
  ) ;";
// customer insert over////////////////////////////////////////////////////////

    $sql_query_cus_wf = "INSERT INTO cus_wf(
  cus_wf_name,
  cus_wf_dob,
  cus_wf_posi,
  cus_wf_salary,
  cus_wf_emp_name,
  cus_nic
) 
VALUES
  (
    '$cus_bhalf_name',
    '$cus_bhalf_dob',
    '$cus_bhalf_position',
    '$cus_bhalf_monthly_salary',
    '$cus_bhalf_emp_name',
    '$cus_nic'
  );";

    //customer wife over////////////////////////////////////////////////////

    $sql_query_ger = "INSERT INTO ger (
    ger_salutation,
    ger_fullname,
    ger_initialname,
    ger_address,
    ger_tp,
    ger_nic,
    ger_dob,
    ger_ms,
    ger_dependences,
    ger_position,
    ger_salerry,
    ger_emp_name,
    ger_emp_address,
    cus_nic,
    ger_status
    ) 
    VALUES
      (
    '$gua_salutation',
    '$gua_fullname',
    '$gua_initial_name',
    '$gua_address',
    '$gua_tp',
    '$gua_nic',
    '$gua_dob',
    '$gua_ms',
    '$gua_dependency',
    '$gua_position',
    '$gua_monthly_salary',
    '$gua_emp_name',
    '$gua_emp_address',
    '$cus_nic',
    '$gua_status'
    ) ;

  ";
//////////gereanter over/////////////////////////////////////////

    $sql_query_ger_wf = "INSERT INTO ger_wf (
  ger_wf_name,
  ger_wf_dob,
  ger_wf_job_or_position,
  ger_wf_salerry,
  gua_wf_emp_name,
  ger_nic
) 
VALUES
  (
    '$gua_bhalf_fullname',
    '$gua_bhalf_dobs',
    '$gua_bhalf_position',
    '$gua_bhalf_monthly_salary',
    '$gua_bhalf_emp_name',
    '$gua_nic'
  ) ;";
// gerenter wife over///////////////////////////////////////////////////////

    $sql_query_cus_real_ho = "INSERT INTO cus_real_property (
  category,
  place,
  size,
  val,
  is_pawned,
  pawn_getter,
  cus_nic,
  status
    ) 
    VALUES
      (
    '1',
    '$real_prp_house_position',
    '$real_prp_house_size',
    '$real_prp_house_value',
    '$real_prp_house_pawned',
    '$real_prp_house_pawn_getter',
    '$cus_nic',
    '1'
  ) ;";


    $sql_query_cus_real_ot = "INSERT INTO cus_real_property (
  category,
  place,
  size,
  val,
  is_pawned,
  pawn_getter,
  cus_nic,
  status
    ) 
    VALUES
      (
    '2',
    '$real_prp_other_position',
    '$real_prp_other_size',
    '$real_prp_other_value',
    '$real_prp_other_pawned',
    '$real_prp_other_pawn_getter',
    '$cus_nic',
    '1'
  ) ;";

    $sql_query_cus_bank1 = "INSERT INTO cus_bnk_acc(
  cus_bnk_name_and_branch,
  cus_facilities,
  cus_bnk_account_no,
  idbank_acc_cat,
  cus_nic
) 
VALUES
  (
    '$cus_savings_bank_branch_1',
    '$cus_savings_facilities_2',
    '$cus_savings_account_no_3',
    '1',
    '$cus_nic'
  ) ;

";
    $sql_query_cus_bank2 = "INSERT INTO cus_bnk_acc(
  cus_bnk_name_and_branch,
  cus_facilities,
  cus_bnk_account_no,
  idbank_acc_cat,
  cus_nic
) 
VALUES
  (
    '$cus_mobile_bank_branch_1',
    '$cus_mobile_facilities_2',
    '$cus_mobile_account_no_3',
    '2',
    '$cus_nic'
  ) ;

";
    $sql_query_cus_bank3 = "INSERT INTO cus_bnk_acc(
  cus_bnk_name_and_branch,
  cus_facilities,
  cus_bnk_account_no,
  idbank_acc_cat,
  cus_nic
) 
VALUES
  (
    '$cus_daily_loan_bank_branch_1',
    '$cus_daily_loan_facilities_2',
    '$cus_daily_loan_account_no_3',
    '3',
    '$cus_nic'
  ) ;

";

//    $sql_query_service_add = "INSERT INTO service(
//  ser_number,
//  ser_caty,
//  ser_vbrand,
//  ser_vtype_id,
//  ser_v_d_number,
//  ser_v_d_modelyear,
//  ser_leserate,
//  ser_land_pond_amount,
//  ser_period,
//  ser_fixedrental,
//  ser_duration,
//  ser_date,
//  ser_details,
//  ser_status,
//  cus_nic
//) 
//VALUES
//  (
//    '$se1',
//    '$se2',
//    '$se3',
//    '$se4',
//    '$se5',
//    '$se6',
//    '$se7',
//    '$se8',
//    '$se9',
//    '$se10',
//    '$se11',
//    '$se12',
//    '$se13',
//    '1',
//    '$c_nic'
//  ) ;
//";
///////////////////////////////////////////////////////////////////////////////
    //vehicle service para
    $cbopayment = $_POST['cbopayment'];
    $vehicle_service_no = $_POST['service_no'];
    $vehicle_brand = $_POST['vehicle_brand'];
    $vehicle_type = $_POST['vehicle_type'];
    $vehicle_code = $_POST['vehicle_code'];

    $se6_1 = $_POST['vehicle_no1'];
    $se6_2 = $_POST['vehicle_no2'];

    $vehicle_no = $se6_1 . "-" . $se6_2;
    //vehicle service para
    //land service para
    $model_year = $_POST['model_year'];
    $lease_rate = $_POST['lease_rate'];
    $fixed_rate = $_POST['fixed_rate'];
    $cbo_loan_duration = $_POST['cbo_loan_duration'];
    $loan_description = $_POST['loan_description'];
    $installment=$_POST['loan_description'];

    $land_service_no = $_POST['service_no'];
    $land_cbopayment = $_POST['cbopayment'];
    $se_l_ser_caty = "";
    $deed_no = $_POST['deed_no'];
    $pawn_rate = $_POST['pawn_rate'];
    $cbo_year = $_POST['cbo_year'];
    $land_pawn_amount = $_POST['cbo_period'];
    $land_reg_date = $_POST['land_reg_date'];
    //land service para

    if (isset($_POST['cbopayment']) == "bike") {



        $sql_query_service_add_bike = "INSERT INTO service(
        ser_number,
        cbopayment,
        ser_caty,
        ser_vbrand,
        ser_vtype_id,
        ser_v_code,
        ser_v_d_number,
        ser_v_d_modelyear,
        ser_leserate,
        ser_land_pond_amount,
        ser_period,
        ser_fixedrental,
        ser_duration,
        ser_date,
        ser_details,
        ser_installment,
        refrence_person,
        ser_status,
        cus_nic
        ) 
        VALUES
          (
        '$vehicle_service_no',
        '$cbopayment',
        '$cbopayment',
        '$vehicle_brand',
        '$vehicle_type',
        '$vehicle_code',
        '$vehicle_no',
        '$model_year',
        '$lease_rate',
        'No Land Pon Amount',
        'No Period',
        '$fixed_rate',
        '$cbo_loan_duration',
        '$reg_date',
        '$loan_description',
        '$installment',
        '" . $_SESSION['useremail'] . "',
        '1',
        '$cus_nic'
            ) ;
          ";

        $runquery_sql_query_service_add = mysqli_query($conn, $sql_query_service_add_bike);
    } else if (isset($_POST['cbopayment']) == "twheel") {




        $sql_query_service_add_twheel = "INSERT INTO service(
        ser_number,
        cbopayment,
        ser_caty,
        ser_vbrand,
        ser_vtype_id,
        ser_v_code,
        ser_v_d_number,
        ser_v_d_modelyear,
        ser_leserate,
        ser_land_pond_amount,
        ser_period,
        ser_fixedrental,
        ser_duration,
        ser_date,
        ser_details,
        ser_installment,
        refrence_person,
        ser_status,
        cus_nic
        ) 
        VALUES
          (
        '$vehicle_service_no',
        '$cbopayment',
        '$cbopayment',
        'No Brand',
        '$vehicle_type',
        '$vehicle_code',
        '$vehicle_no',
        'No Model Year',
        '$lease_rate',
        'No Land Pon Amount',
        'No Period',
        '$fixed_rate',
        '$cbo_loan_duration',
        '$reg_date',
        '$loan_description',
        '$installment',
        '" . $_SESSION['useremail'] . "',
        '1',
        '$cus_nic'
          ) ;
        ";
    } else if (isset($_POST['cbopayment']) == "land") {



        $sql_query_service_add_land = "INSERT INTO service(
      ser_number,
      cbopayment,
      ser_caty,
      ser_vbrand,
      ser_vtype_id,
      ser_v_code,
      ser_v_d_number,
      ser_v_d_modelyear,
      ser_leserate,
      ser_land_pond_amount,
      ser_period,
      ser_fixedrental,
      ser_duration,
      ser_date,
      ser_details,
      ser_installment,
      refrence_person,
      ser_status,
      cus_nic,
      land_reg_date
) 
VALUES
  (
        '$vehicle_service_no',
        '$cbopayment',
        '$cbopayment',
        'No Brand',
        'No Type',
        'No Code',
        '$deed_no',
        'No Model Year',
        '$lease_rate',
        '$land_pawn_amount',
        'No Period',
        '$cbo_year',
        '$cbo_loan_duration',
        '$reg_date',
        '$loan_description',
        'No Service Installment',
        '" . $_SESSION['useremail'] . "',
        '1',
        '$cus_nic',
        '$land_reg_date'
          ) ;
  ) ;
";
    }



    $runquery_sql_query_service_add = mysqli_query($conn, $sql_query_service_add);
///////////////Don't Touch-query execute///////////////////// 

    $runquery_cus = mysqli_query($conn, $sql_query_cus);
//mysqli_close($conn);
    $runquery_cus_wf = mysqli_query($conn, $sql_query_cus_wf);
//mysqli_close($conn);
    $runquery_ger = mysqli_query($conn, $sql_query_ger);
//mysqli_close($conn);
    $runquery_ger_wf = mysqli_query($conn, $sql_query_ger_wf);
//mysqli_close($conn);
    $runquery_cus_real_ho = mysqli_query($conn, $sql_query_cus_real_ho);
//mysqli_close($conn);
    $runquery_cus_real_ot = mysqli_query($conn, $sql_query_cus_real_ot);
//mysqli_close($conn);
    $runquery_cus_bank1 = mysqli_query($conn, $sql_query_cus_bank1);
//mysqli_close($conn);
    $runquery_cus_bank2 = mysqli_query($conn, $sql_query_cus_bank2);
//mysqli_close($conn);
    $runquery_cus_bank3 = mysqli_query($conn, $sql_query_cus_bank3);
    mysqli_close($conn);






    if ($runquery_cus || $runquery_cus_wf || $runquery_ger || $runquery_ger_wf || $runquery_cus_real_ho || $runquery_cus_real_ot || $runquery_cus_bank1 || $runquery_cus_bank2 || $runquery_cus_bank3) {
        echo 'Customer Successfully Registered!';
//echo '<script>alert("Successs);</script>';
//echo '<script type="text/javascript">
//$(document).ready(function(){
//$("#second").load("../customer/customer_registration.php");
//});
//</script>';
        header('Location:../customer/customer_registration.php');
    } else {
        echo "Error Registration";
    }



// file upload
//$target_dir = "uploads/customers/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//$uploadOk = 1;
//$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
//// Check if image file is a actual image or fake image
//if (isset($_POST["submit"])) {
//    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//    if ($check !== false) {
//        echo "File is an image - " . $check["mime"] . ".";
//        $uploadOk = 1;
//    } else {
//        echo "File is not an image.";
//        $uploadOk = 0;
//    }
//}
//// Check if file already exists
//if (file_exists($target_file)) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
//}
//// Check file size
//if ($_FILES["fileToUpload"]["size"] > 500000) {
//    echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}
//// Allow certain file formats
//if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
//    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//    $uploadOk = 0;
//}
//// Check if $uploadOk is set to 0 by an error
//if ($uploadOk == 0) {
//    echo "Sorry, your file was not uploaded.";
//// if everything is ok, try to upload file
//} else {
//    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
//    } else {
//        echo "Sorry, there was an error uploading your file.";
//    }
}
