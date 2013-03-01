<nav class="box box-search">
	<div class="wrapper">
		<h3 class="box-title">{$LANG.search.title_search_products}</h3>
		<div class="content">
			<form action="{$ROOT_PATH}index.php?_a=category" method="post" class="input-append">
				{strip}
					<input name="search[keywords]" type="text" class="input-fill" placeholder="{$LANG.search.input_default}" />
					<button class="btn" type="button" title="{$LANG.search.title_search_products}" onclick="$(this).getForm().submit()"><span class="icon-search"></span></button>
				{/strip}
			</form>
		</div>
	</div>
</nav>