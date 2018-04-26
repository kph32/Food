<?php
    if(!isset($_SESSION)) 
    { 
      ob_start();
        session_start(); 
    }
?>
                 <!-- 燈箱：登入 -->
          <div id="loginBox" style="display: none;">
          <table border="0" align="center" cellspacing="0" id="tableLogin">
          <tr><td>帳號</td><td><input type="text" name="memId" id="memId"></td></tr>
          <tr><td>密碼</td><td><input type="password" name="memPsw" id="memPsw"></td></tr>
          <tr><td colspan="2" align="center">
                  <input type="button" id="btnLogin" value="登入">
                  <input type="button" id="btnLoginCancel" value="取消">
              </td></tr>
          </table>
          </div>

<div class="Navbar">
        <div class="Navbar-container col-xs-0">
          <ul class="col-sm-12">
            <li><a href="../index.php" class="col-sm-2"><img src="../assets/images/navbar/Navbar-logo.png" alt="foodie"/></a></li>
            <li><a href="../pages/MapSearch.php" class="Navbar-li col-sm-1"><img src="../assets/images/navbar/Navbar-position.png" alt="position"/><div>定位搜索</div></a></li>
            <li><a href="../pages/secret.php" class="Navbar-li col-sm-1"><img src="../assets/images/navbar/Navbar-news.png" alt="news"/><div>攤車報導</div></a></li>
            <li><a href="../pages/videoArea.php" class="Navbar-li col-sm-1"><img src="../assets/images/navbar/Navbar-movie.png" alt="movie"/><div>影音宣傳</div></a></li>
            <li>
            <form name="Navbar-searchlist" method="get" action="../pages/searchResult.php">
              <div class="col-sm-3">
                <input type="text" placeholder="搜尋美食或攤車名" class="Navbar-search" name="Navbar-searchname" id="Navbar-searchname"/>
                <label for="Navbar-submit">
                  <div class="Navbar-search-go" >
                    <!-- <img src="../assets/images/Searchbox-search.png"> -->
                  </div>
                </label>
                <input type="submit" name="Navbar-submit" id="Navbar-submit">
              </div>
            </form>
            </li>
            <li>

<?php
if( isset($_SESSION["memId"]) === true){
?>

              <div class="col-sm-1">
                <a href="../pages/memArea.php"><img src="../assets/images/navbar/Navbar-login.png" class="Navbar-login" alt="memlogin"/>
                <div class="Navbar-member">會員</div></a>
                <div class="col-sm-12">
                  <a href="../pages/Sessionout.php" class="Navbar-memtxt">登出</a>
                  <a href="#" class="Navbar-memtxt"><?php echo $_SESSION["name"] ?></a>
                </div>
              </div>
            </li>
            <li>
              <div class="Navbar-border col-sm-1">
                <a href="../pages/shopArea.php"><img src="../assets/images/navbar/Navbar-factor.png" class="Navbar-shoplogin" alt="factorlogin"/>
                <div class="Navbar-member">攤商</div></a>
                <div class="col-sm-12">
                <span id="memName"></span>
                  <a href="../pages/Sessionout.php" class="Navbar-memtxt">登出</a>
                  <!-- <a href="../pages/ShopRegister.php" class="Navbar-memtxt">註冊</a> -->
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="clearfix"></div>

<?php
  }else{
?>
              <div class="col-sm-1">
                <img src="../assets/images/navbar/Navbar-login.png" class="Navbar-login" alt="memlogin"/>
                <div class="Navbar-member">會員</div>
                <div class="col-sm-12">
                  <a href="../pages/memLogin.php" class="Navbar-memtxt">登入</a>
                  <a href="../pages/memRegister.php" class="Navbar-memtxt">註冊</a>
                </div>
              </div>
            </li>
            <li>
              <div class="Navbar-border col-sm-1">
                <img src="../assets/images/navbar/Navbar-factor.png" class="Navbar-shoplogin" alt="factorlogin"/>
                <div class="Navbar-member">攤商</div>
                <div class="col-sm-12">
                <span id="memName"></span>
                  <span  class="Navbar-memtxt" id="spanLogin">登入</span>
                  <a href="../pages/ShopRegister.php" class="Navbar-memtxt">註冊</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="clearfix"></div>
<?php
  }
?>





        <div class="col-sm-0 container">
          <a href="../index.php"><img src="../assets/images/navbar/Navbar-logo.png" alt="foodie" class="Navbar-rwdlogo"/></a>
          <div class="menu-wrap">
            <div class="menu col-xs-12">
              <!-- <div class="Navbar-rwd"> -->                
                <Menu styles={ styles }>
                    <input type="text" placeholder="搜尋美食或攤車名" class="Navbar-search"/>
                    <div class="Navbar-search-go">
                  <img src="../assets/images/Searchbox-search.png">
                </div>
                   
                    <div class="col-xs-12"><a href="../pages/MapSearch.php" class="Navbar-li col-xs-12"><img src="../assets/images/navbar/Navbar-position.png" alt="position"/>定位搜索</a></div>
                    <div class="col-xs-12"><a href="../pages/secret.php" class="Navbar-li col-xs-12"><img src="../assets/images/navbar/Navbar-news.png" alt="news"/>攤車報導</a></div>
                    <div class="col-xs-12"><a href="../pages/videoArea.php" class="Navbar-li col-xs-12"><img src="../assets/images/navbar/Navbar-movie.png" alt="movie"/>影音宣傳</a></div>
                    
<!--                <div class="Navbar-rwdlogin col-xs-12">
                      <img src="../assets/images/navbar/Navbar-login.png" class="col-xs-6" alt="memlogin"/>
                      <a href="../pages/memLogin.php" class="Navbar-logintxt col-xs-4">會員登入</a>
                      <a href="../pages/memRegister.php" class="Navbar-logintxt col-xs-2">註冊</a>
                    </div> -->
<?php
if( isset($_SESSION["memId"]) === true){
?>
      <div class="Navbar-rwdlogin col-xs-12">
        <a href="../pages/memArea.php"><img src="../assets/images/navbar/Navbar-login.png" class="col-xs-6" alt="memlogin"/></a>
        <a href="../pages/Sessionout.php" class="Navbar-logintxt col-xs-4">會員登出</a>
        <!-- <a href="../pages/memRegister.php" class="Navbar-logintxt col-xs-2">註冊</a> -->
      </div>
      <div class="Navbar-rwdlogin col-xs-12">
        <a href="../pages/shopArea.php"><img src="../assets/images/navbar/Navbar-factor.png" class="col-xs-6" alt="factor"/></a>
        <a href="../pages/Sessionout.php" class="Navbar-logintxt col-xs-4">攤商登出</a>
        <!-- <a href="../pages/ShopRegister.php" class="Navbar-logintxt col-xs-2">註冊</a> -->
      </div>
<?php
  }else{
?>
      <div class="Navbar-rwdlogin col-xs-12">
        <img src="../assets/images/navbar/Navbar-login.png" class="col-xs-6" alt="memlogin"/>
        <a href="../pages/memLogin.php" class="Navbar-logintxt col-xs-4">會員登入</a>
        <a href="../pages/memRegister.php" class="Navbar-logintxt col-xs-2">註冊</a>
      </div>
      <div class="Navbar-rwdlogin col-xs-12">
        <img src="../assets/images/navbar/Navbar-factor.png" class="col-xs-6" alt="factor"/>
        <a class="Navbar-logintxt col-xs-4">攤商</a>
        <span  class="Navbar-memtxt" id="spanLogin">登入</span>
        <a href="../pages/ShopRegister.php" class="Navbar-logintxt col-xs-2">註冊</a>
      </div>
<?php
  }
?>





<!--                     <div class="Navbar-rwdlogin col-xs-12">
                      <img src="../assets/images/navbar/Navbar-factor.png" class="col-xs-6" alt="factor"/>
                      <a href="../pages/memLogin.php" class="Navbar-logintxt col-xs-4">攤商登入</a>
                      <a href="../pages/ShopRegister.php" class="Navbar-logintxt col-xs-2">註冊</a>
                    </div> -->
                </Menu>
              </div>
              <button class="close-button" id="close-button">Close Menu</button>
                  <div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
                      <path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
                    </svg>
                  </div>
            <!-- </div> -->
            
          </div>
          <button class="menu-button" id="open-button"></button>
            <div class="content-wrap">
              <div class="content">
                <header class="codrops-header">
                </header>
              </div>
             </div>
        </div>
        <form action="/" method="post">
        <div class="Navbar-LightboxShow">
          <div class="Navbar-Lightbox">
            <div class="Navbar-Lightbox-title">會員登入</div>
            <div class="Navbar-account">帳號：</div>
            <div class="Navbar-input1"><input type="text" name="account" id="account"/></div>
            
            <div class="Navbar-password">密碼：</div>
            <div class="Navbar-input2"><input type="password" name="password" id="password"/></div>
            
            <div class="Navbar-submitLogin">
              <input type="submit" name="Navbar-submitLogin" id="NavbarSubmitLogin" value="登入"/>
            </div>
          </div>
        </div>
        </form>



      </div>   
      
<script type="text/javascript" src="../assets/js/login.js"></script>
