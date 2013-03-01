<div class="alert alert-info">
	{$LANG_CERT_VALUES}
</div>
<div class="section section-certificates">
	<form action="{$VAL_SELF}" method="post">
		<div class="content">
			<div class="row-fluid">
				<div class="span6">
					<label for="giftcert_value">{$LANG.common.value}</label>
					<input type="text" name="gc[value]" id="giftcert_value" value="{$POST.value}" required class="input-fill" />
				</div>
				<div class="span6">
					<label for="giftcert_method">{$LANG.common.delivery_method}&nbsp;</label>
					<select name="gc[method]" id="giftcert_method" required class="input-fill chzn-select">
						{if in_array($GC.delivery, array(1,3))}
							<option value="e">{$LANG.common.email}</option>
						{/if}
						{if in_array($GC.delivery, array(2,3))}
							<option value="m">{$LANG.common.post}</option>
						{/if}
					</select>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label for="giftcert_name">{$LANG.catalogue.recipient_name}</label>
					<input type="text" name="gc[name]" id="giftcert_name" value="{$POST.name}" required class="input-fill" />
				</div>
				<div class="span6">
					{if in_array($GC.delivery, array(1,3))}
						<label for="giftcert_email">{$LANG.catalogue.recipient_email}</label>
						<input type="text" name="gc[email]" id="giftcert_email" value="{$POST.email}" class="input-fill" />
					{/if}
				</div>
			</div>
			<div class="row-fluid">
				<label for="giftcert_message">{$LANG.common.message} {$LANG.common.optional}</label>
				<textarea name="gc[message]" id="giftcert_message" class="input-fill">{$POST.message}</textarea>
			</div>
		</div>
		{if $ctrl_allow_purchase}
			<div class="form-actions">
				<input type="submit" value="{$LANG.catalogue.add_to_basket}" class="btn btn-primary" />
			</div>
		{/if}
	</form>
</section>