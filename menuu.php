<?php

$menuu_begin= '<div>';
$menuu_arr= array('otsing','sisestakustuta');
$menuu_end='</div>';

function menuu($begin, $body, $end){
    echo $begin;
    for ($i = 0; $i < count($body); $i++)
    {
echo '<li><a href="'.$body[$i].'.php">'.$body[$i].'</a></li>';
    }
echo $end;
}
?> 