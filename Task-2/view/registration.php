<?php include "../Control/regvalidation.php"; ?>

<!Doctype html>
<html>
    <body>
        <h2>Registration Form </h2>

        <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="firstname"></td> 
                <td><?php echo $validatefname; ?> </td>
            </tr>
            <tr>
                <td>Last Name: </td>
                <td><input type="text" name="lastname"> </td>
                <td><?php echo $validatelname; ?> </td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="number" name="age"> </td>
                <td><?php echo $validateage; ?> </td>

            </tr>
            <tr>
                <td>Occupation:</td>
                <td>

                    <input type="radio"  name="Occupation" <?php if (isset($Occupation) && $Occupation=="job holder")?> value= "job" > job holder
                    <input type="radio"  name="Occupation" <?php if (isset($Occupation) && $Occupation=="student")?> value= "Student"> student
                    <input type="radio"  name="Occupation"<?php if (isset($Occupation) && $Occupation=="worker")?> value= "worker"> worker
                </td>
                <td>
                    <?php echo $validateradio; ?>
                </td>

            </tr>
            <tr>
                <td>BPCONDITION:</td>
                <td>

                    <input type="checkbox" id="BPCONDITION" name="BPH"  value= "BPH"> BP HIGH
                    <input type="checkbox" id="BPCONDITION" name="BPL" value= "BPL"> BP LOW
                    <input type="checkbox" id="BPCONDITION" name="BPN" value= "BPN"> NORMAL
                </td>

                <br>
                <td>
                <?php echo $validatecheckbox; ?>
                    <?php echo $v1;?>
                    <?php echo $v2;?>
                    <?php echo $v3;?>
                    </td>
                    <br>


</td>
<br>

            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email"> </td>
                <td><?php echo $validateemail; ?> </td>

            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"> </td>
                <td><?php echo $validatepassword; ?> </td>

            </tr>

        </table>

        
        <input type="submit" value="Submit">

</form>


    </body>
</html>