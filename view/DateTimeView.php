<?php

class DateTimeView {


	public function show() {

		date_default_timezone_set('Europe/Stockholm');

		$dt = getdate();
		$dt2 = date("H:m:s");
<<<<<<< HEAD
 		$showDate = "$dt[weekday], the $dt[mday]th of $dt[month] $dt[year], The time is $dt2";
=======
 		$showDate = "$dt[weekday], the $dt[wday]th of$dt[month] $dt[year], The time is $dt2";
>>>>>>> origin/master

		$timeString = 'TODO, Write servertime here...';

		return '<p>' . $showDate . '</p>';
	}
}