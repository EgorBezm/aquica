window.onload = function() {
    start();
};

function start() {
    let $cards = document.getElementById('slider').children

    for (let i = 0; i !== $cards.length; i++){
        $cards[i].classList.add('slider__col_'+ Number(i+1) +'_active')
    }
}
