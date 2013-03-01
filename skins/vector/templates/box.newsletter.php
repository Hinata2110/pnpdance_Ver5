<div class="box box-mailinglist">
	<div class="wrapper">
		<h3 class="box-title">{$LANG.newsletter.mailing_list}</h3>
		<div class="content">
			{if $IS_USER}
				{if ($CTRL_SUBSCRIBED)}
					<p>{$LANG.newsletter.customer_is_subscribed}</p>
					<a href="{$STORE_URL}/index.php?_a=newsletter&amp;action=unsubscribe" class="btn" title="{$LANG.newsletter.click_to_unsubscribe}">{$LANG.newsletter.click_to_unsubscribe}</a>
				{else}
					<p>{$LANG.newsletter.customer_not_subscribed}</p>
					<a href="{$STORE_URL}/index.php?_a=newsletter&amp;action=subscribe" class="btn" title="{$LANG.newsletter.click_to_subscribe}">{$LANG.newsletter.subscribe_now}</a>
				{/if}
			{else}
				<p class="help-block">{$LANG.newsletter.enter_email_signup}</p>
				<form action="{$VAL_SELF}" method="post" class="input-append">
					{strip}
						<input name="subscribe" id="subscribe" type="email" class="input-fill" placeholder="{$LANG.user.email_address}" required maxlength="250" title="{$LANG.user.email_address}"/>
						<button type="button" class="btn" onclick="$(this).getForm().submit()" title="{$LANG.newsletter.subscribe}"><i class="icon-envelope"></i></button>
					{/strip}
				</form>
			{/if}
		</div>
	</div>
</div>