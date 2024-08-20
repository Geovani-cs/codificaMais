<?php
session_start();

print_r($_SESSION['produtos']);
?>

<!DOCTYPE html>
<lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Listagem de produtos</title>
</head>
<>
<button name="novoproduto">Novo Produto</button>
Buscar: <textarea id="story" name="story" rows="1" cols="10">
</textarea>

<?php
foreach( $_SESSION['produtos'] as $produto) {

    ?>
      
      <div class="div">
        
        <div class="div">
        <section class="section">
        <!--<li><?php echo $produto['nome'] .' - '. $produto['valor'] ?></li>-->
        <?php } ?>  
        <li>#0001</li>
        <li>categoria</li>
        </section></div>

    
        <div class="div">
        <section class="section">
        <li>sku</li></section></div>

        
        <div class="div">
        <section class="div">
        <li>Descrição do Produto</li>
        <li>Quantidade:</li>    
        </section></div>

        
        <button name="novoproduto">Editar</button>
            <button name="novoproduto">Deletar</button>
          
        </section></div>
</div>
    <!-- Estrutura da página aqui -->


</body>
</html>