<?php

Front::set_title('Example');
assign('name', 'Dlad');


$user = M('User');
$info = $user->get_user_info();
var_dump($info);

