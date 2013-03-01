	<form action="{$VAL_SELF}" method="post" enctype="multipart/form-data">
	{if isset($ADDRESSES)}
		<div class="section">
			<h3 class="section-title">{$LANG.customer.title_address}</h3>
			<div class="content">
				{foreach from=$ADDRESSES item=address}
					<div class="row-fluid address">
						{if $ADDRESSES|@count > 1}
							<div class="span1">
								{if !$address.billing}
									<input type="checkbox" name="delete[]" value="{$address.address_id}" />
								{/if}
								&nbsp;
							</div>
						{/if}
						<div class="{if !$address.billing || $ADDRESSES|@count > 1}span11{/if}">
							<strong class="address-description"><a class="label label-info" href="{$STORE_URL}/index.php?_a=addressbook&amp;action=edit&amp;address_id={$address.address_id}" title="{$LANG.address.address_edit}"><i class="icon-edit icon-white"></i> {$address.description}</a> {$address.billing} {$address.default}</strong>
							<span class="address">
		  						{$address.line1} {$address.line2},<br />
		  						{$address.town},<br />
		  						{$address.state},<br />
		  						{$address.postcode}
		 					</span>
						</div>
					</div>
				{/foreach}
			</div>
			<div class="form-actions">
				<button type="button" onclick="window.location='{$STORE_URL}/index.php?_a=addressbook&amp;action=add'" class="btn btn-primary"><i class="icon-plus-sign icon-white"></i> {$LANG.address.address_add}</button> 
				{if $ADDRESSES|@count > 1}
					<button type="submit" value="{$LANG.common.delete_selected}" class="btn btn-danger"><i class="icon-minus-sign icon-white"></i> {$LANG.common.delete_selected}</button>
				{/if}
 			</div>
		</div>
	{/if}
	{if isset($CTRL_FORM)}
		<div class="section">
			<h3 class="section-title">{$LANG.address.address_add}</h3>
			<div class="content">
				<div class="row-fluid">
					<label for="addr_description">{$LANG.common.description}</label>
					<input type="text" name="description" id="addr_description" value="{$DATA.description}" required class="input-fill" placeholder="{$LANG.common.description}" />
				</div>
				<div class="row-fluid">
					<div class="span6">
						<label for="addr_first_name">{$LANG.user.name_first}</label>
						<input type="text" name="first_name" id="addr_first_name" value="{$DATA.first_name}" required class="input-fill" placeholder="{$LANG.user.name_first}" />
					</div>
					<div class="span6">
						<label for="addr_last_name">{$LANG.user.name_last}</label>
						<input type="text" name="last_name" id="addr_last_name" value="{$DATA.last_name}" required class="input-fill" placeholder="{$LANG.user.name_last}" />
					</div>
				</div>
				<div class="row-fluid">
					<label for="addr_company_name">{$LANG.address.company_name}</label>
					<input type="text" name="company_name" id="addr_company_name" value="{$DATA.company_name}" class="input-fill" placeholder="{$LANG.address.company_name}" />
				</div>
				<div class="row-fluid">
					<label for="addr_line1">{$LANG.address.line1}</label>
					<input type="text" name="line1" id="addr_line1" value="{$DATA.line1}" required class="input-fill" placeholder="{$LANG.address.line1}" />
				</div>
				<div class="row-fluid">
					<input type="text" name="line2" id="addr_line2" value="{$DATA.line2}" class="input-fill" placeholder="{$LANG.address.line2}" />
				</div>
				<div class="row-fluid">
					<div class="span6">
						<label for="addr_town">{$LANG.address.town}</label>
						<input type="text" name="town" id="addr_town" value="{$DATA.town}" required class="input-fill" placeholder="{$LANG.address.town}" />
					</div>
					<div class="span6">
						<label for="addr_postcode">{$LANG.address.postcode}</label>
						<input type="text" name="postcode" id="addr_postcode" value="{$DATA.postcode}" required class="input-fill" placeholder="{$LANG.address.postcode}" />
					</div>
				</div>
				<div class="row-fluid">
					<label for="country-list">{$LANG.address.country}</label>
					<select name="country" id="country-list" required class="input-fill chzn-select">
						{foreach from=$COUNTRIES item=country}
							<option value="{$country.numcode}" {$country.selected}>{$country.name}</option>
						{/foreach}
					</select>
				</div>
				<div class="row-fluid">
					<label for="state-list">{$LANG.address.state}</label>
					<input type="text" name="state" id="state-list" value="{$DATA.state}" required class="input-fill" class="{$LANG.address.state}" />
				</div>
				<div class="row-fluid form-inline">
					<label for="addr_billing">{$LANG.address.billing_address}</label>
					<input name="billing" type="checkbox" id="addr_billing" value="1" {$DATA.billing} />
				</div>
				<div class="row-fluid form-inline">
					<label for="addr_default">{$LANG.address.default_delivery_address}</label>
					<input name="default" type="checkbox" id="addr_default" value="1" {$DATA.default} />
				</div>
			</div>
			<div class="form-actions">
				<input type="hidden" name="address_id" value="{$DATA.address_id}" />
				<button type="submit" name="save" value="{$LANG.address.address_add}" class="btn btn-primary"><i class="icon-edit icon-white"></i> {$LANG.address.add_edit}</button>
			</div>
		</div>
	{/if}
</form>
<script type="text/javascript">
	var county_list = {$VAL_JSON_STATE}
</script>