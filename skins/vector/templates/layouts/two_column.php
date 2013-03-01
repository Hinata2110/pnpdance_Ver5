{include file="skins/$SKIN_FOLDER/templates/element.content_header.php"}

<div class="row-fluid">
	<div class="span4">
		<aside id="widget-sidebar-left" class="sidebar">
			{foreach from=$layout.regions.sidebar_left item=widget}
				{if file_exists("skins/{$SKIN_FOLDER}/templates/widgets/{$widget}.php")}
					{include file="skins/{$SKIN_FOLDER}/templates/widgets/{$widget}.php"}
				{else if file_exists("skins/{$SKIN_FOLDER}/templates/widgets/global/{$widget}.php")}
					{include file="skins/{$SKIN_FOLDER}/templates/widgets/global/{$widget}.php"}
				{else}
					{${$widget|upper}}
				{/if}
			{/foreach}
		</aside>
	</div>
	<div class="span8">
		<div id="widget-content">
			{include file="skins/{$SKIN_FOLDER}/templates/box.errors.php"}
			{$PAGE_CONTENT}
		</div>
	</div>
</div>