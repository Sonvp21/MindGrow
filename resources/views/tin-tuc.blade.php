@extends('layout.layout')
@section('content')
    <section class="col2-right-layout">
        <div class="main container blogs">
            <div class="col-main art_container mt-3 mb-3">
                <div class="row">
                    <article class="blog_entry clearfix row col-md-12 col-lg-8 col-xl-9" style="height: max-content">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 its mb-3" style="height: max-content">
                            <div class="item_grid mb-4">
                                <div class="img_thm position-relative modal-open rounded-10">
                                    <a href=""
                                        title="Nhóm MindGrow Xuất Sắc Đoạt Giải Nhất Khởi Nghiệp Cấp Trường Năm 2024!"
                                        class="d-block position-relative effect-ming thumb modal-open rounded-10">
                                        <div class="position-relative w-100 m-0 be_opa modal-open ratio3by2 aspect">

                                            <img src="{{asset('images/5ng.png')}}"
                                                class="d-block img img-cover position-absolute loaded"
                                                style="max-width: 300px; max-height: 345px;"
                                                alt="Nhóm MindGrow Xuất Sắc Đoạt Giải Nhất Khởi Nghiệp Cấp Trường Năm 2024!">

                                            <div class="position-absolute w-100 h-100 overlay">
                                            </div>
                                        </div>
                                        <div class="entry-date position-absolute text-center rounded-right">
                                            <p class="day font-weight-bold">
                                                1
                                                <!-- Đúng cú pháp ở đây -->
                                            </p>
                                            <p class="yeah">
                                                12/2024
                                                <!-- Đúng cú pháp ở đây -->
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="custom-article-item_info mt-2">
                                    <h3 class="title_blo mb-2">
                                        <a class="line_2 font-weight-bold h-auto" style="font-size: 16px"
                                            href=""
                                            title="Nhóm MindGrow Xuất Sắc Đoạt Giải Nhất Khởi Nghiệp Cấp Trường Năm 2024!">
                                            Nhóm MindGrow Xuất Sắc Đoạt Giải Nhất Khởi Nghiệp Cấp Trường Năm 2024!
                                        </a>
                                    </h3>
                                    <div class="mb-2" style="font-size: 14px">
                                        Nhóm MindGrow đã xuất sắc giành Giải Nhất tại cuộc thi Khởi nghiệp cấp trường năm 2024, khẳng định tinh thần sáng tạo và khả năng đổi mới vượt bậc...
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="pagination d-flex justify-content-center clearfix">

                                <li class="page-item mx-1 disabled">
                                    <a class="prev d-flex align-items-center justify-content-center page-link rounded-10 text-center"
                                        href="" title="Trang trước">
                                        <svg width="20" height="20">
                                            <use href="#svg-prev"></use>
                                        </svg>
                                    </a>
                                </li>


                                <li class="page-item mx-1 active disabled">
                                    <a class="d-flex align-items-center justify-content-center page-link rounded-10 text-center"
                                        href="" title="Trang 1">
                                        1
                                    </a>
                                </li>
                                <li class="page-item mx-1 ">
                                    <a class="d-flex align-items-center justify-content-center page-link rounded-10 text-center"
                                        href="" title="Trang 2">
                                        2
                                    </a>
                                </li>


                                <li class="page-item mx-1">
                                    <a class="d-flex align-items-center justify-content-center page-link rounded-10 text-center"
                                        href="javascript:;" title="Trang …">
                                        …
                                    </a>
                                </li>


                                <li class="page-item mx-1 ">
                                    <a class="next d-flex align-items-center justify-content-center page-link rounded-10 text-center"
                                        href="" title="Trang sau">
                                        <svg width="20" height="20">
                                            <use href="#svg-next"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article>


                    <div class="col-xl-3 col-lg-4 col-md-12 d-none d-lg-block ba_sidebar">
                        <div class="position-sticky top_20px">
                            <div class="aside-content">
                                <div class="h2 title-head font-weight-bold big text-uppercase d-block mb-2 p-2 rounded-10">
                                    Chủ đề nổi bật
                                </div>
                                <nav class="nav-category navbar-toggleable-md pb-3">
                                    <ul class="nav navbar-pills flex-column">
                                        <li class="nav-item position-relative ">
                                            <a title="Trang chủ" class="nav-link pl-0" href="/">Trang
                                                chủ</a>
                                        </li>
                                        <li class="nav-item position-relative position-relative">
                                            <a title="Giới thiệu" class="nav-link pl-0 pr-5">Giới
                                                thiệu</a>
                                            <i
                                                class="open_mnu down_icon align-items-center justify-content-center position-absolute"></i>
                                            <ul class="menu_down" style="display: none;">
                                                <li class="dropdown-submenu nav-item  position-relative">
                                                    <a href="{{url('sumenh')}}"
                                                        class="nav-link pr-5" title="Tầm nhìn, sứ mệnh">
                                                        Tầm nhìn, sứ mệnh
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu nav-item  position-relative">
                                                    <a href="{{url('chucnang')}}"
                                                        class="nav-link pr-5" title="Chức năng, nhiệm vụ">
                                                        Chức năng, nhiệm vụ
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu nav-item  position-relative">
                                                    <a href="{{url('doi-ngu')}}"
                                                        class="nav-link pr-5" title="Nhóm ngũ sáng lập">
                                                        Nhóm ngũ sáng lập
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item position-relative position-relative">
                                            <a title="Sản phẩm" class="nav-link pl-0 pr-5">Sản
                                                phẩm</a>
                                            <i
                                                class="open_mnu down_icon align-items-center justify-content-center position-absolute"></i>
                                            <ul class="menu_down" style="display: none;">
                                                <li class="dropdown-submenu nav-item  position-relative">
                                                    <a href="http://14.225.211.7:8502/"
                                                        class="nav-link pr-5" title="Gia sư MindGrow" target="_blank" rel="noopener noreferrer">
                                                        Gia sư MindGrow
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu nav-item  position-relative">
                                                    <a href="http://14.225.211.7:8503/"
                                                        class="nav-link pr-5" title="Chăm sóc sức khỏe tinh thần MindGrow" target="_blank" rel="noopener noreferrer">
                                                        Chăm sóc sức khỏe tinh thần MindGrow
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu nav-item  position-relative">
                                                    <a href="{{ url('lien-he') }}"
                                                        class="nav-link pr-5" title="Cá nhân hóa và dịch vụ tư vấn chuyên sâu">
                                                        Cá nhân hóa và dịch vụ tư vấn chuyên sâu
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item position-relative position-relative">
                                            <a href="{{ url('phucvu') }}" title="Phục vụ cộng đồng" class="nav-link pl-0 pr-5">Phục vụ cộng đồng
                                                </a>
                                            <i
                                                class="open_mnu down_icon align-items-center justify-content-center position-absolute"></i>
                                            <ul class="menu_down" style="display: none;">
                                                <li class="dropdown-submenu nav-item  position-relative">
                                                    <a href=""
                                                        class="nav-link pr-5" title="Kĩ năng học tập thông minh">
                                                        Kĩ năng học tập thông minh
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu nav-item  position-relative">
                                                    <a href=""
                                                        class="nav-link pr-5" title="Quản lý cảm xúc và giảm stree">
                                                        Quản lý cảm xúc và giảm stress
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu nav-item  position-relative">
                                                    <a href=""
                                                        class="nav-link pr-5" title="Đồng hành cùng con - Phụ huynh thông thái">
                                                        Đồng hành cùng con - Phụ huynh thông thái
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu nav-item  position-relative">
                                                    <a href=""
                                                        class="nav-link pr-5" title="Đổi mới tư duy giáo dục cho giáo viên">
                                                        Đổi mới tư duy giáo dục cho giáo viên
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu nav-item  position-relative">
                                                    <a href=""
                                                        class="nav-link pr-5" title="Hướng nghiệp và định hướng tương lai">
                                                        Hướng nghiệp và định hướng tương lai
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item position-relative position-relative">
                                            <a href="{{ url('dichvu') }}" title="Các gói dịch vụ" class="nav-link pl-0 pr-5">Các gói dịch vụ</a>
                                            <i
                                                class="open_mnu down_icon align-items-center justify-content-center position-absolute"></i>
                                            <ul class="menu_down" style="display: none;">
                                                <li class="dropdown-submenu nav-item  position-relative">
                                                    <a href="http://14.225.211.7:8503/"
                                                        class="nav-link pr-5" title="Tài khoản miễn phí" target="_blank" rel="noopener noreferrer">
                                                        Tài khoản miễn phí
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu nav-item  position-relative">
                                                    <a href="https://aitoan2k7.girc.edu.vn"
                                                        class="nav-link pr-5" title="Tài khoản dùng thử" target="_blank" rel="noopener noreferrer">
                                                        Tài khoản dùng thử môn Toán
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu nav-item  position-relative">
                                                    <a href="http://14.225.211.7:8502/"
                                                        class="nav-link pr-5" title="Tài khoản pro" target="_blank" rel="noopener noreferrer">
                                                        Tài khoản pro học sinh giỏi Sinh học
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu nav-item  position-relative">
                                                    <a href="https://onthi2k7.girc.edu.vn"
                                                        class="nav-link pr-5" title="Tài khoản nhóm" target="_blank" rel="noopener noreferrer">
                                                        Tài khoản nhóm DÙNG THỬ
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu nav-item  position-relative">
                                                    <a href="https://onthi2k7.girc.edu.vn"
                                                        class="nav-link pr-5" title="Tài khoản tập thể" target="_blank" rel="noopener noreferrer">
                                                        Tài khoản tập thể DÙNG THỬ
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item position-relative ">
                                            <a href="{{ url('lien-he') }}" title="Liên hệ" class="nav-link pl-0" href="/pages/lien-he">Liên hệ</a>
                                        </li>
                                        <li class="nav-item position-relative ">
                                            <a href="{{ url('hdsd') }}" title="Hướng dẫn sử dụng sản phẩm hiệu quả" class="nav-link pl-0">Hướng dẫn sử dụng sản phẩm hiệu quả</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="aside-item mb-2">
                                <div class="title-head mb-2 font-weight-bold">
                                    <a class="h2 title-head font-weight-bold big text-uppercase d-block mb-2 p-2 px-3 rounded-10"
                                        title="Có thể bạn quan tâm">
                                        Có thể bạn quan tâm
                                    </a>
                                </div>
                                <div class="list-blogs">
                                    <article class="d-flex blog-item blog-item-list clearfix border-bottom pt-2 pb-2">
                                        <div class="img_art thumb_img_blog_list">
                                            <a href=""
                                                title="Nhóm MindGrow Xuất Sắc Đoạt Giải Nhất Khởi Nghiệp Cấp Trường Năm 2024!"
                                                class="effect-ming">
                                                <div
                                                    class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect rounded">
                                                    <img src="{{asset('images/5ng.png')}}"
                                                        class="d-block img img-cover position-absolute loaded"
                                                        style="max-width: 100px; max-height: 135px;"
                                                        alt="Nhóm MindGrow Xuất Sắc Đoạt Giải Nhất Khởi Nghiệp Cấp Trường Năm 2024!">
                                                </div>
                                            </a>
                                        </div>
                                        <h3 class="blog-item-name pl-3 m-0 position-relative line_3">
                                            <a href=""
                                                title="Nhóm MindGrow Xuất Sắc Đoạt Giải Nhất Khởi Nghiệp Cấp Trường Năm 2024!">
                                                Nhóm MindGrow Xuất Sắc Đoạt Giải Nhất Khởi Nghiệp Cấp Trường Năm 2024!
                                            </a>
                                        </h3>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
