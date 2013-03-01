{**
 * COMMON GATEWAY PAYMENT FORM
 *
 * Used by the following gateways:
 * 	- Authorize
 *	- HSBC
 *	- Payjunction
 *	- psiGate
 *	- Card Capture
 *}

{if $EXPIRE_MONTHS && $EXPIRE_YEARS}
	{* Card Capture *}
	{assign var="expire_months" value=$EXPIRE_MONTHS}
	{assign var="expire_years" value=$EXPIRE_YEARS}
{elseif $CARD.expire.months && $CARD.expire.years}
	{* HSBC *}
	{assign var="expire_months" value=$CARD.expire.months}
	{assign var="expire_years" value=$CARD.expire.years}
{elseif $CARD.months && $CARD.years}
	{* Payjunction, psiGate and Authorize *}
	{assign var="expire_months" value=$CARD.months}
	{assign var="expire_years" value=$CARD.years}
{/if}

{if $START}
	{* Card Capture *}
	{assign var="start_months" value=$START.months}
	{assign var="start_years" value=$START.years}
{elseif $CARD.start.months && $CARD.start.years}
	{* HSBC *}
	{assign var="start_months" value=$CARD.start.months}
	{assign var="start_years" value=$CARD.start.years}
{/if}

{if $COUNTRY}
	{* Card Capture *}
	{assign var="countries_list" value=$COUNTRY}
{elseif $COUNTRIES}
	{* HSBC, Authorize, Payjunction and psiGate *}
	{assign var="countries_list" value=$COUNTRIES}
{/if}

<div class="row-fluid">
	<div class="span6">
		<label for="payment_first_name">{$LANG.user.name_first}</label>
		<input type="text" name="firstName" id="payment_first_name" value="{$CUSTOMER.first_name}" class="input-fill" required placeholder="{$LANG.user.name_first}" />
	</div>
	<div class="span6">
		<label for="payment_last_name">{$LANG.user.name_last}</label>
		<input type="text" name="lastName" id="payment_last_name" value="{$CUSTOMER.last_name}" class="input-fill" required placeholder="{$LANG.user.name_last}" />
	</div>
</div>
<div class="row-fluid">
	<div class="{if !isset($CVV.enabled) || $CVV.enabled != false}span5{else}span6{/if}">
		<label for="payment_card_number">{$LANG.gateway.card_number}</label>
		<input type="text" name="cardNumber" id="payment_card_number" value="" size="18" maxlength="18" class="input-fill" required placeholder="{$LANG.gateway.card_number}" />
	</div>
	<div class="{if !isset($CVV.enabled) || $CVV.enabled != false}span4{else}span6{/if}">
		<label for="payment_card_type">{$LANG.gateway.card_type}</label>
		<select name="cardType" id="payment_card_type" class="input-fill chzn-select" required>
			{if $CARDS}
				{foreach from=$CARDS item=card}
					<option value="{$card.value}" {$card.selected}>{$card.display}</option>
				{/foreach}
			{else}
				{* HSBC uses different values for card types *}
				<option value="1">Visa</option>
				<option value="2">MasterCard</option>
				{if $AMEX}
					<option value="8">American Express</option>
				{/if}
				<option value="10">Maestro / Switch</option>
				<option value="11">Visa Electron</option>
				<option value="9">Solo</option>
			{/if}
		</select>
	</div>
	{if !isset($CVV.enabled) || $CVV.enabled != false}
		<div class="span3 input-append">
			<label for="payment_card_security">{$LANG.gateway.card_security}</label>
			{strip}
				<input type="text" name="cvc2" id="payment_card_security" value="" size="5" maxlength="{$CVV.length}" class="input-fill" required />
				<span class="add-on">
					<a href="{$STORE_URL}/images/general/cvv.gif" class="lightbox" title="{$LANG.gateway.card_security}" /><i class="icon-question-sign"></i></a>
				</span>
			{/strip}
		</div>
	{/if}
</div>
<div class="row-fluid">
	<label for="payment_card_expiry_date">{$LANG.gateway.card_expiry_date}</label>
</div>
<div class="row-fluid">
	<div class="span6">
		<select name="expirationMonth" id="payment_card_expiry_date" class="input-fill chzn-select" required>
	    	{foreach from=$expire_months item=month}
				<option value="{$month.value}" {$month.selected}>{$month.display}</option>
			{/foreach}
	    </select>
	</div>
	<div class="span6">
		<select name="expirationYear" class="input-fill chzn-select" required>
			{foreach from=$expire_years item=year}
				<option value="{$year.value}" {$year.selected}>{$year.value}</option>
			{/foreach}
		</select>
	</div>
</div>
{if $start_months && $start_years}
	<div class="row-fluid">
		<div class="span8">
			<div class="row-fluid">
				<label for="payment_card_issue_date">{$LANG.gateway.card_issue_date}</label>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<select name="startMonth" id="payment_card_issue_date" class="input-fill chzn-select">
						{foreach from=$start_months item=month}
							<option value="{$month.value}" {$month.selected}>{$month.display}</option>
						{/foreach}
					</select>
				</div>
				<div class="span6">
					<select name="startYear" class="input-fill chzn-select">
						{foreach from=$start_years item=year}
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
				<input type="text" name="issue" id="payment_card_issue_no" value="{$CUSTOMER.issue}" size="3" maxlength="3" />
			</div>
		</div>
	</div>
{/if}
<div class="row-fluid">
	<label for="payment_email_address">{$LANG.common.email}</label>
	<input type="email" name="emailAddress" id="payment_email_address" value="{$CUSTOMER.email}" class="input-fill" required placeholder="{$LANG.common.email}" />
</div>
<div class="row-fluid">
	<label for="payment_address_line_1">{$LANG.address.line1}</label>
	<input type="text" name="addr1" id="payment_address_line_1" value="{if $CUSTOMER.add1}{$CUSTOMER.add1}{else}{$CUSTOMER.line1}{/if}" class="input-fill" required placeholder="{$LANG.address.line1}" />
	<input type="text" name="addr2" id="payment_address_line_2" value="{if $CUSTOMER.add2}{$CUSTOMER.add2}{else}{$CUSTOMER.line2}{/if}" class="input-fill" />
</div>
<div class="row-fluid">
	<div class="span6">
		<label for="payment_address_city">{$LANG.address.town}</label>
		<input type="text" name="city" id="payment_address_city" value="{if $CUSTOMER.city}{$CUSTOMER.city}{else}{$CUSTOMER.town}{/if}" class="input-fill" required placeholder="{$LANG.address.town}" />
	</div>
	<div class="span6">
		<label for="payment_address_postcode">{$LANG.address.postcode}</label>
		<input type="text" name="postcode" id="payment_address_postcode" value="{$CUSTOMER.postcode}" size="10" maxlength="10" class="input-fill" required placeholder="{$LANG.address.postcode}" />
	</div>
</div>
<div class="row-fluid">
	<div class="span6">
		<label for="country-list">{$LANG.address.country}</label>
		<select name="country" id="country-list" class="input-fill chzn-select" required>
			{foreach from=$countries_list item=country}
				<option value="{$country.iso}" data-numcode="{$country.numcode}" {$country.selected}>{$country.name}</option>
			{/foreach}
		</select>
	</div>
	<div class="span6">
		<label for="state-list">{$LANG.address.state}</label>
		<input type="text" name="state" id="state-list" value="{$CUSTOMER.state}" class="input-fill" required placeholder="{$LANG.address.state}" />
	</div>
</div>
<div class="row-fluid">
	<div class="span6">
		
	</div>
	<div class="span6">
		
	</div>
</div>
{if $VAL_JSON_STATE}
	<script>
		var county_list = {$VAL_JSON_STATE}
	</script>
{/if}