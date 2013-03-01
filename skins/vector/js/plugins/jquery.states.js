$.fn.states = function(county_list) {
	
	$(this).each(function() {
		
		$field = $(this);
		
		// Check that the {[country => [county]]} object is defined
		if (typeof(county_list) != 'object') return false;
		
		// Check that the country field exists
		if ($(this).length <= 0) return false;

		// Get the counties/states and the target field
		var numcode_data = $(this).find('option').filter(':selected').attr('data-numcode'),
			country_numcode = numcode_data ? numcode_data : $(this).val(),
			counties = county_list[country_numcode],
			target = ($(this).attr('rel') && $(this).attr('id') != 'country-list') ? '#' + $(this).attr('rel') : '#state-list';
			
		// Check that counties/states were found for the selected country
		// and that the target field exists
		if ($(target)[0] && typeof(counties) == 'object' && typeof(county_list[country_numcode]) != 'undefined' && county_list[country_numcode].length >= 1) {

			// Create the select field
			var $select = $(document.createElement('select')).attr({
					'name': $(target).attr('name'),
					'id': $(target).attr('id'),
					'class': $(target).attr('class')
				}),
				setting	= $(target).val();

			// Replace the target with the select field
			$(target).replaceWith($select);

			// Create an option
			var $option = $(document.createElement('option'));

			// If the country field has a title,
			// add it as the first option to the
			// county/state field
			if ($(this).attr('title')) {
				$('select'+target).append($option.clone().val('0').text($(this).attr('title')));
			}

			// Add the list of counties/states
			// for the selected country as options
			for (i in counties) {

				var $op = $option.clone().val(counties[i].id).text(counties[i].name);

				// If the value of the county/state field matches the value
				// of the option, make this option "selected".
				if (setting == counties[i].name || setting == counties[i].id) {
					$op.attr('selected', 'selected');
				}

				// Append the option to the county/state select field
				$('select'+target).append($op);
			}
			
			$('select'+target).addClass('chzn-select');
		} else {
			// There are no counties/states for the selected
			// country.  Use a standard text field.
			var $input = $(document.createElement('input')).attr({
					'type': 'text',
					'id': $(target).attr('id'),
					'name': $(target).attr('name'),
					'class': $(target).attr('class')
				});
				
			$input.removeClass('chzn-select').removeClass('chzn-done');

			// No zones? Disable field.
			if ($(this).hasClass('no-custom-zone')) {
				$input.attr('disabled', 'disabled').val($(this).attr('title'));
			}

			// Replace current county/state field
			$(target).siblings('.chzn-container').remove();
			$(target).replaceWith($input);
		}
		
	});
	
}