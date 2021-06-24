<!DOCTYPE html>
<html>
<head>

    <title>DMC</title>
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body class="search-body">
   <!--  <div class="container">
       <div class="images"> 
        <img class="logo" src="images/bkuc-logo.jpg">
       </div> 
 -->
       <form class="form3" action="search.php" method="post">
        <input  class="input input-rollno" type="text" name="roll" placeholder="Enter your roll no">
        <input class="btn1" type="submit" name="Submit">
      </form>

  
    &nbsp;
    &nbsp;
    
<?php
include "connection.php";
?>

<?php

if(isset($_POST['Submit']))
 {
    $sid=$_POST['roll'];
      ?>
          
          
  <?php 
}  
  ?>

            <?php 
            $query="SELECT * FROM `students` WHERE rno='$sid'";
            $result=mysqli_query($conn, $query);

            while($row=mysqli_fetch_assoc($result))
           {
              
              $rno=$row['rno'];
              $name=$row['Name'];
              $class=$row['class'];
              $program=$row['program'];
              $telecom=$row['telecom'];
              $comp=$row['com_arch'];
              $ca=$row['compile_cons'];
              $cg=$row['computer_netw'];
              $cn=$row['computer_grap'];
              $web=$row['web_eng']; 


              $obtn=$telecom+$comp+$ca+$cg+$cn+$web;
              $prcnt=100*$obtn/600;

            }
            ?>

            <div class="DMC">
              <h3 class="bkuc">Bacha khan university Charsadda Pakistan<br>Department of Computer science.</h3>
              <img class="dmc-logo" src="images/bkuc-logo.jpg">
              <hr>
              <table class="table-info">
                <tr>
                 <th>Name</th><td><?php echo $name?></td>
                 </tr>

                 <tr> 
                 <th>Roll NO</th><td><?php echo $rno?> </td>
                 </tr>

                 <tr> 
                 <th>class</th> <td><?php echo $class?></td>
                 </tr> 

                 <tr>
                 <th>program</th><td><?php echo $program?> </td>
                </tr> 
               </table>


                <table class="marks-table" border="1">
                  <tr>
                  <th>Subjects</th><th>Marks</th>
                </tr>
                <tr>
                 <th>Telecommunication</th> <td><?php echo $telecom?> </td>
                </tr>
                <tr> 
                  <th>Compiler Construction</th><td><?php echo $comp?> </td>
                </tr> 
                <tr>  
                 <th>Computer Architecture</th><td><?php echo $ca?> </td>
                </tr>
                <tr>
                 <th>Comptuer Graphics</th> <td><?php echo $cg?> </td>
                </tr>
                <tr>  
                 <th>Computer Networks</th><td><?php echo $cn?> </td>
                </tr>
                <tr>  
                 <th>Web Engineering</th><td><?php echo $web?> </td>
                </tr>
              </table>
               &nbsp;
              <table >
                 <tr>
                  <th>TOTAL Marks:</th><td>600</td>
                  </tr>
                  <tr>
                  <th>Obtain Marks:</th><td><?php echo $obtn?></td>
                </tr>
                <tr>
                <th>Percentage:&nbsp;&nbsp;&nbsp;</th><td><?php echo $prcnt?></td>
                </tr>
              </table>
                   <br>
                   <br>
                   <br>
                    
                    <SPAN class="signature">CONTROLLER:&nbsp__________.<br> <br><br>HOD:&nbsp&nbsp_____________. </SPAN>
                    <br><br>

            </div>
          
</body>
</html>

  