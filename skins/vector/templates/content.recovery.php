<div class="alert alert-info">
	{$LANG.account.enter_validation_key}
</div>

<div class="section section-recovery">
	<form action="{$VAL_SELF}" method="post">
		<div class="content">
			<div class="row-fluid">
				<label for="recover-email">{$LANG.common.email}</label>
				<input type="email" name="email" id="recover-email" value="{$DATA.email}" required placeholder="{$LANG.user.email_address}" />
			</div>
			<div class="row-fluid">
				<label for="recover-validate">{$LANG.account.validation_key}</label>
				<input type="text" name="validate" id="recover-validate" value="{$DATA.validate}" required placeholder="{$LANG.account.validation_key}" />
			</div>
			<div class="row-fluid">
				<label for="recover-password">{$LANG.account.new_password}</label>
				<input type="password" autocomplete="off" name="password[password]" id="recover-password" required />
			</div>
			<div class="row-fluid">
				<label for="recover-passconf">{$LANG.account.new_password_confirm}</label>
				<input type="password" autocomplete="off" name="password[passconf]" id="recover-passconf" required />
			</div>
		</div>
		<div class="form-actions">
			<input type="submit" value="{$LANG.account.recover_password}" class="btn btn-primary" />
		</div>
	</form>
</div>