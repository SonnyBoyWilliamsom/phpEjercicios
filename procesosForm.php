<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Repaso</title>
        
        <style>
            *{margin: 0; padding: 0;}
            body{
                color: #666666;
                font-family: sans-serif;
                background: #eeffee;
                text-align: center;
               
            }
            header{
                background: #ccffcc;
                padding: 20px;
                color: #999999;
                text-align: center;
            }
            main{
                padding: 50px;
            }
            form{
                padding: 30px;
            }
            .formFields{
                min-width: 100px;
                float: left;
            }
            .enviar{
                
            }
        </style>
    </head>
    <body>
        <h2>Correct login</h2>
        
        <h4>Your personal data is:</h4>
        <?php extract($_GET); ?>
        <p>Name:<b> <?php echo $userName; ?></b></p>
        <p>Surname:<b> <?php if(!empty($userSurname)){ echo $userSurname; }else{ echo 'No data !';} ?></b></p>
        <p>Email:<b> <?php echo $userEmail; ?></b></p>
        <p>Phone:<b> <?php if(!empty($userSurname)){ echo $userSurname; }else{ echo 'No data !';} ?></b></p>
        <a href="repaso_formularios.php"><button style="padding:5px;">Back</button></a>
    </body>
</html>
