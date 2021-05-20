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
  if($type == 'editSVGPopUp'){
    if(isset($_POST['svg'])){
      $cID = mysqli_real_escape_string($db, $_POST['svg']);
      $alertType = $type;
      $getIconData = $iN->iN_GetSVGCodeFromID($cID);
      if($getIconData){  
        include("../sources/popup/editSVG.php");
      }
    }
  }
  if($type == 'newSVGCode'){  
      include("../sources/popup/newSVG.php");  
  }
  if($type == 'newPackage'){  
    include("../sources/popup/newPackage.php");  
  }
  if($type == 'ddelPlan'){
    if(isset($_POST['id'])){
      $planID = mysqli_real_escape_string($db, $_POST['id']);
      $alertType = $type;
      include("../sources/popup/deletePlan.php");
    }
  }
  if($type == 'editLanguage'){  
    if(isset($_POST['id'])){
      $langID = mysqli_real_escape_string($db, $_POST['id']); 
      include("../sources/popup/editLanguage.php");
    }
  }
  if($type == 'deletePayout'){
    if(isset($_POST['id'])){
      $delUserID = mysqli_real_escape_string($db, $_POST['id']);
      $alertType = $type;
      include("../sources/popup/deletePayout.php");
    }
  }
  if($type == 'ddelAds'){
    if(isset($_POST['id'])){
      $planID = mysqli_real_escape_string($db, $_POST['id']);
      $alertType = $type;
      include("../sources/popup/deleteAds.php");
    }
  }
  if($type == 'deleteSticker'){
    if(isset($_POST['id'])){
      $delStickerID = mysqli_real_escape_string($db, $_POST['id']);
      $alertType = $type;
      include("../sources/popup/deleteSticker.php");
    }
  }
  if($type == 'newQA'){
    include("../sources/popup/newQA.php");  
  }
  if($type == 'editQuestionAnswer'){
    if(isset($_POST['sid'])){
      $cID = mysqli_real_escape_string($db, $_POST['sid']);
      $alertType = $type;
      $getSData = $iN->iN_GetQADetailsFromID($cID);
      if($getSData){  
        include("../sources/popup/editQA.php");
      }
    }
  }
}
?>