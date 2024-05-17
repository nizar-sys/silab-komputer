 <?php  
 $connect = mysqli_connect("localhost", "root", "", "inventaris");  
 $id = $_POST['id'];
 $sql = "DELETE FROM pemberitahuan WHERE id = ".$id."";  
 mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql);
// if(mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql))  
// {  
//      echo 'Pemberitahuan Berhasil Dihapus';  
// }  
?>