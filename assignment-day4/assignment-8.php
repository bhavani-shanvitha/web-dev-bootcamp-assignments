<!DOCTYPE html>
<html>
  <head>
    <title>email id Table</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>ID</th>
        <th>Email_ID</th>
      </tr>
    <?php
      
      // Server Credentials
      $server="localhost:3306";
      $username="root";
      $password="";
      $dbname="samples";

      $conn=mysqli_connect($server,$username,$password,$dbname);  
      if(!$conn) {
        echo 'Connection Failure';
      }

      $sql="SELECT * FROM email_id";

      $data=mysqli_query($conn,$sql);
      if(mysqli_num_rows($data)>0) {
        while($row=mysqli_fetch_assoc($data)) {
    ?>
          <tr>
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['email_id'];?></td>
          </tr>
    <?php      
        }
      }
    ?>
  </table>
  </body>
</html>
