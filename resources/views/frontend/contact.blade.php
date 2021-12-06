@extends('frontend.layouts.app')

@section('content')
    <div class="offset"></div>


    <div class="light-wrapper">
        <div class="container inner">
            <h3 class="section-title text-center">Get in Touch</h3>
            <div class="lead text-center">feel free to drop us a line</div>

            <div class="row">
                <aside class="col-sm-4 sidebar left-sidebar lp20">
                    <div class="sidebox widget">
                        <h5 class="widget-title">GOT QUESTIONS?</h5>
                        <p>Our team of travel experts is here to answer any questions you may have.

                        </p>
                        <div class="contact-info"><i class="icon-location"></i> Kapan,Milanchwok,Kathmandu,Nepal <br/>
                            <i class="icon-phone"></i>+977 (01) 4821279 <br/>
                            <i class="icon-mobile"></i>+977 9851149645 <br/>
                            <i class="icon-mobile"></i>+977 9849166886 <br/>
                            <i class="icon-mail"></i> <a href="info@ramailoholidays.com">info@ramailoholidays.com</a></div>
                    </div>
                    <!-- /.widget -->

                    <div class="sidebox widget">
                        <h5 class="widget-title">Elsewhere</h5>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/ramailoholiday"><i class="icon-s-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/ramailoholidays"><i class="icon-s-instagram"></i></a></li>
                            <li><a href="https://www.twitter.com/HolidaysRamailo"><i class="icon-s-twitter"></i></a></li>
                            <li><a href="https://www.vimeo.com/user104102599"><i class="icon-s-vimeo"></i></a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </aside>
                <!-- /.col -->

                <div class="col-sm-8">

                    <div class="form-container">
                        <div class="response alert alert-success"></div>
                        <form class="forms" action="contact/form-handler.php" method="post">
                            <fieldset>
                                <ol>
                                    <li class="form-row text-input-row name-field">
                                        <input type="text" name="name" class="text-input defaultText required"
                                               title="Name (Required)"/>
                                    </li>
                                    <li class="form-row text-input-row email-field">
                                        <input type="text" name="email" class="text-input defaultText required email"
                                               title="Email (Required)"/>
                                    </li>
                                    <li class="form-row text-input-row subject-field">
                                        <input type="text" name="subject" class="text-input defaultText"
                                               title="Subject"/>
                                    </li>
                                    <li class="form-row text-area-row">
                                        <textarea name="message" class="text-area required"></textarea>
                                    </li>
                                    <li class="form-row hidden-row">
                                        <input type="hidden" name="hidden" value=""/>
                                    </li>
                                    <li class="nocomment">
                                        <label for="nocomment">Leave This Field Empty</label>
                                        <input id="nocomment" value="" name="nocomment"/>
                                    </li>
                                    <li class="button-row">
                                        <input type="submit" value="Submit" name="submit" class="btn btn-submit bm0"/>
                                    </li>
                                </ol>
                                <input type="hidden" name="v_error" id="v-error" value="Required"/>
                                <input type="hidden" name="v_email" id="v-email" value="Enter a valid email"/>
                            </fieldset>
                        </form>
                    </div>
                    <!-- /.form-container -->
                </div>
                <!-- /.col -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /.light-wrapper -->

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507.6426634230816!2d85.35576393648216!3d27.728970289634038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1bdfff137e71%3A0xf75c202e68d1d2c5!2sKapan%20Milan%20Chowk%2C%20Budhanilkantha%2044600!5e1!3m2!1sen!2snp!4v1571397297213!5m2!1sen!2snp" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


@endsection
