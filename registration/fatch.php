<?php 
include_once 'connection.php';



$sql_query = "SELECT * FROM students";
$conn = OpenCon();
$run_query = $conn->query($sql_query);

?>
<table  width="80%">
 <tr> 
    <td width="30%"><?php include_once'menu.php'?></td>
    <td width="50%">
        <table border="1" width="100%">
            <tr>
                <th>ID</th>
                <th> Name</th>
                <th> Email</th>
                <th> Mobile</th>
                <th>Image</th>
                <th>Gender</th>
                <th>class</th>
                <th>Subject</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Read</th>
            </tr>
        <?php while($row = $run_query->fetch_assoc()){ ?>
                <tr>
                 <td><?=$row['id']?></td>    
                <td><?=$row['name']?></td>
                <td> <?=$row['email']?> </td>
                <td> <?=$row['mobile']?></td>
                <td> <?=$row['image']?></td>
                <td> <?=$row['gender']?></td>
                <td> <?=$row['class']?></td>
                <td> <?=$row['subject']?></td>
               <td><a href="delete.php?id=<?=$row['id']?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
               <td><a href="update_data.php?id=<?=$row['id']?>"> Edit </a></td>
               <td><a href="read2.php?id=<?=$row['id']?>"> Read </a></td>

            </tr>
        
        <?php } ?>

        </table>
    </td>
 </tr>
 </table>






