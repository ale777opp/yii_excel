<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="jquery-3.4.1.js"></script>
</head>
<body>
   <table cellpadding="10" border="1">
    <thead>
<tr>
        
<?php 
$columns=['ИД','Название','Цвет','Артикул','Бренд','Серия','Кол-во'];
$result[]='';
 for ($j=0; $j<count($columns);$j++) {echo '<td width="10%"><span id="log">'.$columns[$j].'</span>';

   echo '<select id="list" name="'.$columns[$j].'">';
   for ($i=0; $i<count($columns);$i++) {echo '<option value="'.$columns[$i].'">'.$columns[$i].'</option>';}
   echo '</select>';
   }
echo '</td>';
//var_dump($result);
?>

</tr>
</thead>
<tbody>

<!--<?php
//chdir('/usr/tmp');
$src = fopen('yii_test1.csv', 'r'); // 'r' указывает функции открыть файл для чтения <meta charset="utf-8">
// $dst = fopen('f2.txt', 'w'); // 'w' указывает функции открыть файл для записи
while ( !feof($src) ) {
// echo '<table>'; 
$line = fgets($src);
list($items['ID'],$items['title'],$items['color'],$items['vendor_code'],$items['brand'],$items['seria'],$items['size'],$items['quantity'],$items['create_at'])=split (";", $line,9);
 
 // 'ID'=> , 'title'=> , 'color'=> , 'vendor_code'=> , 'brand'=> , 'seria'=> , 'size'=> , 'number'=> , 'quantity'=> , 'create_at'=> ,'=> ,
 //echo $count = count($items);

echo '<tr>
        <td width="8%">'.$items['ID'].'</td>
        <td width="25%">'.$items['title'].'</td>
        <td width="12%">'.$items['color'].'</td>
        <td width="8%">'.$items['vendor_code'].'</td>
        <td width="8%">'.$items['brand'].'</td>
        <td width="8%">'.$items['seria'].'</td>
        <td width="7%">'.$items['size'].'</td>
        <td width="7%">'.$items['quantity'].'</td>
        <td width="15%">'.$items['create_at'].'</td>
       </tr>'; 
//  fputs($dst, $line);.'|'.  //var_dump($line);
}
//fclose($dst);
fclose($src);
?> -->
<tbody>
 <script>
   $(document).ready(function(){
alert('Ваша версия jQuery ' + jQuery.fn.jquery);
});

 
  // обработчик события change, который будет выводить в #log выбранный пункт
  $('#list').change(function () {$('#log').text($('#list').prop('value')); $('#list').css('display', 'none') })
</script>   
</body>
</html>
