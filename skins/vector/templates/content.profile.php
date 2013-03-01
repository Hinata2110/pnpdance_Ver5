<form action="{$VAL_SELF}" method="post" name="registration">
	<div class="section">
		<h3 class="section-title">{$LANG.account.update_your_details}</h3>
		<div class="content">
			<div class="row-fluid">
				<div class="span6">
					<label for="acc_first_name">{$LANG.user.name_first}</label>
					<input type="text" name="first_name" id="acc_first_name" class="input-fill" value="{$USER.first_name}" required placeholder="{$LANG.user.name_first}" />
				</div>
				<div class="span6">
					<label for="acc_last_name">{$LANG.user.name_last}</label>
					<input type="text" name="last_name" id="acc_last_name" class="input-fill" value="{$USER.last_name}" required placeholder="{$LANG.user.name_last}" />
				</div>
			</div>
			<div class="row-fluid">
				<label for="acc_email">{$LANG.common.email}</label>
				<input type="email" name="email" id="acc_email" class="input-fill" value="{$USER.email}" required placeholder="{$LANG.common.email}" />
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label for="acc_phone">{$LANG.address.phone}</label>
					<input type="text" name="phone" id="acc_phone" class="input-fill" value="{$USER.phone}" placeholder="{$LANG.address.phone}" />
				</div>
				<div class="span6">
					<label for="acc_mobile">{$LANG.address.mobile}</label>
					<input type="text" name="mobile" id="acc_mobile" class="input-fill" value="{$USER.mobile}" placeholder="{$LANG.address.mobile}" />
				</div>
			</div>
		</div><!-- /.content -->
		<div class="form-actions">
			<button name="update" type="submit" value="{$LANG.common.update}" class="btn btn-primary"><i class="icon-edit icon-white"></i> {$LANG.common.update}</button>
		</div>
	</div><!-- /.section -->
	
	{if $ACCOUNT_EXISTS}
		<div class="section">
			<h3 class="section-title">{$LANG.account.password_change}</h3>
			<div class="content">
				<p>{$LANG.account.update_your_password}</p>
				<div class="row-fluid">
					<label for="passold">{$LANG.user.password_current}</label>
					<input type="password" autocomplete="off" name="passold" id="passold" class="input-fill" placeholder="{$LANG.user.password_current}" />
				</div>
				<div class="row-fluid">
					<label for="passnew">{$LANG.user.password_new}</label>
					<input type="password" autocomplete="off" name="passnew" id="passnew" class="input-fill" placeholder="{$LANG.user.password_new}" />
				</div>
				<div class="row-fluid">
					<label for="passconf">{$LANG.user.password_confirm}</label>
					<input type="password" autocomplete="off" name="passconf" id="passconf" class="input-fill" placeholder="{$LANG.user.password_confirm}" />
				</div>
			</div>
			<div class="form-actions">
				<button name="update" type="submit" value="{$LANG.common.update}" class="btn btn-primary"><i class="icon-edit icon-white"></i> {$LANG.common.update}</button>
			</div>
		</div><!-- /.section -->
	{/if}
</form>