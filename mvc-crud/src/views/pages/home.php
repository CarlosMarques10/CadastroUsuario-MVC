<?php $render('header'); ?>

<a href="<?=$base;?>/novoUsuario">Novo Usuario</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
            <a href="<?=$base;?>/editar/<?=$usuario['id'];?>">Editar</a>
            <a href="<?=$base;?>/excluir/<?=$usuario['id'];?>" onclick="return confirm('Deseja excluir?')">Excluir</a>
            </td>
        </tr>

    <?php endforeach;?>

</table>



<?php $render('footer'); ?>