<div class="regional-language">
	<form id="language_select" action="{$VAL_SELF}" method="get" class="input-prepend">
		{strip}
			<span class="add-on">
				{foreach from=$LANGUAGES item=language}
					{if $language.selected}
						<img src="{$STORE_URL}/language/flags/{$language.code}.png" alt="" />
					{/if}
				{/foreach}
			</span>
			<select name="set_language" id="language" class="input-fill chzn-select" onchange="this.form.submit();">
				{foreach from=$LANGUAGES item=language}
					<option value="{$language.code}" {$language.selected} data-code="{$language.code}" data-image="{$STORE_URL}/language/flags/{$language.code}.png">{$language.title}</option>
				{/foreach}
			</select>
		{/strip}
	</form>
</div>