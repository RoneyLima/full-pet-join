<?php

        include_once ('./php/includes/header-prod.php');
    
       
?>


<div class="container body-conteiner div-pagina-produtos">

    <div class="coluna-produtos">
        <div class="produtos-linha">
<?php
    
    require_once "./php/actions/db_connect.php";

    if(isset($_POST['1'])){
        $id_setor = $_POST['1'];
       

        // if(strlen($id_setor) > 0){
            $sql = "SELECT * FROM tb_produtos WHERE setor = $id_setor";
            $buscar=mysqli_query($connect,$sql);
            $dados=mysqli_fetch_array($buscar);   
            $result=mysqli_num_rows($buscar);

            while($row = mysqli_fetch_assoc($resultado)){
                            
?>  
            <div class="card" style="width: 16rem;">
            <br>
                <img class="card-img-top" src="./imagens/Produtos/<?php echo $row['img_nome'];?>" alt="imagem_produto" onmouseover="destaqueImg(this)"  onmouseout="semDestaque(this)" >
                <div class="card-body">        
                    <a href="#" > <p class="card-text"><?php echo $row['descricao']; ?></p>
                    <p class="card-text valor-antigo">de R$<?php echo $row['valor_antigo']; ?>
                    <p class="card-text valor-atual">Por R$<?php echo $row['valor_atual']; ?></p>
                    </a>    
                </div>
                <div class="card-body">
                    
                <!-- procurar a marca <a href="#" > <p class="card-text"><?php echo $row['marca']; ?></p>
                </a> -->
                </div>
                
            </div>
            <?php
        }
    }
    ?>
    </div>

    <?php 

 include_once ('./php/includes/footer.php')

?>