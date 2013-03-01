/**
 * loupe - an image magnifier for jQuery
 * (C) 2010 jdbartlett, MIT license
 * http://github.com/jdbartlett/loupe
 */
(function($) {
	$.fn.loupe = function(arg) {
		var options = $.extend({
			loupe: 'loupe',
			width: 200,
			height: 150,
			src: ''
		}, arg || {});

		return this.length ? this.each(function () {
			var $this = $(this), $big, $loupe,
				$small = $this.is('img') ? $this : $this.find('img:first'),
				move, hide = function () { $loupe.hide(); },
				time, destroy, data;

			data = $this.data('loupe');
			if (data != null) {
				if ('destroy' === arg) {
					return data.destroy();
				}
				
				data.enabled = arg;
				return $this.data('loupe', data);
			} else if ('destroy' === arg) {
				// Nothing to destroy yet
				return;
			}

			move = function(e) {
				var os = $small.offset(),
					sW = $small.outerWidth(),
					sH = $small.outerHeight(),
					oW = options.width / 2,
					oH = options.height / 2;

				if (!$this.data('loupe').enabled ||
					e.pageX > sW + os.left + 10 || e.pageX < os.left - 10 ||
					e.pageY > sH + os.top + 10 || e.pageY < os.top - 10) {
					return hide();
				}

				time = time ? clearTimeout(time) : 0;

				$loupe.fadeIn(250).css({
					'left': e.pageX - oW,
					'top': e.pageY - oH,
					'background-position': (100*(e.pageX - os.left)/sW).toString() + '% ' + (100*(e.pageY - os.top)/sH).toString() + '%'
				});
			};

			$loupe = $('<div />')
				.addClass(options.loupe)
				.css({
					'width': options.width,
					'height': options.height,
					'position': 'absolute',
					'overflow': 'hidden',
					'background-image': 'url(' + (options.src ? options.src : $this.attr($this.is('img') ? 'src' : 'href')) + ')'
				})
				.append($('<div class="gloss" />'))
				.mousemove(move)
				.hide()
				.appendTo('body');
			
			destroy = function() {
				$loupe.remove();
				$this.unbind('.loupe').removeData('loupe');
			};

			$this.data('loupe', {destroy: destroy, enabled: true})
				.bind('show.loupe', function(e, ev) { move(ev) })
				.bind('mouseenter.loupe', move)
		}) : this;
	};
}(jQuery));