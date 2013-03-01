<div class="regional-currency">
	<form id="currency_select" action="{$VAL_SELF}" method="get" class="input-prepend">
		{strip}
			<span class="add-on">
				{foreach from=$CURRENCIES item=currency}
					{if $currency.selected}{$currency.symbol_left}{/if}
				{foreachelse}
					{$currency.symbol_right}
				{/foreach}
			</span>
			<select name="set_currency" id="currency" class="input-fill chzn-select" onchange="this.form.submit();">
				{foreach from=$CURRENCIES item=currency}
					<option value="{$currency.code}" {$currency.selected}>{$currency.name}</option>
				{/foreach}
			</select>
		{/strip}
	</form>
</div>