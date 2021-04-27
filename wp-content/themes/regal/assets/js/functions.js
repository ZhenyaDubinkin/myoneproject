$(function(){
	// Проверка браузера
	if ( !supportsCssVars() ) {
		$('body').addClass('lock')
		$('.supports_error').addClass('show')
	}


	// Ленивая загрузка
	setTimeout(function(){
		observer = lozad('.lozad', {
			rootMargin: '200px 0px',
			threshold: 0,
			loaded: function(el) {
				el.classList.add('loaded')
			}
		})

		observer.observe()
	}, 200)


	// Установка ширины стандартного скроллбара
	$(':root').css('--scroll_width', widthScroll() +'px')


	// Табы
	var locationHash = window.location.hash

	$('body').on('click', '.tabs button', function(e) {
		e.preventDefault()

		if (!$(this).hasClass('active')) {
			let parent    = $(this).closest('.tabs_container')
			let activeTab = $(this).data('content')
			let level     = $(this).data('level')

			parent.find('.tabs:first button').removeClass('active')
			parent.find('.tab_content.' + level).removeClass('active')

			$(this).addClass('active')
			$(activeTab).addClass('active')
		}
	})

	if (locationHash && $('.tabs_container').length) {
		let activeTab = $('.tabs button[data-content=' + locationHash + ']')
		let parent    = activeTab.closest('.tabs_container')
		let level     = activeTab.data('level')

		parent.find('.tabs:first button').removeClass('active')
		parent.find('.tab_content.' + level).removeClass('active')

		activeTab.addClass('active')
		$(locationHash).addClass('active')

		$('html, body').stop().animate({
			scrollTop: $(locationHash).offset().top
		}, 1000)
	}

	// Плавная прокрутка к якорю
	// Работает и при прокрутке к табу
	$('body').on('click', '.scroll_link', function(e) {
		e.preventDefault()

		let href = $(this).data('anchor')

		if ($('.tabs button[data-content=' + href + ']').length) {
			let activeTab = $('.tabs button[data-content=' + href + ']')
			let parent    = activeTab.closest('.tabs_container')

			parent.find('> .tabs button').removeClass('active')
			parent.find('> .tab_content').removeClass('active')

			activeTab.addClass('active')
			$(href).addClass('active')
		}

		$('html, body').stop().animate({
			scrollTop: $(href).offset().top - 100
		}, 1000)
	})


	// Всплывающие окна
	$('.modal_link').click(function(e){
		e.preventDefault()

		let thisBtn = $(this)

		$.fancybox.close()

		$.fancybox.open({
			src  : $(this).data('content'),
			type : 'inline',
			opts : {
				touch : false,
				speed : 300,
				backFocus : false,
				trapFocus : false,
				autoFocus : false,
				mobile : {
				    clickSlide: "close"
				},
				afterLoad : function(instance, current) {
			        if (thisBtn.closest('tr').length) {
			        	let selectVal = thisBtn.closest('tr').find('select').val()
			        	console.log($(current))

			        	$(current.src).find('form input[name="selectForm"]').remove()

			        	$(current.src).find('form').prepend('<input type="hidden" name="selectForm" value="' + selectVal + '" />')
			        }
			    }
			}
		})
	})

	// Увеличение картинки
	$('.fancy_img').fancybox({
		backFocus : false,
		mobile : {
		    clickSlide: "close"
		}
	})


	// Моб. меню
	$('body').on('click', '.mob_menu_link', function(e) {
    	e.preventDefault()

		if( $(this).hasClass('active') ) {
			$(this).removeClass('active')

			$('header .menu').removeClass('active')
		} else {
			$(this).addClass('active')

			$('header .menu').addClass('active')
		}
    })

	// Аккордион
	$('body').on('click', 'header .menu .item button', function(e) {
		e.preventDefault()

		if ($(window).width() < 1024) {
			$('.mob_menu_link').removeClass('active')

			$('header .menu').removeClass('active')
		}
	})


	// Маска ввода
	tel_init()


	// Кастомный select
	// $('select').niceSelect()


	// Label в полях форм
	$('form .field.special .input, .form .field.special textarea').each(function(){
		var field_value = $(this).val()

        if (field_value.length > 0) {
            $(this).addClass('full')
        } else {
            $(this).removeClass('full')
        }
	})

    $('.form .field.special .input, .form .field.special textarea').change(function() {
        var field_value = $(this).val()

        if (field_value.length > 0) {
            $(this).addClass('full')
        } else {
            $(this).removeClass('full')
        }
    })


	// Аккордион
	$('body').on('click', '.accordion .item .open_btn', function(e) {
		e.preventDefault()

		let parent = $(this).closest('.item')
		let accordion = $(this).closest('.accordion')

		if( parent.hasClass('active') ) {
			parent.removeClass('active')
			parent.find('.data').slideUp(300)
		} else {
			accordion.find('.item').removeClass('active')
			accordion.find('.data').slideUp(300)

			parent.addClass('active')
			parent.find('.data').slideDown(300)
		}
	})

	mobile_init()
})

$(window).resize(function(){
	mobile_init()
})

// Вспомогательные функции
function widthScroll() {
    let div = document.createElement('div')
    div.style.overflowY = 'scroll'
    div.style.width = '50px'
    div.style.height = '50px'
    div.style.visibility = 'hidden'
    document.body.appendChild(div)

    let scrollWidth = div.offsetWidth - div.clientWidth
    document.body.removeChild(div)

    return scrollWidth
}


var supportsCssVars = function() {
    var s = document.createElement('style'),
        support

    s.innerHTML = ":root { --tmp-var: bold; }"
    document.head.appendChild(s)
    support = !!(window.CSS && window.CSS.supports && window.CSS.supports('font-weight', 'var(--tmp-var)'))
    s.parentNode.removeChild(s)

    return support
}


function tel_init(){
	if(!$.fn.mask){
		return false;
	}
	$inputs = $('input[type="tel"], input.tel');

	var options =  {
		translation: {
			'+': {pattern: /\+/, optional: true},
			'7': {pattern: /[123456789]/},
			'8': {pattern: /[8]/},
			'9': { pattern: /[0-9]/ },
			'0': { pattern: /[#;,:0-9]/, optional: true},
		},
	};
	$inputs.mask('+7 999 999-99-99', options);

	return true;
}

function mobile_init(){
	let isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
	if(!isMobile){
		$('a[href^="tel:"]').click(function(){
			$.fancybox.open({
				src  : '#callback_modal',
				type : 'inline',
				opts : {
					touch : false,
					speed : 300,
					backFocus : false,
					trapFocus : false,
					autoFocus : false,
					mobile : {
					    clickSlide: "close"
					},
				}
			})
			return false;
		});
	}
}