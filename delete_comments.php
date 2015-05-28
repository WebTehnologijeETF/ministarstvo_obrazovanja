
<?php


    include ('mysql_connect2.php');
if (isset($_GET['id'])) {

$id = $_GET['id'];

}

$query = "SELECT * FROM comments WHERE nid = $id";

$result = @mysql_query($query);

    
     $result = $query->prepare("delete from comments where id =:id;");
	 $result->bindValue(":id", $comments, PDO::PARAM_INT);
     $result->execute();    
	if (!$result) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }
	 
	 
?>