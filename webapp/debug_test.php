<?php
$cnt = 0;
echo "Start:" . $cnt . "<br />\n";

for($cnt = 0; $cnt < 10; $cnt++) {
	echo $cnt . "<br />\n";
}

if($cnt > 0) {
	echo "Over_0<br />\n";
}
else {
	echo "Under or Equal 0<br />\n";
}

echo "End:" . $cnt . "<br />\n";
?>