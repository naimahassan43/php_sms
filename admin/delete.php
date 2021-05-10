<?php
      include('../db.php');
      
        $id=$_REQUEST['uid'];

        $query = "DELETE FROM `students` WHERE id = '$id'"; 

        $res = mysqli_query($db, $query);

        if($res==true){
          ?>
<script>
alert('Data Deleted Successfully');
window.open('deleteStudent.php', '_self');
</script>
<?php 
        }
     
      ?>