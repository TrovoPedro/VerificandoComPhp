<!DOCTYPE html>
<html>
<head>
  <style>
    h1{
     text-align: center;
    }
    p{
     text-align: center;
    }
  </style>
  <title>Login</title>
</head>
<body>
  <div class="nav"> 
  <a class="link1" href="index.php">Voltar</a>
  </div>
  <div class="content">
    <div class="bloco1"> 
  <?php if (isset($_GET['papel'])): ?>
    <h1>Bem vindo <?php echo $_GET['papel']; ?>!</h1>
    <p>Login feito com sucesso</p>
  <?php else: ?>
    <p>Erro na autenticação.</p>
  <?php endif; ?>
</div>
  </div>
</body>
</html>