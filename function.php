<?php

function greating(){
    echo  'selamat ';
}
greating();


function greating1($name){
    return  'selamat datang '.$name;
}
?>
<p><?= greating1('arifefa') ?></p>

<?php
function plus($field1, $field2){
    return $field1 + $field2;
}
echo plus(3,5);

// check there function
if (!function_exists('mymins')){
    function mymins(){
        echo '<p>ini mins</p>';
    }
    mymins();
}else{
    echo '<p>there no function</p>';
}