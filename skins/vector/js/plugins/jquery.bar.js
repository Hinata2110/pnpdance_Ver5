(function($) {
	$.fn.bar = function(options) {
		var opts = $.extend({}, $.fn.bar.defaults, options),
			o = $.meta ? $.extend({}, opts) : opts,
			_wrap_bar;
		
		if (typeof timeout == 'undefined') timeout = [];
		
		if (o.persist !== true) timeout['bar-'+o.id] = setTimeout(function() {
			$.fn.bar.removebar(o.id)
		}, o.persist);
		
		var _message_span = $('<span />').addClass('jbar-content').html(o.message);
		_message_span.css({ color: o.color });
		
		(o.position == 'bottom') ? 
			_wrap_bar   = $('<div />').addClass('jbar jbar-bottom') :
			_wrap_bar   = $('<div />').addClass('jbar jbar-top');

		_wrap_bar.attr('id', 'bar-'+o.id).css({ backgroundColor: o.background_color });
	
		if (o.removebutton) {
			var _remove_cross = $('<a href="javascript:;" class="jbar-cross" />').append($('<span class="icon-white icon-remove" />'));
			_remove_cross.click(function(e) {
				$.fn.bar.removebar(o.id);
			});
		} else {       
			_wrap_bar.css({ cursor: 'pointer'});
			_wrap_bar.click(function(e) {
				$.fn.bar.removebar(o.id);
			});
		} 
		
		_wrap_bar.append(_message_span.append(_remove_cross)).hide().prependTo($('body')).fadeIn(o.speed);
	};

	$.fn.bar.removebar = function(id) {
		var $jbar = (typeof id != 'undefined') ? $('#bar-'+id) : $('.jbar');
		
		if ($jbar.length) {
			if (typeof timeout != 'undefined') clearTimeout(timeout['bar-'+id]);
			$jbar.fadeOut('fast', function(){
				$(this).remove();
			});
		} 
	};

	$.fn.bar.defaults = {
		background_color: 'rgba(222, 104, 177, 0.8)',
		color: '#000',
		position: 'top',
		removebutton: true,
		persist: 5000,
		speed: 'fast'
	};
})(jQuery);