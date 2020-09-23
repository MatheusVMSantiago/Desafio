<?php if(!class_exists('Rain\Tpl')){exit;}?><title>Lista de Email | <?php echo htmlspecialchars( $namepage, ENT_COMPAT, 'UTF-8', FALSE ); ?></title>


<div id="divA">

+ <a href="/cadastro"> <button> Cadastrar Caixa Postal</button></a>
</div>

<div align="center">   
  <div>
    <h1>Procure pela caixa postal</h1>
  </div>
</div> 

<br>
  <div class="box-footer" align="center">
    <form role="form" action="/listemail" method="get">
      <input type="text" class="form-control" id="nomecaixa" name="nomecaixa" placeholder="ex: CAIXAXFB">       
      <button type="submit" class="btn btn-success">Procurar</button>
  </form>
  </div>  
</div>





