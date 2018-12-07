<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        
        <title>Video</title>
        <link rel="stylesheet" href="<?=base_url("css/bootstrap.css") ?>">
        
    </head>

        <body>

            <div class = "container">

                <?php if($this->session->flashdata("success")) : ?>
                <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
                <?php endif ?>

                <?php if($this->session->flashdata("danger")) : ?>
                <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
                <?php endif ?>

                <?php if($this->session->userdata("usuario_logado")) : ?>


                <h1>Produtos</h1>

                    <table class="table">

                        <tr>

                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Preço</th>

                        </tr>

                        <?php foreach ($produtos as $produto) : ?>
                                
                            <tr> 
                                
                                <td><?= anchor("cprodutos/detalhe?id={$produto['id']}", $produto['nome'])?></td>
                                <td><?= $produto['descricao']?></td>
                                <td><?= reais($produto['preco']) ?></td>

                            </tr>

                        <?php endforeach ?>

                    </table>

                    <?= anchor("cprodutos/formulario", "Novo Produto", array("class" => "btn btn-primary")); ?>

                    <?= anchor("clogin/logout", "Sair", array("class" => "btn btn-primary")); ?>

                    <?php else : ?>

                    <h1>Login</h1>

                    <?php 


                    /*<?php echo form_open_multipart(site_url("copiar_lote/salvar_resubmit/" . $id . "/" 
                    . $idcam . "/" . $projectid ), array("class" => "form-horizontal")) ?>*/
                        
                        
                        //Login do usuario
                        echo form_open("Clogin/autentica");
                        
                        //Campo do e-mail
                        echo form_label("E-mail", "email");

                        echo form_input(array("name" => "email", 
                                                "id" => "email", 
                                                "class" => "form-control", 
                                                "maxlenght" => "255"));                    
                        
                        //Campo da Senha
                        echo form_label("Senha", "senha");

                        echo form_input(array("name" => "senha", 
                                                "id" => "senha", 
                                                "class" => "form-control", 
                                                "maxlenght" => "255"));  
                        
                        ?>
                        <br>

                        <?php                       
                        echo form_button(array(
                            "class" => "btn btn-primary",
                            "type" => "submit",
                            "content" => "Login"
                        ));
                        
                        echo form_close();

                    ?>

                    <h1>Cadastro</h1>

                    <?php 

                   
                    /*<?php echo form_open_multipart(site_url("copiar_lote/salvar_resubmit/" . $id . "/" 
                    . $idcam . "/" . $projectid ), array("class" => "form-horizontal")) ?>*/
                        
                        
                        //Login do usuario
                        echo form_open("Cusuarios/novo");
                        
                        //campo do nome
                        echo form_label("Nome", "nome");

                        echo form_input(array("name" => "nome", 
                                                "id" => "nome", 
                                                "class" => "form-control", 
                                                "maxlenght" => "255"));

                        
                        //Campo do e-mail
                        echo form_label("E-mail", "email");

                        echo form_input(array("name" => "email", 
                                                "id" => "email", 
                                                "class" => "form-control", 
                                                "maxlenght" => "255"));                    
                        
                        //Campo da Senha
                        echo form_label("Senha", "senha");

                        echo form_input(array("name" => "senha", 
                                                "id" => "senha", 
                                                "class" => "form-control", 
                                                "maxlenght" => "255"));  
                        
                         ?>
                         <br>

                         <?php                       
                        echo form_button(array(
                            "class" => "btn btn-primary",
                            "type" => "submit",
                            "content" => "Cadastrar"
                        ));
                        
                        echo form_close();

                        

                    ?>

                    <?php endif ?>
            </div>
            
        </body>
        
</html>
