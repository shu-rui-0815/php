<?php
    include("setting.inc")
?>

<?php
    $uId="nuk";
    $uPwd="1234567890";

    $uName=$_GET["uName"];  //_get時前面就要用 method="get"，_post時前面就要用 method="post"
    echo "帳號：" .$uName. "<br/>";
    $uPSW=$_GET["uPSW"];
    echo "密碼：" .$uPSW. "<br/>";

    if($uId==$uName && $uPwd==$uPSW){
        $_SESSION["check"] = "Yes";
        setcookie("userName",$uId,time()+36000);
        header("Location:party_form.php");
    }else{
        $_SESSION["check"] = "No";
        header("Location:fail.php");
    }
   ob_flush();
?>