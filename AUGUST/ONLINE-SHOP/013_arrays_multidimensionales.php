<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h2>Array multidimensional</h2>
        <?php
        $users= array( 
                      array("nombre"=>"Paco","apellido"=>"Gomez"),
                      array("nombre"=>"Pepe","apellido"=>"Flores"),
                      array("nombre"=>"Jaime","apellido"=>"Col") 
                    );
        //var_dump($users);
        //echo $users[0]["nombre"]." ".$users[0]["apellido"];
        
        for($i=0;$i<count($users);$i++){
            echo $users[$i]["nombre"]." ".$users[$i]["apellido"]."<br>";
        }
        //////////////////////////////////////////////
        foreach($users as $key=>$user){
            foreach($user as $key=>$valor){
                echo $valor." ";
            }
        }
        ?>
        
        
        
    </body>
</html>
