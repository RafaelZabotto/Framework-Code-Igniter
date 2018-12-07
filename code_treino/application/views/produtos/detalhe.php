
<!DOCTYPE html>

<html>

    <head>

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