<?php 
	// include '../common/common.php';
	include '../views/header.php';
?>
	<div class="memArea">
		<div class="memArea-container">
			<div class="memArea-All col-sm-12 col-xs-12">
				<div class="memArea-title col-sm-12">
					<a href="../index.html">
						<img src="../assets/images/Navbar-logo.png" alt="回首頁" class="col-sm-1 col-xs-0">
					</a>
					<div class="memArea-titleTxt col-sm-10 col-xs-12">會員專區</div>
				</div>
				<div class="memArea-box col-sm-2 col-xs-12"  id="memtab">
					<div class="memArea-tab col-xs-3" onclick="memArea(event,'memtab-1')">
					<img src="../assets/images/memarea-info.png">基本資料</div>

					<div class="memArea-tab col-xs-3" onclick="memArea(event,'memtab-2')">
					<img src="../assets/images/memarea-msg.png">留言紀錄</div>

					<div class="memArea-tab col-xs-3" onclick="memArea(event,'memtab-3')">
					<img src="../assets/images/memarea-collect.png">收藏攤商</div>

					<div class="memArea-tab col-xs-3" onclick="memArea(event,'memtab-4')">
					<img src="../assets/images/memarea-order.png">訂單紀錄</div>
				
				</div>
				<div class="memArea-box2 col-sm-10 col-xs-12">
					<div class="memArea-contain col-sm-12 col-xs-12">
						
						<!-- 會員資料編輯 -->
						<!-- class="memArea-contain3"在js使用 -->
						<div class="memArea-info col-sm-12 memArea-contain3" id="memtab-1">
							<div class="con1 col-sm-1 col-xs-0"></div>
							<div class="col-sm-10">
								<div class="memArea-contain-title">會員資料編輯</div>
								<form>
								<div class="memArea-info-account"><label for="memaccount">帳號：</label>
								<input type="text" name="" id="memaccount"></div>
								
								<div class="memArea-info-password"><label for="mempsw">密碼：</label>
								<input type="text" name="" id="mempsw"></div>
								
								<div class="memArea-info-checkpsw"><label for="memckpsw">確認密碼：</label>
								<input type="text" name="" id="memckpsw"></div>
								
								<div class="memArea-info-nickname"><label for="memnick">暱稱：</label>
								<input type="text" name="" id="memnick"></div>
								
								<div class="memArea-info-email"><label for="mememail">電子信箱：</label>
								<input type="text" name="" id="mememail"></div>
								
								<div class="memArea-info-add"><label for="memadd">所在地區：</label>
								<input type="text" name="" id="memadd"></div>
				
								<input type="submit" name="submit" value="更新" id="memsubmit">
								</form>
							</div>
						</div>


						<!-- 會員留言紀錄 -->
						<div class="memArea-msg col-sm-12 memArea-contain3" id="memtab-2">
							<div class="con1 col-sm-1 col-xs-0"></div>
							<div class="col-sm-10">
								<div class="memArea-contain-title">會員留言紀錄</div>
								<div class="memArea-box3 col-sm-12">
									<div class="col-sm-10">
										<div class="memArea-msg-title"><span>攤商名稱：<span>好兇蛋餅</span></span></div>
										<div class="memArea-msg-txt"><span>留言時間：<span>2017/05/10</span></span></div>
										<div class="memArea-msg-txt"><span>留言內容：<span>好好吃唷!</span></span></div>
									</div>
									<div class="memArea-msg-delete col-sm-2">刪除</div>
								</div>
							</div>
						</div>
						<!-- 收藏攤商紀錄 -->
						<div class="memArea-collect col-sm-12 col-xs-12 memArea-contain3" id="memtab-3">
							<div class="con1 col-sm-1 col-xs-0"></div>
							<div class="col-sm-10">
								<div class="memArea-contain-title">收藏攤商紀錄</div>
								<div class="memArea-box3 col-sm-12 col-xs-12">
									<div class="memArea-collect-img col-sm-2 col-xs-3">
										<img src="../assets/images/MemAreaCollect-shop.jpg" />
									</div>
									<div class="memArea-collect-shop col-sm-8 col-xs-9">
										<span class="col-sm-12 col-xs-12">好兇蛋餅</span>
										<span class="col-sm-12 col-xs-12">收藏時間：<span>2017/05/10</span></span>
										<span>營業時間：<span>10:00-18:00</span></span>
										<span>常駐地址：<span>桃園縣中壢區五興路</span></span>
									</div>
									<div class="memArea-collect-delete col-sm-2 col-xs-12">取消收藏</div>
								</div>
							</div>
						</div>
						<!-- 會員訂單紀錄 -->
						<div class="memArea-order col-sm-12 col-xs-12 memArea-contain3" id="memtab-4">
							<div class="con1 col-sm-1 col-xs-0"></div>
							<div class="col-sm-10 col-xs-12">
								<div class="memArea-contain-title">會員訂單紀錄</div>
								<div class="con1 col-sm-0 col-xs-12"></div>
								<div class="memArea-orderhead col-sm-12 col-xs-6">
									<span class="col-sm-1 col-xs-12">編號</span>
									<span class="col-sm-2 col-xs-12">攤商名稱</span>
									<span class="col-sm-2 col-xs-12">下單日期</span>
									<span class="col-sm-1 col-xs-12">取貨</span>
									<span class="col-sm-2 col-xs-12">品項</span>
									<span class="col-sm-1 col-xs-12">數量</span>
									<span class="col-sm-1 col-xs-12">單價</span>
									<span class="col-sm-1 col-xs-12">總計</span>
									<span class="col-sm-1 col-xs-12">狀態</span>
								</div>

								<div class="memArea-orderbody col-sm-12 col-xs-6">
									<span class="col-sm-1 col-xs-12">000001</span>
									<span class="col-sm-2 col-xs-12">好兇蛋餅</span>
									<span class="col-sm-2 col-xs-12">2017/05/10</span>
									<span class="col-sm-1 col-xs-12">10:15</span>
									<span class="col-sm-2 col-xs-12">薯餅蛋餅</span>
									<span class="col-sm-1 col-xs-12">1</span>
									<span class="col-sm-1 col-xs-12">70元</span>
									<span class="col-sm-1 col-xs-12">70元</span>
									<span class="col-sm-1 col-xs-12">等待回應<br />取消</span>
								</div>
								<div class="con1 col-sm-0 col-xs-12"></div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php 
	include '../views/footer.php';
?>