﻿<?php

//echo "$tireqty";
//echo "$oilqty";

  require ('page_5.inc');
  class OrderformPage extends Page
  {
    //var $row2buttons = array( 'Re-engineering' => 'reengineering.php',   //УБРАЛ ЛИШНИЕ КНОПКИ
                          //    'Standards Compliance' => 'standards.php',
                          //    'Buzzword Compliance' => 'buzzword.php', 
                          //    'Mission Statements' => 'mission.php'
                          //  );
// var $tireqty ;
// var $oilqty ;
// var $sparkqty ;
// var $address ;

    function Display_1($tireqty)
    {
      //$this->tireqty=$tireqty ;
      //echo $this->tireqty;
        echo $tireqty; }


    function Display()
    {
      echo "<html>\n<head>\n";
      $this -> DisplayTitle();
      $this -> DisplayKeywords();
      $this -> DisplayStyles();
      echo "</head>\n<body>\n";
      $this -> DisplayHeader();
      $this -> DisplayMenu($this->buttons);
      //$this -> DisplayMenu($this->row2buttons); //УБРАЛ ЛИШНИЕ КНОПКИ

?> <table width=100% height=100% border=1><tr><td class=cont > <? echo $this->spisok(); ?> </td></table> <?

      $this -> DisplayFooter();
      //echo "</body>\n</html>\n";
    }

function spisok ()

{

  // Создать короткие имена переменных
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

//подключаемся к базе данных
$hostname="localhost";
$user="root";
$password="";
$db="lab_3";

if(!$link = mysql_connect($hostname, $user, $password))
{
echo "<br> Не могу соединиться с сервером базы данных <br>";
exit();
}
echo "<br> Cоедининение с сервером базы данных прошло успешно <br>";

if (!mysql_select_db($db, $link))
{ 
echo "<br> Не могу выбрать базу данных<br>";
exit();
}
else
{
echo "<br> Выбор базы данных прошел успешно <br>";
}

$query_1="select zakaz.id, zakaz.fio, zakaz.adress, zakaz.data, tovar.id, tovar.tiregty, tovar.oilgty, tovar.sparkgty, tovar.gar FROM zakaz, tovar where  zakaz.id=tovar.id order by zakaz.data";
$result_1=mysql_query ($query_1);
?>

<table border=1 color=black width=100% height=100%>
<tr>
<td><b>№</b></td><td><b>ФИО</b></td><td><b>Адрес</b></td><td><b>Дата заказа</b></td><td><b>покрышки</b></td><td><b>масла</b></td><td><b>свечи</b></td><td><b>Щетки стеклоочистителя</b></td>
<?

while ($row_1=mysql_fetch_array ($result_1)) {
$id=$row_1["id"];
$fio=$row_1["fio"];
$adress=$row_1["adress"];
$data=$row_1["data"];
$tireqty=$row_1["tiregty"];
$oilqty=$row_1["oilgty"];
$sparkqty=$row_1["sparkgty"];
$gar=$row_1["gar"];

?>
<tr>
<td> <? echo $id ?> </td><td> <? echo $fio ?> </td><td> <? echo $adress ?> </td><td> <? echo $data ?> </td><td> <? echo $tireqty ?> </td><td> <? echo $oilqty ?> </td><td> <? echo $sparkqty ?> </td><td> <? echo $gar ?> </td>
</tr>
<?
}

?> </table> <? 

}}

$services = new OrderformPage();
$content ='cddc';
$services -> SetContent($content);
$services -> SetTitle('Лабораторная работа по теме: ООП на РНР');
$services -> Setnazvanie('Лабораторные работы по курсу Разработка интернет приложений в сфере коммерциии посредством PHP и MySQL <br> Студента группы ПИс-171: Гагарин Илья Николаевич <br> Проверил: Маринова С.А.');

//$services -> Display_1($tireqty);
 $services -> Display();
// $services -> zakaz($tireqty, $oilqty, $sparkqty, $address, $DOCUMENT_ROOT, $fio);

?>
