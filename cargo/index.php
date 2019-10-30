<?php

include_once 'Cargo.php';

$cargos = Cargo::recuperarTodos();

include_once '../cabecalho.php';
?>

    <div class="row">
    	<div class="col-md-12">

    		<div class="box box-danger">
    			<div class="box-header with-border">
    				<h3 class="box-title">Cargo</h3>
    			</div>
    			<div class="box-body">
    				<div class="row">
    					<div class="col-md-12">
                            <a class="btn btn-warning" href="formulario.php">Novo</a>

                            <table class="table table-bordered table-striped table-hover datatable">
                                <tr>
                                    <td>Ações</td>
                                    <td>ID</td>
                                    <td>Nome</td>
                                </tr>
                                <?php
                                foreach ($cargos as $cargo) {
                                    echo "
                <tr>
                    <td>
                        <a class='trash' href='processamento.php?acao=deletar&id_cargo={$cargo['id_cargo']}'>Excluir</a>
                        <a href='formulario.php?id_cargo={$cargo['id_cargo']}'>Alterar</a>
                    </td>
                    <td>{$cargo['id_cargo']}</td>
                    <td>{$cargo['nome']}</td>
                </tr>
            ";
                                }
                                ?>
                            </table>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

<?php include_once '../rodape.php'; ?>