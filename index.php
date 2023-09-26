<?php

function countKriteria($evaluationData) {
    $count = 0;

    foreach ($evaluationData as $kriteria) {
        $count++;
    }

    return $count;
}
$evaluationData = [
    [
        'kriteriaName' => 'Product Features',
        'kriteria' => [
            ['name' => 'Product Features'],
            ['name' => 'a.Functionality', 'Markah' => 8],
            ['name' => 'b.Usability', 'Markah' => 7],
            ['name' => 'c.Performance', 'Markah' => 9],
        ]
    ],
    [
        'kriteriaName' => 'Design and User Interface',
        'kriteria' => [
            ['name' => 'Design and User Interface'],
            ['name' => 'a.Visual Appeal', 'Markah' => 7],
            ['name' => 'b.User-Friendliness', 'Markah' => 8],
        ]
    ],
    [
        'kriteriaName' => 'Customer Support',
        'kriteria' => [
            ['name' => 'Customer Support'],
            ['name' => 'a.Response Time', 'Markah' => 9],
            ['name' => 'b.Support Knowledge', 'Markah' => 8],
        ]
    ],
    [
        'kriteriaName' => 'Price and Value for Money',
        'kriteria' => [
            ['name' => 'Price and Value for Money'],
            ['name' => 'a.Pricing Strategy', 'Markah' => 7],
            ['name' => 'b.Value for Money', 'Markah' => 9],
        ]
    ]
];
$numberOfKriteria = countKriteria($evaluationData);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competition Evaluation Form</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="container">
    <h1>Competition Evaluation Form</h1>
    <table border='1' class="table">
        <tr>
            <th>BIL</th>
            <th>KRITERIA PENILAIAN</th>
            <th>MARKAH</th>
        </tr>
        <?php
        $bil = 0;
        foreach ($evaluationData as $kriteria) {
            $items = $kriteria['kriteria'];

            foreach ($items as $index => $item) {
                $itemName = $item['name'];
                $itemMarkah = isset($item['Markah']) ? $item['Markah'] : '';

                echo "<tr>";
                if ($index === 0) {
                    $bil++;
                    $rowspan = count($items);
                    echo "<td rowspan='$rowspan' style='text-align: center; vertical-align: top;'><b>$bil</b></td>";
                    echo "<td colspan='2'><b>$itemName</b></td>";
                } else {
                    echo "<td>{$itemName}</td>";
                    echo "<td style='text-align: center; vertical-align: top;'>{$itemMarkah}</td>";
                }
                echo "</tr>";
            }
        }
        ?>


    </table>
</div>
</body>
</html>






