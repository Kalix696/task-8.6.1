<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="styleOne.css">
</head>
<body>
    
    <div class="container">

        <div class="header">     
               <?php include 'logoPhp.php' ?>         
               <?php include 'menuPhp.php' ?>	   
        </div>       
     
        <div class="aboutMe">
         
            <h1>  <?php  echo $hello  ?> </h1>

            <div class="data">
                
                <div class="myImg">
                    <?php  echo '<img src="/img/qwe.png">'; ?>                    
                </div>

                <div class="fullName">
                    
                    <p> Меня зовут: 
                        <?php echo $name, ' ', $surname;?>                                      
                    </p> 

                    <br>

                    <p> 
                        <?php echo 'Город:', ' ', $city;?> 
                    </p>

                    <br>
           
                    <p> Мне:
                        <?php  echo $age;   ?>          
                    лет </p>

                    <br>

                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                
                </div>

            </div>

            <div class="knowLedge">
                                   
                <?php  include 'knowledgePhp.php'; ?>
                <?php   echo $a, ' ', $b, ' ', $c, ' ', $g; ?> <br>
                                       
                <?php
                    $a = 10;
                    $b = 3;
                    $c = $a % $b;
                    echo $c;
                ?>   <br>                
                
                <?php
                    echo $d;
                ?> 

            </div>

            <div class="article">
                
                <p class="text">
                    He's the one who likes all our pretty songs
                    <br>
                    And he likes to sing along and he likes to shoot his gun
                    <br>
                    But he doesn't knows what it means
                    <br>
                    Knows what it means, and I say
                </p>

            </div>

        </div>

        <?php include 'footerPhp.php' ?>

    </div>


</body>
</html>
