<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>

<body>
    <h1>Registration Form</h1>

    <form action="">
        <table>
            <tr>
                <td><label for="name">Name: </label></td>
                <td><input type="text" name="FullName" placeholder="Enter your Name"></td>
            </tr>
            <br>
            <tr>
                <td><label for="email">Email: </label></td>
                <td><input type="email" placeholder="Enter your Email"></td>
            </tr>
            <br><br>
            <tr>
                <td><label for="username">User Name: </label></td>
                <td><input type="text" name="userName" placeholder="Enter username"></td>
            </tr>
            <br><br>
            <tr>
                <td><label for="password">Password : </label></td>
                <td><input type="password" placeholder="Enter Password"></td>
            </tr>
            <br><br>
            <tr>
                <td><label for="password">Confirm Password : </label></td>
                <td><input type="password" placeholder="Enter Confirm Password"></td>
            </tr>
            <br>
            <tr>
                <td><label for="gender">Gender : </label></td>
                <td><input type="radio" id="male" name="gender" value="male">Male</td>
                <td><input type="radio" id="female" name="gender" value="female">Female</td>
                <td><input type="radio" id="others" name="gender" value="others">Others</td>
            </tr>
            <br>
            <tr>
                <td><label for="date">Date Of Birth : </label></td>
                <td><input type="date" value="Date"></td>
            </tr>
            <br>
            <tr>
                <td><input type="submit" value="Submit"></td>
                <td><input type="reset"></td>
            </tr>
        </table>

    </form>
</body>

</html>