{if $RECAPTCHA}
	<script type="text/javascript">
		{literal}
			var RecaptchaOptions = {
				theme: 'custom',
				custom_theme_widget: 'recaptcha_widget'
			};
		{/literal}
	</script>
	<div class="row-fluid">
		<div id="recaptcha">
			<label for="recaptcha_response_field">{$LANG.form.verify_human}</label>
			<div id="recaptcha_widget">
				<div id="recaptcha_image"></div>
				<div class="input-append">
					{strip}
						<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" class="input-fill" />
						<button type="button" onclick="Recaptcha.reload()" class="btn"><i class="icon-refresh"></i></button>
					{/strip}
				</div>
			</div><!-- /#recaptcha_widget -->
			<script src="//www.google.com/recaptcha/api/challenge?k={$captcha_public}"></script>
			<noscript>
				<iframe src="//www.google.com/recaptcha/api/noscript?k={$captcha_public}" height="300" width="500" frameborder="0"></iframe><br>
				<textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
				<input type="hidden" name="recaptcha_response_field" value="manual_challenge">
			</noscript>
		</div><!-- /#recaptcha -->
	</div>
{/if}