// try {} catch (e) {}
// if($(el).length>0) {}

//@prepros-prepend jquery-3.2.1.min.js
//@prepros-prepend angular.min.js
//@prepros-prepend plugins/pace.min.js
//@prepros-prepend plugins/slick.min.js
//@prepros-prepend plugins/jquery.maskedinput.js
//@prepros-prepend plugins/jquery.fancybox.min.js
//@prepros-prepend plugins/ScrollMagic.min.js
//@prepros-prepend plugins/debug.addIndicators.min.js
//@prepros-prepend plugins/wow.min.js


jQuery(document).ready(function($) {
	var isPageEnd = false;
	var isReturn = false;

	// effects
		new WOW().init();
		var scrollorama = $.superscrollorama();
		//scrollorama.addTween('.spin-it', TweenMax.from( $('.spin-it'), 8, {css:{opacity:1, rotation: 900}, ease:Quad.easeOut}));

	// nav
	    $(window).scroll(function() {
	    	var w = $(window);
	        var scrollTop = w.scrollTop();
	        scrollTop > 30 ? $("header").addClass("scroll") : $(".header").removeClass("scroll")

	        if (!isPageEnd && ($('footer').position().top - scrollTop - w.height() <= 0)) {
	        	isPageEnd = true;
	        	extEvent('pageEnd', null);
	        }

	        if (!isReturn && isPageEnd && (scrollTop < 30)) {
	        	isReturn = true;
	        	extEvent('isReturn', null);
	        }
	    })

	// up
		$('body').on('click','.logo',function () {
			event.preventDefault();
			$('body,html').animate({
			scrollTop: 0
			}, 800);
			return false;
		});

	// jump to
		$('body').on('click',".next-block",function(event) {
			event.preventDefault();
			var $anchor = $(this).attr("href");
			$('html, body').stop().animate({scrollTop: $($anchor).offset().top}, 1000);
		});

	// fancybox
		$('[data-fancybox]').fancybox({
			buttons : [
		        'slideShow',
		        'fullScreen',
		        'thumbs',
		        'close'
		    ],
			afterClose: function() {
				setTimeout(function() { setsize(); },500);
			},
			beforeShow: function() {
				ya.reachGoal('showOrder', null, null, getHashes());
			}
		});
		
	// forms
		$('body').on('submit', 'form', function(event) {
			event.preventDefault();
			$.each($(this).find('input'), function(index, el) {
				if($(el).val()=='') {
					$(el).addClass('error');
				}
			});
		});

		$('body').on('keyup', 'input', function(event) {
			event.preventDefault();
			$(this).removeClass('error');
		});

		$('body').on('focus', '[name="phone"]', function(event) {
			event.preventDefault();
			$(this).get(0).setSelectionRange(0,0);
		});

		$('body').on('keyup','.phone-field',function(event) {
		    $(this).removeClass('error');
		    $(this).next('.tip').removeClass('error');
		});

	// popup on close
		/*$.observedog.wacth_bocks = {};
	    $.observedog.scroll_condition = 0.2;
	    $.observedog.time_condition = 3;
	    $.observedog.popup_call = 'call_popup';
	    $.observedog.start();*/

		//lazyload
			$('.lazybox').each(function(index, el) {
				checkLazyList($(el));	
			});

			function checkLazyList(box) {
				$.get('lazyload.php?content='+$(box).attr('content'),function(data){		
					obj = $.parseJSON(data);
					if(obj.list!=undefined) {
						//console.log(obj.list);	
						loadBlock($(box),obj.list,0);
					}
				});
			}

			function loadBlock(box,list,index) {

				$.get('lazyload.php?content='+$(box).attr('content')+'&list='+list[index],function(data){
					console.log(list[index]);
					(box).append(data);	
					//AngularCompiler.Compile($(box), data);

					$(data).find('[data-init]').each(function(index, el) {
						var fn = window[$(el).attr('data-init')];
						if(typeof fn === 'function') {
							fn();
						}
					});

					if(list[index+1]!=undefined) {
						setTimeout(function(){
							loadBlock(box,list,(index+1));
						},100);
					} else {
						setTimeout(commonInit,500);
						AngularCompiler.Compile($(box), $(box).html());

						if(list.length>1) {
							$('.footer').removeClass('loading')
						}

					}

				});
			}
			
			
			function commonInit() {
				$(".phone-field").mask("+7 (999) 999 99 99");
				selects();
				slider();

				console.log('commonInit',ymaps);
				
				
			}
			commonInit();
});

	var geolocation;
	var phone = '';
	var phone_sms = '';
	var phones = {// ['show on page','send sms']
		'main' :['+7 (800) 511-36-23','+79090917790'],
		'alt': ['+7 (800) 511-36-23','+79123085170']
	}
	var geoalt = {
		countries : ['Казахстан'],
		regions : ['Ханты-Мансийский автономный округ'],
		cities: ['Челябинск','Курган','Уфа','Пермь','Екатеринбург','Тюмень']
	}
	ymaps.ready(initYmaps);
	function initYmaps() {
		console.log('initYmaps',ymaps);
		geolocation = ymaps.geolocation;
		if (geolocation) {
		    console.log(geolocation.country,geolocation.region,geolocation.city);
		    if(geoalt.countries.indexOf(geolocation.country) != -1) {
		    	phone = phones.alt[0];
		    	phone_sms = phones.alt[1];
		    } 
		    
		    if(geoalt.regions.indexOf(geolocation.region) != -1) {
		    	phone = phones.alt[0];
		    	phone_sms = phones.alt[1];
		    } 

		    if(geoalt.cities.indexOf(geolocation.city) != -1) {
		    	phone = phones.alt[0];
		    	phone_sms = phones.alt[1];
		    } 

		    if(phone == '') {
		    	phone = phones.main[0];
		    	phone_sms = phones.main[1];
		    }

		    $('.phone').text(phone).attr('tel',phone);

		} else {
		    console.log('Не удалось установить местоположение');
		}
	}
	
// sliders
	function slider() {
		$('.slider-for').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  fade: true,
		  asNavFor: '.slider-nav'
		});
		$('.slider-nav').slick({
		  slidesToShow: 6,
		  asNavFor: '.slider-for',
		  focusOnSelect: true,
		  arrows: false
		});

		$('.documents-slider').slick({
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  arrows: false,
		  dots: true
		});
	}

// selects
	function selects() {

		$('select').each(function(){
		    var $this = $(this), numberOfOptions = $(this).children('option').length;

		    $this.addClass('select-hidden');
		    $this.wrap('<div class="select"></div>');
		    $this.after('<div class="select-styled"></div>');

		    var $styledSelect = $this.next('div.select-styled');
		    $styledSelect.text($this.children('option').eq(0).text());

		    var $list = $('<ul />', {
		        'class': 'select-options'
		    }).insertAfter($styledSelect);

		    for (var i = 0; i < numberOfOptions; i++) {
		        $('<li />', {
		            text: $this.children('option').eq(i).text(),
		            rel: $this.children('option').eq(i).val()
		        }).appendTo($list);
		    }

		    var $listItems = $list.children('li');

		    $styledSelect.click(function(e) {
		        e.stopPropagation();
		        $('div.select-styled.active').not(this).each(function(){
		            $(this).removeClass('active').next('ul.select-options').hide();
		        });
		        $(this).toggleClass('active').next('ul.select-options').toggle();

		    });

		    $listItems.click(function(e) {
		        e.stopPropagation();
		        $styledSelect.text($(this).text()).removeClass('active');
		        $this.val($(this).attr('rel'));
		        $list.hide();
		        console.log($this.val());
		    });

		    $(document).click(function() {
		        $styledSelect.removeClass('active');
		        $list.hide();
		    });

		});
	}

/*function call_popup() {
	if(!localStorage.leaving) {

		$.fancybox.close();
		$.fancybox.open({
			src  : '#leaving-page',
			type : 'inline'
		});
		$.od.popup_opened = false;

	}
}*/

function getHashes() {
	return window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
}

var app = angular.module("app",[]).controller("appController", function($scope,$http,$timeout) {
	
	$scope.accept = true;
	$scope.name = '';
	$scope.setGa = function(){
		try {
			var hashes = getHashes();
			angular.forEach(hashes,function (h,i) {
				var hash = h.split('=');
				var utm_type = hash[0].split('_');
				//console.log(utm_type,hash);
				if(angular.isUndefined($scope.form.utm[hash[0]])) {
					$scope.form.utm[hash[0]] = '';
				}
				$scope.form.utm[hash[0]] = window.decodeURIComponent(hash[1]);
			});
			//console.log($scope.form);
		} catch (e) {
			console.log('UTM init error',e)
		}
		/*
		try {
			var tracker = ga.getAll()[0];
			$scope.form.utm.cid = tracker.get('clientId');
			return $scope.form.cid;
		} catch (e) {
			console.log('CID init error',e)
		}
		*/
	}

	$scope.resetForm = function () {
		$scope.form = {
			utm:{
				cid:''
			},
			phone:''
		};
		$scope.setGa();
	};
	$scope.resetForm();


	$scope.processing = false;
	$scope.sendForm = function(title,type,thx) {

		$scope.setGa();
		$scope.processing = true;
		var data = {
			title:title,
			type:type,

			//name:$scope.form.name,
			phone:$scope.form.phone,
		};

		switch (type) {
			case 'normal':
				break; 
			case 'region':
				data.region = $scope.form.region;
				break; 
			case 'calc':
				data.brand = $('#itemBrand').val();
				data.flavour = $('#itemFlavour').val();
				data.amount = $('#itemAmount').val();
				break; 
			case 'offer':
				data.field = $('#itemField').val();
				break; 
			case 'download':
				break; 
			/*case 'date':
				data.date = $scope.form.date;
				break; */
		}

		var pass = true;

		angular.forEach(data,function(val,i){
			if(angular.isUndefined(val)) {
			  pass = false;
			}
			if(val=='') pass = false;
		})
		
		$scope.setGa();
		data.cid = $scope.form.utm.cid;
		data.utm = $scope.form.utm;

		var fn = window['beforeSend'];
		if(typeof fn === 'function') {
			fn(data);

		}

		if (type=='calc'){
			data.info = $scope.form.info;
		}

		data.phone_sms = phone_sms; 
		//console.log(geolocation);
		data.geolocation = geolocation; 

		if (pass) {
			$http.post('serv/php/send.php',JSON.stringify(data)).then(function(response){

				$scope.processing = false;
				$scope.name = $scope.form.name;
				$scope.resetForm();

				$.od.popup_opened = true;
				localStorage.leaving = true;

				$.fancybox.close();
				$.fancybox.open({
					src  : '#'+thx,
					type : 'inline'
				});

				if (type=='download') {
	        		var linkElement = document.createElement('a');
			        try {
			            linkElement.setAttribute('href', '/files/Pricelist.pdf');
			            linkElement.setAttribute("download", 'Прайс лист.pdf');

			            var clickEvent = new MouseEvent("click", {
			                "view": window,
			                "bubbles": true,
			                "cancelable": false
			            });
			            linkElement.dispatchEvent(clickEvent);
			        } catch (ex) {
			            console.log(ex);
			        }
	        	}

				var fn = window['afterSend'];
				if(typeof fn === 'function') {
					fn(data);

				}
			})
		}
	}

	$timeout(function(){
		$scope.setGa();
		var fn = window['gaInit'];
		if(typeof fn === 'function') {fn($scope.form.utm);}
		$timeout(function(){
			$scope.setGa();
			var fn = window['gaInit'];
			if(typeof fn === 'function') {fn($scope.form.utm);}
		},10000);
	},1000);
});

var AngularCompiler = (function () {
    var AngularCompiler = function () { };

    AngularCompiler.Compile = function ($targetDom, htmlToCompile) {
        var $injector = angular.injector(["ng", 'app']);

        $injector.invoke(["$compile", "$rootScope", function ($compile, $rootScope) {
            //Get the scope of the target, use the rootScope if it does not exists
            var $scope = $targetDom.scope();
            $compile($targetDom)($scope || $rootScope);
            $rootScope.$digest();
        }]);
   }
   return AngularCompiler;
})();

$.od = $.observedog = {
	sys_state : true,
	start_focus_time : undefined,
	stop_focus_time : undefined,
	last_user_interaction : undefined,

	focus_time : undefined,
	total_focus_time : 0,

	user_state : false,

	last_scroll_top : 0,
	scroll_up: 0,
	scroll_down: 0,
	scroll_total: 0,

	total_height: 0,

	scroll_condition : 1.5,
	time_condition : 12,

	wacth_bocks: {
		'#home':5,
		'#services':8,
		'#events':5
	},
	wacth_time : {},

	popup_call : '', 
	popup_opened : false,

	sys_check:function () {
		var loaded = true; 
		
		if(!loaded) {console.log('dependency missing - jquery.inview'); $.od.sys_state = false}
	},

	start: function () {
		// checking if all nessesary are loaded.
		$.od.sys_check(); 
		if($.od.sys_state) {
			$.od.total_height = $('body').height();

			// binding focus dependency
			$.od.window_focused();
			$(window).on("focus", $.od.window_focused);
			$(window).on('unload', $.od.window_unfocused);
			$(window).on("blur", $.od.window_unfocused);

			// binding scroll dependency
			$(window).on("scroll", $.od.window_scrolled);
			$(window).on("mouseleave", $.od.window_mouse);
			$(window).on("mouseenter", $.od.window_focused);

			setInterval($.od.check_actions, 250);

			$.each($.od.wacth_bocks, function(obj, val) {
				$.od.wacth_time[obj] = 0;
				$(obj).bind('inview', function(e, isInView, visiblePartX, visiblePartY) {
				  var elem = $(this);

				  if (isInView) {
				  	$(elem).addClass('inview');
				  	if (visiblePartY == 'top') {
				        $.data(elem,'seenTop', true);
				      } else if (visiblePartY == 'bottom') {
				        $.data(elem,'seenBottom', true);
				      } else {
				        $.data(elem,'seenTop', true);
				        $.data(elem,'seenBottom', true);
				      }
				      
				  } else {
				  	$(elem).removeClass('inview');
				  	$.data(elem,'seenTop', false);
				    $.data(elem,'seenBottom', false);
				  }
				});

			});
		}
	},

	show_popup: function (force) {
		force = typeof force !== 'undefined' ? force : 'false';
		$.od.window_unfocused();

		var block_view = true;
		$.each($.od.wacth_bocks, function(obj, val) { 
			//console.log(obj+'-'+$.od.wacth_time[obj]/4);
			if($.od.wacth_time[obj]/4<val) {
				block_view = false;
			}
		});
		//console.log('blocks '+block_view);
		//console.log('elapsed time '+$.od.total_focus_time);

		if(
			($.od.time_condition*1000<$.od.total_focus_time && 
			block_view == true && 
			$.od.scroll_total > $.od.total_height*$.od.scroll_condition && 
			$.od.popup_opened==false)
			||
			force == true
		){
			if ($.isFunction(window[$.od.popup_call])) { 
                window[$.od.popup_call](); 
            }
			$.od.popup_opened = true;
		}
	},

	check_actions: function () {
		if ($.od.start_focus_time != undefined) {
	        var curr_time = new Date();
	        //Lets just put it for 4.5 minutes                                                                                
	    if((curr_time.getTime() - $.od.last_user_interaction.getTime()) > (270 * 1000)) {
	            //no interaction for last 5 min - idle
	            $.od.window_unfocused();
	        }
	    }
	    

	    $.each($.od.wacth_bocks, function(obj, val) {
	    	if($(obj).hasClass('inview')) {
	    		$.od.wacth_time[obj]++; 
	    	}
	    });
	    
	}, 

	window_mouse : function(event) {
		//console.log(event.clientY);
		if(event.clientY<10) {
			$.od.show_popup();
		}
	},

	window_scrolled : function(event) {
		var st = $(window).scrollTop();
		var s_diff = st-$.od.last_scroll_top;
		   if (st > $.od.last_scroll_top){ $.od.scroll_down = s_diff;  } 
		   else {s_diff = s_diff*-1; $.od.scroll_up = s_diff;   }
		$.od.scroll_total += s_diff;
		$.od.last_scroll_top = st;
		$.od.last_user_interaction = new Date();
	},

	window_focused: function (event) {
	    $.od.last_user_interaction = new Date();
	    if ($.od.start_focus_time == undefined) {
	    	$.od.start_focus_time = new Date();                                                               
	    }
	},

	window_unfocused: function (event) {
	    if ($.od.start_focus_time != undefined) {
		    $.od.stop_focus_time = new Date();
		    $.od.focus_time = $.od.stop_focus_time.getTime() - $.od.start_focus_time.getTime();
		    $.od.total_focus_time = $.od.total_focus_time + $.od.focus_time;
		    $.od.start_focus_time = undefined;
	    }
	},		

	check_time : function () {
		var curr_time = new Date();
		$.od.focus_time = curr_time.getTime() - $.od.last_user_interaction.getTime();
		 $.od.total_focus_time = $.od.total_focus_time + $.od.focus_time;
	}
}
