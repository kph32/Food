window.onload = function () {
	// 取得元素
	var map3d = Snap.select("#map-3d-Device");
	var map = map3d.select("#map");

	// 消除路徑的線
	var route2 = map.select("#route2");
	route2.attr({
		display: "none"
	});

	// 取得路徑長度
	var len = route2.getTotalLength();


	// truckMove2
	var truckMove2 = Snap.select("#truckMove2");

	// 點選地圖時的處理
	truckMove2.click(function () {
		Snap.animate(0, len, function (val) {
			// 移動現在位置
			var dot = route2.getPointAtLength(val);
			truckMove2.attr({
				// transform: translate(dot.x1 dot.y1),				
			});

			// // 描繪軌跡的路徑
			// track.attr({
			// 	d: route.getSubpath(0, val)
			// });
		}, 10000);
	});

};