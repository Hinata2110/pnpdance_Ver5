<div class="hreview">
	<div class="rating">$review.rating</div>
	<div class="stars">
		{for $i=1; $i<=5; $i++}
	        {if $i <= $review.rating}
				<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/img/star-on.png" alt="" />
	        {else}
	        	<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/img/star-off.png" alt="" />
	        {/if}
		{/for}
	</div>
	<h4 class="summary">{$review.title}</h4>
	<p class="details">
		<span class="reviewer">{$review.name}</span> - <abbr title="{date('Y-m-d\TH:i:s\Z',strtotime($review.date))}" class="dtreviewed">{$review.date}</abbr>
	</p>
	<p class="description">{$review.review}</p>
</div>