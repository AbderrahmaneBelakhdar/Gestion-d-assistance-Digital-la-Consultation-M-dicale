<?php

//fetch_comment.php

//$connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '');
$connect = new PDO('mysql:host=localhost;dbname=site_medicale', 'root', '');

$idm='';
$idp='';

$idm=$_GET['id'];
$idp=$_GET['idp'];




/*
$query = "
SELECT * FROM tbl_comment 
WHERE parent_comment_id = '0' 
ORDER BY comment_id DESC
";
*/
$query = "
SELECT * from commentaire INNER JOIN informationsp ON idm=$idm AND informationsp.idP=commentaire.idp AND parent_comment_id = '0' 
ORDER BY idc DESC ";  

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{  
 $output .= '
 <div class="panel panel-default"> 
  <div class="panel-heading"> <b>'.$row["NomP"]  ."  "    .$row["PrenomP"].  '</b> à <i>'.$row["datec"].'</i></div>
  <div class="panel-body">'.$row["commentaire"].'</div>
  <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["idc"].'">Reply</button></div>
 </div>
 ';
 $output .= get_reply_comment($connect, $row["idc"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "  
 SELECT * from commentaire INNER JOIN informationsp ON        informationsp.idP=commentaire.idp 
 AND parent_comment_id = '".$parent_id."' 
 ";
//idm=$id  AND

 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
    <div class="panel-heading"> <b>'.$row["NomP"]  ."  "    .$row["PrenomP"]. '</b> à <i>'.$row["datec"].'</i></div>
    <div class="panel-body">'.$row["commentaire"].'</div>
    <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["idc"].'">Reply</button></div>
   </div>
   ';
   $output .= get_reply_comment($connect, $row["idc"], $marginleft);
  }
 }
 return $output;
}

?>
