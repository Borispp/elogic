$(document).ready(function () {
	var $page = $('html,body');
	var scrollToPage = function scrollToPage(target) {
		var y = 0;
		if (target && $(target).length) {
			y = $(target).offset().top;
		}
		$page.animate({ scrollTop: y }, 300, 'swing');
		return;
	};

	$('.scrollto').on('click', function (e) {
		e.preventDefault();
		var _this = this;

		setTimeout(function () {
			scrollToPage($(_this).attr('href'));
		}, 40)
	});

	$('.scrolltoEco').on('click', function (e) {
		e.preventDefault();
		scrollToPage('#ecoQuest');
	});

	var $overlay = $('#overlay');
	var $body = $('body');

	$('.popupLink').on('click', function (e) {
		e.preventDefault();
		var popupId = $(this).attr('href');

		$(popupId).removeClass('-hide');
		$(popupId).removeClass('-hide');
		$overlay.removeClass('-hide');
		$body.addClass('popup_active');
	})

	$('#overlay, .close').on('click', function (e) {
		e.preventDefault();

		$('.popup').addClass('-hide');
		$overlay.addClass('-hide');
		$body.removeClass('popup_active');
	})

	$('.plant__rel_ques a, .help_list a').on('click', function (e) {
		e.preventDefault();
		var faqId = $(this).attr('href');

		$('.plant__rel_ques a').removeClass('-active');
		$('.help_list a').removeClass('-active');
		$(this).addClass('-active');

		$('.plant__info').addClass('-hide');
		$('.questBlock').addClass('-hide');
		$(faqId).removeClass('-hide');
	})

	$('.price_plan__buttons label').on('click', function () {
		var planId = $(this).data('id');

		$('.price_plan__select').addClass('-hide')
		$(planId).removeClass('-hide');
	});

	var sendMail = function () {
		var userMail = [];
		var errors = 0;

		userMail['#username'] = $('#username').val();
		userMail['#userphone'] = $('#userphone').val();
		userMail['#system_type'] = $('#system_type').val();

		for (var key in userMail) {
			if (userMail.hasOwnProperty(key)) {
				if (userMail[key]) {
					$(key).removeClass('-error');
				} else {
					$(key).addClass('-error');
					errors++;
				}
			}
		}

		if (!errors) {
			$('.popup__form').addClass('-hide');
			$('.calltoapel').addClass('-hide');

			$.ajax({
			  method: "POST",
			  url: "send.php",
			  data: { username: userMail['#username'], userphone: userMail['#userphone'], system_type: userMail['#system_type'] }
			})
		  .done(function( msg ) {
				$('.success').removeClass('-hide');
		  });
		}
	}

	$('#userphone, #username').keypress(function (e) {
		if (e.charCode == 13) {
			sendMail();
		}
	});

	$('.popup-submit').on('click', function (e) {
		e.preventDefault();
		sendMail();
	});

	function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
	}

	var abonent = function () {
		var subscribeEmail = $('#subscribeEmail').val();
		if (subscribeEmail && validateEmail(subscribeEmail)) {

			$.ajax({
			  method: "POST",
			  url: "mailsubscription.php",
			  data: { usermail: subscribeEmail }
			})
		  .done(function( msg ) {
				$('#subscribeEmail').addClass('-hide')
				$('#subscribeButton').addClass('-hide')
				$('.-call_me').addClass('-success')
				$('#abonent').addClass('-hide')
				$('#abonentSuccess').removeClass('-hide')
		  });

		} else {
			$('#subscribeButton').addClass('-error');
			setTimeout(function () {
				$('#subscribeButton').removeClass('-error');
			}, 300)
		}
	}

	$('.form-submit').on('click', function (e) {
		e.preventDefault();
		abonent();
	});

	$('.subscribeEmail').keypress(function (e) {
		if (e.charCode == 13) {
			abonent();
		}
	});

	$('.nextPreview').on('click', function (e) {
		e.preventDefault();
		var $this = $(this);
		var nextStep = $this.data('next');

		$this.closest('.preview--steps').removeClass('-showPreview');
		$this.closest('.preview--steps').addClass('-hidePreviewLeft');

		$('.-'+nextStep).removeClass('-hidePreviewRight');
		$('.-'+nextStep).addClass('-showPreview');

		$('.-headlineHow').addClass('-showHeadline');

		$('.preview--images img').addClass('-hideImageOpacity');
		$('.'+nextStep).removeClass('-hideImageOpacity');
	});

	$('.tosite').on('click', function (e) {
		e.preventDefault();
		$('body').removeClass('preview_active');
		$('.preview').addClass('-hidePreview');
	});

	$('.slider').each(function (i, el) {
		$el = $(el);
		var options = $el.data('options'),
				quantFirst = options.quant || options.quantfirst,
				quantLast = options.quant || options.quantlast,
				quantCommon = options.quant ? '&nbsp;' + options.quant : '',
				datenames = '';

		var dateNamesCheck = function (value) {
			if (options.datenames) {
				var dateNamesArr = options.datenames.split(',');
				quantCommon = '&nbsp;'

				if (value == 1) {
					quantCommon += dateNamesArr[0];
				} else if (value < 5) {
					quantCommon += dateNamesArr[1];
				} else {
					quantCommon += dateNamesArr[2];
				}
			}
		}

		dateNamesCheck(options.value);

		$el.slider({
			range: 'min',
			value: options.value,
			min: options.min,
			max: options.max,
			step: options.step,
			slide: function (event, ui) {
				dateNamesCheck(ui.value);
				$(this).find('.ui-slider-handle.ui-state-default.ui-corner-all').html('<span class="summ">'+ui.value + quantCommon + '</span>');
				$(this).next('.slider_quant').find('span').html(ui.value + quantCommon);
			}
		});

		$el.find('.ui-slider-handle.ui-state-default.ui-corner-all').html('<span class="summ">'+options.value + quantCommon + '</span>');
		$el.next('.slider_quant').find('span').html(options.value + quantCommon);
		$el.append('<span class="slider_from">'+options.min+' ' + quantFirst + '</span>');
		$el.append('<span class="slider_to">'+options.max+' ' + quantLast + '</span>');
	});

	$('.persons a').on('click', function (e) {
		e.preventDefault();
		var count = $(this).data('persons');
		$(this).parent().removeClass().addClass('persons' + ' -persons'+count);
		$('#personsCount').val(count);
		$('.persons--count span').html(count);
	});

	$('.select_type--list a').on('click', function (e) {
		e.preventDefault();

		var open = $(this).attr('href');
		$('.select_type').addClass('-hide');
		$(open).removeClass('-hide');

		$('.select_type--list a').removeClass('-active');
		$(this).addClass('-active');
	})

});
