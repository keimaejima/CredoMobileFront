/*Twitter*/

//チェックするURL
var url = "https://www.google.com/";

//Ajax通信
$.ajax({

    url: "http://urls.api.twitter.com/1/urls/count.json?url=" + encodeURIComponent(url),
    dataType: "jsonp",

    //取得に成功した時の処理
    success: function (obj) {
        //ツイートカウントをHTML([ID=tweet]の要素内)へ書き出す
        $("#tweet").html(obj.count);
    },

    //取得に失敗した時の処理
    

    //完了した時の処理
    complete: function () {
        return false;
    }

});