$(document).ready(function(){
    $('.mainsidebar').mouseenter(function(){
        $('.mainsidebar').animate(css({width: '230px'}),400);
    };);

    function UnhideFun(){
        $('.mainsidebar').animate(css({width: '230px'}),400);
    };

    $('.mainsidebar').mouseout(HideFun);

    function HideFun(){
        $('.mainsidebar').animate(css({width: '-230px'}),400);
    };

});