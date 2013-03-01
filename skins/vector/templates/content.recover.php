<div class="section section-recover">
	<form action="{$VAL_SELF}" method="post">
		<input type="hidden" name="redir" value="{$STORE_URL}/index.php?_a=recovery" />
		<div class="content">
			<div class="row-fluid">
				<label for="recover_email">{$LANG.common.email}</label>
				<input type="email" name="email" id="recover_email" required placeholder="{$LANG.user.email_address}" />
			</div>
		</div>
		<div class="form-actions">
			<input type="submit" value="{$LANG.account.recover_password}" class="btn btn-primary" />
		</div>
	</form>
</div>