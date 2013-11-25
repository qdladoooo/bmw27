<?php
Front::call_js('http://api.map.baidu.com/api?v1.5&ak=C504510078f1ac6706894b947f06796b');
Front::append_css('tm.css');
Front::append_css('smoothness/jquery-ui.min.css');
Front::append_js('sha.js');
Front::append_js('jquery-ui.min.js');
Front::append_js('json2.js');

Front::set_title("行程制作器");

//tname=' + tname + '&start_date=' + start_date + '&days_info
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$tid = (int)$_POST['tid'];
	$tname = $_POST['tname'];
	$start_date = $_POST['start_date'];
	$days_info = $_POST['days_info'];
	$days_info = json_decode($days_info);
	$now = time();
	
	$tname = Utils::sample_filter($tname);
	$start_date = Utils::sample_filter($start_date);
	
	if( empty($tid) ) {
		//插入线路信息
		$db = new db();
		$sql = "insert into tm.travel (name, start_time, insert_time, update_time) values('{$tname}', '{$start_date}', {$now}, {$now})";
		$db->Enq($sql);
		$tid = (int)$db->LastInsertId();
		
		//插入日程信息
		foreach($days_info as $day_play) {
			$nth = (int)$day_play->nth;
			$vehicle = $day_play->vehicle;
			$arrive_time = $day_play->arrive_time;
			$destination = $day_play->destination;
			$hotel_id = (int)$day_play->hotel_id;
			$spot_list = json_encode( $day_play->spot_list );
			
			$vehicle = Utils::sample_filter($vehicle);
			$arrive_time = Utils::sample_filter($arrive_time);
			$destination = Utils::sample_filter($destination);
			
			$sql = "insert into tm.day_plan (tid, dayth, traffic, arrive_time, destination, hotel_id, spot_list, insert_time, update_time) value({$tid}, {$nth}, '{$vehicle}', '{$arrive_time}', '{$destination}', {$hotel_id}, '{$spot_list}', {$now}, {$now})";
			$db->Enq($sql);
		}
	} else {
		$db = new db();
		$sql = "update tm.travel set name='{$tname}', start_time='{$start_date}', update_time={$now} where id={$tid}";
		$db->Enq($sql);
		
		$sql = "delete from tm.day_plan where tid={$tid}";
		$db->Enq($sql);
		//插入日程信息
		foreach($days_info as $day_play) {
			$nth = (int)$day_play->nth;
			$vehicle = $day_play->vehicle;
			$arrive_time = $day_play->arrive_time;
			$destination = $day_play->destination;
			$hotel_id = (int)$day_play->hotel_id;
			$spot_list = json_encode( $day_play->spot_list );
				
			$vehicle = Utils::sample_filter($vehicle);
			$arrive_time = Utils::sample_filter($arrive_time);
			$destination = Utils::sample_filter($destination);
				
			$sql = "insert into tm.day_plan (tid, dayth, traffic, arrive_time, destination, hotel_id, spot_list, insert_time, update_time) value({$tid}, {$nth}, '{$vehicle}', '{$arrive_time}', '{$destination}', {$hotel_id}, '{$spot_list}', {$now}, {$now})";
			$db->Enq($sql);
		}
	}
	exit;
}

$tid = isset($_GET['tid']) ? (int)$_GET['tid'] : 0;
if( !empty($tid) ) {
	$db = new db();
	$sql = "select * from tm.travel where id={$tid}";
	$travel_info = $db->Eor($sql);
	assign('travelInfo', $travel_info);
	
	$sql = "select * from tm.day_plan where tid={$tid}";
	$day_plan_list = $db->Eq($sql);
	
	$count = count( $day_plan_list );
	for($i=0; $i<$count; $i++) {
		$day_plan_list[$i]['spot_list'] = json_decode( $day_plan_list[$i]['spot_list'] );
	}
	assign('dayPlan', json_encode( $day_plan_list ) );
} else {
	assign('travelInfo', '');
	assign('dayPlan', '[]');
}










