<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 21:03:55
         compiled from "view\foto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55715282c1eb8cb736-39461445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be7ddf390e6119c8b381de267c36222ac2c860b6' => 
    array (
      0 => 'view\\foto.tpl',
      1 => 1380986034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55715282c1eb8cb736-39461445',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5282c1eb94c4b4_59262874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5282c1eb94c4b4_59262874')) {function content_5282c1eb94c4b4_59262874($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <style type="text/css">
            body {
                font-family: Helvetica, Arial, sans-serif;
                padding: 10px;
                text-align: center;
            }

            #container {
                width: 250px;
                height: 250px;
            }

            #container a {
                text-decoration: none;
            }

            #container a img {
                margin-top: 20px;
                margin-right: 15px;
                margin-left: 15px;
                margin-bottom: 0px;
            }
            
            #botoes {
                padding-left: 20px;
                width: 250px;
            }

            .btn {
                border: none;
                width: 100px;
                cursor: pointer;
                font-size: 16px;
                padding: 5px;
                margin: 5px;
                color: #FFF;
                background: #45bdf9;
            }

            .bradius {
                border-radius: 5px;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
            }       
        </style>
    </head>
    <body>
        <div id="container">
            <div id="camera"></div>

            <div id="botoes">
                <a href="javascript:void(webcam.reset())"><img src="css/image/reset-icon.png" height="20" width="20" alt="Resetar" title="Resetar" /></a>
                <a href="javascript:void(webcam.configure('camera'))" ><img src="css/image/settings-icon.png" height="20" width="20" alt="Configurações" title="Configurações" /></a>
                <a href="javascript:void(webcam.freeze())" ><img src="css/image/photo-icon.png" height="20" width="20" alt="Capturar Imagem" title="Capturar Imagem" /></a>
                <a class="btn bradius" accesskey=""href="javascript:void(webcam.upload())">Salvar</a>
            </div>
            <script type="text/javascript" src="js/lib/jquery-2.0.3.min.js"></script>
            <script type="text/javascript" src="js/plugins/webcam/webcam.js"></script>
            <script type="text/javascript">
                $(function() {
                    webcam.set_api_url('upload.php');
                    webcam.set_swf_url('js/plugins/webcam/webcam.swf');
                    webcam.set_quality(90);
                    webcam.set_shutter_sound(true, 'js/plugins/webcam/shutter.mp3');

                    $('#camera').html(webcam.get_html(300, 341));
                });
            </script>
        </div>
    </body>
</html>

<?php }} ?>