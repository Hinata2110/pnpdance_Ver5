{if $IS_USER}
	<div class="section section-downloads">
		<table class="table table-striped table-downloads">
			<thead>
				<tr>
					<th>{$LANG.common.product}</th>
					<th>{$LANG.account.download_expires}</th>
					<th>{$LANG.account.download_count}</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{if $DOWNLOADS}
					{foreach from=$DOWNLOADS item=download}
						{if !$download.deleted} {* What's the purpose of displaying a deleted download? *}
							<tr>
								<td>
									<a href="{$download.product_url}" title="{$LANG.catalogue.view_product}">{$download.name}</a>
								</td>
								{if $download.deleted}
									<td class="expired deleted">{$download.expires}</td>
									<td class="count deleted">{$download.downloads} / {$MAX_DOWNLOADS}</td>
									<td class="download deleted">{$LANG.account.download_deleted}</td>
								{elseif $download.active}
									<td class="expired active">{$download.expires}</td>
									<td class="count active">{$download.downloads} / {$MAX_DOWNLOADS}</td>
									<td class="download active">
										<a href="{$STORE_URL}/index.php?_a=download&amp;accesskey={$download.accesskey}" class="btn btn-small btn-primary" title="{$LANG.common.download}">{$LANG.common.download}</a>
									</td>
								{else}
									<td class="expired expired">{$download.expires}</td>
									<td class="count expired">{$download.downloads} / {$MAX_DOWNLOADS}</td>
									<td class="download expired">{$LANG.common.expired}</td>
								{/if}
							</tr>
						{/if}
					{/foreach}
				{else}
					<tr>
						<td class="no-downloads" colspan="4">{$LANG.notification.no_downloads_available}</td>
					</tr>
				{/if}
			</tbody>
			{if $PAGINATION}
				<tfoot>
					<tr>
						<td colspan="4">{$PAGINATION}</td>
					</tr>
				</tfoot>
			{/if}
		</table>
	</div>
{/if}