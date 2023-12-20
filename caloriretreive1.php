<?php
session_start();
error_reporting(0);
/*include('connectiondb.php');*/
define('DB_HOST','localhost');
define('DB_PORT','5434');
define('DB_USER','postgres');
define('DB_PASS','postgresql');
define('DB_NAME','nourishmate');

try{
    $dbh=new PDO("pgsql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME,DB_USER,DB_PASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    echo "successfully connected to db";
}catch(PDOException $e){
    exit("Error: ".$e->getMessage());
}?>

<link rel="stylesheet" type="text/css" href="foodret.css">
        <thead>
        <h3>Nutrition stats:</h3>
                  
            
        </thead>

        <tbody>
        <?php
            $item1=$_POST['food1'];
            $item2=$_POST['food2'];

            
        
            $sql="select * from nutri";
            $query=$dbh->prepare($sql);
           /* $query->bindParam(':item1',$item1,PDO::PARAM_STR);
            $query->bindParam(':item2',$item2,PDO::PARAM_STR);*/
            $query->execute();

            $result=$query->fetchAll(PDO::FETCH_OBJ);
            $cnt=1;
            if($query->rowCount()>0){
                echo "result";
                foreach($result as $row){

                    ?>
                    <h5>records</h5>
                    <table>
                    <tr>
                        
                    <th>FoodID</th>
                    <td><?php  echo $foodid=$row->fid; ?></td>

                    <th>Food item</th>
                    <td><?php  echo $foodname=$row->fname; ?></td>

                    <th>Calories</th>
                    <td><?php  echo $cal=$row->calories; ?></td>

                    <th>Carbohydrates</th>
                    <td><?php  echo $carbs=$row->carb; ?></td>

                    <th>Protein</th>
                    <td><?php  echo $pro=$row->protien; ?></td>

                    <th>Fat</th>
                    <td><?php  echo $fat=$row->fat; ?></td>

                    <th>Fibre</th>
                    <td><?php  echo $fib=$row->fibre; ?></td>


                    
                    <td><?php  echo $row['protien']; ?></td>
                    <td><?php  echo $row['fat']; ?></td>
                    <td><?php  echo $row['fibre']; ?></td>
                    </tr>

                    <?php
                }
    
    
            }
            else{
                ?>
                <tr>
                    <td colspan="7">No record found</td>
                </tr>
                <?php  
            } 
    ?>
        </tbody>
    </table>
    