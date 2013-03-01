<form action="{$VAL_SELF}" method="post">
  <div id="modules" class="tab_content">
	<h3>{$MODULES_TYPE}</h3>
	<div class="list">
	{foreach from=$MODULES item=module}
	  <div class="module">
		<span class="actions">
		  <a href="?_g=modules&amp;type={$module.type}&amp;module={$module.node}" class="edit">
			<img src="{$SKIN_VARS.admin_folder}/skins/{$SKIN_VARS.skin_folder}/images/edit.png" alt="{$LANG.common.edit}" />
		  </a>
		</span>
		<span class="toggle"><input type="hidden" id="status_{$module.node}" name="status[{$module.node}]" value="{$module.status}" class="toggle" /></span>
		<a href="?_g=modules&amp;type={$module.type}&amp;module={$module.node}">{$module.title}</a>
	  </div>
	{/foreach}
	</div>
  </div>
  
  {include file='templates/element.hook_form_content.php'}
  
  <div class="form_control">
	<input type="submit" value="{$LANG.common.save}" />
  </div>
  <input type="hidden" name="token" value="{$SESSION_TOKEN}" />
</form>