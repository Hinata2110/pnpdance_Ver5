<ul class="pagination">
	{if ($page >= $show-1)}
		{$params[$var_name] = 1}
		<li><a href="{$current}{http_build_query($params)}{$anchor}" class="first" data-page="1" rel="first">1</a></li>
		<li class="disabled"><a href="#">&hellip;</a></li>
	{/if}

	{for $i = 1; $i <= $total; $i++}
		{if ($i < $page - floor($show / 2))}
			{continue}
		{/if}

		{if ($i > $page + floor($show / 2))}
			{break}
		{/if}

		{$params[$var_name] = $i}
		{if ($i == $page)}
			<li class="active"><a href="{$current}{http_build_query($params)}{$anchor}">{$i}</a></li>
		{else}
			<li><a href="{$current}{http_build_query($params)}{$anchor}" data-page="{$i}">{$i}</a></li>
		{/if}
	{/for}

	{if ($i <= $total)}
		{$params[$var_name] = $total}
		<li class="disabled"><a href="#">&hellip;</a></li>
		<li><a href="{$current}{http_build_query($params)}{$anchor}" class="last" data-page="{$total}" rel="last">{$total}</a></li>
	{/if}

	{if ($view_all)}
		{if (strtolower($page) != 'all')}
			{$params[$var_name] = 'all'}
			<li><a href="{$current}{http_build_query($params)}{$anchor}" class="view-all" rel="all">{$LANG.common.view_all}</a></li>
		{else}
			<li class="active"><a href="{$current}{http_build_query($params)}{$anchor}" class="view-all" rel="all">{$LANG.common.view_all}</a></li>
		{/if}
	{/if}
</ul>