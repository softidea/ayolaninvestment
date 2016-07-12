<!DOCTYPE HTML>
<html>

    <head>
        <title>User|Registration</title>


        <?php
        include '../assets/include/head.php';
        ?>


    </head>
    <body>

        <style type="text/css">

            .StyleTextFiled{
                border:  1px solid #666;
                border-radius: 6px;
                width: 300px;
                height: 35px;

            }

        </style>

    <center>
        <div class="container">

            <form class="form-horizontal" action='../' method="POST">
                <fieldset>
                    <div id="legend">
                        <legend class="">Register Form</legend>
                    </div>
                    <div class="control-group">
                        <!-- Fname -->
                        <label class="control-label"  for="Fname">First Name</label>
                        <div class="controls">
                            <input type="text" id="Fname"  name="Fname" placeholder="" class="StyleTextFiled">

                        </div>
                    </div>
                    <div class="control-group">
                        <!-- Fname -->
                        <label class="control-label"  for="Lname">Last Name</label>
                        <div class="controls">
                            <input type="text" id="Lname"  name="Lname" placeholder="" class="StyleTextFiled">

                        </div>
                    </div>
                    <div class="control-group">

                        <!-- Username -->
                        <label class="control-label"  for="username">Username</label>
                        <div class="controls">
                            <input type="text" id="username"  name="username" placeholder="" class="StyleTextFiled">
                            <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- E-mail -->
                        <label class="control-label" for="email">E-mail</label>
                        <div class="controls">
                            <input type="email" id="email" name="email" placeholder="" class="StyleTextFiled">
                            <p class="help-block">Please provide your E-mail</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- Password-->
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                            <input type="password" id="password" name="password" placeholder="" class="StyleTextFiled">
                            <p class="help-block">Password should be at least 4 characters</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- Password -->
                        <label class="control-label"  for="password_confirm">Password (Confirm)</label>
                        <div class="controls">
                            <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="StyleTextFiled">
                            <p class="help-block">Please confirm password</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <button class="btn btn-success">Register</button>
                        </div>
                    </div>
                </fieldset>
            </form>


        </div>
    </center>

    <script type="text/javascript">

<?php
include '../assets/js/customer_registration.js';
?>

    </script>

</body>

</html>