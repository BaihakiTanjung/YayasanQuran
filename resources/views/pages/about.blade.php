<!-- ======= About Section ======= -->
<div id="about" class="about-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Tentang Yayasan Cahaya Quran</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-left">
                    <div class="single-well">
                        <a href="#">
                            <img src="assets/img/about/1.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-middle">
                    @foreach ($about as $a)
                    <div class="single-well">
                        <a href="#">
                            <h4 class="sec-head">{{$a -> title}}</h4>
                        </a>
                        <p>
                            {{$a -> description}}
                        </p>
                        @endforeach
                        <h4 class="sec-head">Visi dan Misi</h4>
                        <ul>
                            @foreach ($visimisi as $v)
                            <li>
                                <i class="fa fa-check"></i> {{$v -> nama}}
                                @endforeach
                        </ul>
                    </div>

                </div>
            </div>
            <!-- End col-->
        </div>
    </div>
</div><!-- End About Section -->
