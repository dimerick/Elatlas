$(document).ready(function() {
    $('#menu-1').lazeemenu();
    $('#menu-2').lazeemenu();
    //Goto Top
    $('#gototop').click(function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 500);
    });
    //End goto top


    $("#show-info-map").click(function () {
        if($("#info-map").hasClass('desplegado')){
            $("#info-map").removeClass('desplegado');
        }else{
            $("#info-map").css('padding', '20px');
            $("#info-map").addClass('desplegado');
        }
    });

    $("body").on("click", '#ocult-info-map', function (event) {
        event.preventDefault();
        $("#info-map").css('padding', '0px');
        $("#info-map").removeClass('desplegado');
    });

    $("#a-li-1").click(function () {
        $(location).attr('href','/v2');
    });
    $("#a-li-1-1").click(function () {
        $(location).attr('href','/publications');
    });
    $("#a-li-3").click(function () {
        $(location).attr('href','/v2/preguntas-frecuentes');
    });
    
// function actionItem(item){
//     $(".item").each(function (index) {
//         if($(this).hasClass('a-one-item')){
//             var id = "#"+$(this).attr('for');
//             $(id).removeClass('active');
//         }else{
//             $(this).removeClass('active');
//         }
//     })
//     if(item.hasClass('a-one-item')){
//         var id = "#"+item.attr('for');
//         $(id).addClass('active');
//     }else{
//         item.addClass('active');
//     }
//
//     }
//
//     $(".item").click(function(event){
//         var item = $(this);
//         actionItem(item);
//
//     });
    
    


});
