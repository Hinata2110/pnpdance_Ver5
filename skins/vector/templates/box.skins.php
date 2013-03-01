<div class="box box-skins">
	<form action="{$VAL_SELF}" method="post" id="skin_selector">
		<div class="wrapper">
			<div class="content">
				<select name="select_skin" class="input-fill chzn-select" onchange="$(this).getForm().submit()">
					{foreach from=$SKINS item=skin}
						{if isset($skin.styles)}
							<optgroup label="{$skin.display}">
								{foreach from=$skin.styles item=style}
									<option value="{$skin.name}|{$style.directory}" {$style.selected}>{$style.name}</option>
								{/foreach}
							</optgroup>
						{else}
							<option value="{$skin.name}" {$skin.selected}>{$skin.display}</option>
						{/if}
					{/foreach}
				</select>
			</div>
		</div>
	</form>
</div>