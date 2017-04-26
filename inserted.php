<?php
	$Student_Id = $_POST['fname'];
	$Student_Name = $_POST['fname2'];
	$email = $_POST['fname3'];
	$branch = $_POST['fname4'];
	$duration = $_POST['duration'];
	

    mysql_connect("localhost","root","");
    mysql_select_db("sunny") ;
    $select = "insert into WP(ID, NAME, EMAIL, BRANCH, DURATION) values (' ".$Student_Id." ',' ".$Student_Name." ',' ".$email." ', ' ".$branch." ', ' ".$duration." ')";
    
    $sql=mysql_query($select);
    print '<script type="text/javascript">';
    print 'alert("The data is inserted")';
    print '</script>';
    header('Location: /sunny/list.php');  
    mysql_close();
?>	
    
