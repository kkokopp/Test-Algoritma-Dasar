<?php 
function pattern_count($text, $patern){
    // echo $text, $patern;
    $textLen = strlen($text);
    $paternLen = strlen($patern);

    $count = 0;

    if ($paternLen === 0 || $paternLen > $textLen) {
        return 0;
    }

    for ($i = 0; $i <= $textLen - $paternLen; $i++){
        $match = true;
        for($j = 0; $j < $paternLen; $j++){
            if($text[$i + $j] !== $patern[$j]){
                $match = false;
                break;
            }

            break;
        }
        if($match){
            $count++;
        }
    }
    return $count;
}

echo"Input text: ";
$text = trim(fgets((STDIN)));

echo "Input Pattern: ";
$patern = trim(fgets(STDIN));

$result = pattern_count($text, $patern);

echo "Output : \"$result\""; 

?>