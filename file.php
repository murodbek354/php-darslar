<?php
//  Faylda ma'lumotlarni 0'qish.
$file = fopen("test.txt", "r");
$content = fread( $file, filesize("test.txt"));
fclose($file);
echo $content;
// Fayilga ma'lumot yozish
$file = fopen("data.txt", "w");
fwrite( $file, "Fayilga ma'lumot yozish");
fclose($file);
echo "fayilga ma'lumot yozildi";
// Fayilga ma'lumot qo'shish
$file = fopen("data.txt", "a");
fwrite( $file, "\n yangi malumot qo'shish");
fclose($file);
echo "yagi ma'lumot qo'shildi";
// Faylni mavjudligini aniqlash
if (file_exists('test.txt')){
    echo "fayl mavjud";
    unlink("test.txt");
    echo "fayl o'chirldi<br!";
}else{
    echo "Fayl mavjud emas!";
}

?>