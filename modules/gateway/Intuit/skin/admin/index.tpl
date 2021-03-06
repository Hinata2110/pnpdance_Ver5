<form action="{$VAL_SELF}" method="post" enctype="multipart/form-data">
	<div id="Intuit" class="tab_content">
  		<h3>{$TITLE}</h3>
  		<fieldset><legend>{$LANG.module.cubecart_settings}</legend>
			<div><label for="status">{$LANG.common.status}</label><span><input type="hidden" name="module[status]" id="status" class="toggle" value="{$MODULE.status}" /></span></div>
			<div>
				<label for="scope">{$LANG.module.scope}</label>
				<span>
					<select name="module[scope]">
      						<option value="both" {$SELECT_scope_both}>{$LANG.module.both}</option>
      						<option value="main" {$SELECT_scope_main}>{$LANG.module.main}</option>
      						<option value="mobile" {$SELECT_scope_mobile}>{$LANG.module.mobile}</option>
    					</select>
				</span>
			</div>
			<div><label for="default">{$LANG.common.default}</label><span><input type="hidden" name="module[default]" id="default" class="toggle" value="{$MODULE.default}" /></span></div>
			<div><label for="description">{$LANG.common.description}</label><span><input name="module[desc]" id="desc" class="textbox" type="text" value="{$MODULE.desc}" /></span></div>
			<div><label for="username">{$LANG.intuit.username}</label><span><input name="module[username]" id="username" class="textbox" type="text" value="{$MODULE.username}" /></span></div>
			<div><label for="pw">{$LANG.intuit.pw}</label><span><input name="module[pw]" id="pw" class="textbox" type="password" value="{$MODULE.pw}" /></span></div>
    		<!--
    		<div>
				<label for="mode">{$LANG.intuit.payment_type}</label>
					<span>
						<select name="module[payment_type]">
      						<option value="AUTH_CAPTURE" {$SELECT_payment_type_AUTH_CAPTURE}>{$LANG.intuit.auth_capture}</option>
      						<option value="AUTH_ONLY" {$SELECT_payment_type_AUTH_ONLY}>{$LANG.intuit.auth_only}</option>
    					</select>
    				</span>
    		</div>
    		-->
			<div>
				<label for="testMode">{$LANG.module.mode_test}</label>
					<span>
						<input type="hidden" name="module[testMode]" id="testMode" class="toggle" value="{$MODULE.testMode}" />
    				</span>
    		</div>
    		</fieldset>
  		</div>

  		{$MODULE_ZONES}
  		<div class="form_control">
			<input type="submit" name="save" value="{$LANG.common.save}" />
  		</div>
  	
  	<input type="hidden" name="token" value="{$SESSION_TOKEN}" />
</form>