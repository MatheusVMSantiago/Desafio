<?php if(!class_exists('Rain\Tpl')){exit;}?><title>Perfis | <?php echo htmlspecialchars( $namepage, ENT_COMPAT, 'UTF-8', FALSE ); ?></title>
<br><br><br>
<div align="center">    
  
  <div>
    <h1>Lista de Emails da caixa <strong><?php echo htmlspecialchars( $nomecaixa, ENT_COMPAT, 'UTF-8', FALSE ); ?></strong> </h1>
  </div>

</div> 

<div class="box-body no-padding" align="center">
    <table class="table table-striped" border="1">     
        <tr>          
          <th style="width: 200px">Email</th>          
          <th style="width: 200px">Opções</th>     
        </tr>     
     
    <?php $counter1=-1;  if( isset($list) && ( is_array($list) || $list instanceof Traversable ) && sizeof($list) ) foreach( $list as $key1 => $value1 ){ $counter1++; ?> 
    <tr align="center">
      
      <td><?php echo htmlspecialchars( $value1["email_caixa"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
           
      <td>        
        <a href="#" onclick="return confirm('Deseja realmente excluir este perfil?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>       
      </td>
    </tr>
    <?php } ?>   
</table>

</div>

<div align="center">        
      <br><br>   
    
      <div class="box-footer">
        <form role="form" action="/listemail/cadastro" method="post">
          <input type="text" class="form-control" id="nomecaixa" name="nomecaixa" value="<?php echo htmlspecialchars( $nomecaixa, ENT_COMPAT, 'UTF-8', FALSE ); ?>" >
          <input type="text" class="form-control" id="email_caixa" name="email_caixa" placeholder="Digite o email">       
          <button type="submit" class="btn btn-success" >Cadastrar</button>
      </form>
      </div>     
  </div>
  



