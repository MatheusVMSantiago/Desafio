<?php if(!class_exists('Rain\Tpl')){exit;}?><title>Perfis | <?php echo htmlspecialchars( $namepage, ENT_COMPAT, 'UTF-8', FALSE ); ?></title>
<br><br><br>
<div align="center">    
  
  <div>
    <h1>Lista de Perfis</h1>
  </div>

</div> 

<div class="box-body no-padding" align="center">
    <table class="table table-striped" border="1">
     
        <tr>
          <th style="width: 200px">ID</th>
          <th style="width: 200px">Nome</th>
          <th style="width: 200px">Data de Nascimento</th>
          <th style="width: 200px">Opções</th>      
          
        </tr>
        
     
    
    <?php $counter1=-1;  if( isset($idperfil) && ( is_array($idperfil) || $idperfil instanceof Traversable ) && sizeof($idperfil) ) foreach( $idperfil as $key1 => $value1 ){ $counter1++; ?> 
    <tr align="center">
      <td><?php echo htmlspecialchars( $value1["idperfil"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
      <td><?php echo htmlspecialchars( $value1["nome_usu"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
      <td><?php echo htmlspecialchars( $value1["data_nasc"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>     
      <td>
        <a href="/editar/<?php echo htmlspecialchars( $value1["idperfil"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
        <a href="/index/<?php echo htmlspecialchars( $value1["idperfil"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este perfil?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
        <a href="/json/<?php echo htmlspecialchars( $value1["idperfil"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"  target="_blank"><i class="fa fa-edit"></i> Json</a>
      </td>
    </tr>
    <?php } ?>   
</table>

</div>

<div align="center">        
      <br><br>
      
      <div class="box-footer">
        <a href="/cadastro"><button>Cadastrar Novo Perfil</button></a>
      </div>   
   
  </div>
<br>


