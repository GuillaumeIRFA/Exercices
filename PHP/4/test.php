<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <?php
            function foo(&$var)
            {
                $var++;
            }
            function &bar()
            {
                $a = 5;
                return $a;
            }
            foo(bar());
            echo bar();
        ?>
    </body>
</html>