--TEST--
Test strftime() function : usage variation - Checking time related formats which was not supported on Windows before VC14.
--FILE--
<?php
/* Prototype  : string strftime(string format [, int timestamp])
 * Description: Format a local time/date according to locale settings
 * Source code: ext/date/php_date.c
 * Alias to functions:
 */

echo "*** Testing strftime() : usage variation ***\n";

// Initialise function arguments not being substituted (if any)
date_default_timezone_set("Asia/Calcutta");
$timestamp = mktime(8, 8, 8, 8, 8, 2008);

//array of values to iterate over
$inputs = array(
	  'Time in a.m/p.m notation' => "%r",
	  'Time in 24 hour notation' => "%R",
	  'Current time H:M:S format' => "%T",
);

// loop through each element of the array for timestamp

foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
	  print_r( strftime($value) );
	  echo PHP_EOL;
	  var_dump( strftime($value, $timestamp) );
}

?>
===DONE===
--EXPECTF--
*** Testing strftime() : usage variation ***

--Time in a.m/p.m notation--
%02d:%02d:%02d %s
string(11) "08:08:08 AM"

--Time in 24 hour notation--
%02d:%02d
string(5) "08:08"

--Current time H:M:S format--
%02d:%02d:%02d
string(8) "08:08:08"
===DONE===
