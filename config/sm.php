<?php

 require_once 'C:/Dropbox/www/multidental/inc/smarty/libs/Smarty.class.php';
 
 $sm = new Smarty;
 $sm->template_dir = './view';
 $sm->compile_dir = './inc/smarty/templates_c';
 $sm->cache_dir = './inc/smarty/cache';
 $sm->config_dir = 'config';
 
 
