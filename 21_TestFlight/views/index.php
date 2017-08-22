<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Computers</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="views/css/style.css" rel="stylesheet" type="text/css" />
<link href="views/css/layout.css" rel="stylesheet" type="text/css" />
</head>
<body id="page1">
<div class="tail-top-right"></div>
<div id="main">
  <!-- header -->
  <?= $header ?>
  <!-- content -->
  <div id="content">
    <div class="wrapper">
      <div class="col-1">
        <div class="box">
          <div class="border-top">
            <div class="border-right">
              <div class="border-bot">
                <div class="border-left">
                  <div class="inner">
                    <div class="title"><img src="css/images/extra-title.gif" alt="" /></div>
                    <ul class="list">
                      <li><span><a href="#">Motherboards</a></span></li>
                      <li><span><a href="#">Processors</a></span></li>
                      <li><span><a href="#">Desktops</a></span></li>
                      <li><span><a href="#">Monitors</a></span></li>
                      <li><span><a href="#">Laptops &amp; Notebooks</a></span></li>
                      <li><span><a href="#">Accessories</a></span></li>
                      <li><span><a href="#">Palm Operating System</a></span></li>
                      <li><span><a href="#">Pocket PC Operating System</a></span></li>
                      <li><span><a href="#">All Handhelds &amp; PDAs</a></span></li>
                      <li><span><a href="#">Business &amp; Office</a></span></li>
                      <li><span><a href="#">Children’s Software</a></span></li>
                      <li><span><a href="#">PC Games</a></span></li>
                      <li class="last"><span><a href="#">Inject Printers</a></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="banner"><a href="#"><img src="css/images/banner.gif" alt="" /></a></div>
      </div>
      <div class="col-2">
        <div class="indent">
          <div class="title"><img src="css/images/1page-title1.gif" alt="" /></div>
            <?php if(isset($_SESSION['data'])): ?>
                Hello <b><?php echo $_SESSION['data']['name'] ?></b> here is your var_dump data:
                <?php
                    var_dump($_SESSION['data']);
                ?>

            <?php endif ?>
          <p class="p1">Computers is a free websites template created by Templates.com team. This website template is optimized for 1024X768 screen resolution. It is also XHTML &amp; CSS valid.</p>
          <p class="p1">The website template goes with two packages – with PSD source files and without them. PSD source files are available for free for the registered members of Templates.com. The basic package (without PSD is available for anyone without registration).</p>
          <p class="indent1">This website template has several pages: Home, About us, Article (with Article page), Contact us (note that contact us form – doesn’t work), Site Map.</p>
        </div>
        <div class="box">
          <div class="border-top">
            <div class="border-right">
              <div class="border-bot">
                <div class="border-left">
                  <div class="inner">
                    <div class="title"><img src="css/images/1page-title2.gif" alt="" /></div>
                    <ul class="list1">
                      <li><img src="css/images/1page-img1.jpg" alt="" />
                        <h3>Personal Computers: From Origin to Modernity</h3>
                        <p>The first examples of computers were developed half a century ago. Modern computers are more capable than the previous examples of PCs. If you want to learn more about it - just search in Google for define &ldquo;computer&rdquo;.</p>
                      </li>
                      <li><img src="css/images/1page-img2.jpg" alt="" />
                        <h3>Promo of the Week. Computers Free Website Template</h3>
                        <p>Free 1028X768 Optimized Website Template from Templates.com! We really hope that you like this template and will use for your websites.</p>
                      </li>
                      <li class="last"><img src="css/images/1page-img3.jpg" alt="" />
                        <h3>Innovative Solutions</h3>
                        <p>About the latest innovative solutions you will learn from this sample article.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <div id="footer">
    <div class="indent">
      <div class="fleft">Copyrights - Type in Your Name</div>
      <div class="fright">Designed by: <a href="http://www.templates.com"><img alt="" src="css/images/templates-logo.gif" /></a>&nbsp; Your <a href="http://www.templates.com/product/3d-models/">3D Models</a> Marketplace</div>
    </div>
  </div>
</div>
</body>
</html>
