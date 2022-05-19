let $friend = document.getElementById('friend');
let $friendButton = document.getElementById('friendButton');
let $friendButtonImg = document.getElementById('friendButtonImg');

$friendButton.onclick = function () {
    $friend.classList.toggle('sidebar-content_close');
    $friendButtonImg.classList.toggle('friend-button__img_rotate');
}
