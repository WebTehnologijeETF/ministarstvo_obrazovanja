<?php
if(isset($_POST['user'])){
$user=$_POST['user'];
$pass=$_POST['pass'];
}
<form action="check.php" method="post">
Username:<input type='text' name='user'><br>
Password:<input type='password' name='pass'><br>
<input type='submit' value = 'PRIJAVI SE'>

</form>;


?>