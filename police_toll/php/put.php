<?php include 'database.php' ;

if(isset($_POST['submit11']))
{
$vehicle_no=$_POST['vehicle_no'];
$rfid_no=$_POST['rfid_no'];
$branch_name=$_POST['branch_name'];
$address=$_POST['address'];
$description=$_POST['details'];
function GetImageExtension($imagetype)
{
       if(empty($imagetype)) 
       	return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
}

    


if (!empty($_FILES["photo"]["name"]) && !empty($_FILES["identity"]["name"]) && !empty($_FILES["vehicle"]["name"])) 
{
    $file_name1=$_FILES["photo"]["name"];
    $temp_name1=$_FILES["photo"]["tmp_name"];
    $imgtype1=$_FILES["photo"]["type"];
    $ext1= GetImageExtension($imgtype1);
    $imagename1=date("d-m-Y")."-".time()."-".rand(10000000,99999999).$ext1;
    $target_path1 = "../images/photo/".$imagename1;

    $file_name2=$_FILES["identity"]["name"];
    $temp_name2=$_FILES["identity"]["tmp_name"];
    $imgtype2=$_FILES["identity"]["type"];
    $ext2= GetImageExtension($imgtype2);
    $imagename2=date("d-m-Y")."-".time()."-".rand(10000000,99999999).$ext2;
    $target_path2 = "../images/identity/".$imagename2;
    
    $file_name3=$_FILES["vehicle"]["name"];
    $temp_name3=$_FILES["vehicle"]["tmp_name"];
    $imgtype3=$_FILES["vehicle"]["type"];
    $ext3= GetImageExtension($imgtype3);
    $imagename3=date("d-m-Y")."-".time()."-".rand(10000000,99999999).$ext3;
    $target_path3 = "../images/vehicle/".$imagename3;
    if(move_uploaded_file($temp_name1, $target_path1) && move_uploaded_file($temp_name2, $target_path2) && move_uploaded_file($temp_name3, $target_path3)) 
    {
	mysqli_query($connect,"INSERT INTO complaint
 VALUES('$vehicle_no','$rfid_no','$branch_name','$address','$target_path1','$target_path2','$target_path3','$description')");
    }  
   
}


}


if(mysqli_affected_rows($connect) > 0)
{
 echo "<p>Registration Successful</p>";
}
else
{
  echo "string";
} 
?>
