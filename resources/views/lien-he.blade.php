@extends('layout.layout')
@section('content')
<div class="com_info">
    <div class="container mb-3">
        <div class="bg-white px-2 p-lg-3 rounded-10 col-main page-title">
            <h1 class="pt-2 pt-lg-0 mb-2 mb-lg-3 mt-0 font-weight-bold">
                Liên hệ
            </h1>
            <div class="m-auto bg-white d-block">
                <div class="row">
                    <div class="col-md-8 col-12">
                        <address class="vcard mb-4">
                            <p class="adr mb-1"><b>Địa chỉ: </b>271 Lưu Nhân Chú, Hương Sơn, Thành phố Thái Nguyên</p>
                            <p class="mb-1"><b>Hotline: </b><a href="tel: 0984063567" title=" 0984063567"> 0984063567</a></p>
                            <p class="mb-1"><b>Email: </b><a href="mailto:doanthanhhai@tnut.edu.vn" title="doanthanhhai@tnut.edu.vn">doanthanhhai@tnut.edu.vn</a></p>
                        </address>
                        <div class="mt-3 " style="border: 1px solid;border-color: #377e7d;border-radius: 6px;">
                            <span class="require d-block mb-3"><em class="required">  * </em>Thông tin bắt
                                buộc</span>

                            <form id="contactForm" action="" method="POST" class="contact-form p-2">
                                @csrf
                                <div class="customer-name row">
                                    <div class="col-4 form-group">
                                        <input type="text" class="form-control rounded-10" name="name" placeholder="Tên *" required="">
                                    </div>
                                    <div class="col-4 form-group">
                                        <input type="email" class="form-control rounded-10" name="email" placeholder="Địa chỉ email">
                                    </div>
                                    <div class="col-4 form-group">
                                        <input type="phone" class="form-control rounded-10" name="phone" placeholder="Số điện thoại *">
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="mb-3">
                                            <label for="content" class="form-label">Nội dung *</label>
                                            <textarea id="content" name="content" class="form-control "></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-set">
                                    <button type="submit" title="Submit" style="justify-self: center;" class="sitdown rounded-10 modal-open position-relative book-submit btn btn-primary text-center d-flex align-items-center font-weight-bold subml">Gửi</button>
                                </div>
                            </form>
                        </div>

                        <div>
                            <script src="{{ asset('vendor/tinymce/tinymce.js') }}"></script>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    // Khởi tạo TinyMCE cho trường textarea với id tương ứng
                                    tinymce.init({
                                        language: 'vi_VN',
                                        selector: 'textarea#content',
                                        setup: function(editor) {
                                            editor.ui.registry.addButton('attachment', {
                                                tooltip: 'Attach/upload a File',
                                                icon: 'upload',
                                                onAction: function() {
                                                    const input = document.createElement('input');
                                                    input.type = 'file';
                                                    input.accept = '*/*';
                                                    input.onchange = function(event) {
                                                        const file = event.target.files[0];
                                                        if (file) {
                                                            const formData = new FormData();
                                                            formData.append('attachment', file);
                                                            formData.append('model', 'Contact');

                                                            axios.post('/admin/tinymce-attachment', formData)
                                                                .then(response => {
                                                                    const data = response.data;
                                                                    editor.insertContent(`<a class="text-blue-700 hover:underline" href="${data.attachment_url}" download="${file.name}">${file.name}</a>`);
                                                                })
                                                                .catch(error => {
                                                                    console.error('Error uploading file:', error);
                                                                });
                                                        }
                                                    };
                                                    input.click();
                                                }
                                            });
                                        },
                                        images_file_types: 'jpg,svg,webp',
                                        file_picker_types: 'file image media',
                                        plugins: 'image code table lists link media fullscreen emoticons',
                                        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright alignjustify | indent outdent | bullist numlist | code | table | link image attachment',
                                        image_title: true,
                                        automatic_uploads: true,
                                        image_advtab: true,
                                        image_caption: true,
                                        content_css: [],
                                        image_dimensions: false,
                                        image_class_list: [{
                                            title: 'Responsive',
                                            value: 'md:w-2/3 m-auto w-full'
                                        }],
                                        file_picker_callback: (cb, value, meta) => {
                                            const input = document.createElement('input');
                                            input.setAttribute('type', 'file');
                                            input.setAttribute('accept', 'image/*');

                                            input.addEventListener('change', (e) => {
                                                const file = e.target.files[0];

                                                const reader = new FileReader();
                                                reader.addEventListener('load', () => {
                                                    const id = 'blobid' + (new Date()).getTime();
                                                    const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                                                    const base64 = reader.result.split(',')[1];
                                                    const blobInfo = blobCache.create(id, file, base64);
                                                    blobCache.add(blobInfo);

                                                    cb(blobInfo.blobUri(), {
                                                        title: file.name
                                                    });
                                                });
                                                reader.readAsDataURL(file);
                                            });

                                            input.click();
                                        },
                                    });
                                });

                                // Thêm đoạn mã JavaScript để reload trang sau khi gửi form
                                document.getElementById('contactForm').addEventListener('submit', function(event) {
                                    event.preventDefault(); // Ngăn form submit bình thường
                                    var form = this;
                                    var formData = new FormData(form);
                                    
                                    // Gửi form qua AJAX
                                    fetch(form.action, {
                                        method: form.method,
                                        body: formData
                                    })
                                    .then(response => {
                                        if (response.ok) {
                                            location.reload(); // Reload trang sau khi gửi thành công
                                        } else {
                                            alert("Gửi đi thành công !.");
                                        }
                                    })
                                    .catch(error => {
                                        console.error("Error submitting form:", error);
                                        alert("Có lỗi xảy ra! Vui lòng thử lại.");
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3711.076195220891!2d105.87906597597923!3d21.543875769885844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313523e3f917e2ed%3A0x4763440dd63ecb50!2sChu%20Van%20An%20High%20School!5e0!3m2!1sen!2s!4v1735556793431!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
