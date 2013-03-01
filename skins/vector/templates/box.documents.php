<div class="box box-navgation box-documents">
	<div class="wrapper">
		<h3 class="box-title">{$LANG.common.information}</h3>
		<div class="content">
			<nav>
				<ul class="nav nav-list">
					<li><a href="{$STORE_URL}/index.php" title="{$LANG.common.home}">{$LANG.common.home}</a></li>
					{if isset($DOCUMENTS) && count($DOCUMENTS) > 0}
					  	{foreach from=$DOCUMENTS item=document}
							<li><a href="{$document.doc_url}" title="{$document.doc_name}" {if $document.doc_url_openin}target="_blank"{/if}>{$document.doc_name}</a></li>
						{/foreach}
					{/if}
					{if isset($CONTACT_URL)}
						<li><a href="{$CONTACT_URL}" title="{$LANG.documents.document_contact}">{$LANG.documents.document_contact}</a></li>
					{/if}
				</ul>
			</nav>
		</div><!-- /.content -->
	</div><!-- /.wrapper -->
</div><!-- /.box -->