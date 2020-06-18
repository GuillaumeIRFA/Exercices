<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="date" action="1.php" method="get">
        <input type="submit" value="Valider la date"><br>
        <label for="year">Année</label>
        <input type="text" id="year" name="year"><br>
        <label for="month">Mois</label>
        <input type="text" id="month" name="month"><br>
        <label for="day">Jour</label>
        <input type="text" id="day" name="day"><br>
        <label for="hour">Heure</label>
        <input type="text" id="hour" name="hour"><br>
        <label for="minute">Minute</label>
        <input type="text" id="minute" name="minute"><br>
    </form>
    <?php
        // function console_log( $data ){
        //     echo '<script>';
        //     echo 'console.log('. json_encode( $data ) .')';
        //     echo '</script>';
        // }

        // function prompt($msg) {
        //     // echo "<script type=text/javascript> alert(data) </script>";
        //     echo "<script type=\"text/javascript\"> let $msg = prompt('$msg'); </script>";
        //     // echo "<script type=\"text/javascript\"> data.push(prompt('$msg')); </script>";
        //     // echo "<script type=\"text/javascript\"> console.log(data); </script>";
        //     $answer = "<script type=\"text/javascript\"> document.write($msg) </script>";
        //     return $answer;
        // }

        function createNewDate() {
            if (
                isset($_GET["day"]) && 
                isset($_GET["month"]) && 
                isset($_GET["year"]) && 
                isset($_GET["hour"]) && 
                isset($_GET["minute"])
                ) {

                function inputDate($info, $start=0, $end=9999) {
                    $r = (int)$_GET[$info];
                    if ($r >= $start && $r <= $end) return $r;
                    else return null;
                }
                
                function isBissextile($annee) {
                    if ((($annee % 4) == 0 && ($annee % 100) != 0) || ($annee % 400) == 0) return true;
                    else return false;
                }
                
                $y = inputDate("year");
                $mo = inputDate("month", 1, 12);
                if ($mo == 2 && isBissextile($y) == false) $d = inputDate("day", 1, 28);
                else if ($mo == 2 && isBissextile($y) == true) $d = inputDate("day", 1, 29);
                else if ($mo == 4 || $mo == 6 || $mo == 9 || $mo == 11 ) $d = inputDate("day", 1, 30);
                else $d = inputDate("day", 1, 31);
                
                $h = inputDate("hour", 0, 23);
                $mi = inputDate("minute", 0, 60);

                if (($d != null) && ($mo != null) && ($y != null) && ($d != null) && ($mi != null)) return $y ."-". $mo ."-". $d ." ". $h .":". $mi;
                else return "Veuillez entrer une date valide! :)";

            } else return "Veuillez entrer une date valide! :)";
        }
        
        $date = createNewDate();
        echo $date;

    ?>
</body>
</html>