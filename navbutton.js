//.buttonがクリックされたら、(1).buttonに.actionを追加 / (2).navigation-contentsに.openを追加 / (3) sectionに.closeを追加する
$(function () {
    $('.hb-navigation .button').click(function () {
        $(this).toggleClass('action');
        $('.navigation-contents').toggleClass('open');
        $('segment').toggleClass('close');
    });
});