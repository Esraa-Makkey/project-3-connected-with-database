<!-- <?php
// open connection & create database demo  
 $dbhost ='localhost';
 $dbuser = 'root';
 $dbpass = '';
$dbname = 'demo';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
 $sql = "create database $dbname ";
 $retval = mysqli_query ( $conn,$sql);

 if(!$retval) {
    die('Could not create database: ' . mysqli_error($conn));
  }
 echo 'Connected successfully<br>';
 mysqli_select_db( $conn,$dbname );
   echo "Database <span style='color:red'>$dbname </span>created & selected successfully\n";
   mysqli_close($conn);
 ?> -->
<!-- <?php
#3
//create db TABLE
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='demo';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   
   echo 'Connected successfully<br>';
   
   //select
   mysqli_select_db( $conn,$dbname );

   //create table
   $sql = 'CREATE TABLE users( users_id INT NOT NULL AUTO_INCREMENT,
   users_name VARCHAR(50) NOT NULL,
   users_email  VARCHAR(50) NOT NULL,
   users_gender   VARCHAR(6) NOT NULL,
   mail_status VARCHAR(3),
   primary key ( users_id ))';

     $retval = mysqli_query( $conn,$sql );
   
   if(! $retval ) {
      die('Could not create table: ' . mysqli_error($conn));
   }
    
   echo "<br>Database Table  created successfully\n";
   mysqli_close($conn);
?> -->



 