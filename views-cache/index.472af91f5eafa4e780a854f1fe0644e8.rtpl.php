<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BAND</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TOUR</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Merchandise</a>
        <a href="#" class="w3-bar-item w3-button">Extras</a>
        <a href="#" class="w3-bar-item w3-button">Media</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
<br><br><br>
<div class="box-body no-padding" align="center">
    <table class="table table-striped">
      <thead>
        <tr>
          <th style="width: 10px">ID</th>
          <th>Nome</th>
          <th>Data de Nascimento</th>
          <th>Opções</th>          
          <th style="width: 140px">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
    <?php $counter1=-1;  if( isset($idperfil) && ( is_array($idperfil) || $idperfil instanceof Traversable ) && sizeof($idperfil) ) foreach( $idperfil as $key1 => $value1 ){ $counter1++; ?> 
    <tr align="center">
      <td><?php echo htmlspecialchars( $value1["idperfil"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
      <td><?php echo htmlspecialchars( $value1["nome_usu"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
      <td><?php echo htmlspecialchars( $value1["data_nasc"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>     
      <td>
        <a href="/admin/users/{$value.idperfil" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
        <a href="/admin/users/<?php echo htmlspecialchars( $value1["idperfil"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
      </td>
    </tr>
    <?php } ?></tbody>
</table>
</div>
</div>
<br>


