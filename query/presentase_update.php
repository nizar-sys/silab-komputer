 <?php  
 $connect = mysqli_connect("localhost", "root", "", "inventaris");  
 $nh = $_POST["pnh"];  
 $abs = $_POST["pabs"];  
 $uts = $_POST["puts"];  
 $uas = $_POST["puas"];  
 $pro = $_POST["ppro"];  
 $id = $_POST["id"];  
 
 $sql = "UPDATE presentase_nilai SET nilai_harian=".$nh." , uts=".$uts." , uas=".$uas." , project=".$pro." , absensi=".$abs." WHERE id=".$id."";  
 if(mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql))  
 {  
      echo 'Data Berhasil Diperbarui';  
 }  
 ?>  