jQuery(document).ready(function($){

    // banner measurements

    var bannerW = 1141,
        bannerH = 560,
        bannerK = bannerW/bannerH;

    function bannerWrap(){
        var BannerWidth = $('.bannerWrap').width(),
            BannerHeight = BannerWidth/bannerK;
        $('.bannerWrap').height(BannerHeight);
    }

    // banner costructor

    $('#banner li').each(function(){
        var linkClone = $(this).find('.upLink');
        var readyLink = $(this).find('.readyLink');
        $(this).prepend('' +
            '<div class="forLink">' +
                '<div class="fl_1">' +
                    '<div class="fl_2">' +
                        '<div class="fl_3">' +
                            '<div class="fl_4">' +
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>'
        )
        $(this).find('.forLink').prepend(readyLink.clone().addClass('no-image').removeClass('readyLink'))
        $(this).find('.fl_1').prepend(readyLink.clone().addClass('no-image').removeClass('readyLink'))
        $(this).find('.fl_2').prepend(readyLink.clone().addClass('no-image').removeClass('readyLink'))
        $(this).find('.fl_4').prepend(linkClone.addClass('fl_5'))
    })

    // banner slider

    var li_length = $('#banner ul li').length;


    function BannerSlides(){
        var current_li = $('#banner ul li.current').index();
        current_li++;
        console.log(current_li);
        //console.log($('#banner ul li.current').attr('data-el'));
        if(current_li < li_length){

            var current = $('#banner ul li.current');
            current.next().addClass('next_A');
            $('#banner .next_A .forLink').fadeIn(500,function(){
                current.next().addClass('next_B');
                $('#banner .next_B .readyLink').fadeIn(500,function(){
                    current.removeClass('current');
                    current.next().addClass('current').removeClass('next_A next_B').attr('style','');
                    //current.next().addClass('current').removeClass('next_B');
                })
            })
        }
        else {

            var current = $('#banner ul li.current');
            $('#banner ul li:first').addClass('next_A');
            $('#banner .next_A .forLink').fadeIn(500,function(){
                $('#banner ul li:first').addClass('next_B');
                $('#banner .next_B .readyLink').fadeIn(500,function(){
                    current.removeClass('current');
                    $('#banner ul li:first').addClass('current').removeClass('next_A next_B').attr('style','');
                })
            })
        }



        //$('#banner ul li:last').prev().addClass('next_A')
        //$('#banner .next_A .forLink').fadeIn(500,function(){
        //    $('#banner ul li:last').prev().addClass('next_B')
        //    $('#banner .next_B .readyLink').fadeIn(500,function(){
        //        $('#banner ul li:last').prev().appendTo('#banner ul').removeClass('next_A next_B')
        //    })
        //})

    }

    setTimeout(function(){
        //$('#banner ul li:last').prev().addClass('next_A')
        //$('#banner .next_A .forLink').fadeIn(500,function(){
        //    $('#banner ul li:last').prev().addClass('next_B')
        //    $('#banner .next_B .readyLink').fadeIn(500,function(){
        //        $('#banner ul li:last').prev().appendTo('#banner ul').removeClass('next_A next_B');
        //        setInterval(function(){
        //            BannerSlides()
        //        },4000)
        //    })
        //})

        var current = $('#banner ul li.current');
        current.next().addClass('next_A');
        $('#banner .next_A .forLink').fadeIn(500,function(){
            current.next().addClass('next_B');
            $('#banner .next_B .readyLink').fadeIn(500,function(){
                current.removeClass('current');
                current.next().addClass('current').removeClass('next_A next_B').attr('style','');
                //setInterval(function(){
                //    BannerSlides()
                //},4000)
            })
        })

    },14000)



    // on load page
    bannerWrap();

    // on resize page
    $(window).resize(function(){
        bannerWrap();
    })
})