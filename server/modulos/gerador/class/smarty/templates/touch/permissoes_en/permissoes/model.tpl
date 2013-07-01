/**
*	@Autor: Maciel Sousa
*	@Email: macielcr7@gmail.com
**/

Ext.define('{$app|capitalize}.model.ModelPermissoes', {
    extend: 'Ext.data.Model',
	
	config: {
    	fields: [
			{
				name: 'modulo'
			},
			{
				name: 'leaf',
				type: 'boolean'
			},
			{
				name: 'text'
			},
			{
				name: 'acao_id',
				type: 'int'
			},
			{
				name: 'acao'
			},
			{
				name: 'is_perfil',
				type: 'boolean'
			},
			{
				name: 'checked',
				type: 'boolean'
			},
			{
				name: 'init_checked',
				type: 'boolean'
			}				
    	]
    }	
});