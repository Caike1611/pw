<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Produtos</title>
    <meta charset="utf-8">
  </head>
  <body>
      <h1>Produtos</h1>
      
      <form action="/cadastrar-produto" method="POST">
            @csrf
            <label for="lblnome">Nome:</label>
            <input type="text" name="nome">
            <br><br>
            <label for="lblvalor">Valor:</label>
            <input type="text" name="valor">
            <br><br>
            <label for="lblQuantidade">Quantidade:</label>
            <input type="text" name="estoque">
            <br><br>
            <button>Cadastrar</button>
    </form>
  </body>
</html>