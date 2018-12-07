<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        
        <title>Video - Formulário</title>
        <link rel="stylesheet" href="<?=base_url("css/bootstrap.css") ?>">
        
    </head>

        <body>

            <div class = "container">

                <?php if($this->session->flashdata("success")) : ?>
                <p class="alert alert-success"><?= $this->session->set_flashdata("success") ?></p>
                <?php endif ?>

                <?php if($this->session->flashdata("danger")) : ?>
                <p class="alert alert-danger"><?= $this->session->set_flashdata("danger") ?></p>
                <?php endif ?>


                    <h1>Formulário</h1>

                    <?php 
                        
                        //Login do usuario
                        echo form_open("cprodutos/novo");
                        
                        //Campo do nome
                        echo form_label("Nome", "nome");

                        echo form_input(array("name" => "nome", 
                                                "id" => "nome", 
                                                "class" => "form-control", 
                                                "maxlenght" => "255"));  
                        
                        //Erro na Validação
                        echo form_error("nome","");
                        
                        //Campo da Preço
                        echo form_label("Preço", "preco");

                        echo form_input(array("name" => "preco", 
                                                "id" => "preco", 
                                                "class" => "form-control", 
                                                "maxlenght" => "255"));  

                        //Erro na Validação
                        echo form_error("preco","");

                         
                        //Campo da Descrição
                        echo form_label("Descrição", "descricao");

                        echo form_textarea(array("name" => "descricao", 
                                                "id" => "descricao", 
                                                "class" => "form-control", 
                                                "maxlenght" => "255"));  
                        
                        //Erro na Validação
                        echo form_error("descricao","");
                    ?>
                        <br>

                        <?php                       
                            echo form_button(array(
                                "class" => "btn btn-primary",
                                "type" => "submit",
                                "content" => "Cadastrar"
                            ));
                        
                            echo anchor("cprodutos/index" , "Voltar", array("class" => "btn btn-primary"));
                            
                            echo form_close();

                        ?>

            </div>
            
        </body>
        
</html>
