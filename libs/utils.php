<?php

class Utils
{
	static function paginator($url, $page, $max_page, $sample = false, $label_num = 5) {
		
		$content = '<div class="pages ac">';
		$content .='<span>共 ' . $max_page . '页</span>';
		if($page != 1) {
			$content .= '<a class="pageTxt" href="' . $url . 'p=1">首页</a>';
			if(!$sample) {
				$content .= '<a class="pageTxt" href="' . $url . 'p=' . ($page-1) . '">上一页»</a>';
			}
		}
		
		$start = ($page - floor($label_num/2));
		$start = ($start > 0) ? $start : 1;
		$end = $start + $label_num;
		$end = ($end < $max_page) ? $end : $max_page;
		for($item=$start; $item<=$end; $item++) {
			if($item == $page) {
				$content .= "<strong>{$item}</strong>";
			} else {
				$content .= '<a href="' . $url . 'p=' . $item . '">' . $item . '</a>';
			}
		}
		if($page != $max_page) {
			if(!$sample) {
				$content .= '<a class="pageTxt" href="' . $url . 'p=' . ($page+1) . '">下一页»</a>';
			}
			$content .= '<a class="pageTxt" href="' . $url . 'p=' . $max_page . '">末页</a>';
		}
		$content .='</div>';
		
		return $content;
	}
	
	static function is_mobile() {
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		
		$mobile_agents = Array("240x320","acer","acoon","acs-","abacho","ahong","airness","alcatel","amoi","android","anywhereyougo.com","applewebkit/525","applewebkit/532","asus","audio","au-mic","avantogo","becker","benq","bilbo","bird","blackberry","blazer","bleu","cdm-","compal","coolpad","danger","dbtel","dopod","elaine","eric","etouch","fly ","fly_","fly-","go.web","goodaccess","gradiente","grundig","haier","hedy","hitachi","htc","huawei","hutchison","inno","ipad","ipaq","ipod","jbrowser","kddi","kgt","kwc","lenovo","lg ","lg2","lg3","lg4","lg5","lg7","lg8","lg9","lg-","lge-","lge9","longcos","maemo","mercator","meridian","micromax","midp","mini","mitsu","mmm","mmp","mobi","mot-","moto","nec-","netfront","newgen","nexian","nf-browser","nintendo","nitro","nokia","nook","novarra","obigo","palm","panasonic","pantech","philips","phone","pg-","playstation","pocket","pt-","qc-","qtek","rover","sagem","sama","samu","sanyo","samsung","sch-","scooter","sec-","sendo","sgh-","sharp","siemens","sie-","softbank","sony","spice","sprint","spv","symbian","tablet","talkabout","tcl-","teleca","telit","tianyu","tim-","toshiba","tsm","up.browser","utec","utstar","verykool","virgin","vk-","voda","voxtel","vx","wap","wellco","wig browser","wii","windows ce","wireless","xda","xde","zte");
		$is_mobile = false;
		foreach ($mobile_agents as $device) {
			if (stristr( $user_agent, $device)) {
				$is_mobile = true;
				break;
			}
		}
		return $is_mobile;
	}
	
}