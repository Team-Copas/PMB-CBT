<?php  
date_default_timezone_set('Asia/Jakarta');
session_start();

$con = mysqli_connect('localhost','root','','db_pmb'); 

if (!$con) 
{
    die('Connect Error: ' . mysqli_connect_errno());
}


// function base_url($url = null)

//   {
//     $base_url = "http://localhost/bookinglk";
//     if ($url != null)
//     {
//     	return $base_url."/".$url;
//     }
//     else
//     {
//     	return $base_url;
//     }

//   } 

?>