<!doctype html>
<html class="no-js" lang="en">
    
    @include('inc.headcss')

    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        @include('inc.header')
        
        <!-- shopping-cart-area start -->
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-map-wrapper">
                            <div class="contact-map mb-40">
                                <div id="hastech2"></div>
                            </div>
                            <div class="contact-message">
                                <div class="contact-title">
                                    <h4>Contact Information</h4>
                                </div>
                                <form id="contact-form" class="contact-form" action="assets/mail.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="contact-input-style mb-30">
                                                <label>Name*</label>
                                                <input name="name" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contact-input-style mb-30">
                                                <label>Email*</label>
                                                <input name="email" required="" type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contact-input-style mb-30">
                                                <label>Telephone</label>
                                                <input name="telephone" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contact-input-style mb-30">
                                                <label>subject</label>
                                                <input name="subject" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="contact-textarea-style mb-30">
                                                <label>Comment*</label>
                                                <textarea class="form-control2" name="message" required=""></textarea>
                                            </div>
                                            <button class="submit contact-btn btn-hover" type="submit">
                                                Send Message 
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info-wrapper">
                            <div class="contact-title">
                                <h4>Location & Details</h4>
                            </div>
                            <div class="contact-info">
                                <div class="single-contact-info">
                                    <div class="contact-info-icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Address:</span>  4/2, Daffodil Tower, Mirpur Rd, Dhaka 1207 <br> Dhaka. Bangladesh</p>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-info-icon">
                                        <i class="pe-7s-mail"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Email: </span> Diu@Diu.edu.bd.com</p>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-info-icon">
                                        <i class="pe-7s-call"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Phone: </span>  +88 (017) 11322990 or +88 (012) xxxxxxxx</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shopping-cart-area end -->
		
        @include('inc.footer')

		
        @include('inc.sidemodal')
		
		
		@include('inc.js')


        <!-- google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlZPf84AAVt8_FFN7rwQY5nPgB02SlTKs "></script>
        <script>
            var myCenter=new google.maps.LatLng(30.249796, -97.754667);
            function initialize()
            {
                var mapProp = {
                  center:myCenter,
                  scrollwheel: false,
                  zoom:15,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
                  };
                var map=new google.maps.Map(document.getElementById("hastech2"),mapProp);
                var marker=new google.maps.Marker({
                  position:myCenter,
                    animation:google.maps.Animation.BOUNCE,
                  icon:'',
                    map: map,
                  });
                var styles = [
                  {
                    stylers: [
                      { hue: "#c5c5c5" },
                      { saturation: -100 }
                    ]
                  },
                ];
                map.setOptions({styles: styles});
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
