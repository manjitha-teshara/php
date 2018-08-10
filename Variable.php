<!DOCTYPE html>
<html>
    <h2>php variables</h2>
    <body>
        <?php
            echo "PHP variable use<br>";
            $name="teran";
            $institute="UCSC";
            $hight=5.6;
            $age=23;
            
            echo "My name is ".$name.",My hight is ".$hight."inh and age is ".$age.". I Study at ".$institute."<br>";
        
        
            $h=12.5;
            $l=4;
            $d=9.1;
            $v=$h*$l*$d/100;//need to use "$" before the varibale name
        
            print "Volume of the box V=".$v."<br>";
            echo "Volume of the box V=".$v."<br>";
            
        ?>
    </body>
</html>