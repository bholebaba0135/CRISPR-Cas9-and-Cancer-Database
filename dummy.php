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
              <form action="dummy.php" method="post">
                  <input type="text" name="keyword" placeholder="&#x270e; Enter Screen Name or Target Gene Name to filter">
                  <button type="submit">Find</button>
               </form>



           </div>
           <br> <br> <br> <br>  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br><br><br><br>
           <?php 
           //
           $conn=mysqli_connect("localhost","root"," ","biodb");
               if($conn){
                   echo "<center>Conection Established</center> <br><br><br>";
               }
               else{
                   echo "Connection not established";
               }
          
            
           
           
           
           
           
           
           
           
           
           //
          
           if(isset($_POST["keyword"])){
               
               
               echo "<br><br><br>";
               $keyWord=$_POST["keyword"];
               $sql2="Select * from cancer where ('$keyWord'=CRISPR_Screening OR '$keyWord'= Associated_Cancer OR '$keyWord'=Target_Gene);";
               $result2=mysqli_query($conn,$sql2);
               if(mysqli_num_rows($result2)>0){
                   $temp=array();//storing the screen_name for secondary table
                   $i=0;//counter
                   echo "<center><table style='border:2px solid black;border-collapse:collapse;'>";
                   echo "<tr>";
                   echo "<th style='padding:7px;border:2px solid black;text-align:center;background-color:rgb(87,164,226);'>Screen Name</th>";
                   echo "<th style='padding:7px;border:2px solid black;text-align:center;background-color:rgb(87,164,226);'>Target Gene</th>";
                   echo "<th style='padding:7px;border:2px solid black;text-align:center;background-color:rgb(87,164,226);'>Associated Cancers</th>";
                   
                   echo "</tr>";
                   while($rows2=mysqli_fetch_assoc($result2)){
                       echo "<tr>";
                       echo "<td style='padding:7px;border:2px solid black;text-align:center;background-color:pink;'>";
                      
                       echo $rows2["CRISPR_Screening"];
                       echo "</td>";
                       echo "<td style='padding:7px;border:2px solid black;text-align:center;background-color:yellow;'>";
                       echo $rows2["Target_Gene"];
                       echo "</td>";
                       echo "<td style='padding:7px;border:2px solid black;text-align:center;background-color:lightgreen;'>";
                       echo $rows2["Associated_Cancer"];
                       echo "</td>";
                       
                       echo "</tr>";
                       
                   }
                   echo "</table></center>";
                   echo "<br> <br> <br> <br> <br> <br>";
                   
                   
               }
               else{
                   echo "0 results";
               }
               
               


           }
           else{
            $sql1="select * from cancer;";
            $result1=mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result1)>0){
                   
                    echo "<center><table style='border:2px solid black;border-collapse:collapse;'>";
                    echo "<tr>";
                    echo "<th style='padding:7px;border:2px solid black;text-align:center;background-color:rgb(87,164,226);'>CRISPR Screening</th>";
                    echo "<th style='padding:7px;border:2px solid black;text-align:center;background-color:rgb(87,164,226);'>Target Gene</th>";
                    echo "<th style='padding:7px;border:2px solid black;text-align:center;background-color:rgb(87,164,226);'>Asociated Cancers</th>";
                    
                    echo "</tr>";
                    while($rows1=mysqli_fetch_assoc($result1)){
                        echo "<tr>";
                        echo "<td style='padding:7px;border:2px solid black;text-align:center;background-color:lightgreen;'>";
                        echo $rows1["CRISPR_Screening"];
                        echo "</td>";
                        echo "<td style='padding:7px;border:2px solid black;text-align:center;background-color:pink;'>";
                        
                        echo $rows1["Target_Gene"];
                        echo "</td>";
                        echo "<td style='padding:7px;border:2px solid black;text-align:center;background-color:yellow;'>";
                        echo $rows1["Associated_Cancer"];
                        echo "</td>";
                        
                       
                        echo "</tr>";
                       
                    }
                    echo "</table></center>";
                    echo "<br> <br> <br> <br> <br> <br>";
                 }

           }
           ?>
</body>
</html>