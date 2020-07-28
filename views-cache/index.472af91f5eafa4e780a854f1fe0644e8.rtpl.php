<?php if(!class_exists('Rain\Tpl')){exit;}?>
<br><br><br> 

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
        <a href="/index/editar/{$value.idperfil" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
        <a href="/index/<?php echo htmlspecialchars( $value1["idperfil"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
      </td>
    </tr>
    <?php } ?>   
</table>

</div>

<div align="center">        
      <br><br>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="/cadastro"><button>Cadastrar Novo Perfil</button></a>
      </div>
   
  </div>
<br>


