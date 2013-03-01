{if $DISPLAY_3DS}
	<div class="row-fluid">
		<div id="3dsecure">
			<iframe width="100%" height="400" scrolling="auto" src="{$STORE_URL}/modules/plugins/PayPal_Pro/3dsecure.php"></iframe>
		</div>
	</div>
{else}
	<div class="row-fluid">
		<div class="span6">
			<label for="payment_first_name">{$LANG.user.name_first}</label>
			<input type="text" name="direct[first_name]" id="payment_first_name" value="{$CUSTOMER.first_name}" class="input-fill" required placeholder="{$LANG.user.name_first}" />
		</div>
		<div class="span6">
			<label for="payment_last_name">{$LANG.user.name_last}</label>
			<input type="text" name="direct[last_name]" id="payment_last_name" value="{$CUSTOMER.last_name}" class="input-fill" required placeholder="{$LANG.user.name_last}" />
		</div>
	</div>
	<div class="row-fluid">
		<div class="span5">
			<label for="payment_card_number">{$LANG.gateway.card_number}</label>
			<input type="text" name="direct[card_number]" id="payment_card_number" value="{$CUSTOMER.card_number}" size="18" maxlength="18" class="input-fill" required placeholder="{$LANG.gateway.card_number}" />
		</div>
		<div class="span4">
			<label for="payment_card_type">{$LANG.gateway.card_type}</label>
			<select name="direct[card_type]" id="payment_card_type" class="input-fill chzn-select" required>
				{foreach from=$CARD.types item=card}
					<option value="{$card.type}" {$card.selected}>{$card.name}</option>
				{/foreach}
			</select>
		</div>
		<div class="span3 input-append">
			<label for="payment_card_security">{$LANG.gateway.card_security}</label>
			{strip}
				<input type="text" name="direct[cvv2]" id="payment_card_security" value="" size="4" maxlength="4" class="input-fill" required />
				<span class="add-on">
					<a href="{$STORE_URL}/images/general/cvv.gif" class="lightbox" title="{$LANG.gateway.card_security}" /><i class="icon-question-sign"></i></a>
				</span>
			{/strip}
		</div>
	</div>
	<div class="row-fluid">
		<div class="row-fluid">
			<label for="payment_card_expiry_date">{$LANG.gateway.card_expiry_date}</label>
		</div>
		<div class="row-fluid">
			<div class="span6">
				<select name="direct[exp_month]" id="payment_card_expiry_date" class="input-fill chzn-select" required>
			    	{foreach from=$CARD.expire.months item=month}
						<option value="{$month.value}" {$month.selected}>{$month.display}</option>
					{/foreach}
			    </select>
			</div>
			<div class="span6">
				<select name="direct[exp_year]" class="input-fill chzn-select" required>
					{foreach from=$CARD.expire.years item=year}
						<option value="{$year.value}" {$year.selected}>{$year.value}</option>
					{/foreach}
				</select>
			</div>
		</div>
	</div>
	{if $CARD.display_issue}
		<div class="row-fluid">
			<div class="span8">
				<div class="row-fluid">
					<label for="payment_card_issue_date">{$LANG.gateway.card_issue_date}</label>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<select name="direct[issue_month]" id="payment_card_issue_date" class="input-fill chzn-select">
							{foreach from=$CARD.issue.months item=month}
								<option value="{$month.value}" {$month.selected}>{$month.display}</option>
							{/foreach}
						</select>
					</div>
					<div class="span6">
						<select name="direct[issue_year]" class="input-fill chzn-select">
							{foreach from=$CARD.issue.years item=year}
								<option value="{$year.value}" {$year.selected}>{$year.value}</option>
							{/foreach}
						</select>
					</div>
				</div>
			</div>
			<div class="span1">
				<label>&nbsp;</label>
				<div class="center">- {$LANG.common.or} -</div>
			</div>
			<div class="span3">
				<div class="row-fluid">
					<label for="payment_card_issue_no">{$LANG.gateway.card_issue_no}</label>
					<input type="text" name="direct[issue_no]" id="payment_card_issue_no" class="input-fill" value="{$CUSTOMER.issue}" size="2" maxlength="2" placeholder="{$LANG.gateway.card_issue_no}" />
				</div>
			</div>
		</div>
	{/if}
	<div class="row-fluid">
		<label for="payment_email_address">{$LANG.common.email}</label>
		<input type="email" name="direct[email]" id="payment_email_address" value="{$CUSTOMER.email}" class="input-fill" required placeholder="{$LANG.common.email}" />
	</div>
	<div class="row-fluid">
		<label for="payment_card_phone">{$LANG.address.phone}</label>
		<input type="text" name="direct[phone]" id="payment_card_phone" value="{$CUSTOMER.phone}" class="input-fill" placeholder="{$LANG.address.phone}" />
	</div>
	<div class="row-fluid">
		<label for="payment_address_line_1">{$LANG.address.line1}</label>
		<input type="text" name="direct[line1]" id="payment_address_line_1" value="{if $CUSTOMER.add1}{$CUSTOMER.add1}{else}{$CUSTOMER.line1}{/if}" class="input-fill" required placeholder="{$LANG.address.line1}" />
		<input type="text" name="direct[line2]" id="payment_address_line_2" value="{if $CUSTOMER.add2}{$CUSTOMER.add2}{else}{$CUSTOMER.line2}{/if}" class="input-fill" />
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label for="payment_address_city">{$LANG.address.town}</label>
			<input type="text" name="direct[town]" id="payment_address_city" value="{if $CUSTOMER.city}{$CUSTOMER.city}{else}{$CUSTOMER.town}{/if}" class="input-fill" required placeholder="{$LANG.address.town}" />
		</div>
		<div class="span6">
			<label for="payment_address_postcode">{$LANG.address.postcode}</label>
			<input type="text" name="direct[postcode]" id="payment_address_postcode" value="{$CUSTOMER.postcode}" maxlength="10" class="input-fill" required placeholder="{$LANG.address.postcode}" />
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label for="country-list">{$LANG.address.country}</label>
			<select name="direct[country_id]" id="country-list" class="input-fill chzn-select" required>
				{foreach from=$COUNTRIES item=country}
					<option value="{$country.numcode}" {$country.selected}>{$country.name}</option>
				{/foreach}
			</select>
		</div>
		<div class="span6">
			<label for="state-list">{$LANG.address.state}</label>
			<input type="text" name="direct[state_id]" id="state-list" value="{$CUSTOMER.state_id}" class="input-fill" required placeholder="{$LANG.address.state}" />
		</div>
	</div>
	<script type="text/javascript">
		var county_list = {$VAL_JSON_STATE}
	</script>
{/if}