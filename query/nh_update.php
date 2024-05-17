 <?php  
 $connect = mysqli_connect("localhost", "root", "", "inventaris");  
 $id = $_POST["id"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = "UPDATE nilai_harian SET ".$column_name."=".$text." WHERE id=".$id."";  
 if(mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql))  
 {  
      echo 'Data Berhasil Diperbarui';  
 }  
 ?>  