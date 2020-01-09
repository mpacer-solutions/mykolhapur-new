
<?php
$active_kaneri = "active";
include_once 'header.php'
?>

<main class="container-fluid">
  <h1 class="page-title">Welcome To Kaneri Math</h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active" >
        <img src="images/kaneri/1.jpg" class="img-responsive" width="100%" height="100%">
      </div>
      <div class="item" >
        <img src="images/kaneri/2.jpg" class="img-responsive" width="100%" height="100%">
      </div>
      <div class="item" >
        <img src="images/kaneri/3.jpg" class="img-responsive" width="100%" height="100%">
      </div>
      <div class="item" >
        <img src="images/kaneri/4.jpg" class="img-responsive" width="100%" height="100%">
      </div>
      <div class="item" >
        <img src="images/kaneri/5.jpg" class="img-responsive" width="100%" height="100%">
      </div>
    </div><!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>   
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="block">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3823.313048424459!2d74.26332281486563!3d16.61105078854821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc0fee01bd944b9%3A0xa31b60f80821f883!2sSiddhagiri%20Gramjivan%20Sangrahalaya%20-Kaneri%20Math!5e0!3m2!1sen!2sin!4v1578561776675!5m2!1sen!2sin" width="550" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
    <div class="col-md-8">
      <div class="block">
        <h2 class="block-title">About Kaneri Math</h2>
        <p>
          Siddhagiri Gramjivan Museum (Kaneri Math) at Kaneri, Kolhapur district, Maharashtra, is a sculpture museum. 
          The full name is Siddhagiri Gramjivan (Village life) Museum. It is situated at Shri Kshetra Siddhagiri Math,
          a campus built around the Moola-Kaadsiddheswar Shiva temple.
          This museum showcases different aspects of Gramjivan (village life). Gram means village and jivan means life in the Marathi language. 
          This initiative was the dream of Mahatma Gandhi, and was created through the vision and efforts of Siddhagiri Gurukul Foundation.
          The history of self-sufficient village life in Maharshtra, before the invasion of the Mughals,
          is depicted in the form of cement sculptures.
          Each sculpture is lifelike and represents activities performed in daily village life. There were 12 Balutedars (essentially artisan castes), 
          and 18 Alutedars who provided equipment to carry out domestic and professional tasks. 
          The museum is spread over 7 acres (28,000 m2), and the surrounding countryside is beautiful, with lush greenery.
          Every aspect of village life has been depicted in almost 80 scenes that showcase more than 300 statues.
        </p>
      </div>
    </div>
  </div>

  <h2 class="section-title">Kolhapur city is famous for the Kaneri Math</h2>

  <div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="images/khasbagimg/hotel.webp" alt="...">
        <div class="caption text-center">
          <h3>Hotels</h3>
          <p class="content">
            1.Hotel Royal Treat<br>
            2.Hotel Madhuri Executive<br>
            3.Hotel Solanki Guest House<br>
            4.Hotel Classic Mid Town<br>
            5.Hotel Silver Oak<br>
          </p>
          <p><a href="#" class="btn btn-primary" role="button">Read more</a></p>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="images/khasbagimg/shop.jpeg" alt="...">
        <div class="caption text-center">
          <h3>Shoping Centers</h3>
          <p class="content">
            1.Bhosle Plaza <br>
            2.Ashok Shopee<br>
            3.DYP city Mall
          </p>
          <p><a href="#" class="btn btn-primary" role="button">Read more</a></p>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="images/kaneri/2.jpg" class="img-responsive">
        <div class="caption text-center">
          <h3>What to See</h3>
          <p class="content">
            1.Siddagiri Museum<br>
            2.Datta Temple<br>
            3.Kopeswar Temple<br>
            4.Ghost House <br>
            5.Mirror House
          </p>
          <p><a href="#" class="btn btn-primary" role="button">Read more</a></p>
        </div>
      </div>
    </div>

  </div>
</main>

<?php
include_once 'footer.php'
?>
