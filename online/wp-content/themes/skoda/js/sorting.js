jQuery(document).ready(function($){

    // -----------------------------------------
    // map measurements
    // -----------------------------------------

    var mapW, mapH, mapK;

    function mapParam(){
        var WinWidth = $(window).width();
        if (WinWidth >= 768){
            mapW = 1140;
            mapH = 400;
        }
        else {
            mapW = 500;
            mapH = 208;
        }
        mapK = mapW/mapH;
    }

    function mapWrap(){
        mapParam()
        var MapWidth = $('.mapWrap').width(),
            MapHeight = MapWidth/mapK;
        $('.mapWrap').height(MapHeight);
        var scale = MapWidth/mapW;

        var NewWidth = mapW*scale,
            NewHeight = mapH*scale,
            NewML = (mapW-NewWidth)/ 2,
            NewMT = (mapH-NewHeight)/ 2;

        $('.interactiveContainer').css(
            {
                '-webkit-transform':'scale('+scale+')',
                '-moz-transform':'scale('+scale+')',
                '-o-transform':'scale('+scale+')',
                '-ms-transform':'scale('+scale+')',
                'transform':'scale('+scale+')',
                'margin-top':-NewMT+'px',
                'margin-left':-NewML+'px'
            }
        );
    }

    // -----------------------------------------
    // items
    // -----------------------------------------

    $('.itemContainer .oneItem.hid').remove();
    var names = [],
        towns = [],
        items = $('.itemContainer .oneItem').length,
        rows = items/3;
    rows = Math.ceil(rows);

    for(var i=0; i<items; i++){
        names[i] = $('.itemContainer .oneItem').eq(i).attr('data-name');
        towns[i] = $('.itemContainer .oneItem').eq(i).attr('data-town');
    }

    // -----------------------------------------
    // allocation
    // -----------------------------------------

    function allocation(){
        $('.item_columns .oneItem').remove();
        $('.mob_items .oneItem').remove();
        if($('html').hasClass('desktop')){
            for(var r=0; r<rows; r++){
                for(var c=0; c<3; c++){
                    var el = r*3+c;
                    //$('.tempContainer .oneItem').eq(el).appendTo('.item_columns div[data-column='+c+']');
                    $('.tempContainer .oneItem').eq(0).appendTo('.item_columns div[data-column='+c+']');
                }
            }
        }
        $('.tempMobContainer .oneItem').each(function(){
            $(this).appendTo('.mob_items');
        })


        $('.showContact').click(function(){
            $(this).toggleClass('down')
            $(this).next().slideToggle(300)
        })
    }

    // -----------------------------------------
    // choose select
    // -----------------------------------------

    $('.drops').click(function(){
        $('.sort_box ul').slideToggle(200)
    })
    $('.sort_box ul li').click(function(){
        var thisType = $(this).text(),
            thisSort = $(this).attr('data-sort');
        $('.selected_sort').text(thisType).attr('data-sort',thisSort);
        $('.sort_box ul').slideUp(200)
        sort(thisSort,false);
    })

    // -----------------------------------------
    // choose town
    // -----------------------------------------

    $('.towns li .pnt').click(function(){
        var neededTown = $(this).parents('li').attr('data-town');
        var neededData = $('.selected_sort').attr('data-sort');
        sort(neededData,neededTown);
    })

    // -----------------------------------------
    // sort
    // -----------------------------------------

    function sort(typeAB,byTown){
        var rep = 0;
        names.sort();

        for(var s=0; s<items; s++){
            var one_item = names[s],
                q = s - 1,
                pre_item = names[q];
            (pre_item == one_item)? rep++ : rep = 0;
            if($('html').hasClass('desktop')){
                var clone_item = $('.itemContainer .oneItem[data-name="'+one_item+'"]').eq(rep).clone();
                clone_item.appendTo('.tempContainer');
            }
            var clone_mob_item = $('.itemContainer .oneItem[data-name="'+one_item+'"]').eq(rep).clone();
            clone_mob_item.appendTo('.tempMobContainer');
        }
        if(typeAB == 'town'){
            towns.sort();
            $('.item_list').prepend('<div class="tempTowns"></div>')
            if($('html').hasClass('desktop')){$('.item_list').prepend('<div class="tempDeskTowns"></div>')}
            for(var t=0; t<items; t++){
                var one_town = towns[t];
                $('.tempMobContainer .oneItem[data-town="'+one_town+'"]:first').appendTo('.tempTowns');
                if($('html').hasClass('desktop')){
                    $('.tempContainer .oneItem[data-town="'+one_town+'"]:first').appendTo('.tempDeskTowns');
                }
            }
            var tempHTML = $('.tempTowns').html();
            var tempDHTML = $('.tempDeskTowns').html();
            $('.tempMobContainer').prepend(tempHTML);
            if($('html').hasClass('desktop')){
                $('.tempContainer').prepend(tempDHTML);
                $('.tempDeskTowns').remove();
            }
            $('.tempTowns').remove();
        }


        if(byTown != false){
            var dataTown = byTown;
            $('.item_list').prepend('<div class="tempTowns"></div>')
            $('.tempContainer .oneItem').each(function(){
                var thisEl = $(this);
                if(thisEl.attr('data-town') == dataTown){
                    thisEl.appendTo('.tempTowns');
                }
            })
            var tempHTML = $('.tempTowns').html();
            $('.tempContainer').prepend(tempHTML);
            $('.tempTowns').remove();
        }

        allocation()
    }


    // on load page
    mapWrap();
    sort('up',false);

    // on resize page
    $(window).resize(function(){
        mapWrap();
    })


})