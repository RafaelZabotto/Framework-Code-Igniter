
<!DOCTYPE html>

<html>

    <head>

        <link rel="stylesheet" href="<?=base_url("css/bootstrap.css") ?>">
        <meta charset="utf-8" />
        
        <title>Detalhes do Produto</title>
    </head>

        <body>

            Nome: <?= $produtos['nome'] ?><br>
            Preço: <?= $produtos['preco'] ?><br>
            Descrição: <?= $produtos['descricao'] ?><br>

            <?= anchor("Cprodutos/index", "Voltar", array('class' => "btn btn-primary"));?>
            
        </body>

</html>