<?php 
  include('db.php');
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tasks WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if (!result) {
      die("Query failed");
    }

    $_SESSION['message'] = 'Task removed succesfully';
    $_SESSION['message_type'] = 'danger' ;
    
    header("Location: index.php");
  }
?>