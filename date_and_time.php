<?php 
date_default_timezone_set("Asia/Tashkent");
echo"xozirgi sana:". date("y-m-d")."<br>";
echo"xozirgi sana:". date("y m d")."<br>";
echo"xozirgi sana:". date("y.m.d")."<br>";
echo"xozirgi sana:". date("m.y.d")."<br>";
echo"xozirgi sana:". date("d.m.y")."<br>";
echo"xozirgi sana:". date("D.m.y")."<br>";
echo"xozirgi sana:". date("D.M.Y")."<br>";
echo"xozirgi sana:". date("H:i:s")."<br>";
echo"xozirgi sana:". date("H:i:s")."<br>";
echo"xozirgi sana:". date("H:i:sa")."<br>";
echo"xozirgi sana:". date("l")."<br>";
echo"xozirgi sana va vaqt:". date("H: d.m.y")."<br>";
echo"xozirgi sana:". date("d.m.Y H:i")."<br>";
echo"xozirgi sana:". date("d F Y")."<br>";
echo "unix time:".time()."<br>";
echo "unix time". strtotime( "2025-11-14") ."<br>";
echo date ("d.m.Y", strtotime("2025-11-14")) ."<br>";
echo date ("d.m.Y", strtotime("+7 year")) ."<br>";
echo "unix time". date("d.m.Y", time())."<br>";  



?>