<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $gender= $_POST['gender'];
    $lang = $_POST['lang'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mail=$_POST['mail'];
    $senior=$_POST['select'];
    $time=$_POST['tm'];
    $range=$_POST['rate'];
     
}
    echo "
     <table style='border:1px solid black;
     border-collapse:collapse;
     padding:15px;'>
    
    <tr>
        <td style='border:1px solid black;border-collapse:collapse;padding:15px;'>First Name</td>
        <td style='border:1px solid black;border-collapse:collapse;padding:15px;'>Last Name</td>
        <td style='border:1px solid black;border-collapse:collapse;padding:15px;'>Email</td>
        <td style='border:1px solid black;border-collapse:collapse;padding:15px;'>Gender</td>
        <td style='border:1px solid black;border-collapse:collapse;padding:15px;'>Spoken Languages</td>
        <td style='border:1px solid black;border-collapse:collapse;padding:15px;'>Level</td>
        <td style='border:1px solid black;border-collapse:collapse;padding:15px;'>Time of Application</td>
        <td style='border:1px solid black;border-collapse:collapse;padding:15px;'>Our Rate</td>
        
    </tr>
    <tr>
            <td style='border:1px solid black;border-collapse:collapse;padding:15px;'>$fname</td>
            <td style='border:1px solid black;border-collapse:collapse;padding:15px;'>$lname</td>
            <td style='border:1px solid black;border-collapse:collapse;padding:15px;'>$mail</td>
            <td style='border:1px solid black;border-collapse:collapse;padding:15px;'>$gender</td>
            <td style='border:1px solid black;border-collapse:collapse;padding:15px;'>$lang</td>
            <td style='border:1px solid black;border-collapse:collapse;padding:15px;'>$senior</td>
            <td style='border:1px solid black;border-collapse:collapse;padding:15px;'>$time</td>
            <td style='border:1px solid black;border-collapse:collapse;padding:15px;'>$range</td>
    </tr>

    </table>"

?>