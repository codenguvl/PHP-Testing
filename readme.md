# 1.🌐 SITEMAP

```
/ (index.php)
├── /actions
│ └── process_form.php
├── /assets
│ └── /css
│ └── /js
│ └── /vendor
├── /partial
│ ├── contact-form.php
│ ├── contact-info.php
│ └── success-modal.php
└── /templates
├── header.php
└── footer.php
```

## 1.1 🏠 Trang chính (`/` - `index.php`)

- Đây là trang chính của website

## 1.2 📂 Thư mục `/actions`

- Chứa các file xử lí các công việc cụ thể.
- **`/actions/process_form.php`**: Đây là file xử lý việc khi người dùng gửi form liên hệ. Nó có nhiệm vụ nhận và kiểm tra dữ liệu từ form, sau đó trả về phản hồi (ví dụ: thành công hoặc lỗi).

## 1.3 🎨 Thư mục `/assets`

- Đây là thư mục chứa CSS, JavaScript.
  - **`/vendor`**: Thư mục chứa các thư viện của bên thứ ba.

## 1.4 🧩 Thư mục `/partial`

- Đây là thư mục sử dụng để chứa các phần của giao diện người dùng, tái sử dụng trên nhiều trang của website
  - **`contact-form.php`**: Tệp chứa biểu mẫu (form) liên hệ, hiển thị cho người dùng điền thông tin.
  - **`contact-info.php`**: Tệp chứa thông tin liên hệ như địa chỉ, email, số điện thoại của công ty.
  - **`success-modal.php`**: Tệp chứa modal thông báo thành công hoặc lỗi.

## 1.5 🖼️ Thư mục `/templates`

- Đây là nơi lưu trữ các thành phần giao diện dùng chung trên toàn trang.

# 2.🛠️ FLOWCHART

![Flowchart](https://raw.githubusercontent.com/codenguvl/store-images/main/images/Flowchart.png)

# 3.📝 PSEUDOCODE

```
BEGIN
    // Hiển thị form liên hệ cho người dùng.

    // Khi người dùng nhấn nút gửi:
    CHECK xem người dùng đã nhập đủ thông tin chưa:
        - Tên không được để trống
        - Email phải có định dạng đúng
        - Số điện thoại phải có định dạng đúng
        - Công ty không được để trống
        - Tin nhắn phải có nội dung

    IF tất cả thông tin hợp lệ:
        - Gửi dữ liệu của form tới server

        // Trên server:
        - Kiểm tra lại dữ liệu (xác minh tên, định dạng email, định dạng số điện thoại, xác minh tên công ty và nội dung tin nhắn)

        IF dữ liệu hợp lệ:
            - Lưu thông tin liên hệ vào cơ sở dữ liệu
            - Gửi phản hồi thành công cho người dùng kèm thông tin người dùng vừa nhập

        ELSE:
            - Gửi thông báo lỗi cho người dùng

    ELSE:
        - Hiển thị thông báo lỗi tại phía người dùng (nếu thông tin không hợp lệ)

    // Sau khi nhận phản hồi từ server:
    IF phản hồi thành công:
        - Hiển thị thông báo cho người dùng biết rằng thông tin đã được gửi thành công
        - Reset form

    ELSE:
        - Hiển thị thông báo lỗi và yêu cầu người dùng nhập lại
END

```

# 4.🖼️ WIREFRAMING

Trạng thái bình thường

![Form - Trạng thái bình thường](https://raw.githubusercontent.com/codenguvl/store-images/main/images/Wireframing-1.png)

Trạng thái gửi thông tin thành công

![Form - Trạng thái gửi thông tin thành công](https://raw.githubusercontent.com/codenguvl/store-images/main/images/Wireframing-2.png)
