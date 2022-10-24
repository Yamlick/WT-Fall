<?php include "regvalidation.php"; ?>

<!Doctype html>
<html>
    <body>
        <h2>Registration Form </h2>

        <form action="" method="post">
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

                    <input type="radio"  name="Occupation" value= "job" > job holder
                    <input type="radio"  name="Occupation" value= "Student"> student
                    <input type="radio"  name="Occupation" value= "worker"> worker
                </td>
                <td>
                    <?php echo $validateradio; ?>
                </td>

            </tr>
            <tr>
                <td>BP CONDITION:</td>
                <td>

                    <input type="checkbox" id="BP CONDITION1" name="BP CONDITION1"  value= "BP HIGH"> BP HIGH
                    <input type="checkbox" id="BP CONDITION2" name="BP CONDITION2" value= "BP LOW"> BP LOW
                    <input type="checkbox" id="BP CONDITION3" name="BP CONDITION3" value= "NORMAL"> NORMAL
                </td>

                <br>
                <td>
<?php echo $validatecheckbox; ?>
            
              
                

<?php echo $v1;?>

<?php echo $v2;?>

<?php echo $v3;?>
<?php echo $v4;?>
<?php echo $v5;?>

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


    </body>
</html>