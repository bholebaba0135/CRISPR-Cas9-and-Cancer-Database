<!DOCTYPE html>
    
<head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link type="text/css" rel="stylesheet" href="style2.css">

</head>
<body>
    <div class="header">

       


           <nav>
               <img src="logoo.png" class="logo">
               <h2 style="color:white;">CANCRISPR</h2>
              <ul class="nav-links">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="tool.php">Tools</a></li>
                  <li><a href="browse1.php">Browse(VISUALIZATION)</a></li>
                  <li><a href="search.php">Search</a></li>
                  <li><a href="wiki.php">Wiki Help</a></li>
              </ul>
          </nav>

          <div class="content">
              <h1>SEARCH</h2>
              <form action="search.php" method="post">
                  <input type="text" name="keyword" placeholder="&#x270e; Enter Keyword">
                  <button type="submit">Find</button>
               </form>



           </div>
           <br> <br> <br> <br>  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br><br><br><br>
           <?php 
           if(isset($_POST["keyword"])){
               $conn=mysqli_connect("localhost","root"," ","biodb");
               if($conn){
                   echo "<center>Conection Established</center>";
               }
               else{
                   echo "Connection not established";
               }
               
               echo "<br><br><br>";
               $keyWord=$_POST["keyword"];
               $sql="Select * from crispr where ('$keyWord'=screen_name OR '$keyWord'=cell_type OR '$keyWord'=cell_line OR '$keyWord'=phenotype OR '$keyWord'=analysis OR methodology='$keyWord' OR '$keyWord'=C_Organ);";
               $result=mysqli_query($conn,$sql);
               if(mysqli_num_rows($result)>0){
                   $temp=array();//storing the screen_name for secondary table
                   $i=0;//counter
                   echo "<center><table style='border:2px solid black;border-collapse:collapse;'>";
                   echo "<tr>";
                   echo "<th style='padding:7px;border:2px solid black;text-align:center;background-color:rgb(87,164,226);'>Screen Name</th>";
                   echo "<th style='padding:7px;border:2px solid black;text-align:center;background-color:rgb(87,164,226);'>Cell Type</th>";
                   echo "<th style='padding:7px;border:2px solid black;text-align:center;background-color:rgb(87,164,226);'>Cell Line</th>";
                   echo "<th style='padding:7px;border:2px solid black;text-align:center;background-color:rgb(87,164,226);'>Phenotype</th>";
                   echo "<th style='padding:7px;border:2px solid black;text-align:center;background-color:rgb(87,164,226);'>Analysis</th>";
                   echo "<th style='padding:7px;border:2px solid black;text-align:center;background-color:rgb(87,164,226);'>Methodlogy</th>";
                   echo "<th style='padding:7px;border:2px solid black;text-align:center;background-color:rgb(87,164,226);'>Cancer Organ</th>";
                   echo "<th style='padding:7px;border:2px solid black;text-align:center;background-color:rgb(87,164,226);'>Target Genes</th>";//Button Header
                   echo "</tr>";
                   while($rows=mysqli_fetch_assoc($result)){
                       echo "<tr>";
                       echo "<td style='padding:7px;border:2px solid black;text-align:center;background-color:pink;'>";
                       $temp[$i]=$rows['screen_name'];
                       echo $rows["screen_name"];
                       echo "</td>";
                       echo "<td style='padding:7px;border:2px solid black;text-align:center;background-color:yellow;'>";
                       echo $rows["cell_type"];
                       echo "</td>";
                       echo "<td style='padding:7px;border:2px solid black;text-align:center;background-color:lightgreen;'>";
                       echo $rows["cell_line"];
                       echo "</td>";
                       echo "<td style='padding:7px;border:2px solid black;text-align:center;background-color:lightblue;'>";
                       echo $rows["phenotype"];
                       echo "</td>";
                       echo "<td style='padding:7px;border:2px solid black;text-align:center;background-color:orange;'>";
                       echo $rows["analysis"];
                       echo "</td>";
                       echo "<td style='padding:7px;border:2px solid black;text-align:center;background-color:plum'>";
                       echo $rows["methodology"];
                       echo "</td>";
                       echo "<td style='padding:7px;border:2px solid black;text-align:center;background-color:cyan;'>";
                       echo $rows["C_Organ"];
                       echo "</td>";
                       echo "<td style='padding:7px;border:2px solid black;text-align:center;'>";//
                       echo " <a href='dummy.php'><button style=''>Know More</button></a>";//
                       echo "</td>";
                       echo "</tr>";
                       $i=$i+1;//increasing the value for every iteration to store next screen anme in next index
                   }
                   echo "</table></center>";
                   echo "<br> <br> <br> <br> <br> <br>";
                   
                   
               }
               else{
                   echo "0 results";
               }
               
               


           }
           ?>
</body>