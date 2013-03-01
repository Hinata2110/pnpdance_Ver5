<div class="content content-typography">
	{$DOCUMENT.doc_content}
</div>
{if $COMMENTS}
	<div class="document-comments">
		<div class="wrapper">
			{foreach from=$COMMENTS item=html}
				<div class="comments-plugin">
					{$html}
				</div>
			{/foreach}
		</div>
	</section>
{/if}