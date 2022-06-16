<!DOCTYPE html>
    
<head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link type="text/css" rel="stylesheet" href="style2.css">
      <link type="text/css" rel="stylesheet" href="chart.css">
      <!-- Bootstrap CSS
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

       <!-- Chart js Script -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>
<body style="background-image: url('back1.webp'); background-repeat: no-repeat;">
    <div class="header">

       


           <nav>
               <img src="logoo.png" class="logo">
               <h2 style="color:white;">CRISPRCAN</h2>
              <ul class="nav-links">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="tool.php">Tools</a></li>
                  <li><a href="browse1.php">Browse(VISUALIZATION)</a></li>
                  <li><a href="search.php">Search</a></li>
                  <li><a href="wiki.php">Wiki Help</a></li>
              </ul>
          </nav>

             <div class="content">
              <h1>BROWSE</h2>
              <!-- <form>
                  <input type="text" placeholder="&#x270e; Enter Keyword">
                  <button type="submit">Find</button>
               </form> -->

             </div>
     </div>
     <!-- doughnut chart -->
    <div class="c1" >
        <br>
        
        <div class="chartBox">
        
               <h2>Visualization of Cancer Organs Affected</h2>
               <br>
        
        
                <canvas id="myChart"></canvas>

                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     
               <script>
                   //setup block
                   const data = {
                    labels: ['Blood', 'Bones', 'Brain/Spinal Cord', 'Cervics','Colon', 'Colon/Rectum','Esophagus','Kidney','Liver','Lungs','Lymphatic System','Mammary Glands','Ovary','Pancreas','Skin','Tongue','Urinary Bladder'],

                    //labels: ['Blood', 'Bones', 'Brain/Spinal Cord', 'Cervics','Colon', 'Colon/Rectum','Esophagus','Kidney','Liver','Lungs','Lymphatic System','Mammary Glands','Ovary','Pancreas','Skin','Tongue','Urinary Bladder'],
                    datasets: [{
                    label: '# of Votes',
                    data: [23, 2, 8, 4, 5, 6, 5, 7, 5, 18, 2, 2, 2, 16, 4, 2, 1],
                    backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(103, 204, 146, 0.8)',
                'rgba(221, 255, 124, 0.8)',
                'rgba(245, 187, 136, 0.8)',
                'rgba(226, 170, 231, 0.8)',
                'rgba(83, 129, 173, 0.8)',
                'rgba(66, 79, 145, 0.8)',
                'rgba(49, 52, 239, 0.8)',
                'rgba(106, 31, 120, 0.8)',
                'rgba(205, 159, 41, 0.8)',
                'rgba(205, 41, 64, 0.8)',
                'rgba(143, 92, 99, 0.8)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(141, 64, 166, 0.8)'
                
                
                
                
                
                
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(103, 204, 146, 0.8)',
                'rgba(221, 255, 124, 0.8)',
                'rgba(245, 187, 136, 0.8)',
                'rgba(226, 170, 231, 0.8)',
                'rgba(83, 129, 173, 0.8)',
                'rgba(66, 79, 145, 0.8)',
                'rgba(49, 52, 239, 0.8)',
                'rgba(106, 31, 120, 0.8)',
                'rgba(205, 159, 41, 0.8)',
                'rgba(205, 41, 64, 0.8)',
                'rgba(143, 92, 99, 0.8)',
                'rgba(141, 64, 166, 0.8)'

               
                
                
                
                
            ],
                    
                    borderWidth: 1
                     }]
                    
                   };

                   //config block
                   const config ={
                    type: 'doughnut',
                    data,
                    options:{
                        plugins:{
                            legend:{
                                position:'right',
                                align: 'start'
                            }
                        }
                    }
                   };
        

                   //render block
                   const myChart = new Chart(
                    document.getElementById('myChart'),
                    config 
                   );
               
    
                
           </script>

        </div>
       
</div>
<!-- bar chart -->
<hr>
<div class="c2" >
        <br>
        
        <div class="chartBox">

        <h2>Analysis methods vs Cell Lines</h2>
               <br>
        <canvas id="myChart1" width="400" height="400"></canvas>
        
        
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        
<script>


const lines = ['HCT-116,MCF-10A,HeLa,HEK293T','A549-deltaSTAT1-SunTag,A549-SunTag ACE2, A549-SunTag,A549,NCI-H460 ','HEK293T,Hep-G2,Rb1/Trp53-deleted SCLC mouse, TF-1, U-138MG cell, Calu-3, HEK293T, MEL-JUSO, POP92, POP66, SW-620, HCT-15,HT-29, A549-ACE2,A2780, U2-OS, K-562, H4 neuroglioma,  OCI-AML2, HCT-116, HEK-293SF, U-87MG','Calu-3','A-375','MGH-U4,PEO1','SCC-13,CAL-27,Jurkatcell','KYSE-150, COLO-680N, KYSE-410, KYSE-30, T-T', 'BxPC-3,PANC-1,HuH-7, SU-DHL-4, HCT-116, HAP-1','U-138MG cell','HEK-293A','NALM-6','Jeko-1 cell'];
const ctx = document.getElementById('myChart1').getContext('2d');
const myChart1 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['RSA', 'MAGeCK-MLE', 'MaGeCK ', 'MAGeCK-iNC', 'CRISPRanalyzer','DESeq2','STARS','Robust-rank','Log2 Fold Change','CasTLE','EdgeR','RANKS','None'],
        datasets: [{
            label: 'cell lines',
            data: [11,11,34,2,1,2,5,5,32,1,2,5,1],
            backgroundColor: [
                'rgba(237, 124, 182, 0.8)',
                'rgba(66, 192, 219, 0.8)',
                'rgba(144, 66, 219, 0.8)',
                'rgba(216, 165, 50, 0.23)',
                'rgba(70, 66, 196, 0.54)',
                'rgba(65, 79, 65, 0.34)'
            ],
            borderColor: [
                'rgba(237, 124, 182, 0.8)',
                'rgba(66, 192, 219, 0.8)',
                'rgba(144, 66, 219, 0.8)',
                'rgba(216, 165, 50, 0.23)',
                'rgba(70, 66, 196, 0.54)',
                'rgba(65, 79, 65, 0.34)'
                
            ],
            borderWidth: 1
        },{
            label: 'unique cell lines',
            data: [4,5,22,1,1,2,3,5,8,1,1,1,1],
            backgroundColor: [
                'rgba(26, 42, 69, 0.8)',
                'rgba(66, 219, 109, 0.8)',
                'rgba(219, 172, 66, 0.8)',
                'rgba(66, 228, 185, 0.23)',
                'rgba(175, 218, 20, 0.65)',
                'rgba(218, 123, 53, 0.66)'
            ],
            borderColor: [
                'rgba(26, 42, 69, 0.8)',
                'rgba(66, 219, 109, 0.8)',
                'rgba(219, 172, 66, 0.8)',
                'rgba(66, 228, 185, 0.23)',
                'rgba(175, 218, 20, 0.65)',
                'rgba(218, 123, 53, 0.66)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        indexAxis: 'y',
        scales:{
            x:{
                grid:{
                    display:false
                },
                stacked:true
            },
            y:{
                beginAtZero: true,
                grid:{
                    display:false
                },
                stacked:true
            }
        },
        plugins:{
            tooltip:{
                backgroundColor: 'black',
                borderWidth: 1,
                callbacks:{
                    beforeTitle: function(context){
                        return 'Method';
                    },
                    title: function(context){
                        console.log(context[0].label);
                        return context[0].label ;
                    },
                    afterTitle: function(context){
                        return 'Cell line';
                    },
                    beforeBody: function(context){
                        return `${lines[context[0].dataIndex] }`;
                    }
                }



            }
        }
    
        
        
    }
});
</script>

</div>
       
</div>
</body>
</html>