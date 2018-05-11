<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets2/fonts/material-icons.css">
    <link rel="stylesheet" href="assets2/css/styles.css">
</head>

<body>
    <?php
    
        // echo "test";
        $db = new PDO("mysql:host=localhost;dbname=trainDataBase", "root", "");
        $db->exec("SET NAMES utf8");
        $leave = $_POST['leave'];
        $reach =$_POST['reach'];
       
        
                
          $type= $_POST['type'];       
        if($_POST['type']=='all'){
          $rows = $db->prepare( "select * from trains where station = ?;");  
          $rows->execute(array($leave));
        }
        else
        {
        $rows = $db->prepare( "select * from trains where station = ? AND type = ?;");  
        $rows->execute(array($leave ,$type ));
          //  echo "test";
           
        }

        $rows = $rows->fetchAll();
       
        $station_number = count($rows);
        $rows1 = "";
         foreach ($rows as $row) {
         $rows1 = $db->prepare("select * from trains where train_num = ?  AND  station = ?;");
         $rows1->execute(array($row['train_num'],$reach));
         $rows1 = $rows1->fetchAll();
     }
          if(count($rows1) == 0 )
            $station_number = "";
    ?>
    <h1 class="header">EgypTrains-قطارات مصر&nbsp; </h1>
    <div class="location">
      <?php echo "<h2>من  ".$_POST['leave']." لـــ ".$_POST['reach']." يوجد". $station_number." قطار"  ."</h2>";?></div>
    <div class="data">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        
                        <th class="hcol"> الدرجة <i class="fa fa-tag tableicon"></i></th>
                        <th class="hcol"> السرعة <i class="glyphicon glyphicon-dashboard tableicon"></i></th>
                        <th class="hcol"> المدة <i class="glyphicon glyphicon-align-center tableicon"></i></th>
                        <th class="hcol"> وصول <i class="fa fa-clock-o tableicon"></i></th>
                        <th class="hcol">قيام <i class="material-icons tableicon">access_time</i></th>
                        <th class="hcol"> قطار <i class="fa fa-train tableicon"></i></th>
                    </tr>
                </thead>
                <tbody>
                          
                        <?php
                            foreach ($rows as $row) {
                                echo"<tr>";              
                                     
                               
                                        
                             foreach ($rows1 as $row1) { 
                                $startTime = new DateTime($row['tim']);
                                $endTime = new DateTime($row1['tim']);
                                $duration = $startTime->diff($endTime); //$duration is a DateInterval object
                                 
                                echo "<td class='dcol'>".$row['type']."</td>";
                                echo "<td class='dcol'>".'كم/'.$row['speed']."</td>";
                            
                                echo "<td class='dcol'>". $duration->format("%H:%I:%S")."</td>";
                                
                                echo "<td class='dcol'>".$row1['tim']."</td>";
                                 echo "<td class='dcol'>".$row['tim']."</td>";
                                echo "<td class='dcol'>".$row['train_num']."</td>";
                                echo"</tr>";
                                }
                                
                               
                            }

                        ?>
                    
                    
                </tbody>
            </table>
        </div>
    </div>
    <script src="assets2/js/jquery.min.js"></script>
    <script src="assets2/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>