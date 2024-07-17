@php
$homefooter = App\Models\Footer::find(1);
$homecontact = App\Models\HomeMessage::find(1);
@endphp



<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="logo"><a href="#">{{ $homefooter->white_title }}<span>{{ $homefooter->yellow_title }}</span></a></h2>
                    <p>{{ $homefooter->short_title }}</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="{{ $homefooter->twitter }}"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="{{ $homefooter->facebook }}"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="{{ $homefooter->instagram }}"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">{{ $homefooter->title_2 }}</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>{{ $homefooter->topic_1 }}</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>{{ $homefooter->topic_2 }}</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>{{ $homefooter->topic_3 }}</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>{{ $homefooter->topic_4 }}</a></li>




                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>{{ $homefooter->topic_6 }}</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>{{ $homefooter->topic_7 }}</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>{{ $homefooter->topic_8 }}</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">{{ $homefooter->title_question }}</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">{{ $homecontact->admin_address  }}</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{ $homecontact->admin_phone  }}</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{ $homecontact->admin_email  }}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">{{ $homefooter->title_hours }}</h2>
                    <div class="opening-hours">
                        <h4>{{ $homefooter->title_open }}</h4>
                        <p class="pl-3">
                            <span>{{ $homecontact->open_days  }}</span>

                        </p>
                        <h4>{{ $homefooter->title_close }}</h4>
                        <p class="pl-3">
                            <span>{{ $homecontact->close_days  }}</span>

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy; <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Pattaya Legal Services
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>