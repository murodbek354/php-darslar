<?php
setcookie("ism","Umitbek", time()+ 60);

if(isset($_COOKIE ['ism'])){
    echo "Salom".$_COOKIE['ism'];
} else {
    echo "Cookie topilmadi";
}
?>