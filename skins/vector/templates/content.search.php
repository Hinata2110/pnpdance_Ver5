<div class="content-search">
	<form id="advanced-search" method="post" action="?_a=category" enctype="multipart/form-data" class="form-horizontal">
		<div class="search-fields">
			<div class="control-group">
				<label for="keywords" class="control-label">{$LANG.common.name}</label>
				<div class="controls">
					<input type="text" name="search[keywords]" class="input-fill" required placeholder="{$LANG.search.keywords}" id="keywords" />
				</div>
			</div>
			<div class="control-group">
				{$currency = $GLOBALS['tax']->_currency_vars}
				<label for="price-range-minimum" class="control-label">{$LANG.search.price_range}</label>
				<div class="controls">
					{strip}
						<span class="{if $currency.symbol_left}input-prepend{/if}{if $currency.symbol_right}input-append{/if}">
							{if $currency.symbol_left}<span class="add-on">{$currency.symbol_left}</span>{/if}
							<input type="number" name="search[priceMin]" id="price-range-minimum" class="input-mini" min="0" />
							{if $currency.symbol_right}<span class="add-on">{$currency.symbol_right}</span>{/if}
						</span>
					{/strip}
					-
					{strip}
						<span class="{if $currency.symbol_left}input-prepend{/if}{if $currency.symbol_right}input-append{/if}">
							{if $currency.symbol_left}<span class="add-on">{$currency.symbol_left}</span>{/if}
							<input type="number" name="search[priceMax]" id="price-range-maximum" class="input-mini" min="0" />
							{if $currency.symbol_right}<span class="add-on">{$currency.symbol_right}</span>{/if}
						</span>
					{/strip}
				</div>
			</div>
			{if isset($MANUFACTURERS)}
				<div class="control-group">
					<label for="manufacturer" class="control-label">{$LANG.catalogue.manufacturer}</label>
					<div class="controls">
						<select name="search[manufacturer][]" multiple="multiple" id="manufacturer" class="input-fill">
							<option value="">{$LANG.form.ignore}</option>
							{foreach from=$MANUFACTURERS item=manufacturer}
								<option value="{$manufacturer.id}" {$manufacturer.selected}>{$manufacturer.name}</option>
							{/foreach}
						</select>
					</div>
				</div>
			{/if}
			{if isset($SORTERS)}
				<div class="control-group">
					<label for="sort" class="control-label">{$LANG.form.sort_by}</label>
					<div class="controls">
						<select name="sort" id="sort" class="input-fill chzn-select">
							{foreach from=$SORTERS item=sort}
								<option value="{$sort.field}|{$sort.order}" {$sort.selected}>{$sort.name} ({$sort.direction})</option>
							{/foreach}
						</select>
					</div>
				</div>
			{/if}
			<div class="control-group">
				<label for="in-stock" class="control-label">{$LANG.search.in_stock}</label>
				<div class="controls">
					<input type="checkbox" name="search[inStock]" value="1" id="in-stock" />
				</div>
			</div>
			<!--
			<div class="control-group">
				<label for="featured-only" class="control-label">{$LANG.search.featured_only}</label>
				<div class="controls">
					<input type="checkbox" name="search[featured]" value="1" id="featured-only" />
				</div>
			</div>
			-->
		</div>
		<div class="form-actions">
			<a href="javascript:;" onclick="$('form#advanced-search').submit()" class="btn btn-primary"><i class="icon-search icon-white"></i> {$LANG.common.search}</a>
			<a href="javascript:window.history.back();" class="btn btn-danger search-cancel modal-close">{$LANG.common.cancel}</a>
		</div>
	</form>
</div>