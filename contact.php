

<?php include 'header.php';

?>
      
      <div class="section-title-page parallax-bg parallax-light">
        <ul class="bg-slideshow">
          <li>
            <div style="background-image:url(assets/media/content/title-page/1.jpg)" class="bg-slide"></div>
          </li>
        </ul>
        <div class="parallax__inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-7">
                <h1 class="b-title-page">Contact Us</h1>
                <div class="b-title-page__info">The approved contractor of Security Guard services, providing quality security services to many organizations &amp; private companies</div>
                <!-- end b-title-page-->
              </div>
              <div class="col-sm-5">
                <ol class="breadcrumb">
                  <li><a href="index.php">home</a></li>
                  <li class="active">contact us</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-contacts">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="text-center">
                <h2 class="ui-title-block ui-title-block_mod-a">Whatever are your security needs, <br>- Commercial or Residential - Big or Small - <br>Contact us & we would develop a solution for you!</h2>
                <div class="ui-decor-type-1 center-block"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <div class="b-contacts"><i class="b-contacts__icon pe-7s-flag"></i>
                <div class="b-contacts__name color-primary">location</div>
                <div class="b-contacts__contacts">College Campus Road, <br>Patil Nagar, Chikan Ghar, <br>Kalyan</div>
              </div>
              <!-- end b-contacts-->
            </div>
            <div class="col-sm-3">
              <div class="b-contacts"><i class="b-contacts__icon pe-7s-call"></i>
                <div class="b-contacts__name color-primary">phone</div>
                <div class="b-contacts__contacts"><?php echo($phone);?></div>
              </div>
              <!-- end b-contacts-->
            </div>
            <div class="col-sm-3">
              <div class="b-contacts"><i class="b-contacts__icon pe-7s-mail-open"></i>
                <div class="b-contacts__name color-primary">email</div>
                <div class="b-contacts__contacts"> thrillforce.mh@gmail.com</div>
              </div>
              <!-- end b-contacts-->
            </div>
            <div class="col-sm-3">
              <div class="b-contacts"><i class="b-contacts__icon pe-7s-headphones"></i>
                <div class="b-contacts__name color-primary">live chat</div>
                <div class="b-contacts__contacts">exective.security</div>
              </div>
              <!-- end b-contacts-->
            </div>
          </div>
        </div>
      </div>
      <div id="ma p" class="m ap"></div>
      <div class="section-def ault">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.786640973807!2d73.14404381480219!3d19.248128186989312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7942873077383%3A0x9c09fe77e20babe5!2sBirla+College+Campus+Road%2C+Chikan+Ghar%2C+Kalyan%2C+Maharashtra+421301!5e0!3m2!1sen!2sin!4v1566393168824!5m2!1sen!2sin" width="1800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <form action="sendmail.php" method="post" class="ui-form ui-form-2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="text" name="name" placeholder="Name" class="form-control">
                        <input type="email" name="email" placeholder="Email" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <input type="tel" name="phone" placeholder="Phone" class="form-control">
                        <input type="text" name="subject" placeholder="Subject" class="form-control">
                      </div>
                    </div>
                     <button class="ui-form__btn btn btn-primary btn-sm btn-effect btn-block">send the message</button>
                  </div>
                  <div class="col-md-6">
                    <textarea rows="7" name="message" placeholder="Comments" class="form-control"></textarea>
                  </div>
                 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
     
	 
	 <?php include 'footer.php' ;
	 ?>