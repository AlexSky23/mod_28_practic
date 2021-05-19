<?php
include 'Market.php';
?>

<h1> Главная </h1>

<table style="width: 600px;">
   <thead style="background: #fc0">
    <tr>
     <td> <h5>Заказ</h5> </td>
     <td> <h5>Название</h5> </td>
     <td> <h5>Ед. изм.</h5> </td>
     <td> <h5>Количество</h5> </td>
     <td> <h5>Цвет</h5> </td> 
     <td> <h5>Цена/ед., усл.ед.</h5> </td> 
    </tr> 
   </thead>

   <tbody style="background: #ccc">
   <form method="POST" name="checkout" action="/index.php/?page=4">
        <br><br>
    <?
    $i = 0;
    while($i < count($tovar->tov)){
    echo ' <tr><td>&emsp;<input type="checkbox" name="ch_b[]" value = '.$i.' /></td>';
    echo "<td>"; print_r($tovar->tov[$i]['name']); 
    echo "</td><td>&emsp;шт.</td><td>&emsp;&emsp;"; 
    print_r($tovar->tov[$i]['pcs.']); echo "</td><td>"; 
    print_r($tovar->tov[$i]['color']);echo "</td><td>&emsp; &emsp;&emsp;";
    print_r($tovar->tov[$i]['cost']);echo "</td></tr>";
    $i++;}
   ?>
<input name="submit" type="submit" value="Оформить заказ">
        
   </tbody>

  </table>
  <?
   echo '
      <form method="POST" name="checkout">
      &emsp;<input type="checkbox" name="ch_d" /> &emsp; Оформить доставку? 
      </form>';