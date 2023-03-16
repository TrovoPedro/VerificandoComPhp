<!DOCTYPE html>
<html>
<head>
<style>

th{
 border: 1px solid blue;
}
td{
 border: 1px solid blue;
}
.formulario{
  border: 1px solid blue;
  display: flex;
  flex-direction: column;
  align-items: center;
  box-shadow: 5px 5px 5px 1px rgb(6, 2, 7 );
;
}
button{
  margin-top: 10px;
  margin-left: 50px;
}


</style>
  <title>Página de login</title>
</head>
<body>
  <section class="content">
    <div>
      <div class="dados">
        <?php
          $json = file_get_contents('senhas.txt');
          $usuarios = json_decode($json);
        ?>
      </div>
    </div>
    <form class="formulario" action="verificar.php" method="post">
      <h1>LOGIN</h1>
      <div>
        <label for="login">Email:</label>
        <input type="text" id="login" name="login">
      </div>
      <div>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha">
      </div>
      <div>
        <button type="submit">Entrar</button>
      </div>
    </form>
  </section>
  <script src="script.js"></script>
</body>
</html>