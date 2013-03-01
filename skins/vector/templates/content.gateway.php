{if isset($GATEWAYS)}
	<form id="gateway-select" action="{$VAL_SELF}" method="post" enctype="multipart/form-data">
		<div class="section">
			<h3 class="section-title">{$LANG.gateway.select}</h3>
			<div class="content">
				{foreach from=$GATEWAYS item=gateway}
					<p class="form-inline">
				
						<input name="gateway" type="radio" value="{$gateway.folder}" id="{$gateway.folder}" {$gateway.checked} />
						<label for="{$gateway.folder}">{$gateway.description}</label>
						{if !empty($gateway.help)}
							<a href="{$gateway.help}" class="label label-info" title="{$LANG.common.information}"><i class="icon-info-sign icon-white"></i></a>
						{/if}
					</p>
				{/foreach}
			</div>
			<div class="form-actions">
				<button type="submit" value="{$LANG.common.continue}" class="btn btn-primary btn-large">{$LANG.common.continue}</button>
			</div>
		</fieldset>
	</form>
{/if}

{if isset($TRANSFER)}
	{if $TRANSFER.mode == "iframe"}
		<iframe src="{$IFRAME_SRC}" frameborder="0" scrolling="auto" width="100%" height="500" />
		{$IFRAME_FORM}
	{else}
		<form name="gateway" id="gateway-transfer" action="{$TRANSFER.action}" method="{$TRANSFER.method}" target="{$TRANSFER.target}">
			{foreach from=$FORM_VARS key=name item=value}
				<input type="hidden" name="{$name}" value="{$value}" />
			{/foreach}
			{if $TRANSFER.mode == "automatic"}
				<div class="hero-unit">
				    <p>{$LANG.gateway.transferring}</p>
				    <p><input type="submit" value="{$BTN_PROCEED}" class="btn btn-primary btn-large" /></p>
			    </div>
			<script>
				head.ready(function() {
					$('form[name=gateway]').submit();
				});
			</script>
			{elseif $TRANSFER.mode == 'manual'}
				<div class="section">
					<h3 class="section-title">{$LANG_AMOUNT_DUE}</h3>
					<div class="content">
						{$FORM_TEMPLATE}
					</div>
					<div class="form-actions">
						<input type="submit" value="{$BTN_PROCEED}" class="btn btn-primary btn-large" />
					</div>
				</div>
			{/if}
			{foreach from=$AFFILIATES item=affiliate}
				{$affiliate}
			{/foreach}
		{/if}
	</form>
{/if}