
<table>
    <caption>Modificar Usuarios</caption>
    <thead>
        <tr>
            <th>Nombre mostrado</th>
            <th>E-mail</th>
            <th>Nivel</th>
            <th>Editar</th>
            <th>eliminar</th>
        </tr>
    </thead>
    <?php foreach($usuarios as $u): ?>
    <tbody>
        <tr>
            <form method='post' action='<?php echo base_url() ?>?/admin/editar/usuarios/editar' >
                <td title='* se mantendra intacto el nombre para ingreso, solo variara el nombre mostrado'><input type='text' value='<?php echo $u->nombre_usuario ?>'  name="nombre" id="nombre_<?php echo $u->id_usuario ?>" /></td>
                <td><input type='text' value='<?php echo $u->mail ?>'  name="mail" id="mail_<?php echo $u->id_usuario ?>" /></td>
                <td>
                    <select name="nivel" id="nivel_<?php echo $u->id_usuario ?>">                    
                            <option value="1"  <?php echo $this->selectNivel(1, $u->nivel) ?> >Usuario</option>
                            <option value="10" <?php echo $this->selectNivel(10, $u->nivel) ?> >Admin</option>
                   </select>
                </td>
                <td>
                    <button type='submit'>
                        <img src='<?php echo $this->config->item('view_url'); ?>/ico/16x16/blog_post_edit.png' alt='editar' title='editar' />
                    </button>
                </td>   
            </form>
            <form method='post'  action='<?php echo base_url() ?>?/admin/editar/usuarios/eliminar' >
                <td>
                    <input type='hidden' name="id_usuario" value='<?php echo $u->id_usuario ?>' />
                    <button type='submit'>                        
                        <img src='<?php echo $this->config->item('view_url'); ?>/ico/16x16/remove.png' alt='editar' title='editar' />
                    </button>
                </td>   
            </form>
            
        </tr>
    </tbody>
    <?php endforeach; ?>
</table>
