<?php
include_once ('../../layouts/header.php');

require (dirname(__DIR__)."/../controllers/calcul_price.php");

?>


<div class="coontainer-fluid"><!--Divisão que reservar espaço com container que ocupa a tela toda https://getbootstrap.com/docs/5.0/layout/containers/ -->
    <div class="row"><!--reservalinha do botão-->
        <button class="btn btn-primary" type="submit" onclick="calculate-price()"> Calcular Preço</button>
    </div>
    
    <div class="composition-price">
       <form action="" class="list-product">
        <label for="" class="prodduct" name="product1">Produto:</label>
        <input type="text" class="item"></input><br>
        <label for="" class="prodduct" name="product2">Produto:</label>
        <input type="text" class="item"></input>
       </form>       
       <label for="" class="price">Preço Sugerido:</label> <?php $product_price ?>
       <?php var_dump(dirname(__DIR__)."/../controllers/calcul_price.php") ?>
    
    </div>

</div>

<?php
include_once '../../layouts/footer.php'
?>