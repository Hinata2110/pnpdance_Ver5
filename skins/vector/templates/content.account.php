<div class="section">
	<h3 class="section-title">{$LANG.settings.title_welcome_back}</h3>
	<nav class="account-nav">
		<ul>
			<li>
				<a href="{$STORE_URL}/index.php?_a=profile" title="{$LANG.account.your_details}">
					<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/img/pencil.png" alt="{$LANG.account.your_details}" width="48" height="48" />
					<span class="wrapper">
						<span class="title">{$LANG.account.your_details}</span>
					</span>
				</a>
			</li>
			<li>
				<a href="{$STORE_URL}/index.php?_a=addressbook" title="{$LANG.account.your_addressbook}">
					<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/img/address_book.png" alt="{$LANG.account.your_addressbook}" width="48" height="48" />
					<span class="wrapper">
						<span class="title">{$LANG.account.your_addressbook}</span>
					</span>
				</a>
			</li>
			<li>
				<a href="{$STORE_URL}/index.php?_a=vieworder" title="{$LANG.account.your_orders}">
					<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/img/shopping_bag.png" alt="{$LANG.account.your_orders}" width="48" height="48" />
					<span class="wrapper">
						<span class="title">{$LANG.account.your_orders}</span>
					</span>
				</a>
			</li>
			<li>
				<a href="{$STORE_URL}/index.php?_a=downloads" title="{$LANG.account.your_downloads}">
					<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/img/download_crate.png" alt="{$LANG.account.your_downloads}" width="48" height="48" />
					<span class="wrapper">
						<span class="title">{$LANG.account.your_downloads}</span>
					</span>
				</a>
			</li>
			<li>
				<a href="{$STORE_URL}/index.php?_a=newsletter" title="{$LANG.account.your_subscription}">
					<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/img/email.png" alt="{$LANG.account.your_subscription}" width="48" height="48" />
					<span class="wrapper">
						<span class="title">{$LANG.account.your_subscription}</span>
					</span>
				</a>
			</li>
			{foreach from=$ACCOUNT_LIST_HOOKS item=list_item}
				<li>
					<a href="{$list_item.href}" title="{$list_item.title}">
						<img src="{if $list_item.icon}{$list_item.icon}{else}{$STORE_URL}/skins/{$SKIN_FOLDER}/img/right.png{/if}" alt="{$list_item.title}" />
						<span class="wrapper">
							<span class="title">{$list_item.title}</span>
						</span>
					</a>
				</li>
			{/foreach}
		</ul>
	</nav>
</div>