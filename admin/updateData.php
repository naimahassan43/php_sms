<?php
      include('../db.php');
      
      if(isset($_POST['update'])){

        $id       = $_POST['uid'];
        $roll       = $_POST['roll'];
        $name       = $_POST['name'];
        $city       = $_POST['city'];
        $contact    = $_POST['contact'];
        $class      = $_POST['class'];
        $imageName      = $_FILES['image']['name'];
        $tempimage      = $_FILES['image']['tmp_name'];

        $image=rand(0,500000).'_'.$imageName; 
        move_uploaded_file($tempimage, "../img/".$image);

        $query = "UPDATE `students` SET `roll`='$roll',`name`='$name',`city`='$city',`contact`='$contact',`class`='$class',`image`='$image' WHERE `id`='$id' ";
// echo $query;
        $res = mysqli_query($db, $query);

        if($res==true){
          ?>
<script>
alert('Data Updated Successfully');
window.open('edit.php?uid=<?php echo $id; ?>', '_self');
</script>
<?php 
        }
      }
      ?>