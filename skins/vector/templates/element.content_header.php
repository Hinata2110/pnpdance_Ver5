<header class="content-header">
	<div class="row-fluid">
		<div class="{if $SECTION_NAME == 'checkout' || $SECTION_NAME == 'gateway'}span6{else}span8{/if}">
			{if $category.image}
				<div class="content-image">
					<img src="{$category.image}" alt="" />
				</div>
			{/if}
			<div class="content-details">
				<h1 class="content-title">
					{if $title}
						{$title}
					{else if $SECTION_NAME == "category"}
						{$category.cat_name}
					{else if $SECTION_NAME == "document"}
						{$DOCUMENT.doc_name}
					{else if $SECTION_NAME == "product"}
						{$PRODUCT.name}
					{else if $SECTION_NAME == "register" || $SECTION_NAME == "login"}
						{$LANG.account.log_in} / {$LANG.account.register}
					{else if $SECTION_NAME == "recover" || $SECTION_NAME == "recovery"}
						{$LANG.account.recover_password}
					{else if $SECTION_NAME == "search"}
						{$LANG.search.advanced}
					{else if $SECTION_NAME == "giftcertificate"}
						{$LANG.catalogue.gift_certificates}
					{else if $SECTION_NAME == "contact"}
						{$LANG.documents.document_contact}
					{else if $SECTION_NAME == "account"}
						{$LANG.account.your_account}
					{else if $SECTION_NAME == "download"}
						{$LANG.account.your_downloads}
					{else if $SECTION_NAME == "order"}
						{if $IS_USER}
							{$LANG.account.your_orders}
						{else}
							{$LANG.account.lookup_order}
						{/if}
					{else if $SECTION_NAME == "checkout"}
						{if $smarty.get._a == "basket"}
							{$LANG.checkout.your_basket}
						{else}
							{$LANG.checkout.checkout}
						{/if}
					{else if $SECTION_NAME == "gateway"}
						{$LANG.gateway.select}
					{/if}
				</h1>
				{include file="skins/$SKIN_FOLDER/templates/element.breadcrumbs.php" scope=parent}
			</div>
		</div>
		{if $SECTION_NAME == "checkout" || $SECTION_NAME == "gateway"}
			<div class="span6">
				{include file="skins/$SKIN_FOLDER/templates/box.progress.php"}
			</div>
		{else}
			<div class="span4">
				<div class="search">
					<form action="{$ROOT_PATH}index.php?_a=category" method="post" class="input-append">
						{strip}
							<input name="search[keywords]" type="search" class="input-fill" placeholder="{$LANG.search.input_default}" />
							<button class="btn" type="button" title="{$LANG.search.title_search_products}" onclick="$(this).getForm().submit()">{$LANG.common.search}</button>
							<button class="btn advanced-search" data-modal-name="advanced-search" data-modal-url="{$ROOT_PATH}index.php?_a=search" data-modal-body=".content-search form" type="button" title="{$LANG.search.advanced}"><span class="caret"></span></button>
						{/strip}
					</form>
				</div>
			</div>
		{/if}
	</div>
</header>
{if isset($SUBCATS) && $SUBCATS}
	<div class="row-fluid">
		<nav class="category-subcats">
			<ul class="nav nav-pills">
				{foreach from=$SUBCATS item=subcat}
					<li><a href="{$subcat.url}" title="{$subcat.cat_name}">{$subcat.cat_name}</a></li>
				{/foreach}
			</ul>
		</nav>
	</div>
{/if}