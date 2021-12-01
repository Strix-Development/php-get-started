<style>  
td
{
padding:8px;
}

</style>

<?php
//FETCH DATA IN DATABASE USING  (SELECT *FROM TABLE_NAME COMMAND)

require_once __DIR__. "./dbconnect.php";
require_once __DIR__. "/action/header.php";
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "test";
// create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connection
//if (!$conn) {
  //die("Connection failed:". mysqli_connect_error());
//}
?>


<?php
//include("./connect.php");
 $query= "SELECT * FROM tbluser";
 $data = mysqli_query($conn,$query);
 $total = mysqli_num_rows($data);  // as per query how much number of rows are shown
 //echo "$total";     // it tells us how much total records is there
  
//$result = mysqli_fetch_assoc($data);  // number of data of rows are fetch
//echo "$result";    //it just show only array
 
//it shows first record for all
//echo $result['fname']." ".$result['lname']." ". $result['password']." ". $result['cpassword'];


   //for showing all records of table
   if($total != 0)
   {
   ?>
   <table>
   <tr> 
     <td> id </td>
     <td> fname </td>
     <td> lname </td>
     <td> email </td>
     <td> password </td>
     <td> cpassword </td>
     <td> contact </td>
     <td> operations </td>
     
   </tr>
    <?php
   while($result = mysqli_fetch_assoc($data))
     {
     echo"<tr> 
     <td> ".$result['id']."</td>
     <td>".$result['fname']."</td>
     <td>" .$result['lname']. "</td>
     <td>" .$result['email']. "</td>
     <td>"  .$result['password'].  "</td>
     <td>" . $result['cpassword']. "</td>
     <td>"  .$result['contact']. "</td>
     <td> <a href='./update.php?id=$result[id]'> Edit </a></td>
     <td> <a href='./delete.php?id=$result[id]'> delete </a> </td>
     
     
    
     </tr>";
     }
   }
   else
   {
   echo "no record found";
   }
   ?>
   </table>
?>
 