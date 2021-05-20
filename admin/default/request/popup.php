<?php 
include_once "../../../includes/inc.php";    
$statusValue = array('0','1');
if(isset($_POST['f']) && $logedIn == '1'){
  $type = mysqli_real_escape_string($db, $_POST['f']);
  /*Delete Post Call AlertBox*/
  if($type == 'ddelPost'){
    if(isset($_POST['id'])){
      $postID = mysqli_real_escape_string($db, $_POST['id']);
      $alertType = $type;
      include("../sources/popup/deletePost.php");
    }
  }
