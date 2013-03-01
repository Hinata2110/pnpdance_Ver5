{if isset($fusion)}
	{$slides = $fusion->get("tagline_slider_{$SECTION_NAME}")}
	{if empty($slides)} {$slides = $fusion->get("tagline_slider_global")} {/if}

	{if (is_array($slides) && !empty($slides))}
		<ul class="tagline-slider">
			{foreach from=$slides item=slide}
				<li>{$slide}</li>
			{/foreach}
		</ul>
	{else}
		&nbsp;
	{/if}
{/if}