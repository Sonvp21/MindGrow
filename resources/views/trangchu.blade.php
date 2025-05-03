 @extends('layout.layout')
 @section('content')
     <div class="col-right position-relative open_slogan">

         <div class="contentWarp ">

             <section class="mew_mobile_slide">
                 <div class="mew_slide swiper-container position-relative swiper-container-fade swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                     style="max-height: 460px;">
                     <div class="swiper-wrapper" id="swiper-wrapper" aria-live="off" style="transition-duration: 1000ms;">
                         <style>
                             /* Default height for larger screens */

                             .banner-img {
                                 height: 460px;
                                 width: 64%;
                             }

                             /* For smaller screens (below 768px), set height to 155px */

                             @media (max-width: 768px) {
                                 .banner-img {
                                     height: 155px;
                                     width: 100%;
                                 }
                             }
                         </style>
                         <!-- Banner 1 -->
                         <div class="swiper-slide text-center" data-swiper-slide-index="0"
                             style="width: 1484px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 1000ms;"
                             role="group" aria-label="1 / 4">
                             <a class="d-block w-100 modal-open" href="" title="Banner 1">
                                 <picture class="position-relative w-100 m-0 ratioslide d-block aspect">
                                     <img src="images/1.png" class="banner-img" alt="Banner 2">
                                 </picture>
                             </a>
                         </div>

                         <!-- Banner 2 -->
                         <div class="swiper-slide text-center" data-swiper-slide-index="1"
                             style="width: 1484px; opacity: 1; transform: translate3d(-1484px, 0px, 0px); transition-duration: 1000ms;"
                             role="group" aria-label="2 / 4">
                             <a class="d-block w-100 modal-open" href="" title="Banner 2">
                                 <picture class="position-relative w-100 m-0 ratioslide d-block aspect">
                                     <img src="images/2.png" alt="Banner 2" class="banner-img" alt="Banner 2">
                                 </picture>
                             </a>
                         </div>

                         <!-- Banner 3 -->
                         <div class="swiper-slide text-center" data-swiper-slide-index="2"
                             style="width: 1484px; opacity: 1; transform: translate3d(-2968px, 0px, 0px); transition-duration: 1000ms;"
                             role="group" aria-label="3 / 4">
                             <a class="d-block w-100 modal-open" href="" title="Banner 3">
                                 <picture class="position-relative w-100 m-0 ratioslide d-block aspect">
                                     <img src="images/1.png" alt="Banner 3" class="banner-img" alt="Banner 2">
                                 </picture>
                             </a>
                         </div>

                         <!-- Banner 4 -->
                         <div class="swiper-slide text-center" data-swiper-slide-index="3"
                             style="width: 1484px; opacity: 1; transform: translate3d(-4452px, 0px, 0px); transition-duration: 1000ms;"
                             role="group" aria-label="4 / 4">
                             <a class="d-block w-100 modal-open" href="" title="Banner 4">
                                 <picture class="position-relative w-100 m-0 ratioslide d-block aspect">
                                     <img src="images/2.png" alt="Banner 4" class="banner-img" alt="Banner 2">
                                 </picture>
                             </a>
                         </div>
                     </div>
                     <div class="swiper-pagination mew_slide_p swiper-pagination-clickable swiper-pagination-bullets">
                         <span class="swiper-pagination-bullet" tabindex="0" role="button"
                             aria-label="Go to slide 1"></span>
                         <span class="swiper-pagination-bullet" tabindex="0" role="button"
                             aria-label="Go to slide 2"></span>
                         <span class="swiper-pagination-bullet" tabindex="0" role="button"
                             aria-label="Go to slide 3"></span>
                         <span class="swiper-pagination-bullet" tabindex="0" role="button"
                             aria-label="Go to slide 4"></span>
                     </div>
                     <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                 </div>
             </section>

             <section class="product_poli_wrap pt-3 pb-3 pb-sm-0">
                 <div class="line_slide bg-white d-none d-sm-block">
                     <svg style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 80">
                         <defs>
                             <linearGradient id="mew-poli-svg" x1="0" x2="0" y1="1" y2="0">
                                 <stop stop-color="var(--lightLeftColBackground)" offset="0%"></stop>
                                 <stop stop-color="var(--lightLeftColBackground)" offset="100%"></stop>
                             </linearGradient>
                         </defs>
                         <path style="transform:translate(0, 0px); opacity:1" fill="url(#mew-poli-svg)"
                             d="M0,20L40,26.7C80,33,160,47,240,53.3C320,60,400,60,480,53.3C560,47,640,33,720,31.7C800,30,880,40,960,50C1040,60,1120,70,1200,61.7C1280,53,1360,27,1440,28.3C1520,30,1600,60,1680,65C1760,70,1840,50,1920,38.3C2000,27,2080,23,2160,31.7C2240,40,2320,60,2400,65C2480,70,2560,60,2640,51.7C2720,43,2800,37,2880,28.3C2960,20,3040,10,3120,5C3200,0,3280,0,3360,0C3440,0,3520,0,3600,6.7C3680,13,3760,27,3840,30C3920,33,4000,27,4080,28.3C4160,30,4240,40,4320,41.7C4400,43,4480,37,4560,28.3C4640,20,4720,10,4800,20C4880,30,4960,60,5040,70C5120,80,5200,70,5280,66.7C5360,63,5440,67,5520,58.3C5600,50,5680,30,5720,20L5760,10L5760,100L5720,100C5680,100,5600,100,5520,100C5440,100,5360,100,5280,100C5200,100,5120,100,5040,100C4960,100,4880,100,4800,100C4720,100,4640,100,4560,100C4480,100,4400,100,4320,100C4240,100,4160,100,4080,100C4000,100,3920,100,3840,100C3760,100,3680,100,3600,100C3520,100,3440,100,3360,100C3280,100,3200,100,3120,100C3040,100,2960,100,2880,100C2800,100,2720,100,2640,100C2560,100,2480,100,2400,100C2320,100,2240,100,2160,100C2080,100,2000,100,1920,100C1840,100,1760,100,1680,100C1600,100,1520,100,1440,100C1360,100,1280,100,1200,100C1120,100,1040,100,960,100C880,100,800,100,720,100C640,100,560,100,480,100C400,100,320,100,240,100C160,100,80,100,40,100L0,100Z">
                         </path>
                     </svg>
                 </div>
             </section>


             <section id="mew_cate_1" class="mew_cate_1 mb-3 mb-lg-4">
                 <div class="container">
                     <div class="b_mew_cate">
                         <h3 class="title position-relative pb-3 m-0 font-coiny">
                             Các sản phẩm
                         </h3>
                         <div
                             class="m_cate_slide m_cate_slide_edit swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                             <div class="swiper-wrapper" id="swiper-wrapper-c1010ba111cc9dac69" aria-live="polite"
                                 style="transform: translate3d(0px, 0px, 0px);">

                                 <div class="swiper-slide-edit-famus swiper-slide">
                                     <div class="flex items-center justify-center box_cate row m-0 p-3 h-full">
                                         <a href="http://14.225.211.7:8503/" title="Chăm sóc sức khỏe tinh thần" target="_blank" rel="noopener noreferrer"
                                             class="font-weight-bold big_tit z-10 text-xl">Chăm sóc sức khỏe tinh thần</a>
                                         <div class="img_cate col-5 col-sm-6 p-0">
                                             <a href="http://14.225.211.7:8503/" title="Chăm sóc sức khỏe tinh thần" target="_blank" rel="noopener noreferrer"
                                                 class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                                                 <img class="d-block img img-cover position-absolute rounded-full"
                                                     style="height: 100% !important;" alt="Thịt trứng"
                                                     src="https://cdn-images-3.listennotes.com/podcasts/s%E1%BB%A9c-kh%E1%BB%8Fe-tinh-th%E1%BA%A7n/kangen-water-cho-s%E1%BB%A9c-kh%E1%BB%8Fe-dhwxNio75LD-tT5YWnyupgX.800x800.jpg">
                                             </a>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="swiper-slide-edit-famus swiper-slide">
                                     <div class="flex items-center justify-center box_cate row m-0 p-3 h-full">
                                         <a href="http://14.225.211.7:8502" title="Gia sư chương trình đổi mới giáo dục 2018" target="_blank" rel="noopener noreferrer"
                                             class="font-weight-bold big_tit z-10 text-xl">Gia sư chương trình đổi mới giáo
                                             dục 2018</a>
                                         <!-- <div class="child col-7 col-sm-6 pl-0">
                                                            <div class="childs">
                                                                <a href="" title="Bò tươi" class="small_tit line_1 my-3">Bò
                                                        tươi</a>
                                                            </div>
                                                            <div class="childs">
                                                                <a href="" title="Khô bò" class="small_tit line_1 my-3">Khô bò</a>
                                                            </div>
                                                            <div class="childs">
                                                                <a href="" title="Giò bò" class="small_tit line_1 my-3">Giò bò</a>
                                                            </div>
                                                            <div class="childs">
                                                                <a href="" title="Ruốc bò" class="small_tit line_1 my-3">Ruốc
                                                        bò</a>
                                                            </div>
                                                        </div> -->
                                         <div class="img_cate col-12 col-sm-6 p-0">
                                             <a href="http://14.225.211.7:8502" title="Gia sư chương trình đổi mới giáo dục 2018" target="_blank" rel="noopener noreferrer"
                                                 class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                                                 <img class="d-block img img-cover position-absolute rounded-full"
                                                     style="height: 95% !important;" alt="Thịt bò"
                                                     src="https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2022/6/29/1061887/289838201_8897574018.png">
                                             </a>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="swiper-slide-edit-famus swiper-slide">
                                     <div class="flex items-center justify-center box_cate row m-0 p-3 h-full">
                                         <a href="{{ url('lien-he') }}" title="Cá nhân hóa & Dịch vụ tư vấn chuyên sâu"
                                             class="font-weight-bold big_tit z-10 text-xl">Cá nhân hóa & Dịch vụ tư vấn
                                             chuyên sâu</a>
                                         <div class="img_cate col-5 col-sm-6 p-0">
                                             <a href="{{ url('lien-he') }}" title="Cá nhân hóa & Dịch vụ tư vấn chuyên sâu"
                                                 class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                                                 <img class="d-block img img-cover position-absolute rounded-full"
                                                     style="height: 100% !important;" alt="Trang phục dân tộc"
                                                     src="https://subiz.com.vn/blog/wp-content/uploads/2023/12/subiz-loi-ich-ca-nhan-hoa-noi-dung-e1702018437992.png">
                                             </a>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                             <div class="swiper-button-prev mc_prev swiper-button-disabled" tabindex="-1" role="button"
                                 aria-label="Previous slide" aria-controls="swiper-wrapper-c1010ba111cc9dac69"
                                 aria-disabled="true"></div>
                             <div class="swiper-button-next mc_next" tabindex="0" role="button"
                                 aria-label="Next slide" aria-controls="swiper-wrapper-c1010ba111cc9dac69"
                                 aria-disabled="false"></div>
                             <div
                                 class="swiper-pagination mc_pagi d-md-none swiper-pagination-clickable swiper-pagination-bullets">
                                 <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                     role="button" aria-label="Go to slide 1"></span><span
                                     class="swiper-pagination-bullet" tabindex="0" role="button"
                                     aria-label="Go to slide 2"></span>
                                 <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                     aria-label="Go to slide 3"></span>
                             </div>
                             <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                         </div>
                     </div>
                 </div>
             </section>


             <section id="flash_sale" class="m_product mb-3 mb-lg-4 position-relative"
                 style="--bg_marquee: #9a1921;--cl_marquee: #ffd600;--bg_bt_marquee: #2e9f3c;--duration: 10s;--text-size: 24px">
                 <div class="container">
                     <div class="time_box row align-items-center mb-2">
                         <div class=" col-12 col-lg-6 mb-2 mb-lg-0">
                             <div class="row align-items-center">
                                 <div class="col-12">
                                     <h2 class="title position-relative pt-2 m-0 text-center text-lg-left font-coiny">
                                         <a class="position-relative" href="" title="">
                                             <!-- <img alt="Flash"
                                                        src="https://file.hstatic.net/200000823693/file/flash_11b2c7ab01f347fdb5018fb85b0955e7.gif"> -->
                                             Các khoá học phục vụ cộng đồng
                                         </a>
                                     </h2>
                                 </div>
                             </div>
                         </div>
                         <div class="ml-auto col-12 col-lg-6 text-center text-lg-right">
                             <countdown-timer data-time="05/24/2024 23:33"
                                 class="countdown-time-wrapper font-weight-bold position-relative pl-md-2 hidden">
                                 <div
                                     class="px-2 countdown-item rod position-relative text-white rounded-10 d-inline-flex align-items-baseline justify-content-center modal-open">
                                     <div class="days mr-1">-199</div>
                                     <span>Ngày</span>
                                 </div>
                                 <div
                                     class="hours px-2 countdown-item rod position-relative text-white rounded-10 d-inline-flex align-items-baseline justify-content-center modal-open">
                                     -17</div>
                                 <div
                                     class="minutes px-2 countdown-item rod position-relative text-white rounded-10 d-inline-flex align-items-baseline justify-content-center modal-open">
                                     -48</div>
                                 <div
                                     class="seconds px-2 countdown-item rod position-relative text-white rounded-10 d-inline-flex align-items-baseline justify-content-center modal-open">
                                     -4</div>
                             </countdown-timer>
                         </div>
                     </div>
                     <div class="b_products mg">
                         <div
                             class="mew_flash swiper-container position-relative px-2 pb-3 pb-lg-2 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-free-mode swiper-container-multirow">
                             <div class="swiper-wrapper">
                                 <div class="swiper-slide">
                                     <div class="product-item position-relative p-2 rounded-10 bg-white h-100 border">
                                         <a href="/" class="d-block mb-2 modal-open position-relative rounded thumb"
                                             title="Kỹ năng học tập thông minh">
                                             <picture
                                                 class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block zoom">
                                                 <img src="images/khoahoc1.png"
                                                     class="d-block img img-cover position-absolute" alt="">
                                             </picture>
                                             <img src=""
                                                 decoding="async" class="d-block img img-cover position-absolute khung"
                                                 alt="">
                                             <div class="item-info position-relative">
                                                 <h3 class="item-title font-weight-normal mb-0 mt-1">
                                                     <a class="line_3" href="/" title="Kỹ năng học tập thông minh">
                                                         Kèm bài tập thực hành lập lộ trình học tập cá nhân hóa.
                                                     </a>
                                                 </h3>

                                                 <!-- <div class="clearfix">
                                                                        <div class="sold-module d-flex w-100 position-relative text-left">
                                                                            <img src="https://theme.hstatic.net/200000830051/1001188866/14/hot-sale.png?v=502" decoding="async" class="position-absolute" alt="Sắp Cháy hàng">
                                                                            <div class="d-flex align-items-center justify-content-center sold position-absolute h-100 w-100">
                                                                                Đã bán: 14</div>
                                                                            <div class="remain modal-open position-absolute h-100" style="width:70%"></div>
                                                                        </div>
                                                                    </div> -->


                                             </div>
                                         </a>
                                     </div>
                                 </div>
                                 <div class="swiper-slide">
                                     <div class="product-item position-relative p-2 rounded-10 bg-white h-100 border">
                                         <a href="/" class="d-block mb-2 modal-open position-relative rounded thumb"
                                             title="Quản lý cảm xúc và giảm stress">
                                             <picture
                                                 class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block zoom">
                                                 <img src="images/khoahoc2.png"
                                                     class="d-block img img-cover position-absolute" alt="">
                                             </picture>
                                             <img src=""
                                                 decoding="async" class="d-block img img-cover position-absolute khung"
                                                 alt="">
                                             <div class="item-info position-relative">
                                                 <h3 class="item-title font-weight-normal mb-0 mt-1">
                                                     <a class="line_3" href="/"
                                                         title="Quản lý cảm xúc và giảm stress">
                                                         Thực hành các bài tập giảm stress trên nền tảng MindGrow.
                                                     </a>
                                                 </h3>
                                                 <!--
                                                                    <div class="clearfix">
                                                                        <div class="sold-module d-flex w-100 position-relative text-left">
                                                                            <img src="https://theme.hstatic.net/200000830051/1001188866/14/hot-sale.png?v=502" decoding="async" class="position-absolute" alt="Sắp Cháy hàng">
                                                                            <div class="d-flex align-items-center justify-content-center sold position-absolute h-100 w-100">
                                                                                Đã bán: 14</div>
                                                                            <div class="remain modal-open position-absolute h-100" style="width:70%"></div>
                                                                        </div>
                                                                    </div> -->


                                             </div>
                                         </a>
                                     </div>
                                 </div>
                                 <div class="swiper-slide">
                                     <div class="product-item position-relative p-2 rounded-10 bg-white h-100 border">
                                         <a href="/" class="d-block mb-2 modal-open position-relative rounded thumb"
                                             title="Đồng hành cùng con - Phụ huynh thông thái">
                                             <picture
                                                 class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block zoom">
                                                 <img src="images/khoahoc3.png"
                                                     class="d-block img img-cover position-absolute" alt="">
                                             </picture>
                                             <img src=""
                                                 decoding="async" class="d-block img img-cover position-absolute khung"
                                                 alt="">
                                             <div class="item-info position-relative">
                                                 <h3 class="item-title font-weight-normal mb-0 mt-1">
                                                     <a class="line_4" href="/"
                                                         title="Đồng hành cùng con - Phụ huynh thông thái">
                                                         Hướng dẫn sử dụng MindGrow để theo dõi tiến trình học tập của con.
                                                     </a>
                                                 </h3>

                                                 <!-- <div class="clearfix">
                                                                        <div class="sold-module d-flex w-100 position-relative text-left">
                                                                            <img src="https://theme.hstatic.net/200000830051/1001188866/14/hot-sale.png?v=502" decoding="async" class="position-absolute" alt="Sắp Cháy hàng">
                                                                            <div class="d-flex align-items-center justify-content-center sold position-absolute h-100 w-100">
                                                                                Đã bán: 14</div>
                                                                            <div class="remain modal-open position-absolute h-100" style="width:70%"></div>
                                                                        </div>
                                                                    </div> -->


                                             </div>
                                         </a>
                                     </div>
                                 </div>
                                 <div class="swiper-slide">
                                     <div class="product-item position-relative p-2 rounded-10 bg-white h-100 border">
                                         <a href="/" class="d-block mb-2 modal-open position-relative rounded thumb"
                                             title="Giáo viên thời đại công nghệ">
                                             <picture
                                                 class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block zoom">
                                                 <img src="images/khoahoc4.png"
                                                     class="d-block img img-cover position-absolute" alt="">
                                             </picture>
                                             <img src=""
                                                 decoding="async" class="d-block img img-cover position-absolute khung"
                                                 alt="">
                                             <div class="item-info position-relative">
                                                 <h3 class="item-title font-weight-normal mb-0 mt-1">
                                                     <a class="line_4" href="/"
                                                         title="Giáo viên thời đại công nghệ">
                                                         Tặng tài khoản MindGrow miễn phí để giáo viên sử dụng trong giảng
                                                         dạy.
                                                     </a>
                                                 </h3>
                                                 <!--
                                                                    <div class="clearfix">
                                                                        <div class="sold-module d-flex w-100 position-relative text-left">
                                                                            <img src="https://theme.hstatic.net/200000830051/1001188866/14/hot-sale.png?v=502" decoding="async" class="position-absolute" alt="Sắp Cháy hàng">
                                                                            <div class="d-flex align-items-center justify-content-center sold position-absolute h-100 w-100">
                                                                                Đã bán: 14</div>
                                                                            <div class="remain modal-open position-absolute h-100" style="width:70%"></div>
                                                                        </div>
                                                                    </div> -->


                                             </div>
                                         </a>
                                     </div>
                                 </div>
                                 <div class="swiper-slide">
                                     <div class="product-item position-relative p-2 rounded-10 bg-white h-100 border">
                                         <a href="/" class="d-block mb-2 modal-open position-relative rounded thumb"
                                             title="Hướng nghiệp và định hướng tương lai">
                                             <picture
                                                 class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block zoom">
                                                 <img src="images/khoahoc5.png"
                                                     class="d-block img img-cover position-absolute" alt="">
                                             </picture>
                                             <img src=""
                                                 decoding="async" class="d-block img img-cover position-absolute khung"
                                                 alt="">
                                             <div class="item-info position-relative">
                                                 <h3 class="item-title font-weight-normal mb-0 mt-1">
                                                     <a class="line_4" href="/"
                                                         title="Hướng nghiệp và định hướng tương lai">
                                                         Kết hợp chuyên gia tâm lý và hướng nghiệp để tư vấn trực tiếp trong
                                                         mỗi buổi học.
                                                     </a>
                                                 </h3>

                                                 <!-- <div class="clearfix">
                                                                        <div class="sold-module d-flex w-100 position-relative text-left">
                                                                            <img src="https://theme.hstatic.net/200000830051/1001188866/14/hot-sale.png?v=502" decoding="async" class="position-absolute" alt="Sắp Cháy hàng">
                                                                            <div class="d-flex align-items-center justify-content-center sold position-absolute h-100 w-100">
                                                                                Đã bán: 14</div>
                                                                            <div class="remain modal-open position-absolute h-100" style="width:70%"></div>
                                                                        </div>
                                                                    </div> -->


                                             </div>
                                         </a>
                                     </div>
                                 </div>

                             </div>

                             <!-- Nút điều hướng -->
                             <div class="swiper-button-prev mf_prev swiper-button-disabled" tabindex="-1"
                                 role="button"></div>
                             <div class="swiper-button-next mf_next" tabindex="0" role="button"></div>

                             <!-- Thanh cuộn -->
                             <div class="swiper-scrollbar sb_flash d-lg-none">
                                 <div class="swiper-scrollbar-drag"></div>
                             </div>
                         </div>
                     </div>


                     <!-- <div class="marquee d-flex modal-open position-relative py-2 py-lg-3 rounded-10" role="marquee">
                                            <span class="marquee-content d-inline-flex align-items-center">
                                    <span class="marquee-item marquee-text d-inline-block pr-3 pr-lg-4 font-weight-bold">
                                        <a>Tưng bừng
                                            khuyến mãi</a>
                                    </span>
                                            <span class="marquee-item marquee-button d-inline-block mr-3 mr-lg-4">
                                        <a class="btn btn-marquee px-3 px-lg-4 font-weight-bold">Flash Sale</a>
                                    </span>
                                            </span>
                                            <span class="marquee-content d-inline-flex align-items-center" aria-hidden="true">
                                    <span class="marquee-item marquee-text d-inline-block pr-3 pr-lg-4 font-weight-bold">
                                        <a tabindex="-1">Tưng bừng khuyến mãi</a>
                                    </span>
                                            <span class="marquee-item marquee-button d-inline-block mr-3 mr-lg-4">
                                        <a class="btn btn-marquee px-3 px-lg-4 font-weight-bold" tabindex="-1">Flash Sale</a>
                                    </span>
                                            </span>
                                            <span class="marquee-content d-inline-flex align-items-center" aria-hidden="true">
                                    <span class="marquee-item marquee-text d-inline-block pr-3 pr-lg-4 font-weight-bold">
                                        <a tabindex="-1">Tưng bừng khuyến mãi</a>
                                    </span>
                                            <span class="marquee-item marquee-button d-inline-block mr-3 mr-lg-4">
                                        <a class="btn btn-marquee px-3 px-lg-4 font-weight-bold" tabindex="-1">Flash Sale</a>
                                    </span>
                                            </span>
                                            <span class="marquee-content d-inline-flex align-items-center" aria-hidden="true">
                                    <span class="marquee-item marquee-text d-inline-block pr-3 pr-lg-4 font-weight-bold">
                                        <a tabindex="-1">Tưng bừng khuyến mãi</a>
                                    </span>
                                            <span class="marquee-item marquee-button d-inline-block mr-3 mr-lg-4">
                                        <a class="btn btn-marquee px-3 px-lg-4 font-weight-bold" tabindex="-1">Flash Sale</a>
                                    </span>
                                            </span>
                                            <span class="marquee-content d-inline-flex align-items-center" aria-hidden="true">
                                    <span class="marquee-item marquee-text d-inline-block pr-3 pr-lg-4 font-weight-bold">
                                        <a tabindex="-1">Tưng bừng khuyến mãi</a>
                                    </span>
                                            <span class="marquee-item marquee-button d-inline-block mr-3 mr-lg-4">
                                        <a class="btn btn-marquee px-3 px-lg-4 font-weight-bold" tabindex="-1">Flash Sale</a>
                                    </span>
                                            </span>
                                        </div> -->
                 </div>
             </section>

             <section data-tab2="" class="m_product mb-3 mb-lg-4">
                 <div class="container">
                     <div class="head_box d-flex align-items-md-center justify-content-between flex-column flex-md-row">
                         <h2 class="title font-coiny position-relative m-0">
                             Các gói dịch vụ
                         </h2>
                     </div>
                     <div class="p-2 rounded-10 border_flash mew_marquee" style="border-color: #008470 ;">
                         <div class="row">
                             <div class="col-xl-12 col-lg-12 col-12 order-lg-2">
                                 <div class="mg">
                                     <div class="mew_product_tab active loaded swiper-container pb-3 px-2">
                                         <div class="swiper-wrapper">
                                             <div class="swiper-slide swiper-slide-edit text-left box_padding">
                                                 <div
                                                     class="product-item position-relative p-2 rounded-10 bg-white h-100 border">
                                                     <a href="http://14.225.211.7:8503/"
                                                         class="d-block mb-2 modal-open position-relative rounded thumb"
                                                         title="Tài khoản miễn phí" target="_blank" rel="noopener noreferrer">
                                                         <picture
                                                             class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block zoom">
                                                             <img src="images/tkmienphi.png"
                                                                 class="d-block img img-cover position-absolute"
                                                                 alt="">
                                                         </picture>

                                                         <div class="item-info position-relative">
                                                             <h3 class="item-title font-weight-normal mb-0 mt-1">
                                                                 <a class="line_1"
                                                                     href="http://14.225.211.7:8503/"
                                                                     title="Tài khoản miễn phí" target="_blank" rel="noopener noreferrer">
                                                                     Tài khoản miễn phí
                                                                 </a>
                                                             </h3>
                                                             <div class="item-price position-relative">
                                                                 <span
                                                                     class="special-price font-weight-bold position-relative">
                                                                     Miễn phí
                                                                 </span>
                                                             </div>
                                                         </div>
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="swiper-slide swiper-slide-edit text-left box_padding">
                                                 <div
                                                     class="product-item position-relative p-2 rounded-10 bg-white h-100 border">
                                                     <a href="https://aitoan2k7.girc.edu.vn"
                                                         class="d-block mb-2 modal-open position-relative rounded thumb"
                                                         title="Tài khoản dùng thử MÔN TOÁN" target="_blank" rel="noopener noreferrer">
                                                         <picture
                                                             class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block zoom">
                                                             <img src="images/tkdungthu.png"
                                                                 class="d-block img img-cover position-absolute"
                                                                 alt="">
                                                         </picture>

                                                         <div class="item-info position-relative">
                                                             <h3 class="item-title font-weight-normal mb-0 mt-1">
                                                                 <a class="line_1" href="https://aitoan2k7.girc.edu.vn"
                                                                     title="Tài khoản dùng thử" target="_blank" rel="noopener noreferrer">
                                                                     Tài khoản dùng thử MÔN TOÁN
                                                                 </a>
                                                             </h3>
                                                             <div class="item-price position-relative">
                                                                 <span
                                                                     class="special-price font-weight-bold position-relative">
                                                                     Miễn phí trong 7 -14 ngày
                                                                 </span>
                                                             </div>
                                                         </div>
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="swiper-slide swiper-slide-edit text-left box_padding">
                                                 <div
                                                     class="product-item position-relative p-2 rounded-10 bg-white h-100 border">
                                                     <a href="http://14.225.211.7:8502/"
                                                         class="d-block mb-2 modal-open position-relative rounded thumb"
                                                         title="Tài khoản pro" target="_blank" rel="noopener noreferrer">
                                                         <picture
                                                             class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block zoom">
                                                             <img src="images/tkpro.png"
                                                                 class="d-block img img-cover position-absolute"
                                                                 alt="">
                                                         </picture>

                                                         <div class="item-info position-relative">
                                                             <h3 class="item-title font-weight-normal mb-0 mt-1">
                                                                 <a class="line_1" href="http://14.225.211.7:8502/" title="Tài khoản pro" target="_blank" rel="noopener noreferrer">
                                                                     Tài khoản Pro học sinh giỏi Sinh học
                                                                 </a>
                                                             </h3>
                                                             <div class="item-price position-relative">
                                                                 <span
                                                                     class="special-price font-weight-bold position-relative">
                                                                     300,000 vnđ/tháng
                                                                 </span>
                                                             </div>
                                                         </div>
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="swiper-slide swiper-slide-edit text-left box_padding">
                                                 <div
                                                     class="product-item position-relative p-2 rounded-10 bg-white h-100 border">
                                                     <a href="https://onthi2k7.girc.edu.vn"
                                                         class="d-block mb-2 modal-open position-relative rounded thumb"
                                                         title="Tài khoản nhóm dùng thử" target="_blank" rel="noopener noreferrer">
                                                         <picture
                                                             class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block zoom">
                                                             <img src="images/tknhom.png"
                                                                 class="d-block img img-cover position-absolute"
                                                                 alt="">
                                                         </picture>

                                                         <div class="item-info position-relative">
                                                             <h3 class="item-title font-weight-normal mb-0 mt-1">
                                                                 <a class="line_1" href="https://onthi2k7.girc.edu.vn" title="Tài khoản nhóm" target="_blank" rel="noopener noreferrer">
                                                                     Tài khoản nhóm DÙNG THỬ
                                                                 </a>
                                                             </h3>
                                                             <div class="item-price position-relative">
                                                                 <span
                                                                     class="special-price font-weight-bold position-relative">
                                                                     200,000 vnđ/người/tháng
                                                                 </span>
                                                             </div>
                                                         </div>
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="swiper-slide swiper-slide-edit text-left box_padding">
                                                 <div
                                                     class="product-item position-relative p-2 rounded-10 bg-white h-100 border">
                                                     <a href="https://onthi2k7.girc.edu.vn"
                                                         class="d-block mb-2 modal-open position-relative rounded thumb"
                                                         title="Tài khoản tập thể" target="_blank" rel="noopener noreferrer">
                                                         <picture
                                                             class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block zoom">
                                                             <img src="images/taikhoantapthe.png"
                                                                 class="d-block img img-cover position-absolute"
                                                                 alt="">
                                                         </picture>

                                                         <div class="item-info position-relative">
                                                             <h3 class="item-title font-weight-normal mb-0 mt-1">
                                                                 <a class="line_1" href="https://onthi2k7.girc.edu.vn"
                                                                     title="Tài khoản tập thể" target="_blank" rel="noopener noreferrer">
                                                                     Tài khoản tập thể DÙNG THỬ
                                                                 </a>
                                                             </h3>
                                                             <div class="item-price position-relative">
                                                                 <span
                                                                     class="special-price font-weight-bold position-relative">
                                                                     Liên hệ
                                                                 </span>
                                                             </div>
                                                         </div>
                                                     </a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>

             <section class="m_video_review mb-3 mb-lg-4">
                 <div class="container">
                     <h2 class="title position-relative pb-2 pb-lg-3 m-0 font-coiny">
                         <a class="position-relative" href="" title="Hình ảnh và video">Hình ảnh và video</a>
                     </h2>
                     <div
                         class="mew_video_index swiper-container position-relative swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                         <div class="swiper-wrapper" id="swiper-wrapper-06f551079c47750410" aria-live="polite"
                             style="transform: translate3d(0px, 0px, 0px)">

                             <div class="swiper-slide swiper-slide-active" style="width: 268.75px; margin-right: 15px;"
                                 role="group" aria-label="1 / 8">
                                 <div class="item_grid">
                                     <div class="img_thm position-relative rounded-10 modal-open">
                                         <a href="javascript:;" data-video="d9QqGUDosl4" class="effect-ming open_popup"
                                             title="Sản phẩm dự thi của nhóm khởi nghiệp Trường THPT CVA - MindGrow">
                                             <div
                                                 class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect">
                                                 <img src="{{asset('images/thumbnail.jpg')}}"
                                                     data-src="{{asset('images/thumbnail.jpg')}}"
                                                     class="d-block img img-cover position-absolute lazy loaded"
                                                     alt="Sản phẩm dự thi của nhóm khởi nghiệp Trường THPT CVA - MindGrow">
                                                 <div class="position-absolute w-100 h-100 video_open lazy_bg loaded"
                                                     data-video="d9QqGUDosl4"
                                                     data-background="url(//theme.hstatic.net/200000830051/1001188866/14/play-button.png?v=502)"
                                                     style="background-image: url(&quot;//theme.hstatic.net/200000830051/1001188866/14/play-button.png?v=502&quot;);">
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <h3 class="title_blo mt-2"><a class="line_2"
                                             title="Sản phẩm dự thi của nhóm khởi nghiệp Trường THPT CVA - MindGrow"><strong>Sản phẩm dự thi của nhóm khởi nghiệp Trường THPT CVA - MindGrow</strong></a>
                                     </h3>
                                 </div>
                             </div>

                             <div class="swiper-slide swiper-slide-active" style="width: 268.75px; margin-right: 15px"
                                 role="group" aria-label="2 / 8">
                                 <div class="item_grid">
                                     <div class="img_thm position-relative rounded-10 modal-open">
                                         <div
                                             class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect">
                                             <img src="{{ asset('images/5ng.png') }}"
                                                 data-src="{{ asset('images/5ng.png') }}"
                                                 class="d-block img img-cover position-absolute lazy loaded"
                                                 alt="" />
                                         </div>
                                         </a>
                                     </div>
                                 </div>
                             </div>

                             <div class="swiper-slide swiper-slide-next" style="width: 268.75px; margin-right: 15px"
                                 role="group" aria-label="3 / 8">
                                 <div class="item_grid">
                                     <div class="img_thm position-relative rounded-10 modal-open">
                                         <div
                                             class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect">
                                             <img src="{{ asset('images/3.jpg') }}"
                                                 data-src="{{ asset('images/3.jpg') }}"
                                                 class="d-block img img-cover position-absolute lazy loaded"
                                                 alt="" />
                                         </div>
                                         </a>
                                     </div>
                                 </div>
                             </div>

                             <div class="swiper-slide" style="width: 268.75px; margin-right: 15px" role="group"
                                 aria-label="4 / 8">
                                 <div class="item_grid">
                                     <div class="img_thm position-relative rounded-10 modal-open">
                                         <div
                                             class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect">
                                             <img src="{{ asset('images/22.jpg') }}" data-src="{{ asset('images/22.jpg') }}"
                                                 class="d-block img img-cover position-absolute lazy loaded"
                                                 alt="" />
                                         </div>
                                         </a>
                                     </div>
                                 </div>
                             </div>

                             <div class="swiper-slide" style="width: 268.75px; margin-right: 15px" role="group"
                                 aria-label="5 / 8">
                                 <div class="item_grid">
                                     <div class="img_thm position-relative rounded-10 modal-open">
                                         <div
                                             class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect">
                                             <img src="{{ asset('images/6.jpg') }}" data-src="{{ asset('images/6.jpg') }}"
                                                 class="d-block img img-cover position-absolute lazy loaded"
                                                 alt="" />
                                         </div>
                                         </a>
                                     </div>
                                 </div>
                             </div>

                             <div class="swiper-slide" style="width: 268.75px; margin-right: 15px" role="group"
                                 aria-label="6 / 8">
                                 <div class="item_grid">
                                     <div class="img_thm position-relative rounded-10 modal-open">
                                         <div
                                             class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect">
                                             <img src="{{ asset('images/7.jpg') }}" data-src="{{ asset('images/7.jpg') }}"
                                                 class="d-block img img-cover position-absolute lazy"
                                                 alt="" />
                                         </div>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide" style="width: 268.75px; margin-right: 15px" role="group"
                                 aria-label="7 / 8">
                                 <div class="item_grid">
                                     <div class="img_thm position-relative rounded-10 modal-open">
                                         <div
                                             class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect">
                                             <img src="{{ asset('images/4.jpg') }}" data-src="{{ asset('images/4.jpg') }}"
                                                 class="d-block img img-cover position-absolute lazy"
                                                 alt="" />
                                         </div>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide" style="width: 268.75px; margin-right: 15px" role="group"
                                 aria-label="8 / 8">
                                 <div class="item_grid">
                                     <div class="img_thm position-relative rounded-10 modal-open">
                                         <div
                                             class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect">
                                             <img src="{{ asset('images/5.jpg') }}"
                                                 data-src="{{ asset('images/5.jpg') }}"
                                                 class="d-block img img-cover position-absolute lazy"
                                                 alt="" />
                                         </div>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="swiper-pagination mew_video_p"></div>
                         <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                     </div>
                 </div>

                 <div class="popup_box position-fixed w-100 h-100 justify-content-center align-items-center d-flex">
                     <div class="position-relative max-100">
                         <a href="javascript:;"
                             class="close_popup position-absolute d-flex justify-content-center align-items-center bg-dark"
                             title="Đóng">
                             <svg width="18" height="18">
                                 <use href="#svg-close"></use>
                             </svg>
                         </a>
                         <div class="b_video p-2 p-md-3 bg-white rounded-10 m-auto"></div>
                     </div>
                 </div>
             </section>

             <div class="modal fade" id="quickviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
             <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                 <div class="modal-content pt-4 pt-lg-0">
                     <div class="border-0 modal-header p-0 position-relative">
                         <button type="button" class="btn btn-close ml-auto mr-1 position-absolute close"
                             data-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body"></div>
                 </div>
             </div>
         </div>
            <div id="popsale" class="jas-sale-pop flex pf middle-xs rounded-10 bg-white box_shadow position-fixed">
                <a href="" class="jas-sale-pop-img mr-3">
                    <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect">
                        <img class="d-block img img-cover position-absolute"
                            src="" alt="">
                    </div>
                </a>
                <div class="jas-sale-pop-content">
                    <p class="font-weight-bold mb-0">Tài khoản miễn phí</p>
                    <h3 class="mb-1">
                        <a href="" title="Tài khoản miễn phí">
                            Tài khoản miễn phí
                        </a>
                    </h3>
                </div>
                <div class="jas-sale-pop-content">
                    <p class="font-weight-bold mb-0">Tài khoản dùng thử MÔN TOÁN</p>
                    <h3 class="mb-1">
                        <a href="" title="Tài khoản dùng thử MÔN TOÁN">
                            Tài khoản dùng thử MÔN TOÁN
                        </a>
                    </h3>
                </div>
                <div class="jas-sale-pop-content">
                    <p class="font-weight-bold mb-0">Tài khoản Pro học sinh giỏi Sinh học</p>
                    <h3 class="mb-1">
                        <a href="" title="Tài khoản Pro học sinh giỏi Sinh học">
                            Tài khoản Pro học sinh giỏi Sinh học
                        </a>
                    </h3>
                </div>
                <span class="btn btn-close position-absolute"></span>
                <a href="" class="jas-sale-pop-img mr-3">
                    <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect">
                        <img class="d-block img img-cover position-absolute"
                            src="" alt="">
                    </div>
                </a>
                <div class="jas-sale-pop-content">
                    <p class="font-weight-bold mb-0">Tài khoản nhóm DÙNG THỬ</p>
                    <h3 class="mb-1">
                        <a href="" title="Tài khoản nhóm DÙNG THỬ">
                            Tài khoản nhóm DÙNG THỬ
                        </a>
                    </h3>
                </div>
                <div class="jas-sale-pop-content">
                    <p class="font-weight-bold mb-0">Tài khoản tập thể DÙNG THỬ</p>
                    <h3 class="mb-1">
                        <a href=""
                            title="Tài khoản tập thể DÙNG THỬ">
                            Tài khoản tập thể DÙNG THỬ
                        </a>
                    </h3>
                </div>
                <span class="btn btn-close position-absolute"></span>
                <a href=""
                    class="jas-sale-pop-img mr-3">
                    <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect">
                        <img class="d-block img img-cover position-absolute"
                            src=""
                            alt="">
                    </div>
                </a>
            </div>

         <script>
             const popsale_cate = [{
                     "img_url": "images/tkmienphi.png",
                     "title": "Tài khoản miễn phí",
                     "url": "",
                 },
                 {
                     "img_url": "images/tkdungthu.png",
                     "title": "Tài khoản dùng thử MÔN TOÁN",
                     "url": "",
                 },
                 {
                     "img_url": "images/tkpro.png",
                     "title": "Tài khoản Pro học sinh giỏi Sinh học",
                     "url": "",
                 },
                 {
                     "img_url": "images/tknhom.png",
                     "title": "Tài khoản nhóm DÙNG THỬ",
                     "url": "",
                 },
                 {
                     "img_url": "images/taikhoantapthe.png",
                     "title": "Tài khoản tập thể DÙNG THỬ",
                     "url": "",
                 },
                 {
                     "img_url": "images/khoahoc1.png",
                     "title": "Kỹ năng học tập thông minh",
                     "url": "",
                 },
                 {
                     "img_url": "images/khoahoc2.png",
                     "title": "Quản lý cảm xúc và giảm stress",
                     "url": "",
                 },
                 {
                     "img_url": "images/khoahoc3.png",
                     "title": "Đồng hành cùng con - Phụ huynh thông thái",
                     "url": "",
                 },
                 {
                     "img_url": "images/khoahoc4.png",
                     "title": "Giáo viên thời đại công nghệ",
                     "url": "",
                 },
                 {
                     "img_url": "images/khoahoc5.png",
                     "title": "Hướng nghiệp và định hướng tương lai",
                     "url": "",
                 },
             ];

             let pmin = "phút trước";
             let ptit = "Danh mục";
             let pdes = "Được truy cập";
             const timeToShow = 4000;
             const timeDelay = 8000;
             const timeSpace = 12000;
         </script>
         @endsection
