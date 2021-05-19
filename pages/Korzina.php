<h1> Корзина </h1>
<h3>Ваш Заказ:</h3>
<?php
include 'Market.php';

$aa   = $_POST["ch_b"];
$dost = $_POST["ch_d"];

if(isset($aa)){
    echo '
<table style="width: 600px;">
   <thead style="background: #fc0">
    <tr>
     <td> <h5>Название</h5> </td>
     <td> <h5>Ед. изм.</h5> </td>
     <td> <h5>Количество</h5> </td>
     <td> <h5>Цвет</h5> </td> 
     <td> <h5>Цена/ед., усл.ед.</h5> </td> 
    </tr> 
   </thead>

   <tbody style="background: #ccc">
  
            ';
    $sum = 0;
    $kol = 1;
    $i = 0;
    while($i < count($aa)){
    $aa1 = $aa[$i];
        if($tovar->tov[$aa1]['pcs.'] > 0){
    echo "<td>"; print_r($tovar->tov[$aa1]['name']); 
    echo '</td><td>шт.</td>';
    echo '<td>'.$kol.'</td><td>';
    print_r($tovar->tov[$aa1]['color']); echo "</td><td>";
    print_r($tovar->tov[$aa1]['cost']);echo "</td></tr>";
    $sum = $sum + $tovar->tov[$aa1]['cost'];    
        }   
        $i++;
    }

    echo '
</tbody>
</table>';
echo '<bk><h4>Сумма к оплате: '.$sum.' усл.ед</h4>';

   
if(count($aa) == 0){
    $dost1 = 0;
    }
    elseif(count($aa) == 1){
        $dost1 = $dostavka->roznica["cost"];
    }
    else{
        $dost1 = $dostavka->opt["cost"];
    }

    if(isset($dost)){
    echo 'Стоимость доставки = '.$dost1. ' усл.ед';
    }
    
    $skd = $tovar->Skidka();

    if(isset($dost)){
        $tovar->itog = $sum + $dost1;
    }
    else{
        $tovar->itog = $sum;
    }

    $tov = $tovar->itog * (100-$skd)/100;
    
echo '
    <form method="POST" name="name" action="/pages/Oplata.php">
    <input type="text" name="id" value = "'.$tov.'" hidden />
    <input name="submit" type="submit" value="Купить">
    </form>';

    echo '<bk><h2>Ваша скидка составила: '.($skd).' %</h2>';
//session_start();
//$_SESSION['oplata'] = $tovar->itog;
echo '<br><h4>ИТОГО к оплате: '.$tov. ' усл.ед</h4>';
}
else{
    echo '<h3>В корзине нет заказов</h3>';
}
?>