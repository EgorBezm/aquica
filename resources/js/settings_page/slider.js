let $selected = document.getElementById('selected');

window.onload = function() {
    start();
};

function start() {
    let $slider = document.getElementById('slider');
    let $cards = $slider.children;
    let transform = $cards[$cards.length - 1].getBoundingClientRect().x - window.innerWidth

    $slider.style.transform = 'translateX(-' + transform + 'px)';
}

function pick($el) {
    if ($el.checked) {
        if ($selected.innerHTML >= 5) {
            $el.checked = false;
            return false
        }
        $selected.innerHTML++;
    }
    else {
        $selected.innerHTML--;
    }

    if ($selected.innerHTML === '5') {
        document.getElementsByClassName('form__selected')[0].classList.add('form__selected_success')
    }
    else {
        document.getElementsByClassName('form__selected')[0].classList.remove('form__selected_success')
    }
}

function send() {
    if ($selected.innerHTML === '5') {
        document.getElementById('setting-form').submit();
    }
}
