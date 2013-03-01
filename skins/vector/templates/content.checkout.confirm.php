<div class="row-fluid">
	<div class="span7">
		<div class="checkout-partial">
			{if $IS_USER}
				<div class="section">
					<h3 class="section-title">{if $CTRL_DELIVERY}{$LANG.address.billing_address}{else}{$LANG.address.billing_delivery_address}{/if}</h3>
					<div class="content">
						<div class="row-fluid">
							<strong>{$DATA.title} {$DATA.first_name} {$DATA.last_name}</strong><br />
							{if $DATA.company_name}{$DATA.company_name}<br />{/if}
							{$DATA.line1}<br />
							{if $DATA.line2}{$DATA.line2}<br />{/if}
							{$DATA.town}<br />
							{$DATA.state}<br />
							{$DATA.postcode}<br />
							{$DATA.country}<br />
						</div>
					</div>
					<div class="form-actions">
						<button type="button" onclick="window.location = '{$STORE_URL}/index.php?_a=addressbook&amp;action=edit&amp;address_id={$DATA.address_id}&amp;redir=confirm'" class="btn"><i class="icon-edit"></i> {$LANG.address.address_edit}</button>
					</div>
				</div><!-- /.section -->
				{if $CTRL_DELIVERY}
					<div class="section">
						<h3 class="section-title">{$LANG.address.delivery_address}</h3>
						<div class="content">
							<div class="row-fluid">
								<select name="delivery_address" id="delivery_address" class="input-fill chzn-select">
									{foreach from=$ADDRESSES item=address}
										<option value="{$address.address_id}" {$address.selected}>{$address.description} - {$address.first_name} {$address.last_name}, {$address.line1}, {$address.postcode}</option>
									{/foreach}
								</select>
							</div>
							<div class="row-fluid">
								<label for="delivery_comments">{$LANG.basket.your_comments}</label>
								<textarea name="comments" id="delivery_comments" class="input-fill">{$VAL_CUSTOMER_COMMENTS}</textarea>
							</div>
						</div>
						<div class="form-actions">
							<button type="button" onclick="window.location = '{$STORE_URL}/index.php?_a=addressbook&amp;action=add&amp;redir=confirm'" class="btn"><i class="icon-plus-sign"></i> {$LANG.address.address_add}</button>
						</div>
					</div><!-- /.section -->
				{/if}
			{else}
				<div class="alert alert-info">
					<a class="close" data-dismiss="alert" href="#">&times;</a>
					<strong>{$LANG.account.already_registered}</strong> <a href="{$STORE_URL}/index.php?_a=register" data-modal-name="login" data-modal-body="form[name=login]" title="{$LANG.account.login}" class="btn btn-mini btn-info btn-checkout-login"><i class="icon-user icon-white"></i> {$LANG.account.login}</a>
				</div>
				<div class="section cheeckout-section-contact-details">
					<h3 class="section-title">{$LANG.account.contact_details}</h3>
					<div class="content">
						<div class="row-fluid">
							<div class="span6">
								<label for="user_first">{$LANG.user.name_first}</label>
								<input type="text" name="user[first_name]" id="user_first" class="input-fill" value="{$USER.first_name}" required placeholder="{$LANG.user.name_first}" />
							</div>
							<div class="span6">
								<label for="user_last">{$LANG.user.name_last}</label>
								<input type="text" name="user[last_name]" id="user_last" class="input-fill" value="{$USER.last_name}" required placeholder="{$LANG.user.name_last}" />
							</div>
						</div>
						<div class="row-fluid">
							<label for="user_email">{$LANG.common.email}</label>
							<input type="email" name="user[email]" id="user_email" class="input-fill" value="{$USER.email}" required placeholder="{$LANG.common.email}" />
						</div>
						<div class="row-fluid">
							<div class="span6">
								<label for="user_phone">{$LANG.address.phone}</label>
								<input type="text" name="user[phone]" id="user_phone" class="input-fill" value="{$USER.phone}" placeholder="{$LANG.address.phone}" />
							</div>
							<div class="span6">
								<label for="user_mobile">{$LANG.address.mobile}</label>
								<input type="text" name="user[mobile]" id="user_mobile" class="input-fill" value="{$USER.mobile}" placeholder="{$LANG.address.mobile}" />
							</div>
						</div>
					</div>
				</div><!-- /.cheeckout-section-contact-details -->
				<div class="section cheeckout-section-billing-address">
					<h3 class="section-title">{$LANG.address.billing_address}</h3>
					<div class="content">
						<div class="row-fluid">
							<label for="addr_company">{$LANG.address.company_name}</label>
							<input type="text" name="billing[company_name]" id="addr_company" class="input-fill" value="{$BILLING.company_name}" placeholder="{$LANG.address.company_name}" />
						</div>
						<div class="row-fluid">
							<label for="addr_line1">{$LANG.address.line1}</label>
							<input type="text" name="billing[line1]" id="addr_line1" class="input-fill" value="{$BILLING.line1}" required placeholder="{$LANG.address.line1}" />
						</div>
						<div class="row-fluid">
							<input type="text" name="billing[line2]" id="addr_line2" class="input-fill" value="{$BILLING.line2}" placeholder="{$LANG.address.line2}" />
						</div>
						<div class="row-fluid">
							<div class="span6">
								<label for="addr_town">{$LANG.address.town}</label>
								<input type="text" name="billing[town]" id="addr_town" class="input-fill" value="{$BILLING.town}" required placeholder="{$LANG.address.town}" />
							</div>
							<div class="span6">
								<label for="addr_postcode">{$LANG.address.postcode}</label>
								<input type="text" name="billing[postcode]" id="addr_postcode" class="input-fill" value="{$BILLING.postcode}" required placeholder="{$LANG.address.postcode}" />
							</div>
						</div>
						<div class="row-fluid">
							<label for="country-list">{$LANG.address.country}</label>
							<select name="billing[country]" id="country-list" class="input-fill chzn-select">
								{foreach from=$COUNTRIES item=country}
									<option value="{$country.numcode}" {$country.selected}>{$country.name}</option>
								{/foreach}
							</select>
						</div>
						<div class="row-fluid">
							<label for="state-list">{$LANG.address.state}</label>
							<input type="text" name="billing[state]" id="state-list" value="{$BILLING.state}" class="input-fill" placeholder="{$LANG.address.state}" />
						</div>
						<div class="row-fluid">
							<label for="delivery_comments">{$LANG.basket.your_comments}</label>
							<textarea name="comments" id="delivery_comments" class="input-fill" placeholder="{$LANG.basket.your_comments}">{$VAL_CUSTOMER_COMMENTS}</textarea>
						</div>
					</div>
				</div><!-- /.cheeckout-section-billing-address -->
				{if $ALLOW_DELIVERY_ADDRESS}
					<div class="section cheeckout-section-delivery-address">
						<h3 class="section-title">{$LANG.address.delivery_address}</h3>
						<div class="content">
							<div class="row-fluid form-inline">
								<label><input type="checkbox" name="delivery_is_billing" id="delivery_is_billing" {$DELIVERY_CHECKED} data-section=".delivery-address" /> {$LANG.address.delivery_is_billing}</label>
							</div>
							<div class="delivery-address">
								<div class="row-fluid">
									<div class="span6">
										<label for="del_first">{$LANG.user.name_first}</label>
										<input type="text" name="delivery[first_name]" id="del_first" class="input-fill" value="{$DELIVERY.first_name}" required placeholder="{$LANG.user.name_first}" />
									</div>
									<div class="span6">
										<label for="del_last">{$LANG.user.name_last}</label>
										<input type="text" name="delivery[last_name]" id="del_last" class="input-fill" value="{$DELIVERY.last_name}" required placeholder="{$LANG.user.name_last}" />
									</div>
								</div>
								<div class="row-fluid">
									<label for="del_company">{$LANG.address.company_name}</label>
									<input type="text" name="delivery[company_name]" id="del_company" class="input-fill" value="{$DELIVERY.company_name}" placeholder="{$LANG.address.company_name}" />
								</div>
								<div class="row-fluid">
									<label for="del_line1">{$LANG.address.line1}</label>
									<input type="text" name="delivery[line1]" id="del_line1" class="input-fill" value="{$DELIVERY.line1}" required placeholder="{$LANG.address.line1}" />
								</div>
								<div class="row-fluid">
									<input type="text" name="delivery[line2]" id="del_line2" class="input-fill" value="{$DELIVERY.line2}" placeholder="{$LANG.address.line2}" />
								</div>
								<div class="row-fluid">
									<div class="span6">
										<label for="del_town">{$LANG.address.town}</label>
										<input type="text" name="delivery[town]" id="del_town" class="input-fill" value="{$DELIVERY.town}" required placeholder="{$LANG.address.town}" />
									</div>
									<div class="span6">
										<label for="del_postcode">{$LANG.address.postcode}</label>
										<input type="text" name="delivery[postcode]" id="del_postcode" class="input-fill" value="{$DELIVERY.postcode}" required placeholder="{$LANG.address.postcode}" />
									</div>
								</div>
								<div class="row-fluid">
									<label for="delivery_country">{$LANG.address.country}</label>
									<select name="delivery[country]" id="delivery_country" class="input-fill chzn-select" rel="delivery_state" required>
										{foreach from=$COUNTRIES item=country}
											<option value="{$country.numcode}" {$country.selected_d}>{$country.name}</option>
										{/foreach}
									</select>
								</div>
								<div class="row-fluid">
									<label for="delivery_state">{$LANG.address.state}</label>
									<input type="text" name="delivery[state]" id="delivery_state" class="input-fill" value="{$DELIVERY.state}" placeholder="{$LANG.address.state}" />
								</div>
							</div>
						</div>
					</div><!-- /.cheeckout-section-delivery-address -->
				{/if}
				<div class="section cheeckout-section-create-account">
					<h3 class="section-title">
						{$LANG.account.create_account}
						<input type="checkbox" name="register" id="show-reg" value="1" {$REGISTER_CHECKED} data-section=".create-account" />
					</h3>
					<div class="create-account">
						<div class="content">
							<div class="row-fluid">
								<div class="span6">
									<label for="reg_password">{$LANG.user.password_new}</label>
									<input type="password" autocomplete="off" name="password" id="reg_password" value="" class="input-fill" required placeholder="{$LANG.user.password_new}" />
								</div>
								<div class="span6">
									<label for="reg_passconf">{$LANG.user.password_confirm}</label>
									<input type="password" autocomplete="off" name="passconf" id="reg_passconf" value="" class="input-fill" required placeholder="{$LANG.user.password_confirm}" />
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.cheeckout-section-create-account -->
				{if $RECAPTCHA || $TERMS_CONDITIONS}
					<div class="section cheeckout-section-extras">
						<div class="content">
							{include file='templates/content.recaptcha.php'}
							{if $TERMS_CONDITIONS}
								<div class="row-fluid form-inline">
									<label for="reg_terms"><a href="{$TERMS_CONDITIONS}" target="_blank">{$LANG.account.register_terms_agree}</a></label>
									<input type="checkbox" id="reg_terms" name="terms_agree" value="1" required /> 
								</div>
							{/if}
						</div>
					</div><!-- /.cheeckout-section-extras -->
				{/if}
			{/if}
		</div>
	</div>
	<div class="span5">
		{include file="skins/$SKIN_FOLDER/templates/element.checkout.basket.php"}
		<div class="basket-checkout">
			<button type="submit" name="proceed" class="btn btn-primary btn-large btn-checkout" value="{$CHECKOUT_BUTTON}">
				{foreach from=$BLOCKS item=block}
					{if $block.class == "next" && !isset($next)}
						{$next = $block.title}
						{$next}
					{/if}
				{/foreach}
			</button>

			{if $CHECKOUTS}
				<div class="checkout-alt">
					<div class="lang-or">-- {$LANG.common.or} --</div>
					{foreach from=$CHECKOUTS item=checkout}
						<span class="alternate-gateway">{$checkout}</span>
					{/foreach}
				</section>
			{/if}
		</div>
	</div>
</div>
<script type="text/javascript">
	var county_list = {$STATE_JSON};
</script>