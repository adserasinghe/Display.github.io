<?php 

include 'db.php';

 

$sqlt = " SELECT * FROM registration ORDER BY id DESC ";
$result = mysqli_query($conn,$sqlt);
/*$mysqlit->close();*/
?> 
<!-- end php -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>display</title>
    <link rel="stylesheet" href="style.css"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
  </head>
  <body>
    <div class="container">
      <div class="tbl_content">
        <h2>Registration Details</h2>
        <table class="tbl">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Course</th>
              <th>Gender</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Email</th>
              <th colspan="2">Action</th>
            </tr>
            
          </thead>

          <?php
          while($row= mysqli_fetch_assoc($result))
          {
            ?>
          <!-- end php -->


            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['Name']; ?></td>
              <td><?php echo $row['Course']; ?></td>
              <td><?php echo $row['Gender']; ?></td>
              <td><?php echo $row['Phone']; ?></td>
              <td><?php echo $row['Address']; ?></td>
              <td><?php echo $row['Email']; ?></td>
              <td data-label="Edit">
                <button class="btn_edit"><a href="edit.php"></a><i class="fa fa-pencil"></i></button>
              </td>
              <td data-label="Delete">
                <button class="btn_trash"><a href="delete.php"></a><i class="fa fa-trash"></i></button>
              </td>
            </tr>

          </tbody>
          <?php
}
?>

<!-- end php -->

        </table>
      </div>
    </div>
  </body>
</html>