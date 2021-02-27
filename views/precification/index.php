<?php
include_once ('../../layouts/header.php');

?>

<div class="coontainer-fluid"><!--Divisão que reservar espaço com container que ocupa a tela toda https://getbootstrap.com/docs/5.0/layout/containers/ -->
    

    <div class="composition-price" >
        
        <form  class="product_list" action="index.php" method="POST">
            <div class="row mb-4"><!--reservalinha do botão-->
                <button class="btn btn-primary" type="submit"> Calcular Preço</button>
            </div>        
         
    </div>
        
    
            <label for="" class="itens" >Quantidade</label>
            <input type="text" class="item" name="amount"></input><br>
            <label for="" class="prodduct" >Produto:</label>
            <input type="text" class="item"name="product1"></input><br>
            <label for="" class="prodduct" >Produto:</label>
            <input type="text" class="item" name="product2"></input> <br>

            
            <?php
            include_once("../../controllers/calcul_price.php");
            $result = true;
                if(isset($_REQUEST["amount"])){
                    $result = calculate_price($_REQUEST["amount"],$_REQUEST["product1"],$_REQUEST["product2"]);    
                if ($result){
                echo "O preço sugerido é $a \n";
                }else{
                    echo "Não sei oq falta \n";
                    }
                }

                //var_dump($a);
            ?>


</div>

<?php
include_once '../../layouts/footer.php'
?>