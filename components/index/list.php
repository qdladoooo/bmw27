<?php
Front::set_title("选择行程");

$db = new db();
$sql = 'select * from tm.travel where recommended = 1';
$travel_list = $db->Eq( $sql );

assign('travelList', $travel_list);



