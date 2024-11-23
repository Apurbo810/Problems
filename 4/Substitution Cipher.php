<?php
function incrementString($input, $n) {
    $lastChar = substr($input, -1); // Get the last character
    $prefix = substr($input, 0, -1); // Get everything except the last character

    for ($i = 0; $i < $n; $i++) {
        if (ctype_alpha($lastChar)) {
            $lastChar++;
            if ($lastChar > 'z') {
                $lastChar = 'a';
            }
        }
    }

    // Concatenate the prefix and incremented character(s)
    return $prefix . $lastChar;
}

// Read input from the user
fscanf(STDIN, "%s %d", $a, $n);
$newString = incrementString($a, $n);
echo $newString; // Output the final result
?>
