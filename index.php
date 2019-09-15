<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página de Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
   
</head>
<body>
    
        

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
    
    
<style>
    input[type=text]{   
    border-radius:4px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    box-shadow: 1px 1px 2px #333333;    
    -moz-box-shadow: 1px 1px 2px #333333;
    -webkit-box-shadow: 1px 1px 2px #333333;
    background: #FAFAFA; 
    border:1px solid #000000;
    width:180px
    };
    
</style>
<style>
    
input[type=password]{   
    border-radius:4px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    box-shadow: 1px 1px 2px #333333;    
    -moz-box-shadow: 1px 1px 2px #333333;
    -webkit-box-shadow: 1px 1px 2px #333333;
    background: #FAFAFA; 
    border:1px solid #000000;
    width:180px    
    
    
</style>

<style>
    
.menuLogin
{
    background-image: url("imagens/fundo_login.jpg");
    opacity:-50;
    border-radius: 25px;
    background-size:cover;
    text-decoration-color: white;
    box-shadow: 0 20px 25px -1px #989898;
    opacity : 200;
 
}
    
</style>

<style type="text/css">
.p{
    font-family:Arial, Helvetica, sans-serif;
    color: white;
    
    }
</style>


<table height="150px">
    
    <tr>
        <td>
            
        </td>
        
    </tr>
    
</table>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Informe seus dados para cadastro:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
     <form method="POST" action="cad.php" align="center">
         
    <label>Nome: </label>
    <input type="text" id="nomeCompleto" name="nomeCompleto" /><br />
    <br>
    <label> E-mail: </label>
    <input type="text" id="cademail" name="cademail" /><br />
    <br>
    <label> Senha: </label>
    <input type="password" id="cadsenha" name="cadsenha" /><br />
    <br>
    <div align="center">
        
    <input type="reset" class="btn btn-primary" value="Apagar">
    <button  type="submit" class="btn btn-primary">Cadastrar</button>
    
    </div>
    </form>
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" type="submit" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
</script>


<div class="p" object.style.boxShadow="1">
<table width="32%" align="center" border="0" bordercolor="black" class="menuLogin">
<tr>
     <td><br>
<legend align="center"><h5><p>Digite seus dados de acesso:</p></h5></legend>

<fieldset id="fie" align="center">
<form method="post" action="ope.php" id="formlogin" name="formlogin">

<label><p><b>E-mail:</b></p> </label>
<input type="text" name="email" id="email"  /><br />
<br>
<label><b>Senha: </b></label>
<input type="password" name="senha" id="senha" /><br />
<br>
<input type="submit" class="btn btn-primary" align="center" value="Acessar"  /><br><p></p>
</form>
</fieldset>
</td> 
    
</tr><td align="center"><br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
Clique aqui para cadastrar!
</button></td>
</table>
</div>
</div>
  
</body>
</html>
