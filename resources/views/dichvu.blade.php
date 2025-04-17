@extends('layout.layout')
@section('content')
    <div class="contentWarp mt-4">
        <div class="page_intro">
            <div class="container my-4 my-lg-2">
                <h2 class="font-weight-bold mb-4 mt-2">
                    Các gói dịch vụ
                </h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Loại tài khoản</th>
                            <th scope="col">Chức năng chính</th>
                            <th scope="col">Đối tượng sử dụng</th>
                            <th scope="col">Giá thành (VNĐ/tháng)</th>
                            <th scope="col">Ghi chú</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1. Tài khoản miễn phí</th>
                            <td>
                                <ul>
                                    <li>Truy cập một số bài học và nội dung cơ bản.</li>
                                    <li>Tham gia các khóa học cộng đồng miễn phí.</li>
                            </td>
                            <td>
                                <li>Học sinh muốn khám phá MindGrow.</li>
                                <li>Phụ huynh muốn trải nghiệm cơ bản.</li>
                                </ul>
                            </td>
                            <td>Miễn phí</td>
                            <td>Không có tính năng cá nhân hóa và báo cáo chi tiết</td>
                        </tr>
                        <tr>
                            <th scope="row">2. Tài khoản dùng thử</th>
                            <td>
                                <ul>
                                    <li>Truy cập toàn bộ tính năng trong vòng 7-14 ngày:</li>
                                    <ul>
                                        <li>Lộ trình học tập cá nhân hóa.</li>
                                        <li>Bài tập giảm stress.</li>
                                    </ul>
                                </ul>
                            </td>
                            <td>Học sinh và phụ huynh muốn thử nghiệm trước khi mua gói trả phí</td>
                            <td>Miễn phí trong 7-14 ngày</td>
                            <td>Chỉ dùng được một lần duy nhất cho mỗi người dùng.</td>
                        </tr>
                        <tr>
                            <th scope="row">3. Tài khoản Pro</th>
                            <td>
                                <ul>
                                    <li>Truy cập toàn bộ tính năng nâng cao:</li>
                                    <ul>
                                        <li>Cá nhân hóa lộ trình học tập.</li>
                                        <li>Bài tập tinh thần.</li>
                                        <li>Báo cáo học tập chi tiết.</li>
                                    </ul>
                                </ul>
                            </td>
                            <td>Học sinh muốn nâng cao kết quả học tập và cải thiện tinh thần.</td>
                            <td>
                                <li>300.000 VNĐ/tháng</li>
                                <li>2 triệu/1 năm</li>
                            </td>
                            <td>Có thể chọn thanh toán theo tháng hoặc năm (ưu đãi khi thanh toán năm).</td>
                        </tr>
                        <tr>
                            <th scope="row">4. Tài khoản nhóm</th>
                            <td>
                                <ul>
                                    <li>Gói dành cho 5-10 người dùng:</li>
                                    <ul>
                                        <li>Mỗi người đều có lộ trình cá nhân hóa riêng.</li>
                                        <li>Báo cáo nhóm học tập.</li>
                                    </ul>
                                </ul>
                            </td>
                            <td>Các nhóm học tập, lớp nhỏ từ 5-10 học sinh.</td>
                            <td>200.000 VNĐ/người/tháng</td>
                            <td>Tiết kiệm 20-30% so với gói cá nhân.</td>
                        </tr>
                        <tr>
                            <th scope="row">5. Tài khoản tập thể</th>
                            <td>
                                <ul>
                                    <li>Gói dành cho tổ chức hoặc trường học:</li>
                                    <ul>
                                        <li>Tất cả học sinh và giáo viên trong trường đều truy cập được.</li>
                                        <li>Báo cáo tập thể chi tiết.</li>
                                    </ul>
                                </ul>
                            </td>
                            <td>Trường học, trung tâm giáo dục muốn triển khai MindGrow cho toàn bộ học sinh.</td>
                            <td>Liên hệ</td>
                            <td>Giá thay đổi tùy quy mô trường (số lượng tài khoản).</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
