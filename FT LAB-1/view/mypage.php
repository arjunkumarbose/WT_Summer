<html>
    <body>
        <h1 align="left">Registration Form</h1>
        <form action="../control/process.php" method="post">
        <br>
        <table>
        <tr><td>
        First Name:
        </td><td>
        <input type="text" name="fname">
        </td></tr>
        <tr><td>
        Last Name:
        </td><td>
        <input type="text" name="lname">
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
        <input type="checkbox" name="check" value="Java">JAVA
        <input type="checkbox" name="check" value="PHP">PHP
        <input type="checkbox" name="check" value="CPP">C++
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
        <input type="submit" name="submit">
        </td><td>
        <input type="reset" name="reset">
        </td></tr>
    </table>
    </form>
    </center>
    </body>
</html>
