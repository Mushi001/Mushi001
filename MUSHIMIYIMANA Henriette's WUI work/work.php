
<?php
if($_SERVER['REQUEST_METHOD'] =="POST" ) ;
$gender = isset($_POST['gender']) ? $_POST['gender'] : 'Not provided';
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$color=$_POST['color'];
$country=$_POST['country'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];

echo"

<table style='border:1px solid black;
border-collapse:collapse;
padding:5px;'>
    <tr>
        <td style='border:1px solid black;border-collapse:collapse;padding:5px;'>First name</td>
        <td style='border:1px solid black;border-collapse:collapse;padding:5px;'>Last name</td>
        <td style='border:1px solid black;border-collapse:collapse;padding:5px;'>Date of birth</td>
        <td style='border:1px solid black;border-collapse:collapse;padding:5px;'>Gender</td>
        <td style='border:1px solid black;border-collapse:collapse;padding:5px;'>Color</td>
        <td style='border:1px solid black;border-collapse:collapse;padding:5px;'>Country</td>
        <td style='border:1px solid black;border-collapse:collapse;padding:5px;'>Email</td>
        <td style='border:1px solid black;border-collapse:collapse;padding:5px;'>Phone</td>
    </tr>
    <tr>
            <td style='border:1px solid black;border-collapse:collapse;padding:5px;'>$fname</td>
            <td style='border:1px solid black;border-collapse:collapse;padding:5px;'>$lname</td>
            <td style='border:1px solid black;border-collapse:collapse;padding:5px;'>$date</td>
            <td style='border:1px solid black;border-collapse:collapse;padding:5px;'>$gender</td>
            <td style='border:1px solid black;border-collapse:collapse;padding:5px;'>$color</td>
            <td style='border:1px solid black;border-collapse:collapse;padding:5px;'>$country</td>
            <td style='border:1px solid black;border-collapse:collapse;padding:5px;'>$mail</td>
            <td style='border:1px solid black;border-collapse:collapse;padding:5px;'>$phone</td>
        </tr>
    
</table>";
?>

