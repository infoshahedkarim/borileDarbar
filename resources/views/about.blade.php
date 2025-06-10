<x-header />
<!-- header end -->
<section class="bannr-section" style="background-image: url(assets/img/bannr-img.jpg);">
    <div class="container">
        <div class="bannr-text">
            <img src="assets/img/heading-img.png" alt="icon">
            <h2>আমাদের সম্পর্কে</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('home')}}">হোম</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">আমাদের সম্পর্কে</li>
            </ol>
        </div>
    </div>
</section>
<section class="position-relative gap">
    <div class="container">
        <div class="heading">
            <img src="assets/img/heading-img.png" alt="icon">
            <p>দরবার শরীফে স্বাগতম</p>
            <h2>দরবার শরীফের ইতিহাস</h2>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="islamic-history mt-0">
                    @if(isset($history))
                        {!! nl2br(e($history->history)) !!}
                    @else
                        <p>No history available.</p>
                    @endif
                </div>

            </div>
            <div class="col-lg-7">
                <div class="row align-items-end">
                    <div class="col-lg-5 col-6">
                        <div class="circle-text">
                            <img src="assets/img/text-circle.png" class="circle-text-img" alt="circle-img">
                            <figure class="circle-img">
                                <img src="assets/img/circle-img.png" alt="circle-img">
                            </figure>
                        </div>
                        <div class="real-history-book hoverimg">
                            <figure>
                                <img src="assets/img/real-history-book.jpg" alt="img">
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-7 col-6">
                        <div class="real-history-book two hoverimg">
                            <figure>
                                <img src="assets/img/real-history-boy.jpg" alt="real-history-boy">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gap no-top">
    <div class="container">
        <div class="fun-facts">
            <div class="islamic-mosque" style="background-image: url(assets/img/color-bg.jpg);">
                <div class="count-style">
                    <h2 data-max="62" class="ms-animated">62<sup>+</sup></h2>
                </div>
                <h5>ওয়েবসাইট ভিজিটরের সংখ্যা</h5>
                <img src="assets/img/fun-facts-1.png" alt="fun-facts">
            </div>
            <div class="islamic-mosque" style="background-image: url(assets/img/color-bg.jpg);">
                <div class="count-style">
                    <h2 data-max="14" class="ms-animated">14<sup>K</sup></h2>
                </div>
                <h5>ওরসে মোট অংশগ্রহণকারী</h5>
                <img src="assets/img/fun-facts-2.png" alt="fun-facts">
            </div>
            <div class="islamic-mosque" style="background-image: url(assets/img/color-bg.jpg);">
                <div class="count-style">
                    <h2 data-max="317" class="ms-animated">317<sup>+</sup></h2>
                </div>
                <h5>মোট ওরসে </h5>
                <img src="assets/img/fun-facts-3.png" alt="fun-facts">
            </div>
            <div class="islamic-mosque" style="background-image: url(assets/img/color-bg.jpg);">
                <div class="count-style">
                    <h2 data-max="26" class="ms-animated">26<sup>+</sup></h2>
                </div>
                <h5>আসিতেছে... </h5>
                <img src="assets/img/fun-facts-4.png" alt="fun-facts">
            </div>
        </div>
    </div>
</section>
<section class="gap our-courses-section" style="background-image: url(assets/img/courses-back.png);">
    <div class="container">
        <div class="heading">
            <img src="assets/img/heading-img.png" alt="icon">
            <p>বোর্ড</p>
            <h2>দরবার শরীফ বোর্ডে সদস্যগণ </h2>
        </div>
        <div class="row">
            @foreach($boardMembers as $member)
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="scholars">
                        <div class="opening-time hoverimg">
                            <figure>
                                <img src="{{ asset($member->img) }}" alt="img"
                                    style="width: 250px; height: 250px; object-fit: cover; border-radius: 50%;">

                            </figure>
                            <div class="opening-time-text">
                                <h3><a href="#">{{ $member->name }}</a></h3>
                                <span>{{ $member->designation }}</span>
                                <a href="tel:{{ $member->phone }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M442.77,80.93l...Z" /> {{-- Shortened for clarity --}}
                                    </svg>{{ $member->phone }}
                                </a>
                            </div>
                        </div>
                        <div class="share-nodes">
                            <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                            <ul class="social-media">
                                @if($member->fb)
                                    <li><a href="{{ $member->fb }}"><i class="fab fa-facebook-f icon"></i></a></li>
                                @endif
                                @if($member->twitter)
                                    <li><a href="{{ $member->twitter }}"><i class="fab fa-twitter icon"></i></a></li>
                                @endif
                                {{-- Add other social icons if needed --}}
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
<section class="listen-holy" style="background-image: url(assets/img/holy-quran.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <div class="heading two">
                    <p>পবিত্র কোরআন শুনুন</p>
                    <h2>অনলাইনে পবিত্র কুরআন তেলাওয়াত করুন এবং শুনুন</h2>
                    
                    <div class="wrapper">
                        <h4>সূরা ফালাক</h4>
                        <audio preload="auto" controls>
                            <source src="assets/audio/surat-alfalaq.mp3">
                        </audio>
                    </div>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-5">
                <div class="support-us" style="background-image: url(assets/img/color-bg.jpg);">
                    <h4>Support us, we need your help.</h4>
                    <div class="progressbar">
                        <div class="circle" data-percent="85">
                            <div>85%</div>
                        </div>
                    </div>
                    <h6>$71,000</h6>
                    <span>Donation Collected</span>
                    <a href="#" class="btn">Donate Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="islamic-ayat">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="heading">
                    <p>কুরানের বাণী</p>
                    <h2>ইসলামিক আয়াত</h2>
                </div>
                <div class="slider-ayat owl-carousel">
                    <div class="ayat item">
                        <img src="assets/img/ayat.png" alt="ayat">
                        <h4>নিশ্চয় আসমান ও যমীন সৃষ্টিতে এবং রাত্রি ও দিনের আবর্তনে নিদর্শন রয়েছে বোধ সম্পন্ন লোকদের জন্যে।</h4>
                        <h5>[সূরা আল ইমরান - ১৯০,১৯১]</h5>
                    </div>
                    <div class="ayat item">
                        <img src="assets/img/ayat.png" alt="ayat">
                        <h4>যাঁরা দাঁড়িয়ে, বসে, ও শায়িত অবস্থায় আল্লাহকে স্মরণ করে এবং চিন্তা গবেষণা করে আসমান ও জমিন সৃষ্টির বিষযে, (তারা বলে) পরওয়ারদেগার! এসব তুমি অনর্থক সৃষ্টি করনি।</h4>
                        <h5>[সূরা আল ইমরান - ১৯০,১৯১]</h5>
                    </div>
                    <div class="ayat item">
                        <img src="assets/img/ayat.png" alt="ayat">
                        <h4>সকল পবিত্রতা তোমারই, আমাদিগকে তুমি দোযখের শাস্তি থেকে বাঁচাও।</h4>
                        <h5>[সূরা আল ইমরান - ১৯০,১৯১]</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ayat-img">
                    <img src="assets/img/ayat-with-man.png" alt="img">
                </div>
            </div>
        </div>
    </div>
    <img src="assets/img/ayat-with.jpg" class="ayat-with-img" alt="ayat-with">
</section>
<x-footer />