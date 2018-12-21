<?php
$student = ['nguyen van a', 'nguyen van b', 'nguyen van c', 'nguyen van d'
];
foreach ($student as $key => $value) {
    echo "key = $key và có giá trị= $value <br/>";
}
foreach ($student as $value) {
    echo "Giá trị phần tử = $value <br/>";
}
?>