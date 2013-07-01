<?php /* Smarty version Smarty-3.1.8, created on 2013-07-01 10:54:32
         compiled from "class/smarty/templates/padrao/permissoes_br/usuarios/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16056165651d18a183790f1-56145101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e0063507a15b1f0baae24e5a4961c005424faf5' => 
    array (
      0 => 'class/smarty/templates/padrao/permissoes_br/usuarios/edit.tpl',
      1 => 1351271252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16056165651d18a183790f1-56145101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d18a183ad830_32241118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d18a183ad830_32241118')) {function content_51d18a183ad830_32241118($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/gerador_extjs_php/server/modulos/gerador/class/smarty/libs/plugins/modifier.capitalize.php';
?>/**
*	@Autor: Maciel Sousa
*	@Email: macielcr7@gmail.com
**/

Ext.define('<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['app']->value);?>
.view.usuarios.Edit', {
    extend: '<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['app']->value);?>
.view.WindowMedium',
	alias: 'widget.addusuarioswin',

    id: 'AddUsuariosWin',
    layout: {
        type: 'fit'
    },
    title: 'Cadastro de Usu&aacute;rios',

    initComponent: function() {
        var me = this;


        Ext.applyIf(me, {
            items: [
                {
                    xtype: 'form',
                    id: 'FormUsuarios',
                    bodyPadding: 10,
                    autoScroll: true,
                    method: 'POST',
                    url : 'server/modulos/usuarios/save.php',
                    items: [
						{
							xtype: 'fieldcontainer',
							autoHeight: true,
							layout: {
								align: 'stretch',
								type: 'hbox'
							},
							items: [
								{
									xtype: 'textfield',
									name: 'nome',									
								    margin: '0 5 0 0',								    
								    flex: 1,
									id: 'nome_usuarios',
									anchor: '100%',									
									fieldLabel: 'Nome'
									
								},								
								{
		                            xtype: 'fieldcontainer',
		                            autoHeight: true,								    								    
								    flex: 1,
		                            layout: {
		                                align: 'stretch',
		                                type: 'hbox'
		                            },
		                            items: [
		                                {
											xtype: 'combobox',
		                                    store: 'StoreComboPerfil',
		                                    name: 'perfil_id',
											id: 'perfil_id_usuarios',
											button_id: 'button_perfil_id_usuarios',
											flex: 1,
											anchor: '100%',
											fieldLabel: 'Perfil'
										},
		                                {
		                                    xtype: 'buttonadd',
		                                    iconCls: 'bt_cancel',
		                                    hidden: true,
		                                    id: 'button_perfil_id_usuarios',
		                                    combo_id: 'perfil_id_usuarios',
		                                    action: 'reset_combo'
		                                },
		                                {
		                                    xtype: 'buttonadd',
											tabela: 'Perfil',
											action: 'add_win'
		                                }
		                            ]
		                        }		                        

							]
						},
						{
							xtype: 'fieldcontainer',
							autoHeight: true,
							layout: {
								align: 'stretch',
								type: 'hbox'
							},
							items: [
								{
									xtype: 'textfield',
									name: 'email',									
								    margin: '0 5 0 0',								    
								    flex: 1,
									id: 'email_usuarios',
									anchor: '100%',		
									validator: function(value){
										if(value!="" && !isEmail(value)){
											return 'E-mail Inválido...';
										}
										else{
											return true;
										}
									},									
									fieldLabel: 'Email'
									
								},								
								{
									xtype: 'textfield',
									name: 'login',								    								    
								    flex: 1,
									id: 'login_usuarios',
									anchor: '100%',									
									fieldLabel: 'Login'
									
								}								

							]
						},
						{
							xtype: 'fieldcontainer',
							autoHeight: true,
							layout: {
								align: 'stretch',
								type: 'hbox'
							},
							items: [
								{
									xtype: 'textfield',
									name: 'senha',									
								    margin: '0 5 0 0',								    
								    flex: 1,
									id: 'senha_usuarios',
									anchor: '100%',				
									inputType: 'password',									
									fieldLabel: 'Senha'
									
								},								
								{
		                            xtype: 'fieldcontainer',
		                            autoHeight: true,								    								    
								    flex: 1,
		                            layout: {
		                                align: 'stretch',
		                                type: 'hbox'
		                            },
		                            items: [
		                                {
											xtype: 'combobox',
		                                    store: 'StoreComboAdministradorUsuarios',
		                                    name: 'administrador',
											id: 'administrador_usuarios',
											button_id: 'button_administrador_usuarios',
											flex: 1,
											anchor: '100%',
											fieldLabel: 'Administrador'
										},
		                                {
		                                    xtype: 'buttonadd',
		                                    iconCls: 'bt_cancel',
		                                    hidden: true,
		                                    id: 'button_administrador_usuarios',
		                                    combo_id: 'administrador_usuarios',
		                                    action: 'reset_combo'
		                                }
		                            ]
		                        }

							]
						},
						{
							xtype: 'fieldcontainer',
							autoHeight: true,
							anchor: '50%',
							margins: '0 5 0 0',
							layout: {
								align: 'stretch',
								type: 'hbox'
							},
							items: [
								{
		                            xtype: 'fieldcontainer',
		                            autoHeight: true,								    								    
								    flex: 1,
		                            layout: {
		                                align: 'stretch',
		                                type: 'hbox'
		                            },
		                            items: [
		                                {
											xtype: 'combobox',
		                                    store: 'StoreComboStatusUsuarios',
		                                    name: 'status',
											id: 'status_usuarios',
											button_id: 'button_status_usuarios',
											flex: 1,
											anchor: '100%',
											fieldLabel: 'Status'
										},
		                                {
		                                    xtype: 'buttonadd',
		                                    iconCls: 'bt_cancel',
		                                    hidden: true,
		                                    id: 'button_status_usuarios',
		                                    combo_id: 'status_usuarios',
		                                    action: 'reset_combo'
		                                }
		                            ]
								}
							]
						},
						{
							xtype: 'hidden',
							name: 'id',
							hidden: true,
							id: 'id_usuarios',
							value: 0,
							anchor: '100%'
						},
						{
							xtype: 'hidden',
							name: 'action',
							hidden: true,
							id: 'action_usuarios',
							value: 'INSERIR',
							anchor: '100%'
						}
                    ]
                }
            ],
            dockedItems: [
                {
                    xtype: 'toolbar',
                    dock: 'bottom',
                    items: [
                        {
                            xtype: 'tbfill'
                        },
                        {
                            xtype: 'tbseparator'
                        },
                        {
                            xtype: 'button',
                            id: 'button_resetar_usuarios',
                            iconCls: 'bt_cancel',
                            action: 'resetar',
                            text: 'Resetar'
                        },
                        {
                            xtype: 'button',
                            id: 'button_salvar_usuarios',
                            iconCls: 'bt_save',
                            action: 'salvar',
                            text: 'Salvar'
                        }
                    ]
                }
            ]
        });

        me.callParent(arguments);

    }

});
<?php }} ?>