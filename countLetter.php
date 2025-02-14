<?php 
function count_letter($text) {
    $freq = [];

    for($i=0; $i < strlen($text); $i++){
        $char = $text[$i];

        if(ctype_alpha($char)){
            if(isset($freq[$char])){
                $freq[$char]++;
            }else{
                $freq[$char] = 1;
            }
        }
    }

    uksort($freq, function($a, $b) {
        // Urutkan berdasarkan abjad terlebih dahulu
        $cmp = strcasecmp($a, $b);
        
        // Jika abjad sama, kapitalisasi harus diutamakan
        if ($cmp == 0) {
            return ($a < $b) ? -1 : 1;
        }
        
        return $cmp;
    });
    return $freq;
}

echo "Masukan text : ";
$text = trim(fgets(STDIN));

$result = count_letter($text);

echo "Output : ";
echo "[";
foreach ($result as $l => $count){
    echo "\"$l\":$count";
    if(next($result)) echo ", ";
}

echo "]\n";

?>