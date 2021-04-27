$(function(){
	if ( $(window).width() > 1024 ) {
		// Анимации
		AOS.init({
			offset: 200,
			delay: 200,
			duration: 1000,
			once: true
		})
	}

	//  Запуск видео при наведении
	$('.logistics .item').hover(function() {
		$(this).find('video').trigger('play')
	}, function() {
		$(this).find('video').trigger('pause')
	});
})


$(window).load(function(){
	// Шапка
	headerHeight = $('header').innerHeight()

	$('header').wrap('<div class="header_wrap" style="height: ' + headerHeight + 'px"></div>')

	// Шапка
	if( $(window).scrollTop() > $(window).height()/5 ) {
		$('header').addClass('fixed')
	} else {
		$('header').removeClass('fixed')
	}

	$(window).scroll(function(){
		if( $(window).scrollTop() > $(window).height()/3 ) {
			$('header').addClass('fixed')
		} else {
			$('header').removeClass('fixed')
		}
	})

	if( $('.use_sector .grid').length) {
		if ($(window).width() < 1024 && $(window).width() > 479 ) {
			inView('.use_sector .grid')
				.on('enter', function(el){
				    setTimeout(function(){
				    	$(el).find('.item:eq(0)').addClass('visible')
				    }, 600)

				    setTimeout(function(){
				    	$(el).find('.item:eq(1)').addClass('visible')
				    }, 800)

				    setTimeout(function(){
				    	$(el).find('.item:eq(2)').addClass('visible')
				    }, 1600)

				    setTimeout(function(){
				    	$(el).find('.item:eq(3)').addClass('visible')
				    }, 1800)
				})
		} else{
			if ($(window).width() < 480) {
				inView('.use_sector .grid .item')
					.on('enter', function(el){
					    setTimeout(function(){
					    	$(el).addClass('visible')
					    }, 300)
					})
				}
		}
	}


	// Анимация первого экрана
    setTimeout(function(){
	    setTimeout(function(){
	    	$('header').addClass('animated')
	    	$('.main_banner .abs').addClass('animated')
	    }, 200)

	    setTimeout(function(){
	    	$('.main_banner').addClass('animated')
	    }, 500)

	    setTimeout(function(){
	    	$('.main_banner .lines').addClass('animated')
	    	$('.main_banner .box_info').addClass('animated')
	    }, 900)

	    setTimeout(function(){
	    	$('.main_banner .columns .col_l').addClass('animated')
	    }, 1100)
    }, 300)
})


$(window).resize(function(){
	// Шапка
	if( $(window).scrollTop() > $(window).height()/5 ) {
		$('header').addClass('fixed')
	} else {
		$('header').removeClass('fixed')
	}

	headerHeight = $('header').innerHeight()

	$('.header_wrap').css('height', headerHeight);

	if ( $(window).width() > 1024 ) {
		// Анимации
		AOS.init({
			offset: 200,
			delay: 200,
			duration: 1000,
			once: true
		})
	}
})