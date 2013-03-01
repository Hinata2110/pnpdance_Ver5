<div class="section section-contact">
	<h3 class="section-title">{$LANG.documents.document_contact}</h3>
	<form action="{$VAL_SELF}" method="post">
		<div class="content">
			{if $CONTACT.description}
				<div class="row-fluid">
					{$CONTACT.description}
				</div>
			{/if}
			<div class="row-fluid">
				<div class="span5">
					<div class="row-fluid">
						<label for="contact_name">{$LANG.common.name}</label>
						<input type="text" name="contact[name]" id="contact_name" value="{$MESSAGE.name}" required class="input-fill" />
					</div>
					<div class="row-fluid">
						<label for="contact_email">{$LANG.common.email}</label>
						<input type="email" name="contact[email]" id="contact_email" value="{$MESSAGE.email}" required class="input-fill" />
					</div>
					{if isset($DEPARTMENTS)}
						<div class="row-fluid">
							<label for="contact_dept">{$LANG.common.department}</label>
							<select name="contact[dept]" id="contact_dept" required class="input-fill chzn-select">
								<option value="">{$LANG.form.please_select}</option>
								{foreach from=$DEPARTMENTS item=dept}
									<option value="{$dept.key}"{$dept.selected}>{$dept.name}</option>
								{/foreach}
							</select>
						</div>
					{/if}
					{include file='templates/content.recaptcha.php'}
				</div>
				<div class="span7">
					<div class="row-fluid">
						<label for="contact_subject">{$LANG.common.subject}</label>
						<input type="text" name="contact[subject]" id="contact_subject" value="{$MESSAGE.subject}" required class="input-fill" />
					</div>
					<div class="row-fluid">
						<label for="contact_enquiry">{$LANG.common.enquiry}</label>
						<textarea name="contact[enquiry]" id="contact_enquiry" required rows="10" class="input-fill">{$MESSAGE.enquiry}</textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="form-actions">
			<input type="submit" value="{$LANG.documents.send_message}" class="btn btn-primary" />
		</div>
	</form>
</section>