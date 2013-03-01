<div class="row-fluid">
	<div class="span5">
		<div class="section section-login">
			<h3 class="section-title">{$LANG.account.login}</h3>
			<form action="{$VAL_SELF}" method="post" name="login">
				<div class="content">
					<input type="hidden" name="redir" value="{$REDIRECT_TO}" />
					<div class="row-fluid">
						<label for="login-username">{$LANG.user.email_address}</label>
						<input type="text" name="username" id="login-username" value="{$USERNAME}" required placeholder="{$LANG.user.email_address}" class="input-fill" />
					</div>
					<div class="row-fluid">
						<label for="login-password">{$LANG.account.password}</label>
						<input type="password" autocomplete="off" name="password" id="login-password" value="" required class="input-fill" placeholder="{$LANG.account.password}" />
						<p class="help-block forgotten-password"><a href="{$STORE_URL}/index.php?_a=recover">{$LANG.account.forgotten_password}</a></p>
					</div>
				</div>
				<div class="form-actions">
					<a href="javascript:;" onclick="$('form[name=login]').submit()" class="btn"><i class="icon-lock"></i> {$LANG.account.log_in}</a>
					{foreach from=$LOGIN_HTML item=html}
						{$html}
					{/foreach}
				</div>
			</form>
		</div>
	</div>
	<div class="span7">
		<div class="section section-register">
			<h3 class="section-title">{$LANG.account.register}</h3>
			<form action="{$VAL_SELF}" method="post" name="registration">
				<div class="content">
					<input type="hidden" name="register" value="{$LANG.account.register}" />
					<div class="row-fluid">
						<div class="span6">
							<label for="register-firstname">{$LANG.user.name_first}</label>
							<input type="text" name="first_name" id="register-firstname" value="{$DATA.first_name}" required placeholder="{$LANG.user.name_first}" class="input-fill" />
						</div>
						<div class="span6">
							<label for="register-lastname">{$LANG.user.name_last}</label>
							<input type="text" name="last_name" id="register-lastname" value="{$DATA.last_name}" required placeholder="{$LANG.user.name_last}" class="input-fill" />
						</div>
					</div>
					<div class="row-fluid">
						<label for="register-email">{$LANG.user.email_address}</label>
						<input type="email" name="email" id="register-email" value="{$DATA.email}" required placeholder="{$LANG.user.email_address}" class="input-fill" />
					</div>
					<div class="row-fluid">
						<div class="span6">
							<label for="register-phone">{$LANG.address.phone}</label>
							<input type="text" name="phone" id="register-phone" value="{$DATA.phone}" required placeholder="{$LANG.address.phone}" class="input-fill" />
						</div>
						<div class="span6">
							<label for="register-mobile">{$LANG.address.mobile}</label>
							<input type="text" name="mobile" id="register-mobile" value="{$DATA.mobile}" placeholder="{$LANG.address.mobile}" class="input-fill" />
						</div>
					</div>
					<div class="row-fluid">
						<div class="span6">
							<label for="register-password">{$LANG.account.password}</label>
							<input type="password" autocomplete="off" name="password" id="register-password" value="" required class="input-fill" />
						</div>
						<div class="span6">
							<label for="register-passconf" class="control-label">{$LANG.account.password_confirm}</label>
							<input type="password" autocomplete="off" name="passconf" id="register-passconf" value="" required class="input-fill" />
						</div>
					</div>
					{include file='templates/content.recaptcha.php'}
					{if $TERMS_CONDITIONS}
						<div class="row-fluid form-inline">
							<label for="register-terms"><a href="{$TERMS_CONDITIONS}" target="_blank">{$LANG.account.register_terms_agree}</a></label>
							<input type="checkbox" id="register-terms" name="terms_agree" value="1" required />
						</div>
					{/if}
				</div>
				<div class="form-actions">
					<a href="#submit" class="btn"><i class="icon-user"></i> {$LANG.account.register}</a>
				</div>
			</form>
		</div>
	</div>
</div>