<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h5 class="widgetheading">Our Contact</h5>
                    <address>
                        <strong>BrainyBuddies</strong><br>
                        Jl Buddies<br>
                        Pin-21542 Surabaya.
                    </address>
                    <p>
                        <i class="icon-phone"></i> (+62) 821-5811-4721 <br>
                        <i class="icon-envelope-alt"></i> BrainyBuddies@buddies.com
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <h5 class="widgetheading">Quick Links</h5>
                    <ul class="link-list">
                        <li><a href="#">Latest Events</a></li>
                        <li><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <h5 class="widgetheading">Fitur</h5>
                    <ul class="link-list">
                        <li>Pembelajaran Menarik Berbasis Video</li>
                        <li>Kuis Interaktif Untuk Anak</li>
                        <li>Berbagai Mata Pelajaran Sesuai Kurikulum</li>
                    </ul>
                </div>
            </div>
            <!-- <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Recent News</h5>
                    <ul class="link-list">
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                        <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                        <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
                            <span>&copy; School Educational 2019 All right reserved. </span> <a href="https://webthemez.com/tag/free" target="_blank">Free Website Templates</a> by WebThemez.com
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <!-- <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li> -->
                        <?php if (isset($_SESSION['email'])) { ?><li><a href="/<?=$link[1]?>/logout" data-placement="top" title="Logout"><i class="">Logout</i></a></li><?php } else { ?>
                        <li><a href="/<?=$link[1]?>/login" data-placement="top" title="Login"><i class="">Login</i></a></li><?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>