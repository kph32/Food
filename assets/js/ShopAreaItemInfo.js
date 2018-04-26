function doFirst(){
	document.getElementById('theFile').onchange = fileChange;
	document.getElementById('theFile2').onchange = fileChange2;
	document.getElementById('theFile3').onchange = fileChange3;
	document.getElementById('theFile4').onchange = fileChange4;
	document.getElementById('theFile5').onchange = fileChange5;
	document.getElementById('theFile01').onchange = fileChange01;
	document.getElementById('theFile02').onchange = fileChange02;
	document.getElementById('theFile03').onchange = fileChange03;
	document.getElementById('theFile04').onchange = fileChange04;
	document.getElementById('theFile05').onchange = fileChange05;
	
}
function fileChange(){
	var file = document.getElementById('theFile').files[0];
	var message = '';

	message += 'file Name : '+file.name+ '\n';
	message += 'file Size : '+file.size+ ' byte(s)\n';
	message += 'file Type : '+file.name+ '\n';
	message += 'Last Modified: '+file.lastModifiedDate+ '\n';

	// document.getElementById('fileInfo').innerHTML = message;


	var readFile = new FileReader();
	readFile.readAsDataURL(file); //取得檔案文字檔
	readFile.addEventListener('load',function(){
		var image = document.getElementById('image');
		image.src = readFile.result;
		image.style.maxWidth = '100%';
		// image.style.maxHeight = '900px';
	},false);

}
function fileChange2(){
	var file = document.getElementById('theFile2').files[0];
	var message = '';

	message += 'file Name : '+file.name+ '\n';
	message += 'file Size : '+file.size+ ' byte(s)\n';
	message += 'file Type : '+file.name+ '\n';
	message += 'Last Modified: '+file.lastModifiedDate+ '\n';

	// document.getElementById('fileInfo').innerHTML = message;


	var readFile = new FileReader();
	readFile.readAsDataURL(file); //取得檔案文字檔
	readFile.addEventListener('load',function(){
		var image = document.getElementById('image2');
		image.src = readFile.result;
		image.style.maxWidth = '100%';
		// image.style.maxHeight = '900px';
	},false);

}
function fileChange3(){
	var file = document.getElementById('theFile3').files[0];
	var message = '';

	message += 'file Name : '+file.name+ '\n';
	message += 'file Size : '+file.size+ ' byte(s)\n';
	message += 'file Type : '+file.name+ '\n';
	message += 'Last Modified: '+file.lastModifiedDate+ '\n';

	// document.getElementById('fileInfo').innerHTML = message;


	var readFile = new FileReader();
	readFile.readAsDataURL(file); //取得檔案文字檔
	readFile.addEventListener('load',function(){
		var image = document.getElementById('image3');
		image.src = readFile.result;
		image.style.maxWidth = '100%';
		// image.style.maxHeight = '900px';
	},false);

}
function fileChange4(){
	var file = document.getElementById('theFile4').files[0];
	var message = '';

	message += 'file Name : '+file.name+ '\n';
	message += 'file Size : '+file.size+ ' byte(s)\n';
	message += 'file Type : '+file.name+ '\n';
	message += 'Last Modified: '+file.lastModifiedDate+ '\n';

	// document.getElementById('fileInfo').innerHTML = message;


	var readFile = new FileReader();
	readFile.readAsDataURL(file); //取得檔案文字檔
	readFile.addEventListener('load',function(){
		var image = document.getElementById('image4');
		image.src = readFile.result;
		image.style.maxWidth = '100%';
		// image.style.maxHeight = '900px';
	},false);

}
function fileChange5(){
	var file = document.getElementById('theFile5').files[0];
	var message = '';

	message += 'file Name : '+file.name+ '\n';
	message += 'file Size : '+file.size+ ' byte(s)\n';
	message += 'file Type : '+file.name+ '\n';
	message += 'Last Modified: '+file.lastModifiedDate+ '\n';

	// document.getElementById('fileInfo').innerHTML = message;


	var readFile = new FileReader();
	readFile.readAsDataURL(file); //取得檔案文字檔
	readFile.addEventListener('load',function(){
		var image = document.getElementById('image5');
		image.src = readFile.result;
		image.style.maxWidth = '100%';
		// image.style.maxHeight = '900px';
	},false);

}
function fileChange01(){
	var file = document.getElementById('theFile01').files[0];
	var message = '';

	message += 'file Name : '+file.name+ '\n';
	message += 'file Size : '+file.size+ ' byte(s)\n';
	message += 'file Type : '+file.name+ '\n';
	message += 'Last Modified: '+file.lastModifiedDate+ '\n';

	// document.getElementById('fileInfo').innerHTML = message;


	var readFile = new FileReader();
	readFile.readAsDataURL(file); //取得檔案文字檔
	readFile.addEventListener('load',function(){
		var image = document.getElementById('image01');
		image.src = readFile.result;
		image.style.maxWidth = '100%';
		// image.style.maxHeight = '900px';
	},false);

}
function fileChange02(){
	var file = document.getElementById('theFile02').files[0];
	var message = '';

	message += 'file Name : '+file.name+ '\n';
	message += 'file Size : '+file.size+ ' byte(s)\n';
	message += 'file Type : '+file.name+ '\n';
	message += 'Last Modified: '+file.lastModifiedDate+ '\n';

	// document.getElementById('fileInfo').innerHTML = message;


	var readFile = new FileReader();
	readFile.readAsDataURL(file); //取得檔案文字檔
	readFile.addEventListener('load',function(){
		var image = document.getElementById('image02');
		image.src = readFile.result;
		image.style.maxWidth = '100%';
		// image.style.maxHeight = '900px';
	},false);

}
function fileChange03(){
	var file = document.getElementById('theFile03').files[0];
	var message = '';

	message += 'file Name : '+file.name+ '\n';
	message += 'file Size : '+file.size+ ' byte(s)\n';
	message += 'file Type : '+file.name+ '\n';
	message += 'Last Modified: '+file.lastModifiedDate+ '\n';

	// document.getElementById('fileInfo').innerHTML = message;


	var readFile = new FileReader();
	readFile.readAsDataURL(file); //取得檔案文字檔
	readFile.addEventListener('load',function(){
		var image = document.getElementById('image03');
		image.src = readFile.result;
		image.style.maxWidth = '100%';
		// image.style.maxHeight = '900px';
	},false);

}
function fileChange04(){
	var file = document.getElementById('theFile04').files[0];
	var message = '';

	message += 'file Name : '+file.name+ '\n';
	message += 'file Size : '+file.size+ ' byte(s)\n';
	message += 'file Type : '+file.name+ '\n';
	message += 'Last Modified: '+file.lastModifiedDate+ '\n';

	// document.getElementById('fileInfo').innerHTML = message;


	var readFile = new FileReader();
	readFile.readAsDataURL(file); //取得檔案文字檔
	readFile.addEventListener('load',function(){
		var image = document.getElementById('image04');
		image.src = readFile.result;
		image.style.maxWidth = '100%';
		// image.style.maxHeight = '900px';
	},false);

}
function fileChange05(){
	var file = document.getElementById('theFile05').files[0];
	var message = '';

	message += 'file Name : '+file.name+ '\n';
	message += 'file Size : '+file.size+ ' byte(s)\n';
	message += 'file Type : '+file.name+ '\n';
	message += 'Last Modified: '+file.lastModifiedDate+ '\n';

	// document.getElementById('fileInfo').innerHTML = message;


	var readFile = new FileReader();
	readFile.readAsDataURL(file); //取得檔案文字檔
	readFile.addEventListener('load',function(){
		var image = document.getElementById('image05');
		image.src = readFile.result;
		image.style.maxWidth = '100%';
		// image.style.maxHeight = '900px';
	},false);

}
window.addEventListener('load',doFirst,false);