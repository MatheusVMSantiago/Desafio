<?php if(!class_exists('Rain\Tpl')){exit;}?><title>Perfis | <?php echo htmlspecialchars( $namepage, ENT_COMPAT, 'UTF-8', FALSE ); ?></title>
<br><br><br>


<div align="center">  
    <div>
      <h1>Cadastrar nova Caixa</h1>
    </div>
    <br>
    <form role="form" action="/cadastro" method="post">      
        <div class="form-group">        
            <label for="name_caixa">Nome da Caixa</label>
            <input type="text" class="form-control" id="name_caixa" name="name_caixa" placeholder="Digite o nome">
        </div>
        <br><br>        
        <div class="box-footer">
          <button type="submit" class="btn btn-success" >Cadastrar</button>
        </div>    
    </form>
</div>
