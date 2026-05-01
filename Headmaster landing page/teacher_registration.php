<!DOCTYPE html>
<html>
<head>
    <title>Teacher registration</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Teacher Registration</h1>
    <hr>
    <form action="teachers.php" method="POST">
        Firstname: <input type="text" name="fname" required> <br>
        Middlename: <input type="text" name="mname"> <br>
        Lastname: <input type="text" name="lname" required> <br>
        Email:<input type="email" name="email" placeholder="example@gmail.com"> <br>
        Phone numeber: <input type="phone" name="number" required> <br>
        Gender: <input type="radio" name="gender" value="Male"> Male &nbsp; 
                <input type="radio" name="gender" value="Female"> Female <br>
        Date of birth: <input type="date" name="dob"> <br>
        Place of residence: <input type="text" name="address"> <br>
    <hr>
        <div class="button">
            <input type="submit" name="submit" value="Save"> &nbsp;
            <input type="reset" name="reset" value="Clear">
        </div>
        

    </form>

</body>
</html>