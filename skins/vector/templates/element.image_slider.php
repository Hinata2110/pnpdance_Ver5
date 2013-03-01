{if isset($fusion)}
	{$slides = $fusion->get("image_slider_{$SECTION_NAME}")}
	{if empty($slides)} {$slides = $fusion->get("image_slider_global")} {/if}

	{if (is_array($slides) && !empty($slides))}	
		<div class="flexslider-container">
			<div class="flexslider">
				<ul class="slides">
					{foreach from=$slides item=slide}
						<li style="{if $slide.background_color}background-color: {$slide.background_color};{/if} {if $slide.background_image}background-image: url({$STORE_URL}/skins/{$SKIN_FOLDER}/images/backgrounds/{$slide.background_image});{/if}">
							{if $slide.url}<a href="{$slide.url}">{/if}
								<img src="{$slide.image}" alt="" />
							{if $slide.url}</a>{/if}
						</li>
					{/foreach}
				</ul>
			</div>
		</div>
	{/if}
{/if}