<?php
// Input array
$array = [
    'a' => 123,
    'b' => [
        'c' => 234,
        'd' => [
            'e' => 567
        ]
    ],
    'f' => 8910,
    'g' => [
        'h' => 123
    ]
];

// Find end key and element from each iteration
function return_end_element($array){
    $output = [];
    array_walk_recursive($array, function (&$value, $key) use (&$output) {
        if( !is_array($value)){
            if($value)
                $output[$key] = $value;
        }
    });
    return $output;    
}

$output = return_end_element($array);
// Array
// (
//     [a] => 123
//     [c] => 234
//     [e] => 567
//     [f] => 8910
//     [h] => 123
// )


