<?php

require('header.inc');
?>
<html>
<head>
  <title>Автозапчасти по низким ценам</title>
</head>
<body>
<h1>Лабораторная работа № 1 по теме передача данных из формы в основную программу и их последующая обработка</h1>
<h2>Автозапчасти по низким ценам</h2>
<h3>Форма заказа</h3>
<form action="processorder.php" method=post>
<table border=0>
<tr bgcolor=#cccccc>
  <td width=150>Товар</td>
  <td width=15>Количество</td>
</tr>
<tr>
  <td>Автопокрышки</td>
  <td align="center"><input type="text" name="tireqty" size= "3" maxlength="3"></td>
</tr>
<tr>
  <td>Машинное масло</td>
  <td align= "center"><input type="text" name="oilqty" size="3" maxlength="3"></td>
</tr>
<tr>
  <td>Свечи зажигания</td>
  <td align="center"><input type="text" name="sparkqty" size= "3" maxlength="3"></td>
</tr>
<tr>
  <td>Щетки стеклоочистителя</td>
  <td align="center"><input type="text" name="gar" size= "3" maxlength="3"></td>  
</tr>
<tr>

  <td>Как вы нашли компанию "Автозапчасти по низким ценам?"</td>
  <td><select name="find">

        <option value = "Я регулярный клиент">Я регулярный клиент</option>

        <option value = "В телевизионной рекламе">В телевизионной рекламе</option>

        <option value = "В телефонном справочнике">В телефонном справочнике</option>

        <option value = "Кто-то порекомендовал">Кто-то порекомендовал</option>

      </select>

  </td>
</tr>

<tr>
  <td colspan="2" align="center"><input type="submit" value= "Отправить заказ"></td>
</tr>

</table>
</form>
</body>
</html>

<?php
require('footer.inc');
?>

