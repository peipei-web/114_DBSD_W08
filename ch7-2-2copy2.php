<H1>
SID:C112181137
<br>
name: Pei pei
<p>

<?php

$weekday = array(
    1 =>"Mon",
    "Tue",
    "Wed",
    "Thu",
    "Fri",
    "Sat",
    "Sun"
);
for($i = 1; $i <= count(value:$weekday); $i++){
    echo "$i : $weekday[$i]";
}