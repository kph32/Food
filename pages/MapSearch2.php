<?php
    if(!isset($_SESSION)) 
    { 
      ob_start();
        session_start(); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>攤吃貨</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0 content="width=1024">
  <link rel="stylesheet" type="text/css" href="../assets/css/index.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/navbar.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/searchbox.css">  
  <link rel="stylesheet" type="text/css" href="../assets/css/map-3d.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/shop-order-show.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/video-show.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/promo-show.css">


  <!-- css -->
  <link rel="stylesheet" type="text/css" href="../assets/css/map-search.css">
  <!-- mapApiKey -->
  <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyDbCq6LI22MT-sNtnBj9GKNv7yH7Awypl0&callback=getGeolocation"></script>
  <!-- mapApiJS -->
  <script>
    //取得使用者目前位罝
    function getGeolocation() {
      if (navigator && navigator.geolocation) {
          // 可以利用API
          navigator.geolocation.getCurrentPosition(geoMap);
      }
    };

    /**GeoLocation的顯示*/
    function geoMap(geo) {
        var coord = geo.coords;
        initMap(coord.latitude, coord.longitude);

        // infoWindow.setPosition(geo);
        // infoWindow.setContent('Location found.');
        // map.setCenter(geo);
    };


    var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };
      
    /**顯示 Google Map*/
    function initMap(lat, lng) {
    //使用者所在位置
    var latlng = new google.maps.LatLng(lat, lng);
    var myOptions = {
      zoom: 16,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

            var map = new google.maps.Map(document.getElementById('map'),myOptions);

            var infoWindow = new google.maps.InfoWindow;

       // 連結 XML file
      downloadUrl('../assets/markers.xml', function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName('marker');
        Array.prototype.forEach.call(markers, function(markerElem) {
          var name = markerElem.getAttribute('name');
          var address = markerElem.getAttribute('address');
          var type = markerElem.getAttribute('type');
          var point = new google.maps.LatLng(
              parseFloat(markerElem.getAttribute('lat')),
              parseFloat(markerElem.getAttribute('lng')));

          var infowincontent = document.createElement('div');
          var strong = document.createElement('strong');
          strong.textContent = name
          infowincontent.appendChild(strong);
          infowincontent.appendChild(document.createElement('br'));

          var text = document.createElement('text');
          text.textContent = address
          infowincontent.appendChild(text);
          var icon = customLabel[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            label: icon.label,
            draggable: true,
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
    window.onload = getGeolocation;
  </script>
  <!-- <script src="assets/js/MapSearch.js"></script> 無效-->

</head>
<?php
include '../common/Navbar.php';
include '../common/Searchbox.php';
?>
<body>



<!-- ============================================================================= -->

<div id="MapSearch">
       <Navbar />
        <Searchbox />
        <div class="MapSearch-Container">
          <div id="map" class="MapSearch-Map col-sm-7">
            <!-- <img src='../assets/images/mapsearch/mapsearch_mapp.png' alt="地圖假圖"/> -->
          </div>
          <div class="MapSearch-Info col-sm-5">
            <div class="MapSearch-Check col-sm-0">
              <label htmlFor="MapSearch-Checkaa"><img src={list} alt="list"/></label>
            </div>
            <input type="checkbox" id="MapSearch-Checkaa"/>
            <div class="MapSearch-Search">

              <div class="MapSearch-InfoTitle">
                <span>篩選：</span>
              </div>
              <div class="MapSearch-InfoItem">
                <ul>
                  <li><input type="checkbox" id="MapSearch-aa"/><label htmlFor="MapSearch-aa"><img src='../assets/images/mapsearch/mapsearch_checkno.png' alt="no" class="checkno"/><img src='../assets/images/mapsearch/mapsearch_checkyes.png' alt="no" class="checkyes"/>營業中</label></li>
                  <li><input type="checkbox" id="MapSearch-bb"/><label htmlFor="MapSearch-bb"><img src='../assets/images/mapsearch/mapsearch_checkno.png' alt="no" class="checkno"/><img src='../assets/images/mapsearch/mapsearch_checkyes.png' alt="no" class="checkyes"/>營業中</label></li>
                  <li><input type="checkbox" id="MapSearch-cc"/><label htmlFor="MapSearch-cc"><img src='../assets/images/mapsearch/mapsearch_checkno.png' alt="no" class="checkno"/><img src='../assets/images/mapsearch/mapsearch_checkyes.png' alt="no" class="checkyes"/>營業中</label></li>
                  <li><input type="checkbox" id="MapSearch-dd"/><label htmlFor="MapSearch-dd"><img src='../assets/images/mapsearch/mapsearch_checkno.png' alt="no" class="checkno"/><img src='../assets/images/mapsearch/mapsearch_checkyes.png' alt="no" class="checkyes"/>營業中</label></li>
                  <li><input type="checkbox" id="MapSearch-ee"/><label htmlFor="MapSearch-ee"><img src='../assets/images/mapsearch/mapsearch_checkno.png' alt="no" class="checkno"/><img src='../assets/images/mapsearch/mapsearch_checkyes.png' alt="no" class="checkyes"/>營業中</label></li>
                  <li><input type="checkbox" id="MapSearch-ff"/><label htmlFor="MapSearch-ff"><img src='../assets/images/mapsearch/mapsearch_checkno.png' alt="no" class="checkno"/><img src='../assets/images/mapsearch/mapsearch_checkyes.png' alt="no" class="checkyes"/>營業中</label></li>
                  <li><input type="checkbox" id="MapSearch-gg"/><label htmlFor="MapSearch-gg"><img src='../assets/images/mapsearch/mapsearch_checkno.png' alt="no" class="checkno"/><img src='../assets/images/mapsearch/mapsearch_checkyes.png' alt="no" class="checkyes"/>營業中</label></li>
                  <li><input type="checkbox" id="MapSearch-hh"/><label htmlFor="MapSearch-hh"><img src='../assets/images/mapsearch/mapsearch_checkno.png' alt="no" class="checkno"/><img src='../assets/images/mapsearch/mapsearch_checkyes.png' alt="no" class="checkyes"/>營業中</label></li>
                </ul>
              </div>
              <div class="clearfix"></div>
            </div>

            <div class="MapSearch-ItemList">
              <div class="MapSearch-Item">
                <div class="MapSearch-ItemPic">
                  <img src='../assets/images/mapsearch/mapsearch_beau.jpg' alt="攤商照片"/>
                </div>
                <div class="MapSearch-ItemInfo">
                  <h4>睏寶胖薯杯</h4>
                  
                  <div class="MapSearch-Score">
                    <ul>
                      <li>★</li>
                      <li>★</li>
                      <li>★</li>
                      <li>★</li>
                      <li>★</li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="MapSearch-ScoreWord">
                    評價：4
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodTag">
                    餐點：炸物/甜點飲料
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodWork">
                    營業中
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodPlace">
                    現在位置：<span>桃園市 中壢區 中央路</span> 
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="MapSearch-Item">
                <div class="MapSearch-ItemPic">
                  <img src='../assets/images/mapsearch/mapsearch_beau.jpg' alt="攤商照片"/>
                </div>
                <div class="MapSearch-ItemInfo">
                  <h4>睏寶胖薯杯</h4>
                  
                  <div class="MapSearch-Score">
                    <ul>
                      <li>★</li>
                      <li>★</li>
                      <li>★</li>
                      <li>★</li>
                      <li>★</li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="MapSearch-ScoreWord">
                    評價：4
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodTag">
                    餐點：炸物/甜點飲料
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodWork">
                    營業中
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodPlace">
                    現在位置：<span>桃園市 中壢區 中央路</span> 
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="MapSearch-Item">
                <div class="MapSearch-ItemPic">
                  <img src='../assets/images/mapsearch/mapsearch_beau.jpg' alt="攤商照片"/>
                </div>
                <div class="MapSearch-ItemInfo">
                  <h4>睏寶胖薯杯</h4>
                  
                  <div class="MapSearch-Score">
                    <ul>
                      <li>★</li>
                      <li>★</li>
                      <li>★</li>
                      <li>★</li>
                      <li>★</li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="MapSearch-ScoreWord">
                    評價：4
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodTag">
                    餐點：炸物/甜點飲料
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodWork">
                    營業中
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodPlace">
                    現在位置：<span>桃園市 中壢區 中央路</span> 
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="MapSearch-Item">
                <div class="MapSearch-ItemPic">
                  <img src='../assets/images/mapsearch/mapsearch_beau.jpg' alt="攤商照片"/>
                </div>
                <div class="MapSearch-ItemInfo">
                  <h4>睏寶胖薯杯</h4>
                  
                  <div class="MapSearch-Score">
                    <ul>
                      <li>★</li>
                      <li>★</li>
                      <li>★</li>
                      <li>★</li>
                      <li>★</li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="MapSearch-ScoreWord">
                    評價：4
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodTag">
                    餐點：炸物/甜點飲料
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodWork">
                    營業中
                  </div>
                  <div class="clearfix"></div>
                  <div class="MapSearch-FoodPlace">
                    現在位置：<span>桃園市 中壢區 中央路</span> 
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
                  
          </div>
        </div>  
      </div>


</body>
</html>

<!-- navbar -->
<script src="../assets/js/snap.svg-min.js"></script>
<script src="../assets/js/classie.js"></script>
<script src="../assets/js/main3.js"></script>
<!-- searchbox -->
<script src="../assets/js/searchbox.js"></script>