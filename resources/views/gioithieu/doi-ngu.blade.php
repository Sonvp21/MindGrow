@extends('layout.layout')
@section('content')
    <div class="contentWarp mt-4">
        <div class="page_intro">
            <div class="container my-4 my-lg-2">
                <h2 class="font-weight-bold mb-4 mt-2">
                    Đội ngũ sáng lập
                </h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Lớp</th>
                            <th scope="col">Vai trờ</th>
                            <th scope="col">Thành tích</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><img style="scale: 80%" src="{{asset('images/bu.png')}}" alt=""></th>
                            <th>Nguyễn Hồng Anh</th>
                            <td>Lớp 10A3 - Trường THPT Chu Văn An</td>
                            <td>Điều phối và quản lý tổng thể dự án.</td>
                            <td><ul>
                                <li>Giải Ba Cuộc thi Khoa học Kỹ thuật cấp Tỉnh 2024</li>
                                <li>Giải Nhất Cuộc thi Lãnh đạo trẻ Toàn quốc 2022</li>
                                <li>Giải Nhì Học sinh Giỏi Văn cấp Thành phố năm 2022</li>
                                <li>Hoàn thành khóa đào tạo Solve for Tomorrow 2023</li>
                              </ul>
                              </td>
                        </tr>
                        <tr>
                            <th><img style="scale: 80%" src="{{asset('images/lam.png')}}" alt=""></th>
                            <th>Trần Đại Lâm</th>
                            <td>Lớp 11A1 - Trường THPT Chu Văn An</td>
                            <td>Phụ trách sử dụng và vận hành công nghệ</td>
                            <td><ul>
                                <li>Giải 3 HSG Vật lý cấp Tỉnh 2023</li>
                                <li>Huy chương Đồng Cờ vua Hội khỏe Phù Đổng Toàn quốc 2023</li>
                                <li>Danh hiệu Học sinh 3 Tốt cấp Tỉnh năm 2023</li>
                              </ul>
                              </td>
                        </tr>
                        <tr>
                            <th><img style="scale: 80%" src="{{asset('images/hang.png')}}" alt=""></th>
                            <th>Nguyễn Minh Hằng</th>
                            <td>Lớp 11A1 - Trường THPT Chu Văn An</td>
                            <td>Phụ trách nội dung dữ liệu</td>
                            <td><ul>
                                <li>Giải Nhì Hội khỏe Phù Đổng cấp Tỉnh môn Cờ vua</li>
                                <li>Giải Nhất Khởi nghiệp cấp Trường năm 2024</li>
                              </ul>                              
                              </td>
                        </tr>
                        <tr>
                            <th><img style="scale: 80%" src="{{asset('images/anh.png')}}" alt=""></th>
                            <th>Trần Thị Kim Ánh</th>
                            <td>Lớp 10A2 - Trường THPT Chu Văn An</td>
                            <td>Phụ trách Marketing</td>
                            <td><ul>
                                <li>Thủ khoa đầu vào lớp 10 trường THPT Chu Văn An</li>
                                <li>Học sinh 3 Tốt cấp Trường</li>
                              </ul>
                              </td>
                        </tr>
                        <tr>
                            <th><img style="scale: 80%" src="{{asset('images/vietanh.png')}}" alt=""></th>
                            <th>Ngọ Quang Việt Anh</th>
                            <td>Lớp 10A2 - Trường THPT Chu Văn An</td>
                            <td>Ngọ Quang Việt Anh</td>
                            <td><ul>
                                <li>Chứng chỉ tiếng Anh B2 CEFR</li>
                                <li>Công dân Tích cực năm 2024</li>
                              </ul>
                              </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
