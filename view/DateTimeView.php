<?php

class DateTimeView {


	public function show() {

		date_default_timezone_set('Europe/Stockholm');

		$dt = getdate();
		$dt2 = date("H:m:s");
 		$showDate = "$dt[weekday], the $dt[wday]th of$dt[month] $dt[year], The time is $dt2";

		$timeString = 'TODO, Write servertime here...';

		return '<p>' . $showDate . '</p>';
	}
}