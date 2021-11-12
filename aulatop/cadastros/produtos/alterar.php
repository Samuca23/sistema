<?php
if (isset($_POST['alterar'])) {
    try {
        $stmt = $conn->prepare(
            'UPDATE produtos SET codigo = :codigo, nome = :nome, valor = :valor WHERE id = :id'
        );
        //$stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute(array(
            'codigo' => $_POST['codigo'],
            'nome'   => $_POST['nome'],
            'valor'  => $_POST['valor'],
            'id'     => $_GET['id']
        ));
        //$stmt->execute();
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}

if (isset($_GET['id'])) {
    $stmt = $conn->prepare('SELECT * FROM produtos WHERE id = :id');
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
}
//$stmt->execute(array('id' => $id));
$stmt->execute();
$r = $stmt->fetchAll();

//print_r($r);
?>
<form method="post">
    <input type="number" name="codigo"  value="<?= $r[0]['codigo'] ?>">
    <input type="text"   name="nome"    value="<?= $r[0]['nome'] ?>">
    <input type="text"   name="valor"   value="<?= $r[0]['valor'] ?>">
    <input type="submit" name="alterar" value="Salvar">
</form>