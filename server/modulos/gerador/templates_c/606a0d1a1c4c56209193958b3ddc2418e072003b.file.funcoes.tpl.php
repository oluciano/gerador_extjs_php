<?php /* Smarty version Smarty-3.1.8, created on 2013-09-27 09:46:11
         compiled from "class/smarty/templates/desktop/server/funcoes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181977111152457e1386f598-92204534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '606a0d1a1c4c56209193958b3ddc2418e072003b' => 
    array (
      0 => 'class/smarty/templates/desktop/server/funcoes.tpl',
      1 => 1380126225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181977111152457e1386f598-92204534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REMOVED_SUCCESS' => 0,
    'SAVED_SUCCESS' => 0,
    'ERRO_DELETE_DATA' => 0,
    'ERROR_SAVE_DATA' => 0,
    'ACTION_NOT_FOUND' => 0,
    'ERROR_1451' => 0,
    'ENTRADA_ERROR' => 0,
    'EXISTE_ERROR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52457e138d84d1_11699444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52457e138d84d1_11699444')) {function content_52457e138d84d1_11699444($_smarty_tpl) {?><<?php ?>?php 

define('REMOVED_SUCCESS', '<?php echo $_smarty_tpl->tpl_vars['REMOVED_SUCCESS']->value;?>
');
define('SAVED_SUCCESS', '<?php echo $_smarty_tpl->tpl_vars['SAVED_SUCCESS']->value;?>
');
define('ERRO_DELETE_DATA', '<?php echo $_smarty_tpl->tpl_vars['ERRO_DELETE_DATA']->value;?>
');
define('ERROR_SAVE_DATA', '<?php echo $_smarty_tpl->tpl_vars['ERROR_SAVE_DATA']->value;?>
');
define('ACTION_NOT_FOUND', '<?php echo $_smarty_tpl->tpl_vars['ACTION_NOT_FOUND']->value;?>
');

function formatObservacao($observacao, $usuario){
	if( !empty($observacao) ){
		$autenticacao = date("d/m/Y H:i:s").' - '.$usuario->getNome();
		$observacao = $observacao."\n".$autenticacao."\n\n";
	} else{
		$observacao = null;
	}
	return $observacao;
}

function formatData($data){
	return implode('-', array_reverse(explode('/',$data)));
}

function mascara($mascara, $string){
	$string = str_replace(" ","",$string);
	for($i=0;$i<strlen($string);$i++){
		$mascara[strpos($mascara,"#")] = $string[$i];
	}
	return $mascara;
}


function getMsgError($error){
	if($error[1]==1451){
		return utf8_encode("<?php echo $_smarty_tpl->tpl_vars['ERROR_1451']->value;?>
");
	}
	else if($error[1]==1062){
		preg_match("/'(.*)' for key/", $msg, $matches);
		$entry = $matches[1];
		return utf8_encode("<?php echo $_smarty_tpl->tpl_vars['ENTRADA_ERROR']->value;?>
 '$entry' <?php echo $_smarty_tpl->tpl_vars['EXISTE_ERROR']->value;?>
!");
	}
	else{
		return ERRO_DELETE_DATA;
	}
}

?<?php ?>><?php }} ?>