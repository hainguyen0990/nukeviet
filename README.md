### Hướng dẫn cài đặt trên localhost

- Lấy code : 
```
git clone git@github.com:hainguyen0990/nukeviet.git
cd nukeviet
git checkout nukeviet4.6
```
- Virtual host: http://nukeviet.my/
- CSDL tên nukeviet. Import từ file nukeviet.sql  từ thư mục intern
- Chép file config.php trong thư mục intern ra đúng vị trí vào file src/
- Chép file config_global.php trong thư mục intern ra đúng vị trí vào file src/data/config/
- Nếu đặt tên CSDL khác thì cần sửa trong file config.php
- Đăng nhập quản trị bằng tài khoản `admin / Ha0904462434`
- Chú ý toàn bộ các tài khoản nếu muốn biết mật khẩu phải reset ở quản trị
- Chú ý: Nếu đặt tên virtual host khác thì cần sửa lại trong config_global.php dòng $global_config['my_domains'] theo tên virtual host
