<?php

//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=site_medicale', 'root', '');

$error = '';
$comment_name = '';
$comment_content = '';
$idm='';
$idp='';


$idm=$_POST["idm"];
$idp=$_POST["idp"];


if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}




if($error == '')
{
 $query = "
 INSERT INTO commentaire 
 (parent_comment_id, commentaire, idp,idm) 
 VALUES (:parent_comment_id, :comment, :comment_sender_name , :comment_receiver_name)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $idp,
    ':comment_receiver_name' => $idm
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}


$data = array(
 'error'  => $error
);

echo json_encode($data);







?>


