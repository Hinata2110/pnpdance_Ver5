{if isset($BLOCKS)}
	<nav class="checkout-progress">
		<ul class="nav nav-pills">
			{foreach from=$BLOCKS item=block}
				<li class="{if $block.class == 'current'}active{else}{$block.class}{/if}">
					<a href="{$block.url}"><span class="number">{$block.step}</span> {$block.title}</a>
				</li>
			{/foreach}
		</ul>
	</nav>
{/if}