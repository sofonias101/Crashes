<?php
#Working
/*Examples:
"><><" => 4 // two head on collisions
"<=>" => 0 // cars on the sides move away and the car in the centre stays put
">>=<><" => 5
">>><><<><<>>==<>==<><<>><><>=><=" => 26*/

$st = "><><";
function CalCrashes($s) : void
{

    $sl = strlen($s);
    echo $sl . "<br>";

    /*Crashes Counter*/
    $cc = null;

    /*Potential crash*/
    $pc = null;

    /*Total Crashed*/
    $tc = null;

    /*UCrashes*/
    $uc = null;


    for ($i = 0; $i < $sl; $i++) {
        if (($s[$i] == '>') && ($s[$i + 1] == '<')) {
            $cc += 2;
            echo $cc . "HeadOn" . $s[$i] . $s[$i + 1] . "<br>";

        } elseif (($s[$i] == '>') && ($s[$i + 1] == '=')) {
            $cc++;
            echo $cc . "RightR " . $s[$i] . $s[$i + 1] . "<br>";

        } elseif (($s[$i] == '=') && ($s[$i + 1] == '<')) {
            $cc++;
            echo $cc . "LeftR" . $s[$i] . $s[$i + 1] . "<br>";


        } elseif (($s[$i] == '<') && ($s[$i + 1] == '=')) {
            $uc++;
            echo "No Accident" . $s[$i] . $s[$i + 1] . "<br>";


        } elseif (($s[$i] == '=') && ($s[$i + 1] == '>')) {
            $uc++;
            echo "No Accident" . $s[$i] . $s[$i + 1] . "<br>";


        } elseif (($s[$i] == '<') && ($s[$i + 1] == '>')) {
            $uc++;
            echo "No Accident" . $s[$i] . $s[$i + 1] . "<br>";


        } elseif (($s[$i] == '=') && ($s[$i + 1] == '=')) {
            $uc++;
            echo "No Accident" . $s[$i] . $s[$i + 1] . "<br>";


        } elseif ($s[$i] == $s[$i + 1]) {
            $pc++;
            echo $pc . "p Accident" . "<br>";
        }
        $tc = $cc + $pc;
    }
    echo $uc . "<br>";
    echo $cc . "<br>";
    echo $pc . "<br>";
    echo $tc . "<br>";
}
 CalCrashes($st);
