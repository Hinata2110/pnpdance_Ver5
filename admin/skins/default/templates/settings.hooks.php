<form action="{$VAL_SELF}" method="post">
  {if $DISPLAY_PLUGINS}
  <div id="plugins" class="tab_content">
	<h3>{$LANG.hooks.title_plugins_installed}</h3>
	<fieldset class="list">
	  {foreach from=$PLUGINS item=plugin}
	  <div>
		<span class="actions">&nbsp;</span>
		<img src="{$SKIN_VARS.admin_folder}/skins/{$SKIN_VARS.skin_folder}/images/plugin.png" alt="" /> <a href="{$plugin.edit}">{$plugin.name}</a>
	  </div>
	  {foreachelse}
	  <div>{$LANG.hooks.error_plugin_none}</div>
	  {/foreach}
	</fieldset>
  </div>
  {/if}

  {if $DISPLAY_HOOKS}
  <div id="hooks" class="tab_content">
	<h3>{$PLUGIN}</h3>
	<fieldset class="list"><legend>{$LANG.hooks.title_hook_available}</legend>
	  {foreach from=$HOOKS item=hook}
	  <div>
		<span class="actions">
		  <a href="{$hook.edit}"><img src="{$SKIN_VARS.admin_folder}/skins/{$SKIN_VARS.skin_folder}/images/edit.png" alt="{$LANG.common.edit}" /></a>
		</span>
		<input type="hidden" name="status[{$hook.hook_id}]" value="{$hook.enabled}" id="status_{$hook.hook_id}" class="toggle" />
		<a href="{$hook.edit}">{$hook.hook_name}</a>
	  </div>
	  {foreachelse}
	  <div>{$LANG.hooks.error_hook_none}</div>
	  {/foreach}
	</fieldset>
	<p>{$LANG.hooks.notify_hook_magic}</p>
  </div>
  {/if}

  {if $DISPLAY_FORM}
  <div id="hook_edit" class="tab_content">
	<h3>{$LANG.hooks.title_hook_configure}</h3>
	<fieldset><legend>{$LANG.hooks.title_hook_required}</legend>
	  <div><label for="hook_name">{$LANG.hooks.name}</label><span><input type="text" name="hook[hook_name]" id="hook_name" class="textbox required" value="{$HOOK.hook_name}" /></span></div>
	  {if isset($PLUGINS)}
	  <div>
		<label for="plugin">{$LANG.hooks.title_plugin}</label>
		<span>
		  <select name="hook[plugin]" id="plugin" class="required">
			<option value="">{$LANG.form.please_select}</option>
			{foreach from=$PLUGINS item=plugin}<option value="{$plugin.plugin}"{$plugin.selected}>{$plugin.name}</option>{/foreach}
		  </select>
		</span>
	  </div>
	  {/if}
	  <div>
		<label for="trigger">{$LANG.hooks.trigger}</label>
		<span>
		  <select name="hook[trigger]" id="trigger" class="required">
			<option value="">{$LANG.form.please_select}</option>
			{foreach from=$TRIGGERS item=trigger}<option value="{$trigger.trigger}"{$trigger.selected}>{$trigger.trigger}</option>{/foreach}
		  </select>
		</span>
	  </div>
	</fieldset>
	<fieldset><legend>{$LANG.hooks.title_hook_optional}</legend>
	  <div><label for="filepath">{$LANG.hooks.path_to_file}</label><span><input type="text" name="hook[filepath]" id="filepath" class="textbox" value="{$HOOK.filepath}" /></span></div>
	  <input type="hidden" name="hook[hook_id]" value="{$HOOK.hook_id}" />
	</fieldset>
  </div>
  {/if}

  {include file='templates/element.hook_form_content.php'}

  <div class="form_control"><input type="submit" value="{$LANG.common.save}" /></div>
  <input type="hidden" name="token" value="{$SESSION_TOKEN}" />
</form>