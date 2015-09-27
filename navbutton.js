//.buttonがクリックされたら、(1).buttonに.actionを追加 / (2).navigation-contentsに.openを追加 / (3) sectionに.closeを追加する
$(function () {
    $('.button').click(function () {
        $(this).toggleClass('action');
        $('.navigation-contents').toggleClass('open');
        $('segment').toggleClass('close');
    });
});



//windowの高さを取得する
var WindowHeight = $(window).height();
$(function () {
    if (WindowHeight > 0) {
        //class="section"の要素に高さを書き込む
        $('.segment').css('height', WindowHeight + 'px');
    }
});