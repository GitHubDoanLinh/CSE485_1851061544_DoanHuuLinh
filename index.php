
<?php include('header.php')?>

       
<body style="position: relative;">
        <!-- xac minh dang nhap -->
 <?php      
session_start() ;
if ( !isset( $_SESSION[ 'userid' ] ) ){
    include('navbar-login.php');
}else{
    if($_SESSION['role']==1){
        include('navbar-admin.php');
    }else{
        include('navbar-user.php');
    }
    
}
?>

<div class="container pt-3 clearfix" style="text-align:center">

    <h1>Welcome to my web cv!</h1>
	<a class="btn  btn-outline-success"  href="profile/index.php?memberid=1">Click here!</a>
</div>
<?php
include('footer.php')?>