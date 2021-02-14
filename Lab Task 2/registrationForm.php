<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>

<body>

    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $unameErr = $passErr = $cpassErr = "";
    $name = $email = $uname = $pass = $cpass = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/[^a-zA-Z0-9\-\_\.]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["uname"])) {
            $unameErr = "Name is required";
        } else {
            $uname = test_input($_POST["uname"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $uname)) {
                $unameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["password"])) {
            $passErr = "Name is required";
        } else {
            $pass = test_input($_POST["password"] < 6);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$%#@/", $pass)) {
                $passErr = "Only letters and white space allowed & Password must be more than 8 characters!";
            }
        }

        if (empty($_POST["password_confirm"])) {
            $cpassErr = "Password is required";
        } else {
            $cpass = test_input($_POST["password_confirm"] < 6);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$%#@/", $cpass)) {
                $cpassErr = "Only letters and white space allowed & Password must be more than 8 characters!";
            }
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Registration Form Validation Example</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        User Name: <input type="text" name="uname" value="<?php echo $uname; ?>">
        <span class="error">* <?php echo $unameErr; ?></span>
        <br><br>
        Password: <input type="password" name="password" value="<?php echo $pass; ?>">
        <span class="error">* <?php echo $passErr; ?></span>
        <br><br>
        Confirm password: <input type="password" name="password_confirm" value="<?php echo $cpass; ?>">
        <span class="error">* <?php echo $cpassErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="SUBMIT">
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $uname;
    echo "<br>";
    echo $pass;
    echo "<br>";
    echo $cpass;
    echo "<br>";

    ?>

</body>

</html>