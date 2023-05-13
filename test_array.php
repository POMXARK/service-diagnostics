<?php

$arr = [
    [
        'ai1' => '1',
        'ai2' => '2',
        'date' => '01.01.2023',
    ],
    [
        'ai1' => '3',
        'ai2' => '4',
        'date' => '01.02.2023',
    ],
];


function getGraphData(array $data): array
{
    $categories = [];
    $series = [];
    foreach ($data as $values)
        foreach ($values as $key => $value)
            switch ($key) {
                case 'date':
                    $categories = _serialize($categories, $key, $value);
                    break;
                default:
                    $series = _serialize($series, $key, $value);
            }

    $out = [...$categories];
    $out['series'] = [...$series];

    return $out;
}

/**
 * @param  array  $obj
 * @param         $key
 * @param         $value
 *
 * @return array
 */
function _serialize(array $obj, $key, $value): array
{
    if (isset($obj[$key])) {
        $obj[$key][] = $value;
    } else {
        $obj[$key] = [$value];
    }
    return $obj;
}


$rez = getGraphData($arr);

//echo json_encode($rez)."\n";
//print_r($rez['series']);

$out = [];
foreach ($rez['series'] as $key => $value) {
    $obj = [];
    if (isset('name'[$key])) {
        $obj['name'] = $key;
        $obj['data'] = $value;
    } else {
        $obj['name'] = $key;
        $obj['data'] = $value;
    }
    $out[] = $obj;
}

print_r($out); // ok
echo json_encode($out)."\n";

