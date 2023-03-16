<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.ckeditor.com/4.8.0/basic/ckeditor.js"></script>

<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<?php

  require_once 'Usuarios.php';
  $u = new Usuarios; // objeto USUARIO

    if(isset($_POST['cadastrar'])): // la do botão cadastrar.
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $u->setNome($nome);
    $u->setEmail($email);
    $u->setIdade($idade);
    $u->setSenha($senha);

    // insert
    if($u->insert()){
        echo "Cadastro Efetuado com Sucesso!!!";
    }
    $u->insert();
    endif;

?>
<head>
    <meta lang="pt-BR">
    <meta charset="UTF-8">

    
</head>
<body>

<form class="form-horizontal" method="post">
<fieldset>
<div class="panel panel-primary">
    <div class="panel-heading">Cadastro</div>
    
    <div class="panel-body">
<div class="form-group">
<div class="col-md-11 control-label">
        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
</div>
</div>
<!-- Nome-->
<div class="form-group">
  <label class="col-md-1 control-label" for="Nome">Nome <h11>*</h11></label>  
  <div class="col-md-8">
  <input id="nome" name="nome" placeholder="Digite seu nome"class="form-control input-md" required="" type="text" maxlength="35">
  </div>
</div>

<!-- Idade-->
  <label class="col-md-1 control-label" for="Idade">Idade<h11>*</h11></label>  
  <div class="col-md-2">
  <input id="idade" name="idade" placeholder="Digite sua idade" class="form-control input-md" required="" type="text" maxlength="10" onBlur="showhide()">
</div>


<!-- Email-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Email <h11>*</h11></label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
    </div>
  </div>
</div>

<label class="col-md-1 control-label" for="Nome">Senha<h11>*</h11></label>  
  <div class="col-md-2">
  <input id="senha" name="senha" placeholder="Digite sua senha" class="form-control input-md" required="" type="password" maxlength="10" onBlur="showhide()">
</div>



<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8">
    <button id="cadastrar" name="cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
  </div>
</div>

</div>
</div>

</fieldset>
</form>

</body>
</html>