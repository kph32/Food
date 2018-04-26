    //取得使用者目前位罝
    // function getGeolocation() {
    //   if (navigator && navigator.geolocation) {
    //       // 可以利用API
    //       navigator.geolocation.getCurrentPosition(geoMap);
    //   }
    // };

    /**GeoLocation的顯示*/
    // function geoMap(geo) {
    //     var coord = geo.coords;
    //     initMap(coord.latitude, coord.longitude);
    // };


    var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };
      
    /**顯示 Google Map 樣式設定*/
    function initMap(lat, lng) {
    //使用者所在位置
    // var latlng = new google.maps.LatLng(lat, lng);
    var latlng = new google.maps.LatLng(24.9650192, 121.1909533);
    var iconImg = '../assets/images/cat.gif';
    var myOptions = {
      zoom: 16,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

     var map = new google.maps.Map(document.getElementById('map'),myOptions);
     var infoWindow = new google.maps.InfoWindow;

       // 連結 XML file,顯示資料
      downloadUrl('../assets/markers.xml', function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName('marker');

        Array.prototype.forEach.call(markers, function(markerElem) {
          var name = markerElem.getAttribute('name');
          var rating = markerElem.getAttribute('rating');
          var rate = markerElem.getAttribute('rate');
          var tag = markerElem.getAttribute('tag');
          var work = markerElem.getAttribute('work');
          var location = markerElem.getAttribute('location');
          var photo = markerElem.getAttribute('photo');
          var type = markerElem.getAttribute('type');
          var point = new google.maps.LatLng(
              parseFloat(markerElem.getAttribute('lat')),
              parseFloat(markerElem.getAttribute('lng')));

          var infowincontent = document.createElement('div');

          var strong = document.createElement('strong');
          strong.textContent = name
          infowincontent.appendChild(strong);
          infowincontent.appendChild(document.createElement('br'));

          var textRating = document.createElement('text');
          textRating.textContent = rating
          infowincontent.appendChild(textRating);

          var textRate = document.createElement('text');
          textRate.textContent = rate
          infowincontent.appendChild(textRate);
          infowincontent.appendChild(document.createElement('br'));

          var textTag = document.createElement('text');
          textTag.textContent = tag
          infowincontent.appendChild(textTag);
          infowincontent.appendChild(document.createElement('br'));

          var textWork = document.createElement('text');
          textWork.textContent = work
          infowincontent.appendChild(textWork);
          infowincontent.appendChild(document.createElement('br'));

          var textLocation = document.createElement('text');
          textLocation.textContent = location
          infowincontent.appendChild(textLocation);
          infowincontent.appendChild(document.createElement('br'));

          var img = document.createElement('img');
          img.src = photo
          infowincontent.appendChild(img);

          var icon = customLabel[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            label: icon.label,
            draggable: true,
            icon: iconImg,
            animation: google.maps.Animation.DROP
          });
          marker.addListener('click', function() {
            infoWindow.setContent(infowincontent);
            infoWindow.open(map, marker);
          });
        });
      });
    }



    function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;

    request.onreadystatechange = function() {
      if (request.readyState == 4) {
        request.onreadystatechange = doNothing;
        callback(request, request.status);
      }
    };

    request.open('GET', url, true);
    request.send(null);
    }

    function doNothing() {}
    // window.addEventListener('load',getGeolocation,false);  
    window.addEventListener('load',initMap,false); 