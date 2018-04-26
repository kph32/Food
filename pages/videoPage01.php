<?php 
	$video_id = $_REQUEST['video_id'];
	$videoSrc = 
		$video_id == '4' ? "https://www.youtube.com/embed/9HNIR-0wQFw?enablejsapi=1" 
		: ($video_id == "2" ? "https://www.youtube.com/embed/Qv6xhJemjjk?enablejsapi=1" 
			: ($video_id == "3" ? "https://www.youtube.com/embed/aAyvLDLYMGA?enablejsapi=1"
				:($video_id == "1" ? "https://www.youtube.com/embed/e7db6mTd51w?enablejsapi=1"
					:"https://www.youtube.com/embed/MNx134zUwm0?enablejsapi=1")));
	include '../views/header.php';
	include '../common/Navbar.php';
	include '../common/Searchbox.php';
	
?>
<input type="hidden" id="video_id" value="<?=$video_id?>">
	<div class="videoPage">
		<div class="videoPage-container">
			<div class="videoPage-title col-sm-12 col-xs-12">
				<img src="../assets/images/videoArea/videoTitle.png" />
			</div>
			<!-- 影片START -->
			<div class="videoPage-tv col-sm-8 col-xs-12" id="videoPage-tv">
				<iframe id="videoIframe" width="800" height="450" src="<?=$videoSrc?>" frameborder="0" allowfullscreen class="col-xs-0"></iframe>

				<iframe width="100%" height="400" src="https://www.youtube.com/embed/e7db6mTd51w" frameborder="0" allowfullscreen class="col-sm-0"></iframe>
			</div>
			<!-- 影片END-->

			<!-- 彈幕留言板 -->
			<div class="videoPage-msg col-sm-4 col-xs-12">
				<div class="videoPage-msgbox col-sm-12 col-xs-12">
					<div class="videoPage-msgcount col-sm-12 col-xs-12">本影片共計
						<span id="videoMsgcount"></span>
					筆彈幕</div>
					
					<div class="videoPage-maxheight">
						<!-- 彈幕 start-->
						
						<!-- 彈幕 end-->
					</div>

					<div class="videoPage-msgSend col-sm-12 col-xs-12">
						<input type="text" id="videoMsgInsert">
						<div id="videoMsgInsert-btn">送出</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="videoPage-bottom col-sm-12 col-xs-12">
		<div class="owl-carousel owl-theme">
		     <a href="videoPage01.php?video_id=4"><div class="item"><img src="../assets/images/videoArea/video-001.jpg"></div></a>
		    <a href="videoPage01.php?video_id=2"><div class="item"><img src="../assets/images/videoArea/video-002.jpg"></div></a>
		    <a href="videoPage01.php?video_id=3"><div class="item"><img src="../assets/images/videoArea/video-003.jpg"></div></a>
		    <a href="videoPage01.php?video_id=1"><div class="item"><img src="../assets/images/videoArea/video-004.jpg"></div></a>
		    <a href="videoPage01.php?video_id=5"><div class="item"><img src="../assets/images/videoArea/video-005.jpg"></div></a>
		</div>

	</div>

<?php 
	include '../views/footer.php';
?>