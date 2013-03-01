{$class = ($BRANCH.cat_id == $category.cat_id) ? "active" : ""}
<li class="{if isset($BRANCH.children)}node{/if} {$class}">
	<a href="{$BRANCH.url}" title="{$BRANCH.name}">{$BRANCH.name}</a>
	{if isset($BRANCH.children)}
		<ul>
			<li><a href="{$BRANCH.url}" title="{$BRANCH.name}">{$BRANCH.name}</a></li>
			{$BRANCH.children}
		</ul>
	{/if}
</li>