<?php if(!class_exists('Rain\Tpl')){exit;}?><title>Perfis | <?php echo htmlspecialchars( $namepage, ENT_COMPAT, 'UTF-8', FALSE ); ?></title>
<br><br><br>
<div align="center">    
  
  <div>
    <h1>Cadastrar novo Perfil</h1>
  </div>
<br><br>
</div> 

<div align="center">
  
<form role="form" action="/cadastro" method="post">
    
      <div class="form-group">
        
        <label for="nome_usu">Nome Completo</label>
        <input type="text" class="form-control" id="nome_usu" name="nome_usu" placeholder="Digite o nome">
     
        <label for="data_nasc">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nasc" name="data_nasc" placeholder="1999-12-24">
    
      
    <br><br><br>
    
    <div class="box-footer">
      <button type="submit" class="btn btn-success" >Cadastrar</button>
    </div>    
  </form>
</div>
<br>