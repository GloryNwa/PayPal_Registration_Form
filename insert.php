<?php include("db.php");

if (isset($_POST['title'])){

    $title = $_POST['title'];
    $lastname = $_POST['lastName'];
    $firstname = $_POST['firstName'];
    $email = $_POST['email'];
    $cemail = $_POST['cemail'];
    $kcnum = $_POST['kcnum'];
    $phone = $_POST['phone'];
    $des  = $_POST['des'];
    $country = $_POST['country'];
    $zone = $_POST['zone'];
    $church = $_POST['church'];
    $center = $_POST['center'];
    $amount =  $tranx->data->amount / 100;
    // $type =  $_POST['type'];

    $sql = "INSERT INTO formdata (title,firstName,lastName,email,kingschat, phone,designation,country,zone,church,center, amount) VALUES ('$title', '$firstname','$lastname', '$email', '$phone',  '$kcnum','$des', '$country','$zone', '$church','$center','$amount')";

    if (!mysqli_query($con, $sql))
    {
        echo mysqli_error($con);
        //  var_dump(false);exit;
    } else {
        var_dump(true);
        exit;

    }


//    header("refresh:2; url=index.php");

}else{
    var_dump(false);exit;
}
?>