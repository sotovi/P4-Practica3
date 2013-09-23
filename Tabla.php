<!DOCTYPE>
<html>
 <head>
  <?php
   $filas=10;
   $columnas=10;
   $numero=1;
   $grey=true;
   $clase='';
  ?> 
 </head>                                                               
 <body>
  <style>
   tr{
    background-color: blue;
   }
   tr:nth-child(2n+1){
    background-color: yellow;
   }
  </style> 
  <table>
   <?php
    for($t=0;$t<$filas;$t++){
    echo "<tr>";
    if ($t%2==0){
    $clase='clase=par';
    }
    else{
    $clase='clase=impar';
    } 
    for($y=0;$y<$columnas;$y++){
    if($grey){
    echo "<td style=padding:3px;.$clase;>".$numero."</td>";
    $grey=false;
    $numero++;
    }
    else{
    echo "<td style=padding:3px;>".$numero."</td>";
    $grey=true;
    $numero++;
    }
    }
    echo "</tr>";
    }
   ?>
  </table>
 </body>                                                                 
</html>