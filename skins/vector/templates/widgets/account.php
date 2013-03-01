<div class="box box-account">
	<div class="wrapper">
		<h3 class="box-title">{$LANG.account.your_account}</h3>
		<div class="content">
			<nav>
				<ul class="nav nav-list">
					<li><a href="{$STORE_URL}/index.php?_a=profile" title="{$LANG.account.your_details}">{$LANG.account.your_details}</a></li>
					<li><a href="{$STORE_URL}/index.php?_a=addressbook" title="{$LANG.account.your_addressbook}">{$LANG.account.your_addressbook}</a></li>
					<li><a href="{$STORE_URL}/index.php?_a=vieworder" title="{$LANG.account.your_orders}">{$LANG.account.your_orders}</a></li>
					<li><a href="{$STORE_URL}/index.php?_a=downloads" title="{$LANG.account.your_downloads}">{$LANG.account.your_downloads}</a></li>
					<li><a href="{$STORE_URL}/index.php?_a=newsletter" title="{$LANG.account.your_subscription}">{$LANG.account.your_subscription}</a></li>
					{foreach from=$ACCOUNT_LIST_HOOKS item=list_item}
						<li><a href="{$list_item.href}" title="{$list_item.title}">{$list_item.title}</a></li>
					{/foreach}
				</ul>
			</nav>
		</div><!-- /.content -->
	</div><!-- /.wrapper -->
</div><!-- /.box -->