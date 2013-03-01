/** Helper Variables **/
var page_url = window.location.href;

/** Scripts Ready? **/
head.ready(function() {
	
	// ======================
	// = GET FUSION SETTING =
	// ======================
	
	var getSetting = function(settingName) {
		return skin_config[settingName];
	}

	// =====================
	// = INPUT FILL PLUGIN =
	// =====================
	
	$.fn.inputFill = function() {
		return this.each(function() {
			var space = $(this).parent().width(),
				$inputAppendPrepend = $(this).parents('.input-append, .input-prepend');

			if ($inputAppendPrepend.length) {
				$inputAppendPrepend.find('.btn, .add-on').each(function() {
					space -= $(this).outerWidth();
				});
			}

			if ($(this).is('select')) {
				$(this).width(space);
				if ($(this).hasClass('chzn-select')) {
					if ($(this).hasClass('chzn-done')) {
						var $chznContainer = $(this).next('.chzn-container');
						$chznContainer.outerWidth(space);
						$chznContainer.find('.chzn-drop').outerWidth(space);
					}
				}
			} else {
				$(this).outerWidth(space);
			}

			$(this).css({ visibility: 'visisble' });
		});
	};
	
	// ====================
	// = INPUT FILL EVENT =
	// ====================
	
	// We need to reapply inputFill
	// when resizing the browser
	$(window).on('input-fill', function() {
		$('.input-fill').inputFill();
	});
	
	// ======================
	// = INPUT FILL ON LOAD =
	// ======================
	
	// We apply this live as fields
	// can be loaded into the DOM
	// through AJAX requests
	$('.input-fill').livequery(function() {
		$(window).trigger('input-fill');
	});
	
	// ==================
	// = CHOOSEN SELECT =
	// ==================
	
	// We apply this live as select
	// fields can be loaded into the
	// DOM through AJAX requests
	$('.chzn-select').livequery(function() {
		$(this).chosen({ disable_search_threshold: 30 });
	});
	
	// ===========================
	// = EQUALIZE HEIGHTS PLUGIN =
	// ===========================
	
	$.fn.equalizeHeights = function(options) {
		var defaults = {
			selector: '',
			lineHeight: false,
			callback: function() {}
		};
		
		options = $.extend({}, defaults, options);
		
		var $listings = (options.selector) ? this.find(options.selector) : this,
			maxHeight = 0;
					
		if ($listings.length) {
			// Reset heights
			$listings.css('height', '');
			if (options.lineHeight) $listings.css('line-height', '');
			
			// Find maximum height
			$listings.each(function() {
				var height = parseInt($(this).height());
				if (height > maxHeight) maxHeight = height;
			});
			
			// Set heights
			$listings.css({ height: maxHeight.toString() + 'px' });
			
			// Set line height
			if (options.lineHeight) $listings.css('line-height', maxHeight.toString() + 'px');
		}
		
		// Execute callback
		options.callback.call(this);
		
		// Chainable
		return this;
	};
	
	// =======================================
	// = EQUALIZE HEIGHTS ON LOAD AND RESIZE =
	// =======================================
	
	$(window).on('equalize-products', function(e) {
		$('.products').each(function() {
			var $productsRow = $(this).find('.products-row');
		
			$productsRow.each(function(i) {
				var $products = $(this).find('.product');
				
				// Remove product actions alignment
				if (getSetting('align_product_actions'))
					$products.find('.product-actions').css({
						'position': '',
						'width': 'auto',
						'bottom': 'inherit'
					});
				
				// Equalize product heights in the row
				$products.equalizeHeights({ selector: '.wrapper' });
				
				// Product actions alignment
				if (getSetting('align_product_actions'))
					$products.find('.product-actions').css({
						'position': 'absolute',
						'bottom': $products.find('.wrapper').css('padding-bottom')
					}).outerWidth($(this).find('.wrapper').width());
				
				// Progressively fade in the rows
				if ($(this).css('visibility') == 'hidden')
					$(this).css({ display: 'none', visibility: 'visible' }).delay(i*250).fadeIn();
			});
		});
	});
	
	// ===================
	// = GET FORM PLUGIN =
	// ===================
	
	$.fn.getForm = function() {
		return $(this).closest('form');
	};
	
	// =====================
	// = ACTIVE NAVIGATION =
	// =====================
	
	$('.nav-list a[href="'+page_url+'"]').parent().addClass('active');
	
	// ================
	// = REVIEW STARS =
	// ================
	
	$('a[href=#reviews]').on('shown', function(ev) {
		// Run inputFill
		var $tabContent = $($(ev.target).attr('href'));
		if ($tabContent.length) $('.input-fill', $tabContent).inputFill();
		
		// Apply Raty plugin for star ratings
		head.js(skin_path + '/js/plugins/jquery.raty.min.js', function() {			
			$('#rating').raty({
				scoreName: 'rating',
				path: skin_path + "/img/"
			});
		});
	});
	
	// =========================
	// = PRODUCT IMAGE GALLERY =
	// =========================
	
	$productImage = $('a.product-image-primary');
	
	/** Zoom Overlay **/
	$productImage.append($('<div class="product-zoom" />'));
	
	/** Image Swapping **/
	$('a[rel=gallery]').live('click', function() {
		var $primary = $('.product-image-primary');
		$primary.attr('href', $(this).attr('href'));
		$primary.find('img').attr('src', $(this).data('swap'));
		
		if ($productImage.length && $productImage.data('loupe')) $('.hproduct a.magnify').loupe('destroy');
		return false;
	});
	
	/** Magnification / Lightbox **/
	$productImage.live('click', function(ev) {
		ev.preventDefault();
		var $this = $(this),
			src = $this.attr('href');
		
		if ($productImage.hasClass('magnify') && getSetting('image_magnification')) {
			/** Magnification **/		
			head.js(skin_path + "/js/plugins/jquery.loupe.min.js", function() {
				$this.loupe({
					width: 250, // width of magnifier
					height: 250, // height of magnifier
					src: src // src for large image
				});
		
				$this.trigger('show.loupe', ev);
			});
		
			$('.loupe').live('click', function(e) {
				$productImage.loupe('destroy');
			});
		} else {
			/** Lightbox **/
			head.js(skin_path + "/js/plugins/jquery.colorbox.min.js", function() {
				$.colorbox({
					href: src,
					title: $this.attr('title'),
					transition: getSetting('lightbox_animation_effect'),
					speed: getSetting('lightbox_animation_speed'),
					opacity: getSetting('lightbox_overlay_opacity')
				});
			});
		}
	});
	
	// ============
	// = LIGHTBOX =
	// ============
	
	$('.lightbox').live('click', function(e) {
		e.preventDefault();
		$this = $(this);
		
		head.js(skin_path + "/js/plugins/jquery.colorbox.min.js", function() {
			$this.colorbox();
		});
	});
	
	// =========================
	// = GENERIC MODAL WINDOWS =
	// =========================
	
	$('[data-modal-name]').live('click', function(e) {
		e.preventDefault();
		var $this = $(this),
			target = $this.attr('href') ? $this.attr('href') : $this.data('modal-url');
		
		head.js(skin_path + "/js/libs/bootstrap/modal.js", function() {
			$.get(target, function(data) {
				var modalSelector = $this.data('modal-body'),
					$partial = $(modalSelector, data),
					title = $this.attr('title') ? $this.attr('title') : $partial.find('h1, h2, h3, h4, h5').first().html(),
					$modal = $('<div class="modal fade ' + $this.data('modal-name') + '-modal" />')
						.append($('<div class="modal-header"><button class="close" data-dismiss="modal">×</button><h3>' + title + '</h3></div>'))
						.append($('<div class="modal-body" />').append($partial))
						.append($('<div class="modal-footer" />').append($partial.find('.actions, .form-actions').first().html()));
				
				$modal.on('hidden', function() {
					$modal.remove();
				});
				
				$('.modal-close', $modal).click(function(e) {
					e.preventDefault();
					$modal.modal('hide');
				});
						
				$modal.modal();
			});
		});
	});
	
	// ==================
	// = TAGLINE SLIDER =
	// ==================
	
	$.fn.taglineSlider = function(options) {		
		options = $.extend({}, {
			slideSelector: 'li',
			animation: 'fade',
			animationSpeed: 'slow',
			frameDuration: 3000,
			pauseOnHover: true,
			startSlide: 0
		}, options);
		
		return this.each(function() {
			var $slides = $(this).find(options.slideSelector),
				numSlides = $slides.size(),
				currentSlide = options.startSlide,
				timeout;
			
			// Run autoslider
			startAutoSlide();
			
			// Pause on hover
			if (options.pauseOnHover) {
				$(this).hover(function() {
					stopAutoSlide()
				}, function() {
					startAutoSlide();
				});
			}
			
			function nextIndex() {
				return (currentSlide >= numSlides-1) ? 0 : currentSlide+1;
			}
			
			function stopAutoSlide() {
				clearInterval(timeout);
			}
			
			function startAutoSlide() {
				timeout = setInterval(function() {
					displaySlide(nextIndex());
				}, options.frameDuration);
			}
			
			function displaySlide(index) {
				if (currentSlide == index) return false;
				var $slide = $slides.eq(index);
				
				if (options.animation == 'fade') {
					$slides.eq(currentSlide).fadeOut(options.animationSpeed, function() {
						$slide.fadeIn(options.animationSpeed);
						currentSlide = index;
					});
				} else {
					$slides.hide();
					$slide.show();
					currentSlide = index;
				}
			}
		});
	}
	
	$('.tagline-slider').taglineSlider({
		animation: getSetting('tagline_slider_animation_effect'),
		animationSpeed: getSetting('tagline_slider_animation_speed'),
		frameDuration: getSetting('tagline_slider_frame_duration'),
		pauseOnHover: getSetting('tagline_slider_pause_on_hover')
	});
	
	// ==============
	// = FLEXSLIDER =
	// ==============
	
	$('.flexslider').flexslider({
		animation: getSetting('image_slider_animation_effect'),
		slideDirection: getSetting('image_slider_animation_direction'),
		animationDuration: getSetting('image_slider_animation_speed'),
		slideshowSpeed: getSetting('image_slider_frame_duration'),
		slideshow: getSetting('image_slider_autostart'),
		pauseOnHover: getSetting('image_slider_pause_on_hover'),
		pauseOnAction: getSetting('image_slider_pause_on_action'),
		randomize: getSetting('image_slider_randomize'),
		animationLoop: getSetting('image_slider_loop'),
		smoothHeight: true,
		nextText: '<i class="icon-chevron-right icon-white"></i>',
		prevText: '<i class="icon-chevron-left icon-white"></i>',
		controlsContainer: '.flexslider-container'
	});
	
	// ========
	// = TABS =
	// ========
	
	if ($('.nav-tabs').length)
		head.js(skin_path + '/js/libs/bootstrap/tab.js');
	
	// ============
	// = TOOLTIPS =
	// ============
	
	$tooltips = $('[rel=tooltip]');
	if ($tooltips.length) {
		head.js(skin_path + '/js/libs/bootstrap/tooltip.js', function() {
			$tooltips.tooltip();
		});
	}
	
	// ==========
	// = ALERTS =
	// ==========
	
	if ($('.alert .close').length)
		head.js(skin_path + "/js/libs/bootstrap/alert.js");
	
	// ===================
	// = FIND ALL PLUGIN =
	// ===================
	
	$.fn.findAll = function(selector) {
		var results = $();
		
		$(this).each(function() {
			if ($(this).is(selector)) results = results.add(this)
			results = results.add(selector, this)
		});
		
		return results;
	};
	
	// ===================
	// = AJAX PAGINATION =
	// ===================
	
	$('.pagination a').live('click', function(e) {
		e.preventDefault();
		
		var url = $(this).attr('href');
		if (url == '#') return false;
		
		$.ajax({
			type: 'POST',
			url: url,
			success: function(response, status, xhr) {
				// Update content widget
				var $response = $(response),
					$content = $(response).findAll('#widget-content').replaceAll('#widget-content'),
					title = $(document, $response).attr('title');
				// Update page url if history API is supported
				if (!!(window.history && history.pushState)) window.history.pushState(null, title, url);
				// Equalize product heights
				$(window).trigger('equalize-products');
			}
		});
	});
	
	// ====================
	// = AJAX ADD TO CART =
	// ====================
	
	$('form.ajax').submit(function(e) {
		e.preventDefault();
		
		var action = $(this).attr('action').replace('?_a=saleitems', ''),
			parts = action.split('?');
			
		action += (parts.length > 1) ? '&' : '?';
		
		$.ajax({
			url: action + '_g=ajaxadd',
			type: 'POST',
			cache: false,
			data: $(this).serialize(),
			complete: function(returned) {
				if (returned.responseText.match('Redir')) window.location = returned.responseText.substr(6);
			},
			success: function(response, textStatus, jqXHR) {
				if (!jqXHR.responseText.match('Redir')) {
					$partial = $(response);
					$('.box-basket').replaceWith($('.box-basket', response));
					$('#widget-cart').replaceWith($('#widget-cart', response));
				
					$.fn.bar.removebar('addToCart');
					$.fn.bar({
						id: 'addToCart',
						message: $('#widget-notification', response).html(),
						persist: 5000,
						background_color: 'rgba(255, 119, 203, 0.8)'
					});
				}
			}
		});
	});
	
	// ===============
	// = SUBMIT FORM =
	// ===============
	
	$('a[href=#submit]').live('click', function(e) {
		e.preventDefault();
		$(this).getForm().submit();
	});
	
	// =========================
	// = SUBMIT FORM ENTER KEY =
	// =========================
	
	$("input").keypress(function(e) {
	    if (e.which == 13) {
	        e.preventDefault();
	        $(this).getForm().submit();
	    }
	});
	
	// ===========================
	// = AJAX ACTIVITY INDICATOR =
	// ===========================
	
	$(document).ajaxStart(function(){
		$.fn.bar({ message: 'Loading...', persist: true, id: 'loading' });
	}).ajaxStop(function(){
		$.fn.bar.removebar('loading');
	});
	
	// =====================
	// = CHECKOUT SECTIONS =
	// =====================
	
	var $toggleDelivery = $('#delivery_is_billing'),
		$toggleAccount = $('#show-reg'),
		$sectionDelivery = $($toggleDelivery.data('section')),
		$sectionAccount = $($toggleAccount.data('section'));
	
	$sectionDelivery.toggle(!$toggleDelivery.is(':checked'));
	$sectionAccount.toggle($toggleAccount.is(':checked'));
	
	$toggleDelivery.bind('change', function() {
		$sectionDelivery.toggle(!$(this).is(':checked'));
		$('.input-fill', $sectionDelivery).inputFill();
	});

	$toggleAccount.bind('change', function() {
		$sectionAccount.toggle($toggleAccount.is(':checked'));
		$('.input-fill', $sectionAccount).inputFill();
	});
	
	// ===========================
	// = County / State Dropdown =
	// ===========================
	// 
	// Handles county/state
	// selections according to the
	// currently selected country.
	//
	// Must be executed before the
	// one page checkout.

	var $country_fields = $('select#country-list, select.country-list');

	if (typeof(county_list) == 'object' && $country_fields.length) {
		head.js(skin_path + '/js/plugins/jquery.states.min.js', function() {
			// Setup county/state fields onload
			$country_fields.states(county_list);

			// Setup county/state fields when
			// the selected country has changed
			$country_fields.each(function() {
				$(this).change(function() {
					$country_fields.states(county_list);
				});
			});
		});
	}
	
	// ===========================
	// = WINDOW EVENT TRIGGERING =
	// ===========================
	
	// Equalize products on page load
	$(window).trigger('equalize-products');
	
	// Equalize product heights and perform
	// input filling on window resize
	var previousWidth = $(window).width();
	$(window).on('resize', function() {
		var newWidth = $(window).width();
		if (newWidth != previousWidth) {
			previousWidth = newWidth;
			$(this).trigger('input-fill');
			$(this).trigger('equalize-products');
		}
	});
});

/** Load Scripts **/
head.js(
	{jquery: '//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'},
	{livequery: skin_path + '/js/plugins/jquery.livequery.min.js'},
	{outer: skin_path + '/js/plugins/jquery.outer.min.js'},
	{chosen: skin_path + '/js/plugins/jquery.chosen.min.js'},
	{bar: skin_path + '/js/plugins/jquery.bar.min.js'},
	{flexslider: skin_path + '/js/plugins/jquery.flexslider.min.js'}
);