# Events and Listeners

Người dùng nhập email vào một form và gửi yêu cầu đăng ký thông qua phương thức subscribe trong NewsletterController.

Dữ liệu đầu vào (email) được kiểm tra và xác thực để đảm bảo tính hợp lệ.

Nếu dữ liệu hợp lệ, sự kiện UserSubscribed được kích hoạt với thông tin email của người dùng đăng ký.
Đối tượng sự kiện này được tạo ra và chứa thông tin email của người dùng.

Sự kiện UserSubscribed được phát sóng tới các người nghe (listeners).Nó được phát sóng tới một Private Channel có tên là 'channel-name'.

Sau khi xử lý xong, trang web trả về trang trước đó (quay lại).