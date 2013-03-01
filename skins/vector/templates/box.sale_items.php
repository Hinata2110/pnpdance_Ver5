{if isset($PRODUCTS) && count($PRODUCTS) > 0}
	<div class="box box-sale">
		<div class="wrapper">
			<h3 class="box-title">{$LANG.catalogue.title_saleitems}</h3>
			<div class="content">
				<nav>
					<ul class="product-list">
				  		{foreach from=$PRODUCTS item=product}
							{include file="skins/$SKIN_FOLDER/templates/element.product_listing.php" actions=true}
						{/foreach}
					</ul>
				</nav>
			</div><!-- /.content -->
		</div><!-- /.wrapper -->
	</div><!-- /.box -->
{/if}