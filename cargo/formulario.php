<?php
include_once 'Cargo.php';

$cargo = new Cargo();

if(!empty($_GET['id_cargo'])){
    $cargo->recuperarPorId($_GET['id_cargo']);
}

include_once '../cabecalho.php';
?>

    <h1>Cargo</h1>

    <form action="processamento.php?acao=salvar" method="post">

        <input type="hidden" name="id_cargo" id="id_cargo" value="<?php echo $cargo->getIdCargo(); ?>">

        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $cargo->getNome(); ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Enviar</button>
                <a class="btn btn-danger" href="index.php">Voltar</a>
            </div>
        </div>
    </form>



<?php include_once '../rodape.php'; ?>