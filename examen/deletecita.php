
<?php 









    
    if(isset($_GET['id'])){
        include_once('db_conection.php');
        $id= $_GET['id'];
    $sql = "DELETE FROM citas WHERE id ={$id}";
    $result = $conn->query($sql);
    header("location: index.php");
        
    }

?>