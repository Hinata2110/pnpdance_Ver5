<div class="box box-session">
	<div class="wrapper">
		<h3 class="box-title">{$LANG.account.your_account}</h3>
		<div class="content">
			<nav>
				<ul class="nav nav-list">
					{if $IS_USER}
						<li><a href="{$STORE_URL}/index.php?_a=profile" title="{$LANG.account.your_account}"><i class="icon-user"></i> {$LANG.account.your_account}</a></li>
						<li><a href="{$STORE_URL}/index.php?_a=vieworder" title="{$LANG.account.your_orders}"><i class="icon-book"></i> {$LANG.account.your_orders}</a></li>
						<li><a href="{$STORE_URL}/index.php?_a=logout" title="{$LANG.account.logout}"><i class="icon-off"></i> {$LANG.account.logout}</a></li>
					{else}
						<li><a href="{$URL.register}" title="{$LANG.account.log_in} / {$LANG.account.register}"><i class="icon-user"></i> {$LANG.account.log_in} / {$LANG.account.register}</a></li>
						<li><a href="{$STORE_URL}/index.php?_a=vieworder" title="{$LANG.account.lookup_order}"><i class="icon-road"></i> {$LANG.account.lookup_order}</a></li>
					{/if}
				</ul>
			</nav>
		</div><!-- /.content -->
	</div><!-- /.wrapper -->
</div><!-- /.box -->