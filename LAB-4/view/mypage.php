<?php
include("../control/process.php");
?>
<html>
    <body>
        <h1 align="left">Registration Form</h1>
        <form action="" method="POST" enctype="multipart/form-data">
        <br>
            <table>
                <tr><td>
                First Name:
                </td><td>
                <input type="text" name="fname">
                <?php
                echo $fnameErr;
                ?>
                </td></tr>

                <tr><td>
                Last Name:
                </td><td>
                <input type="text" name="lname">
                <?php
                echo $lnameErr;
                ?>               
                </td></tr>

                <tr><td>
                Age:
                </td><td>
                <input type="text" name="age">
                </td></tr>

                <tr><td>
                Designation:
                </td><td>
                <input type="radio" name="radio" value="Junior Programmer">Junior Programmer
                <input type="radio" name="radio" value="Senior Programmer">Senior Programmer
                <input type="radio" name="radio" value="Project Lead">Project Lead
                </td></tr>

                <tr><td>
                Preferred language:
                </td><td>
                <input type="checkbox" name="java" value="Java">JAVA
                <input type="checkbox" name="php" value="PHP">PHP
                <input type="checkbox" name="cpp" value="CPP">C++
                </td></tr>

                <tr><td>
                E-mail:
                </td><td>
                <input type="email" name="email">
                </td></tr>

                <tr><td>
                Enter a Password:
                </td><td>
                <input type="password" name="password">
                </td></tr>

                <tr><td>
                Please choose a file
                </td><td>
                <input type="file" name="file">
                </td></tr>

                <tr><td>
                <input type="submit" name="submit" value="Submit">
                </td><td>
                <input type="reset" name="reset" value="Reset">
                </td></tr>
            </table>>
        </form>
    </body>
</html>
