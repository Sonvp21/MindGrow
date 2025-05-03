@extends('layout.layout')

@section('content')
<div class="com_info">
    <div class="container mb-3">
        <div class="bg-white px-2 p-lg-3 rounded-10 col-main page-title">
            <h1 class="pt-2 pt-lg-0 mb-2 mb-lg-3 mt-0 font-weight-bold">HƯỚNG DẪN HỎI GIA SƯ AI ONTHI2K7 HIỆU QUẢ</h1>
            <div class="m-auto bg-white d-block">
                <p><em>(Giúp bạn nhận được câu trả lời chính xác – dễ hiểu – đúng trọng tâm)</em></p>

                <h4>1. Đặt câu hỏi rõ ràng, cụ thể</h4>
                <p><strong>Không nên hỏi:</strong></p>
                <ul>
                    <li>“Giúp em giải bài này với.”</li>
                    <li>“Cái này làm sao vậy ạ?”</li>
                </ul>
                <p><strong>Nên hỏi:</strong></p>
                <ul>
                    <li>“Giải phương trình bậc hai: x² – 5x + 6 = 0 và giải thích từng bước.”</li>
                    <li>“Giải thích vì sao trong bài thơ ‘Tây Tiến’ lại nhắc đến hình ảnh ‘đoàn binh không mọc tóc’.”</li>
                </ul>

                <h4>2. Ghi rõ yêu cầu muốn AI làm gì</h4>
                <p>Nêu rõ bạn cần gì: lý do, giải thích, phân tích hay chỉ cần đáp án.</p>
                <ul>
                    <li>“Cho em biết đáp án đúng cho câu trắc nghiệm này và giải thích vì sao.”</li>
                    <li>“So sánh hai đoạn thơ sau về nội dung và hình ảnh nghệ thuật.”</li>
                </ul>

                <h4>3. Nếu gửi hình ảnh, hãy chắc chắn ảnh rõ nét, không mờ</h5>
                <ul>
                    <li>Tránh dùng ảnh bị cắt mép, chữ mờ, nghiêng lệch</li>
                    <li>Chụp trên nền sáng, rõ ràng</li>
                </ul>

                <h4>4. Nếu nhập công thức, nên dùng định dạng dễ đọc</h4>
                <p><strong>Ví dụ đúng:</strong></p>
                <pre>(x + 1)^2 = x^2 + 2x + 1</pre>
                <p><strong>Tránh:</strong></p>
                <pre>x+1 all square = …</pre>
                <p>hoặc viết thiếu dấu</p>

                <h4>5. Gợi ý mẫu câu hỏi bạn có thể dùng</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Mục tiêu</th>
                            <th>Mẫu câu hỏi hiệu quả</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Giải bài toán</td>
                            <td>“Giải hệ phương trình: x + y = 5 và x – y = 1”</td>
                        </tr>
                        <tr>
                            <td>Giải thích kiến thức</td>
                            <td>“Phân biệt hiện tượng khúc xạ và phản xạ ánh sáng?”</td>
                        </tr>
                        <tr>
                            <td>Nêu ý tác phẩm văn học</td>
                            <td>“Nêu cảm nhận về hình ảnh người lính trong bài thơ ‘Đồng chí’.”</td>
                        </tr>
                        <tr>
                            <td>Phân tích biểu đồ/ảnh</td>
                            <td>“Dựa vào biểu đồ dân số trong ảnh, hãy phân tích xu hướng tăng trưởng.”</td>
                        </tr>
                        <tr>
                            <td>Tóm tắt nội dung</td>
                            <td>“Tóm tắt bài ‘Tuyên ngôn độc lập’ trong 5 câu ngắn gọn.”</td>
                        </tr>
                    </tbody>
                </table>

                <h4>6. Nếu không hài lòng với câu trả lời – hãy hỏi lại cụ thể hơn</h4>
                <ul>
                    <li>“Giải thích kỹ hơn phần vì sao chọn đáp án B với câu trên.”</li>
                    <li>“Cho ví dụ minh họa dễ hiểu hơn về phần này.”</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
