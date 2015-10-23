<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>Login Admin</title>
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="<?php echo base_url(); ?>asset/webadmin/css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="<?php echo base_url(); ?>asset/webadmin/css/ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->           
    <!--[if lte IE 7]>
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/plugins/other/lte-ie7.js'></script>
    <![endif]-->    
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/plugins/jquery/jquery-1.9.1.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/plugins/other/excanvas.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/plugins/other/jquery.mousewheel.min.js'></script>
        
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/plugins/bootstrap/bootstrap.min.js'></script>
    
    <script type='text/javascript' src="<?php echo base_url(); ?>asset/webadmin/js/plugins/uniform/jquery.uniform.min.js"></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/plugins/shbrush/XRegExp.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/plugins/shbrush/shBrushCss.js'></script>    
    
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/plugins.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/charts.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/actions.js'></script>
    <script>
		<?php if($message == 0){?>alert("Username / Password Salah !!")<?php } ?>
	</script>
</head>
<body>    
    <div id="loader"><img src="<?php echo base_url(); ?>asset/webadmin/img/loader.gif"/></div>
       
    <div class="login">

        <div class="page-header">
            <div class="icon">
                <span class="ico-arrow-right"></span>
            </div>
            <h1>Login <small>ADMIN PANEL</small></h1>
        </div>        
        <form method="post" action="<?php echo base_url(); ?>index.php/login_validation">
        <div class="row-fluid">
            <div class="row-form">
                <div class="span12">
                    <input type="text" name="username" placeholder="username"/>
                </div>
            </div>
            <div class="row-form">
                <div class="span12">
                    <input type="password" name="password" placeholder="password"/>
                </div>            
            </div>
            <div class="row-form">
                <div class="span12">
                    <input type="checkbox"/> Keep me signed in
                </div>
            </div>
            <div class="row-form">
                <div class="span12">
                    <!--<button class="btn">Sign in <span class="icon-arrow-next icon-green"></span></button>-->
					<input type="submit" value="Sign in" class="btn" />
                </div>                
            </div>
        </div></form>
        <?php 
            if($this->input->get('gagal')==1){
        ?>
        <span>username atau password salah</span>
        <?php
            }
        ?>
        <?php echo form_close(); ?>
    </div>
    
</body>
</html>
