﻿<?php
require('header.inc');
?>

<html>
<head>
  <title>Автозапчасти по низким ценам - Результаты заказа</title>
</head>
<body>
<h1>Лабораторная работа № 1 по теме передача данных из формы в основную программу и их последующая обработка</h1>
<h2>Автозапчасти по низким ценам</h2>
<h3>Результаты заказа</h3>

<?php
  echo '<p>Заказ обработан в ';
  echo date('H:i, jS F');
  echo '</p>';

  //создать короткие имена переменных 
  $tireqty = $_POST['tireqty'];
  $oilqty = $_POST['oilqty'];
  $sparkqty = $_POST['sparkqty'];
  $gar = $_POST['gar'];    //наш новый товар
  $find=$_POST['find'];	 
  echo '<p>Список вашего заказа: </p>';
  echo $tireqty . ' автопокрышек</br>';
  echo $oilqty . ' бутылок с маслом</br>';
  echo $sparkqty . ' свечей зажигания</br>';
  echo $gar . ' Щетки стеклоочистителя</br>';  //наш новый товар


  $totalqty = 0;
  $totalqty = $tireqty + $oilqty + $sparkqty + $gar;
  echo 'Заказано товаров: '.$totalqty.'</br>';
  $totalamount = 0.00;


  define('TIREPRICE',100); 
  define('OILPRICE',10);
  define('SPARKPRICE',4);
  define('STEFPRICE',15);     //наш новый товар


  $totalamount =  $tireqty * TIREPRICE 
    + $oilqty * OILPRICE
    + $sparkqty * SPARKPRICE
	+ $gar * STEFPRICE;     //наш новый товар

  echo 'Итого: $'.number_format($totalamount,3).'</br>'; 


  $taxrate = 0.10;  // местный налог с продаж составляет 10%
  $totalamount = $totalamount * (1 + $taxrate);
  echo 'Всего, включая налог с продаж: $'. number_format($totalamount,2).'<br>';

?>

На вопрос как Вы нашли нашу компанию был получен ответ: <? echo $find; ?>


</body>
</html>



<?php
require('footer.inc');
?>
