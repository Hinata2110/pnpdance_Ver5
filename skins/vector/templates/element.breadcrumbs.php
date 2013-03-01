{if !isset($CRUMBS)}{$CRUMBS = $GLOBALS['gui']->getBreadcrumbs()}{/if}
{if isset($fusion) && count($CRUMBS) >= 1}
	{if in_array($SECTION_NAME, $fusion->get("breadcrumbs")) || ($SECTION_NAME == "" && in_array("default", $fusion->get("breadcrumbs")))}
		<nav>
			<ul class="breadcrumbs">
				<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
					<a href="{$STORE_URL}/index.php" itemprop="url">
						<span itemprop="title">{$LANG.common.home}</span>
					</a>
				</li>
				{foreach from=$CRUMBS item=crumb name="crumbs"}
					<li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="{if $smarty.foreach.crumbs.last}active{/if}">
						<span class="divider">{$GLOBALS['config']->get('config', 'default_directory_symbol')}</span>
						{if !$smarty.foreach.crumbs.last}<a href="{$crumb.url}" itemprop="url">{/if}
							<span itemprop="title">{$crumb.title}</span>
						{if !$smarty.foreach.crumbs.last}</a>{/if}
					</li>
				{/foreach}
			</ul>
		</nav>
	{/if}
{/if}