<style>
  table {
    border: 1px solid;
    border-collapse: collapse;
  }
  th,
  td {
    border: 1px solid #000;
    padding: 10px 20px;
  }
</style>
<table>
    <thead>
        <tr>
            <td>Type</td>
            <td>Price</td>
            <td>Size</td>
            <td>Ram</td>
            <td>Made by</td>
            <td>Made in</td>
        </tr>
    <tbody>
<?php
$data = [
    [
        'type' => 'iphone',
        'property' => [
            'price' => 100,
            'size' => 6.5,
            'ram' => '2 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
    [
        'type' => 'ipad',
        'property' => [
            'price' => 190,
            'size' => 7.9,
            'ram' => '4 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
];

foreach ($data as $key => $value) {
    foreach ($value as $key1 => $value1) {
        if ($key1 !='property') {
            echo "<tr>";
             echo "<td>$value1</td>";
        }
        else {
            foreach ($value1 as $key2 => $value2) {
                if ($key2 != 'made') {
                    echo "<td>$value2</td>";
                }
                else {
                    foreach ($value2 as $key3 => $value3) {
                        echo "<td>$value3</td>";
                    }
                }
            }
        }
            }
            echo "</tr>";
        }
?>
        </tbody>
    </thead>
</table>
