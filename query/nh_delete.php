 <?php  
 $connect = mysqli_connect("localhost", "root", "", "inventaris");  
 $sql = "DELETE FROM nilai_harian WHERE id = ".$_POST["id"]."";  
 if(mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql))  
 {  
      echo 'Data Berhasil Dihapus';  
 }  
 ?>