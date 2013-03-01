<div class="box box-navgation box-categories">
	<div class="wrapper">
		<h3 class="box-title">{$LANG.navigation.title}</h3>
		<div class="content">
			<nav>
				<ul class="nav nav-list">
					<li><a href="{$STORE_URL}/index.php" title="{$LANG.common.home}">{$LANG.common.home}</a></li>

					{$NAVIGATION_TREE}
		
					{if $CTRL_CERTIFICATES && !$CATALOGUE_MODE}
						<li><a href="{$URL.certificates}" title="{$LANG.navigation.giftcerts}">{$LANG.navigation.giftcerts}</a></li>
					{/if}
					
					{if $CTRL_SALE}
						<li><a href="{$URL.saleitems}" title="{$LANG.navigation.saleitems}">{$LANG.navigation.saleitems}</a></li>
					{/if}
				</ul>
			</nav>
		</div><!-- /.content -->
	</div><!-- /.wrapper -->
</div><!-- /.box -->