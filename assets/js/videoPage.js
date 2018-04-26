var msgList; //撈彈幕時間留言資料

//youtube iframe player API
var tag = document.createElement('script');
tag.id = 'iframe-demo';
tag.src = 'https://www.youtube.com/iframe_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('videoIframe', {
        events: {
          'onReady': onPlayerReady,
          'onStateChange': onPlayerStateChange
        }
    });
}
//onPlayerReady(youtube API) 影片load完成後執行撈留言資料完成走ajax 用js撈
//每1秒去執行danmoo()這支程式 (這支程式在比對資料庫的留言時間跟影片時間是否一致,一致則會show)
function onPlayerReady(event) {
    showMsg();
    setInterval(danmoo, 1000);
}

//onPlayerStateChange 影片狀態(youtube API)
//1是play 2是pause 依照player狀態去進行label彈幕的動畫paused或running
function onPlayerStateChange(event) {
    console.log(event.data);
    if(event.data === 2){
        $('.videoPage-tv label').css('animation-play-state','paused');
    }else if(event.data === 1){
        $('.videoPage-tv label').css('animation-play-state','running');
    }
    
}

//彈幕的時間資料與影片時間比對, 有相同的則show出
//設定彈幕的隨機高度與顏色
function danmoo() {
    // console.log(player.getPlayerState());
    if (player.getPlayerState() === 1) {
        var video_time = getVideoCurrentTime();
        msgList.forEach(function(item, index){
            if (video_time === item.video_time){
                var $label = $('<label></label>').text(item.message);
                var colortxt = getReandomColor();  
                var topPos = generateMixed(3) % 450;  
                if(topPos < 30){
                    topPos = 30;
                }
                $label.css('color', colortxt); 
                $label.css('top', topPos + 'px'); 
                $('#videoPage-tv').append($label);

            }
        });
    }
}
//random color 
    function getReandomColor(){  
        return '#'+(function(h){  
        return new Array(7-h.length).join("0")+h  
        })((Math.random()*0x1000000<<0).toString(16))  
    }  
  
//random position    
    var jschars = ['0','1','2','3','4','5','6','7','8','9'];    
    function generateMixed(n) {    
        var res = "";    
        for(var i = 0; i < n ; i ++) {    
            var id = Math.ceil(Math.random()*9);    
            res += jschars[id];    
        }    
        return res;    
    }   

//彈幕可用enter送出的keypress
$('#videoMsgInsert').keypress(function(event){
    // console.log(event.which);
    if(event.which == 13){
        $('#videoMsgInsert-btn').click();
    }
})

//彈幕留言發送
//getVideoCurrentTime()抓取影片正確時間
//判斷發送前是否有填留言
//fetch送出資料包含影片id 
document.getElementById('videoMsgInsert-btn').onclick = function(){
    var msg = document.getElementById('videoMsgInsert');
    var video_time = getVideoCurrentTime(1);
    if(msg.value ==""){
        alert('請輸入內容');
        return;
    }else{
        fetch('../common/videoMsgInsert.php' + 
            '?msg=' + $(msg).val() + 
            '&video_time=' + video_time + 
            '&video_id=' + $('#video_id').val()
            ).then(function(response){
            showMsg();
        });
    }
};




//抓取影片正確時間
//player.getCurrentTime() youtubeAPI
//對影片時間補零 以符合資料庫格式
function getVideoCurrentTime(offset = 0) {
    var currentTime = player.getCurrentTime() + offset;
    var timeS = parseInt(currentTime % 60).toString();
    var timeM = parseInt((currentTime / 60) % 60).toString();
    var timeH = parseInt(currentTime / (60 * 60)).toString();
    return video_time = 
        ((timeH.length === 1) ? '0' + timeH : timeH) + ':' + 
        ((timeM.length === 1) ? '0' + timeM : timeM) + ':' + 
        ((timeS.length === 1) ? '0' + timeS : timeS);
}

//彈幕留言板 撈資料呈現
function showMsg() {
    var aa = document.querySelector('.videoPage-maxheight');
    while(aa.firstChild){
        aa.removeChild(aa.firstChild);
    }
    fetch('../common/videoMsg.php?isReturn=1&video_id=' + $('#video_id').val()).then(function(response){
        return response.json();
    }).then(function(json){
        msgList = json;
        json.forEach(function(item,index){
             $(aa).append(`<div class='videoPage-msgbox2 col-sm-12 col-xs-12'>
                        <div class='videoPage-msgtime col-sm-2 col-xs-2'>
                            <span>`+item.video_time+`</span>
                        </div>
                        <div class='videoPage-msgtxt col-sm-8 col-xs-8'>
                            <span>`+item.message+`</span>
                        </div>  
                     </div>`);
        });
        $('#videoMsgcount').text(json.length);
        $('#videoMsgInsert').val('');
    });
}




//貓頭鷹slick

var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    // nav:true,
    margin:10,
    dots:true,
    autoplay:true,
    autoplaySpeed:500,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },            
        960:{
            items:5
        },
        1200:{
            items:6
        }
    }
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});