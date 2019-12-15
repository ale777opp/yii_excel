<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="jquery-3.4.1.js"></script>
</head>
<body>
<script>
    $(document).ready(function(){
alert('Ваша версия jQuery ' + jQuery.fn.jquery);
});
</script>

    <p id="log">Выберите</p>
<form action="" name="my_form">   
    <select name="test" id="list">
    <option disabled selected>Выберите</option>
    <option value="str0"> Строка списка 0 </option>
    <option value="str1"> Строка списка 1 </option>
    <option value="str2"> Строка списка 2 </option>
    </select>
</form>   


<script>
  // установим второму option значение DOM-свойству selected равное true
 // $('#list option:nth-child(2)').prop('selected', true);
  // обработчик события change, который будет выводить в #log выбранный пункт
  $('#list').change(function () {
      $('#log').text($('#list').prop('value') + ' - selected');
  })
</script>

<!--//    let vendor="выбор";
//    let objSel = document.getElementById("select"); // let objSel = document.myForm.test;
    
//    objSel.options[0] = new Option("Строка списка 0", "str0");
//    objSel.options[1] = new Option("Строка списка 1", "str1");
//    objSel.options[2] = new Option("Строка списка 2", "str2");

    
  // objSel.options.length=3; //добавляем в конец списка пустой элемент
//    objSel.options[2].text = "Строка списка 3";
 //   objSel.options[2].value = "str3";
//objSel.options[objSel.options.length] = new Option("Строка списка 3", "str3"); 

//if ( objSel.selectedIndex != -1)
//{
  //Если есть выбранный элемент, отобразить его значение (свойство value)
//  alert(objSel.options[objSel.selectedIndex].value);
//  console.log(objSel.options.length,objSel.selectedIndex,objSel.options[objSel.selectedIndex].text);
//  document.body.children[0].outerText=objSel.options[objSel.selectedIndex].text;
//}


    // let selected = Array.from(select.options).filter(option => option.selected).map(option => option.value);

    //  alert(selected); // Блюз,Рок
    //function show_get(){
    
//function is_New(){  

       // let note = event.currentTarget;
        //id = note.children[0].children[4].innerText;
     //   if (event.target!=note) return false;
     //   note.ondragstart = function() {return false;};
     //   document.body.children[0].outerText=objSel.options[objSel.selectedIndex].text

    //let selected = Array.from(select.options).filter(option => option.selected).map(option => option.value);

    // alert(selected); // Блюз,Рок
     //alert(document.body.children['test'].value); 
     //  let events = event.currentTarget.innerText;
     //  console.log (events); 
    // alert("hello world");
//}; -->
</body>
</html>