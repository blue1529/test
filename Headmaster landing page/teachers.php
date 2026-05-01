<?php
   /* $firstname=$_POST['fname'];
    $middlename=$_POST['mname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
    $phone_number=$_POST['number'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $residence=$_POST['address'];

    /*
    $file="teachers_list.txt";
    $handle= fopen($file, "w");

    if($handle){
        if(file==0){
            $header="Firstname\t Middlename\t Lastname\t Gender\t DOB\t Place of Residence\n";
            $header.= "--------------------------------------------------------------------------------\n";
        }
        else{
            $data="$firstname $middlename $lastname $gender $dob $residence" ;
            fwrite($handle, $data);
        
        }
        

        fclose($handle);
        
    }
    echo "Save successful";

    //echo "<html"
    //echo "<html><title></title><body><a href="/dashboard.html">Link to dash</a></body></html> ";

    ?>
     <html>
        <body>
            <p><a href="dashboard.html">Link to dash</a></p>
        </body>
     </html>
    */

     //to connect to a database


 /*   $conn= mysqli_connect("localhost", "root", "", "primary_school_db", 3309);

if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}
//insert into table
$sql="INSERT INTO teacher (Firstname, Middlename, Lastname, 
        Email, 'Phone number', Gender,
        Date_of_birth, Place_of_residence)
        VALUES ('$firstname', '$middlename', '$lastname',
        '$email','$phone_number','$gender','$dob','$residence')";

if(mysqli_query($conn, $sql)){
    echo "Save successful";
    
}else{
    echo "Error" .mysqli_error();
}
mysqli_close($conn);
*/

//from claude

/*var_dump($_POST);
exit;*/
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$firstname    = $_POST['fname'];
$middlename   = $_POST['mname'];
$lastname     = $_POST['lname'];
$email        = $_POST['email'];
$phone_number = $_POST['number'];
$gender       = $_POST['gender'];
$dob          = $_POST['dob'];
$residence    = $_POST['address'];

// Port 3309 added as 5th parameter
$conn = mysqli_connect("localhost", "root", "", "primary_school_db", 3309);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO teacher (Firstname, Middlename, Lastname, 
        Email, `Phone number`, Gender,
        Date_of_birth, Place_of_residence)
        VALUES ('$firstname', '$middlename', '$lastname',
        '$email', '$phone_number', '$gender', '$dob', '$residence')";

if (mysqli_query($conn, $sql)) {
    echo "Save successful";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

