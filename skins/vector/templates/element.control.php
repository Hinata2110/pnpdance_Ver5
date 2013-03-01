{if isset($PRODUCTS) && count($PRODUCTS) >= 1}
	<div class="products-control">
		<form name="sort" action="{$VAL_SELF}" method="post" class="form-inline">
			{if isset($SORTING)}
				<label for="products-sort">{$LANG.form.sort_by}: </label>
				<select id="products-sort" name="sort" onchange="$(this).getForm().submit()" title="{$LANG.form.sort}" class="chzn-select products-sort">
					<option value="">{$LANG.form.please_select}</option>
					{foreach from=$SORTING item=sort}
						<option value="{$sort.field}|{$sort.order}" {$sort.selected}>{$sort.name} ({$sort.direction})</option>
					{/foreach}
				</select>
			{/if}
		</form>
	</div>
{/if}