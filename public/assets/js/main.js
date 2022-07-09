$(function(){
    var searchHolder = $('#search-holder');
    var searchOpen = false;
    var stage = $('#stage');
    var menuSwitch = $('#menu-switch');
    var mainMenu = $('#main-menu')

    menuSwitch.click(function(){
        menuSwitch.toggleClass('open');
        if(menuSwitch.hasClass('open')){
            mainMenu.fadeIn();
        } else {
            mainMenu.fadeOut();
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'lang' : lang
        }
    });

    function toggleSearch() {
        if (searchOpen) {
            searchHolder.slideUp();
        } else {
            searchHolder.slideDown(400, function () {
                searchHolder.find('input').focus();
            });
        }
        searchOpen = !searchOpen;
    }

    $('#btn-search').click(function () {
        toggleSearch();
        return false;
    });

    $('#search-close').click(function () {
        searchOpen = false;
        searchHolder.slideUp();
        return false;
    });

    $('.swiper-container').each(function(){
        var elem = $(this);
        var id = elem.attr('id');
        var data = {
            speed: 600,
            loop : true,
            autoplay: {
                delay: 5000
            },
            pagination: {
                el: elem.find('.swiper-pagination'),
                clickable: true
            }
        };

        if(id === "main-slider"){
            data.autoplay = false;
            data.loop = false;
        }

        if(id === "brands-slider"){
            data.slidesPerView = 4;
            data.spaceBetween = 30;
            data.slidesPerGroup = 4;
            data.breakpoints = {
                767 : {
                    slidesPerView : 3,
                    slidesPerGroup : 3,
                    spaceBetween : 16
                }
            };
        }

        var swiper = new Swiper(elem, data);
    });

    $('.video-card').click(function(){
        stage.html('<div class="container"><div class="row justify-content-center"><div class="col-md-10 col-lg-8 col-xl-10"><div class="video-holder">' + $(this).data('code') + '</div></div></div></div><div id="stage-close"></div>').css('display','flex');
        return false;
    });

    stage.on('click','#stage-close',function(){
        stage.empty().hide();
        return false;
    });

    if(stage.hasClass('has-message')){
        setTimeout(function(){
            stage.empty().fadeOut();
        },2000);
    }
    
    /*
    var animationContainer = $('#cta');
    if(animationContainer.length > 0){
        var animationLayer = animationContainer.find('.layer');
        animationContainer.mousemove(function(event){
            var moveY = (event.clientY - animationContainer.offset().top + $(window).scrollTop()) * 0.05;
            var moveX = (event.clientX - animationContainer.offset().left + $(window).scrollLeft()) * 0.05;
            animationLayer.css('margin-left', moveX + 'px');
            animationLayer.css('margin-top', moveY + 'px');
        });
    } */

    $('.form-async').submit(function(){
        var form = $(this);
        stage.empty().css('display','flex');

        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            dataType: 'json',
            success: function(response){
                if (response.redirect !== undefined && response.redirect !== "") {
                    setTimeout(function () {
                        window.location.href = response.redirect;
                    }, 1600);
                }
                if (response.clear !== undefined && response.clear) {
                    form.find('.form-control').val('');
                }
                stage.html('<p class="message-holder">' + response.message + '</p>');
            },
            error: function(err){
                stage.html('<p class="message-holder">' + errDefault + '</p>');
                console.log(err.responseText);
            },
            complete: function(){
                setTimeout(function(){
                    stage.empty().fadeOut();
                },2400);
            }
        });
        return false;
    });
});
