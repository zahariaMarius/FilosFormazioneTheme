<<<<<<< HEAD

/*
jQuery è già installato da wordpress, quindi non serve aggiungerlo.
Unica nota è che non lo troverete assegnato alla variabile di window `$`, bensì alla variabile `jQuery`,
quindi per prima cosa si può assegnarlo alla variabile $ se siete abituati ad utilizzarlo così.
*/
window.$ = window.jQuery;


=======

/*
jQuery è già installato da wordpress, quindi non serve aggiungerlo.
Unica nota è che non lo troverete assegnato alla variabile di window `$`, bensì alla variabile `jQuery`,
quindi per prima cosa si può assegnarlo alla variabile $ se siete abituati ad utilizzarlo così.
*/
window.$ = window.jQuery;
$(".card mb-3").hover(function () {
    $(".card-img-top").stop().animate({
        opacity: 1.0
        }, "slow");
    $(".bordo").fadeIn("slow");
});

$(".card mb-3").addClass("color");

>>>>>>> e0b5e6e685acbc37c062f2dc2b837091ef01abdc
