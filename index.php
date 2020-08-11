<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Almerindo da Paixão Junior">
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
  <title>Formulario de Cadastro</title>
</head>
<body>
  <main id="root">
    <div class="background"></div>
    <form 
      action="src/controllers/cadCliente.php" 
      method="POST"
      name="registrationForm"
      class="registrationForm"
    >
      <div class="container-block title">
        <h1>Cadastro de Clientes</h1>
        <p>Preencha este formulário para se cadastrar em nossa plataforma</p>
      </div>

      <div class="container-block">
        <label for="name">
          Nome
          <input id="name" type="text" name="name">
        </label>
      </div>

      <div class="container-block">
        <label for="cpf">
          CPF
          <input 
            id="cpf" 
            type="text" 
            name="cpf" 
            maxlength="14"
          >
        </label>
      </div>

      <div class="container-block">
        <label for="address">
          Endereco
          <textarea id="address" name="address"></textarea>
        </label>
      </div>

      <div class="container-block">
        <label for="states">
          Estado
          <select name="states" id="states">
            <option 
              value="" 
              selected 
              disabled 
              hidden
            >
              Selecione um estado
            </option>
            <option value="BA">Bahia</option>
            <option value="ES">Espirito Santo</option>
            <option value="MG">Minas Gerais</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="SP">São Paulo</option>
          </select>
        </label>
      </div>

      <div class="container-block">
        <label for="date">
          Data Nasc.
          <input id="date" name="date" type="date">
        </label>
      </div>
        
      <div class="container-block">
        <label for="">
          Sexo

          <div>
            <input 
              name="sex" 
              value="M" 
              type="radio"
            >
            Masculino
          </div>

          <div>
            <input 
              name="sex" 
              value="F" 
              type="radio"
              checked
            >
            Feminino
          </div>
        </label>
      </div>

      <div class="container-block">
        <label for="">
          Áreas de Interesse

          <div>
            <input name="checkMovieTheater" type="checkbox" value="true">
            Cinema
          </div>

          <div>
            <input name="checkMusic" type="checkbox" value="true">
            Musica
          </div>

          <div>
            <input name="checkInfo" type="checkbox" value="true">
            Informática
          </div>
          
        </label>
      </div>
      
      <div class="container-block">
        <label for="login">
          Login
          <input id="login" type="text" name="login">
        </label>
      </div>

      <div class="container-block">
        <label for="password">
          Senha
          <input id="password" type="password" name="password">
        </label>
      </div>
      
      <div class="container-block">
        <label for="password2">
          Confirmar senha
          <input id="password2" type="password" name="password2">
        </label>
      </div>

      <div class="container-block btn">
        <input 
          class="btn" 
          id="btnSubmit" 
          type="submit" 
          name="btnSubmit" 
          value="Enviar"
        >

        <input 
          class="btn"
          id="btnReset" 
          type="reset" 
          name="btnReset" 
          value="Reset"
        >
      </div>
      
    </form>
  </main>
</body>
</html>