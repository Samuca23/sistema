<?php
    $stmt = $conn->prepare('SELECT * FROM menu order by ordem,descricao');
    $stmt->execute();
 
    $resultado = $stmt->fetchAll();
?>
<div class="row" id="menu">
    <?php
        foreach ($resultado as $linha) {
            ?>
                <a href="<?=$linha['endereco']?>"
                class="<?=$linha['classe']?>">
                <?=$linha['descricao']?></a>
            <?php
        }
    ?>
    </div>
</hr>

<style>
body {
    margin: 0;
    padding: 0;
    width: 100%;
}
#menu{
    background-color: #252525;
    padding: 10px;
}
 * a {
    margin-left: 100px;
}
</style>
