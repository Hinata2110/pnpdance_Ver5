{if isset($CTRL_VIEW) && $CTRL_VIEW}
	<div class="section section-newsletter">
		<h3 class="section-title">{$NEWSLETTER.subject}</h3>
		<div class="content">
			{$NEWSLETTER.content_html}
		</div>
	</div>
{else}
	<div class="section section-newsletters">
		<h3 class="section-title">{$LANG.newsletter.newsletters}</h3>
		<div class="content">
			{if isset($NEWSLETTERS)}
				<ul>
					{foreach from=$NEWSLETTERS item=newsletter}
				        <li><a href="{$newsletter.view}">{$newsletter.subject}</a></li>
					{/foreach}
				</ul>
			{else}
				<p>{$LANG.newsletter.no_archived_newsletters}</p>
			{/if}
		</div>
	</div>
	<div class="section section-subscription">
		<h3 class="section-title">{$LANG.newsletter.subscription}</h3>
		{if $IS_USER}
			<div class="content">
				{if $SUBSCRIBED}
					<p>{$LANG.newsletter.customer_is_subscribed}</p>
					<a href="{$URL.unsubscribe}" class="btn btn-small btn-danger">{$LANG.newsletter.click_to_unsubscribe}</a>
				{else}
					<p>{$LANG.newsletter.customer_not_subscribed}</p>
					<a href="{$URL.subscribe}" class="btn btn-small btn-primary">{$LANG.newsletter.click_to_subscribe}</a>
				{/if}
			</div>
		{else}
			<form action="{$VAL_SELF}" method="post" enctype="multipart/form-data">
				<div class="content">
					<label for="newsletter-email">{$LANG.newsletter.enter_email_subscribe_unsubscribe}</label>
					<input type="email" name="subscribe" id="newsletter-email" title="{$LANG.common.email_example}" required placeholder="{$LANG.user.email_address}" />						
				</div>
				<div class="form-actions">
					<input name="submit" class="btn btn-primary" type="submit" value="{$LANG.newsletter.subscribe}" />
				</div>
			</form>
		{/if}
	</div>
{/if}