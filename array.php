<?php
// penulisan array lama
$color_primary = array(
    'red','yellow','green'
);
// cetak array
var_dump($color_primary);
echo '<br>';
print_r($color_primary);
echo '<br>';
// cetak array color primary data awal
echo $color_primary[0];

echo '<hr>';
// cetak using for
echo '<h3> cetak array using for </h3>' ;
for ($i=0; $i < count($color_primary) ; $i++) { 
    echo '<span> '.$color_primary[0].'</span>';
}

echo '<hr>';
// cetak using foreach
echo '<h3>  cetak array using foreach </h3>';
foreach ($color_primary as $key => $value) {
    echo "<span> " .$value." </span>";
}
echo '<hr>';

// penulisan array baru
$color_secondary = ['blue','grey','cream'];
var_dump($color_secondary);
echo '<hr>';

echo "<h3>Array associative </h3>";
$biodata = [
    "name" => "ara",
    "job" => "dev",
    "age" => 19
];

// cetak array associative
echo  'name : '. $biodata['name'] .'<br>';
echo  'job : '. $biodata['job'] .'<br>';
echo  'age : '. $biodata['age'] .'<br>';
echo  '<br>';

// cetak array associative using forech
echo "<h3>cetak Array associative using foreach </h3>";
foreach ($biodata as $key => $value) {
    echo $key .' : '. $value .'<br>';
}
