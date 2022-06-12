<?php
$fnameErr="";
$lnameErr="";
if(isset($_POST["submit"]))
{
    $fname = $_POST["fname"];
    if(empty($fname))
    {
        $fnameErr = "You haven't entered your first name!";
        echo "<br>";
    }
    else
    {
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname))
        {
            echo "Please remove numeric numbers from your first name!";
            echo "<br>";
        }
        else 
        {
            echo "Your first name is: ".$fname;
            echo "<br>";
        }
    }
    
    $lname = $_POST["lname"];
    if(empty($lname))
    {
        $lnameErr = "You haven't entered your last name!";
        echo "<br>";
    }
    else
    {
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lname))
        {
            echo "Please remove numeric numbers from your last name!";
            echo "<br>";
        }
        else 
        {
            echo "Your last name is: ".$lname;
            echo "<br>";
        }
    }
    
    $age = $_POST["age"];
    if(empty($age))
    {
        echo "You haven't entered your age!";
        echo "<br>";
    }
    else
    {
        echo "Your Age is: ".$age;
        echo "<br>";
    }

    if (isset($_POST["radio"]))
    {
        echo "You have selected as: ".$_POST["radio"];
        echo "<br>";
    } 
    else 
    {
        echo "You must have to select one!";
        echo "<br>";
    }

    if(isset($_POST["java"]) || isset($_POST["php"]) || isset($_POST["cpp"]))
    {
        echo "Your preferred language is: ";
        echo "<br>";
        if(isset($_POST["java"]))
        {
            echo $_POST["java"];
            echo "<br>";
        }
        if(isset($_POST["php"]))
        {
            echo $_POST["php"];
            echo "<br>";
        }
        if(isset($_POST["cpp"]))
        {
            echo $_POST["cpp"];
            echo "<br>";
        }
    }
    else
    {
        echo "Please select a checkbox!";
        echo "<br>";
    }

    $email = $_POST["email"];
    if (empty($email) || !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',$email))
    {
        echo "Invalid email!";
        echo "<br>";
    }
    else 
    {
        echo "Your email is ".$email;
        echo "<br>";
    }
    
    $password = $_POST['password'];
    if (strlen($password) < 8) 
    {
        echo "Please Enter a valid password!";
        echo "<br>";
    }
    else
    {
        echo "Your given password is: ".$password;
        echo "<br>";
    }

    echo $_FILES["file"]["name"];
    if(move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/file.jpeg"))
    {
        echo "file uploaded!";
    }
    else
    {
        echo "Uploading error!";
        echo $_FILES["file"]["error"];
    }

    $formdata = array
    (
        "Fname: "=> $_POST["fname"],
        "Lname: "=> $_POST["lname"],
        "Age: "=> $_POST["age"],
        "Designation: "=> $_POST["radio"],
        "Preflanguage 1: "=> $_POST["java"],
        "Preflanguage 2: "=> $_POST["php"],
        "Preflanguage 3: "=> $_POST["cpp"],
        "Password: "=> $_POST["password"],
        "Email: "=> $_POST["email"]
    );

    $existingdata = file_get_contents("../data/data.json");
    $tempJSONdata = json_decode($existingdata);
    $tempJSONdata[] =$formdata;

    //Convert updated array to JSON
    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
    //write json data into data.json file
    if(file_put_contents("../data/data.json", $jsondata))
    {
        echo "<br> Data successfully saved <br>";
    }
    else 
    {
        echo " no data saved!";
        echo "<br>";
    }
}
$data = file_get_contents("data.json");
$mydata = json_decode($data);
?>
