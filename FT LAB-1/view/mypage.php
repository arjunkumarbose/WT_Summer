<html>
    <body>
        <h1 align="left">Registration Form</h1>
    <form action="../control/process.php" method="post">
        <br>
        <table>
        <tr><td>
        First Name:
        </td><td>
        <input type="text" name="fn">
        </td></tr>
        <tr><td>
        Last Name:
        </td><td>
        <input type="text" name="ln">
        </td></tr>
        <tr><td>
        Age:
        </td><td>
        <input type="text" name="age">
        </td></tr>
        <tr><td>
        Designation:
        </td><td>
        <input type="radio" name="des" value = "Junior Programmer">Junior Programmer
        <input type="radio" name="des" value = "Senior Programmer">Senior Programmer
        <input type="radio" name="des" value = "Project Leader">Project Lead
        </td></tr>
        <tr><td>
        Preferred language:
        </td><td>
        <input type="checkbox" name="prel[]" value = "JAVA">JAVA
        <input type="checkbox" name="prel[]" value = "PHP">PHP
        <input type="checkbox" name="prel[]" value = "C++">C++
        </td></tr>
        <tr><td>
        E-mail:
        </td><td>
        <input type="email" name="em">
        </td></tr>
        <tr><td>
        Enter a Password:
        </td><td>
        <input type="password" name="pass">
        </td></tr>
        <tr><td>
        Please choose a file
        </td><td>
        <input type="file" name="fl">
        </td></tr>
        <tr><td>
        <input type="submit" name="sm">
        </td><td>
        <input type="reset" name="rs">
        </td></tr>
    </table>
    </form>
    </center>
    </body>
</html>
