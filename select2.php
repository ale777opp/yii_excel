<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>селект2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="jquery-3.4.1.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="content">   
<div class="row">
<table cellpadding="10" border="1">
<tr>
    <td width="10%"> <button type="button" class="btn btn-info">ИД</button></td>
    <td width="10%"> <button type="button" class="btn btn-info">Время</button></td>
    <td width="13%"> <button type="button" class="btn btn-info" onclick="set_select()" id="title">Название</button></td>
    <td width="13%"> <button type="button" class="btn btn-info" onclick="set_select()" id="color">Цвет</button></td>
    <td width="13%"> <button type="button" class="btn btn-info" onclick="set_select()" id="vendor_code">Артикул</button></td>
    <td width="13%"> <button type="button" class="btn btn-info" onclick="set_select()" id="brand">Бренд</button></td>
    <td width="13%"> <button type="button" class="btn btn-info" onclick="set_select()" id="series">Серия</button></td>
    <td width="13%"> <button type="button" class="btn btn-info" onclick="set_select()" id="quantity">Кол-во</button></td>

</tr>     
    
</table>    
</div> 

</div>   
    
<script>

    let mass_selection=[['Название','Цвет','Артикул','Бренд','Серия','Кол-во'],[true,true,true,true,true,true]];
    events='';
function set_select(){            
    let div = document.createElement('div');
    events = event.currentTarget.innerText;
    events_id = '#'+ event.path[0].id;
    let poz_x = event.currentTarget.parentElement.offsetLeft+40+"px";
    let poz_y = 60 +'px';
    let data='<option disabled selected>Выберите</option>';
    for (j=0;j<mass_selection[0].length;j++) {if(mass_selection[1][j]) data=data+`<option value='${mass_selection[0][j]}'>${mass_selection[0][j]}</option>`;
    }
    div.innerHTML = `<div style="position:absolute;left:${poz_x};top:${poz_y};width:100px;"><select id="list" name="${events}">${data}</select></div>`;
    document.body.append(div);
    $('#list').change(function () {
    $(events_id).text($('#list').prop('value'));
    div.remove();
    })
    console.log('прерывание=',events);

    for(i=0;i<mass_selection[0].length;i++) { 
        console.log(i,mass_selection[0][i]==events);
    //    if(mass_selection[0][i]==events){
    //        mass_selection[1][i]=false
    //    }
    }


}  


</script>    
    

<!--   <table cellpadding="10" border="1">
    <thead>
<tr>
        
<?php 
$columns=['ИД','Название','Цвет','Артикул','Бренд','Серия','Кол-во'];
$result[]='';
 for ($j=0; $j<count($columns);$j++) {echo '<td width="10%">'.$columns[$j];

   echo '<select name="'.$columns[$j].'">';
   for ($i=0; $i<count($columns);$i++) {echo '<option value="'.$columns[$i].'">'.$columns[$i].'</option>';}
   echo '</select>';
   }
echo '</td>';
var_dump($result);
?>

</tr>


<?php
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
