<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $this->lang->line('admin_index_title'); ?></title>
        <link rel="stylesheet" href="<?php echo base_url() ?>system/application/views/css/general.css" type="text/css" media="screen" />
        <script src="jquery.js" type="text/javascript"></script>
        <!--[if lt IE 8]>
                <script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js" type="text/javascript"></script>
        <![endif]-->
        <!--[if lt IE 7]>
        <![endif]-->
    </head>
    <body>
       <div id='pagina'> 
        <?php $this->load->view('admin/barraLateral',$this->datos); ?>
        
            <div id='contenido'>
            
