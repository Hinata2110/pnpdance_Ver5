{if isset($GUI_MESSAGE)}
	<div id="gui-message">
		{if isset($GUI_MESSAGE.error)}
			<div class="alert alert-error">
				<a class="close" data-dismiss="alert">&times;</a>
				<h4 class="alert-heading">{$LANG.gui_message.errors_detected}</h4>
				<ul>
					{foreach from=$GUI_MESSAGE.error item=error}
						<li>{$error}</li>
					{/foreach}
				</ul>
			</div>
		{/if}

		{if isset($GUI_MESSAGE.notice)}
			{foreach from=$GUI_MESSAGE.notice item=notice}
				<div class="alert alert-info">
					<a class="close" data-dismiss="alert">&times;</a>
					{$notice}
				</div>
			{/foreach}
		{/if}
	</div>
{/if}