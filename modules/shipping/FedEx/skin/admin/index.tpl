<form action="{$VAL_SELF}" method="post" enctype="multipart/form-data">
  <div id="FedEx" class="tab_content">
	<h3><a href="http://www.fedex.com" target="_blank">{$TITLE}</a></h3>
	<p>{$LANG.fedex.module_description}</p>
  <fieldset><legend>{$LANG.module.cubecart_settings}</legend>
	<div>
		<label for="status">{$LANG.common.status}</label>
		<span>
			<input type="hidden" name="module[status]" id="status" class="toggle" value="{$MODULE.status}" />
		</span>
	</div>
	<div>
  		<label for="handling">{$LANG.fedex.account_no}</label>
  		<span>
  			<input name="module[accNo]" id="accNo" class="textbox" type="text" value="{$MODULE.accNo}" />
  		</span>
  	</div>
  	<div>
  		<label for="handling">{$LANG.fedex.meter_no}</label>
  		<span>
  			<input name="module[meterNo]" id="meterNo" class="textbox" type="text" value="{$MODULE.meterNo}" />
  		</span>
  	</div>
  	<div><label for="packagingWeight">{$LANG.fedex.package_weight}</label><span><input name="module[packagingWeight]" id="packagingWeight" class="textbox" type="text" value="{$MODULE.packagingWeight}" /></span></div>
  	<div>
  		<label for="handling">{$LANG.fedex.shipping_free}</label>
  		<span>
  			<input type="hidden" name="module[storeOwnerPays]" id="storeOwnerPays" class="toggle" value="{$MODULE.storeOwnerPays}" /> {$LANG.fedex.shipping_free_info}
  		</span>
  	</div>
  	<div>
  		<label for="handling">{$LANG.basket.shipping_handling}</label>
  		<span>
  			<input name="module[handling]" id="handling" class="textbox" type="text" value="{$MODULE.handling}" />
  		</span>
  	</div>

	<div>
		<label for="tax">{$LANG.catalogue.tax_type}</label>
		<span>
			<select name="module[tax]" id="tax">
			  {foreach from=$TAXES item=tax}<option value="{$tax.id}" {$tax.selected}>{$tax.tax_name}</option>{/foreach}
			</select>
		</span>
	</div>
  </fieldset>
  <fieldset><legend>{$LANG.fedex.title_parcel_origin}</legend>
	<div>
		<label for="postcode">{$LANG.address.state}</label>
		<span><input type="text" name="module[state]" value="{$MODULE.state}" class="textbox" size="10" /> {$LANG.common.eg} AR,IL,FL etc...</span>
	</div>
	<div>
		<label for="postcode">{$LANG.address.country}</label>
		<span><input type="text" name="module[country]" value="{$MODULE.country}" class="textbox" size="10" /> {$LANG.common.eg} US,CA,GB,FR,IT,DK</span>
	</div>
	<div>
		<label for="postcode">{$LANG.address.postcode}</label>
		<span><input type="text" name="module[postcode]" value="{$MODULE.postcode}" class="textbox" size="10" /></span>
	</div>
  </fieldset>

  <fieldset><legend>{$LANG.fedex.title_settings_shipping}</legend>
	<div>
		<label for="dropoffType">{$LANG.fedex.dropoff_method}</label>
		<span>
			<select name="module[dropoffType]">
					<option value="REGULARPICKUP" {$SELECT_dropoffType_REGULARPICKUP}>{$LANG.fedex.drop_regular}</option>
					<option value="REQUESTCOURIER" {$SELECT_dropoffType_REQUESTCOURIER}>{$LANG.fedex.drop_courier}</option>
					<option value="DROPBOX" {$SELECT_dropoffType_DROPBOX}>{$LANG.fedex.drop_dropbox}</option>
					<option value="BUSINESSSERVICE_CENTER" {$SELECT_dropoffType_BUSINESSSERVICE_CENTER}>{$LANG.fedex.drop_service}</option>
					<option value="STATION" {$SELECT_dropoffType_STATION}>{$LANG.fedex.drop_station}</option>
				</select>
		</span>
	</div>

	<div>
		<label for="packaging">{$LANG.fedex.dropoff_packaging}</label>
		<span>
			<select name="module[packaging]">
					<option value="YOURPACKAGING" {$SELECT_packaging_FEDEXTUBE}>{$LANG.fedex.pack_custom}</option>
					<option value="FEDEXENVELOPE" {$SELECT_packaging_FEDEXENVELOPE}>{$LANG.fedex.pack_envelope}</option>
					<option value="FEDEXPAK" {$SELECT_packaging_FEDEXPAK}>{$LANG.fedex.pack_pak}</option>
					<option value="FEDEXBOX" {$SELECT_packaging_DROPBOX}>{$LANG.fedex.pack_box}</option>
					<option value="FEDEXTUBE" {$SELECT_packaging_FEDEXTUBE}>{$LANG.fedex.pack_tube}</option>
					<option value="FEDEX10KGBOX" {$SELECT_packaging_FEDEX10KGBOX}>{$LANG.fedex.pack_box_10k}</option>
					<option value="FEDEX25KGBOX" {$SELECT_packaging_FEDEX25KGBOX}>{$LANG.fedex.pack_box_25k}</option>
				</select>
		</span>
	</div>
  </fieldset>

<fieldset><legend>{$LANG.fedex.title_carrier_service}</legend>
	<p>{$LANG.fedex.carrier_service_info}</p>
	<table>
		<thead>
			<tr>
				<td>{$LANG.fedex.title_service}</td>
				<td>{$LANG.fedex.title_ground}</td>
				<td>{$LANG.fedex.title_express}</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{$LANG.fedex.service_overnight_priority}</td>
				<td align="center"><input type="hidden" name="module[FDXG_PRIORITYOVERNIGHT]" id="FDXG_PRIORITYOVERNIGHT" class="toggle" value="{$MODULE.FDXG_PRIORITYOVERNIGHT}" /></td>
				<td align="center"><input type="hidden" name="module[FDXE_PRIORITYOVERNIGHT]" id="FDXE_PRIORITYOVERNIGHT" class="toggle" value="{$MODULE.FDXE_PRIORITYOVERNIGHT}" /></td>
			</tr>
			<tr>
				<td>{$LANG.fedex.service_overnight_standard}</td>
				<td align="center"><input type="hidden" name="module[FDXG_STANDARDOVERNIGHT]" id="FDXG_STANDARDOVERNIGHT" class="toggle" value="{$MODULE.FDXG_STANDARDOVERNIGHT}" /></td>
				<td align="center"><input type="hidden" name="module[FDXE_STANDARDOVERNIGHT]" id="FDXE_STANDARDOVERNIGHT" class="toggle" value="{$MODULE.FDXE_STANDARDOVERNIGHT}" /></td>
			</tr>
			<tr>
				<td>{$LANG.fedex.service_overnight_first}</td>
				<td align="center"><input type="hidden" name="module[FDXG_FIRSTOVERNIGHT]" id="FDXG_FIRSTOVERNIGHT" class="toggle" value="{$MODULE.FDXG_FIRSTOVERNIGHT}" /></td>
				<td align="center"><input type="hidden" name="module[FDXE_FIRSTOVERNIGHT]" id="FDXE_FIRSTOVERNIGHT" class="toggle" value="{$MODULE.FDXE_FIRSTOVERNIGHT}" /></td>
			</tr>
			<tr>
				<td>{$LANG.fedex.service_2day}</td>
				<td align="center"><input type="hidden" name="module[FDXG_FEDEX2DAY]" id="FDXG_FEDEX2DAY" class="toggle" value="{$MODULE.FDXG_FEDEX2DAY}" /></td>
				<td align="center"><input type="hidden" name="module[FDXE_FEDEX2DAY]" id="FDXE_FEDEX2DAY" class="toggle" value="{$MODULE.FDXE_FEDEX2DAY}" /></td>
			</tr>
			<tr>
				<td>{$LANG.fedex.service_express_saver}</td>
				<td align="center"><input type="hidden" name="module[FDXG_FEDEXEXPRESSSAVER]" id="FDXG_FEDEXEXPRESSSAVER" class="toggle" value="{$MODULE.FDXG_FEDEXEXPRESSSAVER}" /></td>
				<td align="center"><input type="hidden" name="module[FDXE_FEDEXEXPRESSSAVER]" id="FDXE_FEDEXEXPRESSSAVER" class="toggle" value="{$MODULE.FDXE_FEDEXEXPRESSSAVER}" /></td>
			</tr>
			<tr>
				<td>{$LANG.fedex.service_intl_priority}</td>
				<td align="center"><input type="hidden" name="module[FDXG_INTERNATIONALPRIORITY]" id="FDXG_INTERNATIONALPRIORITY" class="toggle" value="{$MODULE.FDXG_INTERNATIONALPRIORITY}" /></td>
				<td align="center"><input type="hidden" name="module[FDXE_INTERNATIONALPRIORITY]" id="FDXE_INTERNATIONALPRIORITY" class="toggle" value="{$MODULE.FDXE_INTERNATIONALPRIORITY}" /></td>
			</tr>
			<tr>
				<td>{$LANG.fedex.service_intl_economy}</td>
				<td align="center"><input type="hidden" name="module[FDXG_INTERNATIONALECONOMY]" id="FDXG_INTERNATIONALECONOMY" class="toggle" value="{$MODULE.FDXG_INTERNATIONALECONOMY}" /></td>
				<td align="center"><input type="hidden" name="module[FDXE_INTERNATIONALECONOMY]" id="FDXE_INTERNATIONALECONOMY" class="toggle" value="{$MODULE.FDXE_INTERNATIONALECONOMY}" /></td>
			</tr>
			<tr>
				<td>{$LANG.fedex.service_intl_first}</td>
				<td align="center"><input type="hidden" name="module[FDXG_INTERNATIONALFIRST]" id="FDXG_INTERNATIONALFIRST" class="toggle" value="{$MODULE.FDXG_INTERNATIONALFIRST}" /></td>
				<td align="center"><input type="hidden" name="module[FDXE_INTERNATIONALFIRST]" id="FDXE_INTERNATIONALFIRST" class="toggle" value="{$MODULE.FDXE_INTERNATIONALFIRST}" /></td>
			</tr>
			<tr>
				<td>{$LANG.fedex.service_freight_1}</td>
				<td align="center"><input type="hidden" name="module[FDXG_FEDEX1DAYFREIGHT]" id="FDXG_FEDEX1DAYFREIGHT" class="toggle" value="{$MODULE.FDXG_FEDEX1DAYFREIGHT}" /></td>
				<td align="center"><input type="hidden" name="module[FDXE_FEDEX1DAYFREIGHT]" id="FDXE_FEDEX1DAYFREIGHT" class="toggle" value="{$MODULE.FDXE_FEDEX1DAYFREIGHT}" /></td>
			</tr>
			<tr>
				<td>{$LANG.fedex.service_freight_2}</td>
				<td align="center"><input type="hidden" name="module[FDXG_FEDEX2DAYFREIGHT]" id="FDXG_FEDEX2DAYFREIGHT" class="toggle" value="{$MODULE.FDXG_FEDEX2DAYFREIGHT}" /></td>
				<td align="center"><input type="hidden" name="module[FDXE_FEDEX2DAYFREIGHT]" id="FDXE_FEDEX2DAYFREIGHT" class="toggle" value="{$MODULE.FDXE_FEDEX2DAYFREIGHT}" /></td>
			</tr>
			<tr>
				<td>{$LANG.fedex.service_freight_3}</td>
				<td align="center"><input type="hidden" name="module[FDXG_FEDEX3DAYFREIGHT]" id="FDXG_FEDEX3DAYFREIGHT" class="toggle" value="{$MODULE.FDXG_FEDEX3DAYFREIGHT}" /></td>
				<td align="center"><input type="hidden" name="module[FDXE_FEDEX3DAYFREIGHT]" id="FDXE_FEDEX3DAYFREIGHT" class="toggle" value="{$MODULE.FDXE_FEDEX3DAYFREIGHT}" /></td>
			</tr>
			<tr>
				<td>{$LANG.fedex.service_ground}</td>
				<td align="center"><input type="hidden" name="module[FDXG_FEDEXGROUND]" id="FDXG_FEDEXGROUND" class="toggle" value="{$MODULE.FDXG_FEDEXGROUND}" /></td>
				<td align="center"><input type="hidden" name="module[FDXE_FEDEXGROUND]" id="FDXE_FEDEXGROUND" class="toggle" value="{$MODULE.FDXE_FEDEXGROUND}" /></td>
			</tr>
			<tr>
				<td>{$LANG.fedex.service_ground_home}</td>
				<td align="center"><input type="hidden" name="module[FDXG_GROUNDHOMEDELIVERY]" id="FDXG_GROUNDHOMEDELIVERY" class="toggle" value="{$MODULE.FDXG_GROUNDHOMEDELIVERY}" /></td>
				<td align="center"><input type="hidden" name="module[FDXE_GROUNDHOMEDELIVERY]" id="FDXE_GROUNDHOMEDELIVERY" class="toggle" value="{$MODULE.FDXE_GROUNDHOMEDELIVERY}" /></td>
			</tr>
			<tr>
				<td>{$LANG.fedex.service_intl_priority_freight}</td>
				<td align="center"><input type="hidden" name="module[FDXG_INTERNATIONALPRIORITY_FREIGHT]" id="FDXG_INTERNATIONALPRIORITY_FREIGHT" class="toggle" value="{$MODULE.FDXG_INTERNATIONALPRIORITY_FREIGHT}" /></td>
				<td align="center"><input type="hidden" name="module[FDXE_INTERNATIONALPRIORITY_FREIGHT]" id="FDXE_INTERNATIONALPRIORITY_FREIGHT" class="toggle" value="{$MODULE.FDXE_INTERNATIONALPRIORITY_FREIGHT}" /></td>
			</tr>
			<tr>
				<td>{$LANG.fedex.service_intl_economy_freight}</td>
				<td align="center"><input type="hidden" name="module[FDXG_INTERNATIONALECONOMY_FREIGHT]" id="FDXG_INTERNATIONALECONOMY_FREIGHT" class="toggle" value="{$MODULE.FDXG_INTERNATIONALECONOMY_FREIGHT}" /></td>
				<td align="center"><input type="hidden" name="module[FDXE_INTERNATIONALECONOMY_FREIGHT]" id="FDXE_INTERNATIONALECONOMY_FREIGHT" class="toggle" value="{$MODULE.FDXE_INTERNATIONALECONOMY_FREIGHT}" /></td>
			</tr>
			<tr>
				<td>{$LANG.fedex.service_intl_priority_eu}</td>
				<td align="center"><input type="hidden" name="module[FDXG_EUROPEFIRSTINTERNATIONALPRIORITY]" id="FDXG_EUROPEFIRSTINTERNATIONALPRIORITY" class="toggle" value="{$MODULE.FDXG_EUROPEFIRSTINTERNATIONALPRIORITY}" /></td>
				<td align="center"><input type="hidden" name="module[FDXE_EUROPEFIRSTINTERNATIONALPRIORITY]" id="FDXE_EUROPEFIRSTINTERNATIONALPRIORITY" class="toggle" value="{$MODULE.FDXE_EUROPEFIRSTINTERNATIONALPRIORITY}" /></td>
			</tr>
		</tbody>
	</table>
  </fieldset>
  </div>
  {$MODULE_ZONES}
  <div class="form_control">
	<input type="submit" name="save" value="{$LANG.common.save}" />
  </div>
  <input type="hidden" name="token" value="{$SESSION_TOKEN}" />
</form>