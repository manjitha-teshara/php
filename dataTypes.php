<!DOCTYPE html>
<html>
    <h2>Data types</h2>
    <body>
        <?php
            
            $arrayName=array("one","two","three","four",null);
            
            var_dump($arrayName);
            echo "Scucessfully return data type and value";
        
            
            //echo and print are doing same thin in php
        
            echo "<br><br><br>arrayName(0)==> ".$arrayName[0];
            echo "<br>".$arrayName[1];
        
            
        ?>
    </body>
</html>