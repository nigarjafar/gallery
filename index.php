<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
    <head></head>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <style>
        body{width:95%; margin:0 auto;}
        .view{ 
            width:80%;
            height:75%;
            margin:10px auto;
            position:relative;
            }
        .view img, .view video, .view audio
        {margin:0 auto;
            display:flex;
        max-height:100%;
        max-width:100%}
        
        .container-fluid{ 
            position: absolute;
            top:0;
            left:0;
            width:100%;
            height: 100%;
            background-color:rgba(0,0,0,0.85)}
        .btn{
            opacity:0.8;
            position:absolute;
            top:0;
            right:-35px;
            
        }
        .col-md-4{
            height:300px;
            overflow:hidden;
        }
    </style>
    <body>
        <h1 class="text-center">Gallery</h1>

        
            <?php
            $query=$connection->select("gallery");
            while ($row=mysqli_fetch_assoc($query)){?>
                
            <div class="item col-md-4" style="float:left">
                <a href="index.php?id=<?=$row['id']?>">
                    <h6><?=$row['name']?></h6>
            <?php   if($row['type']=="image") {?>
                    <img  id="<?= $row['id']?>"  style="width:100%" src="<?=$row['location']?>">
            <?php   }
                    if($row['type']=="video") {?>
                    <video id="<?= $row['id']?>" style="width:100%" controls> <source src="<?=$row['location']?>" type="video/mp4"> </video>
            <?php   }
                    if($row['type']=="audio") {?>
                    <audio id="<?=$row['id']?>"  style="width:100%" controls><source src="<?=$row['location']?>" type="audio/mp3"></audio>
            <?php   }?>
                </a>
                
            </div>
            <?php }?>

        
        <?php if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query=$connection->select("gallery where id=$id");
        $row=mysqli_fetch_assoc($query);
        ?>
        <div class="container-fluid">
            <div class="view">
                <?php   if($row['type']=="image") {?>
                        <img  id="<?= $row['id']?>" class="item"  src="<?=$row['location']?>">
                <?php   }
                        if($row['type']=="video") {?>
                        <video id="<?= $row['id']?>" class="item"  controls> <source src="<?=$row['location']?>" type="video/mp4"> </video>
                <?php   }
                        if($row['type']=="audio") {?>
                        <audio id="<?=$row['id']?>" class="item"  controls><source src="<?=$row['location']?>" type="audio/mp3"></audio>
                <?php   }?>
                <a class="btn btn-danger" href="index.php">X</a>
            </div>
        </div>
        <?php }?>

        
 </body>
</html>

