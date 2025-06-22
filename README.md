# 👗 Phenikaa Fashion Shop

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)

**Thời trang sành điệu - Phong cách riêng bạn** ✨

[🌐 Website](http://www.pkafashionshop.live/) • [📖 Demo](https://demo.pkafashionshop.live/) • [📧 Liên hệ](mailto:contact@pkafashionshop.live)

</div>

---

## 📋 Mục lục

- [🎯 Giới thiệu](#-giới-thiệu)
- [🎯 Mục tiêu dự án](#-mục-tiêu-dự-án)
- [✨ Tính năng nổi bật](#-tính-năng-nổi-bật)
- [👥 Đối tượng người dùng](#-đối-tượng-người-dùng)
- [🖼️ Giao diện hệ thống](#️-giao-diện-hệ-thống)
- [🏗️ Kiến trúc hệ thống](#️-kiến-trúc-hệ-thống)
- [🚀 Cài đặt và chạy](#-cài-đặt-và-chạy)
- [📊 Cơ sở dữ liệu](#-cơ-sở-dữ-liệu)
- [🛠️ Công nghệ sử dụng](#️-công-nghệ-sử-dụng)
- [👨‍💻 Thành viên dự án](#-thành-viên-dự-án)
- [📄 Giấy phép](#-giấy-phép)

---

## 🎯 Giới thiệu

**Phenikaa Fashion Shop** là một nền tảng thương mại điện tử hiện đại chuyên về thời trang, được xây dựng trên Laravel Framework. Website cung cấp trải nghiệm mua sắm trực tuyến hoàn chỉnh với giao diện thân thiện và các tính năng tiên tiến.

### 🌟 Giá trị cốt lõi

- **🎨 Chất lượng sản phẩm:** Cam kết cung cấp sản phẩm thời trang chất lượng cao
- **💫 Trải nghiệm người dùng:** Giao diện thân thiện, dễ sử dụng trên mọi thiết bị
- **🛡️ Bảo mật:** Đảm bảo an toàn thông tin và giao dịch
- **🚀 Hiệu suất:** Tối ưu hóa tốc độ tải trang và trải nghiệm mượt mà

---

## 🎯 Mục tiêu dự án

### 🎯 Mục tiêu ngắn hạn
- [x] **Phát triển hệ thống:** Xây dựng nền tảng thương mại điện tử hoàn chỉnh
- [x] **Trải nghiệm người dùng:** Tạo giao diện thân thiện, dễ sử dụng
- [x] **Quản lý sản phẩm:** Xây dựng hệ thống quản lý sản phẩm hiệu quả

### 🎯 Mục tiêu dài hạn
- [ ] **Phát triển thương hiệu:** Xây dựng thương hiệu thời trang uy tín
- [ ] **Mở rộng thị trường:** Phát triển đa kênh bán hàng
- [ ] **Cải tiến liên tục:** Cập nhật công nghệ mới và nâng cao chất lượng dịch vụ

---

## ✨ Tính năng nổi bật

### 🔐 Xác thực & Bảo mật
- [x] Đăng ký/Đăng nhập với xác thực email
- [x] Đăng nhập qua mạng xã hội (Google, Facebook)
- [x] Quản lý thông tin cá nhân và bảo mật
- [x] Khôi phục mật khẩu qua email

### 🛍️ Mua sắm & Thanh toán
- [x] Duyệt sản phẩm theo danh mục và thương hiệu
- [x] Tìm kiếm và lọc sản phẩm thông minh
- [x] Giỏ hàng thông minh với đồng bộ đa thiết bị
- [x] Thanh toán an toàn (VNPay, Momo, thẻ tín dụng)
- [x] Mã giảm giá và khuyến mãi linh hoạt

### 📦 Quản lý đơn hàng
- [x] Theo dõi trạng thái đơn hàng realtime
- [x] Lịch sử đơn hàng chi tiết
- [x] Xuất hóa đơn điện tử
- [x] Quản lý địa chỉ giao hàng

### 🎛️ Trang quản trị
- [x] Dashboard thống kê doanh thu
- [x] Quản lý sản phẩm và tồn kho
- [x] Quản lý đơn hàng và trạng thái
- [x] Quản lý người dùng và phân quyền
- [x] Quản lý mã giảm giá và khuyến mãi
- [x] Quản lý slider và nội dung trang chủ
- [x] Hệ thống liên hệ và hỗ trợ khách hàng

---

## 👥 Đối tượng người dùng

| Nhóm người dùng | Mô tả | Tính năng chính |
|----------------|-------|-----------------|
| 🛒 **Khách hàng** | Người tiêu dùng 18-35 tuổi yêu thích thời trang | Mua sắm, thanh toán, theo dõi đơn hàng |
| 👨‍💼 **Quản trị viên** | Nhân viên quản lý hệ thống | Quản lý sản phẩm, đơn hàng, người dùng |
| 📧 **Hỗ trợ khách hàng** | Nhân viên chăm sóc khách hàng | Xử lý liên hệ, hỗ trợ khách hàng |


---

## 🚀 Cài đặt và chạy

### 📋 Yêu cầu hệ thống

- **PHP** >= 8.1
- **Composer** >= 2.0
- **MySQL** >= 5.7
- **Node.js** >= 16.x
- **NPM** >= 8.x

### 🔧 Hướng dẫn cài đặt

```bash
# 1️⃣ Clone repository
git clone https://github.com/your-username/phenikaa-fashion-shop.git
cd phenikaa-fashion-shop

# 2️⃣ Cài đặt dependencies
composer install
npm install

# 3️⃣ Cấu hình môi trường
cp .env.example .env
php artisan key:generate

# 4️⃣ Cấu hình database trong file .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=phenikaa_fashion
DB_USERNAME=root
DB_PASSWORD=your_password

# 5️⃣ Chạy migrations và seeders
php artisan migrate --seed

# 6️⃣ Build assets
npm run build

# 7️⃣ Khởi chạy server
php artisan serve
```

### 🌐 Truy cập ứng dụng

- **Website:** http://localhost:8000
- **Admin Panel:** http://localhost:8000/admin

### 🚀 Lệnh hữu ích

```bash
# Chạy development server
php artisan serve

# Tạo storage link
php artisan storage:link

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Chạy tests
php artisan test
```

---

## 📊 Cơ sở dữ liệu

### 📋 Các bảng chính

| Bảng | Mô tả | Quan hệ |
|------|-------|---------|
| `users` | Thông tin người dùng | One-to-Many với orders, addresses |
| `products` | Thông tin sản phẩm | Many-to-Many với categories, brands |
| `orders` | Đơn hàng | One-to-Many với order_items |
| `categories` | Danh mục sản phẩm | One-to-Many với products |
| `brands` | Thương hiệu | One-to-Many với products |
| `coupons` | Mã giảm giá | One-to-Many với orders |

### 🔄 Migration

```bash
# Tạo migration mới
php artisan make:migration create_table_name

# Chạy migration
php artisan migrate

# Rollback migration
php artisan migrate:rollback
```

---

## 🛠️ Công nghệ sử dụng

### 🎯 Backend
- **Laravel 10.x** - Framework PHP hiện đại
- **PHP 8.1+** - Ngôn ngữ lập trình
- **MySQL 5.7+** - Hệ quản trị cơ sở dữ liệu
- **Composer** - Quản lý dependencies

### 🎨 Frontend
- **Blade Templates** - Template engine của Laravel
- **TailwindCSS 3.x** - Framework CSS utility-first
- **Alpine.js** - JavaScript framework nhẹ
- **Bootstrap 5** - Framework CSS responsive

### 🛠️ Công cụ phát triển
- **Git** - Quản lý phiên bản
- **NPM** - Quản lý packages JavaScript
- **Vite** - Build tool hiện đại
- **PHPUnit** - Testing framework

---

## 👨‍💻 Thành viên dự án

<div align="center">

| Thành viên | Vai trò | Liên hệ |
|------------|---------|---------|
| **Trần Anh Tú** | Full-stack Developer | [📧 Email](mailto:tu.tran@phenikaa.edu.vn) |
| **Nguyễn Văn Tú** |  | [📧 Email](mailto:tu.tran@phenikaa.edu.vn) |
| **Bùi Quang Huy** |  | [📧 Email](mailto:tu.tran@phenikaa.edu.vn) |
| **Đoàn Quang Minh** |  | [📧 Email](mailto:tu.tran@phenikaa.edu.vn) |

</div>

---

## 🤝 Đóng góp

Chúng tôi rất hoan nghênh mọi đóng góp! Vui lòng thực hiện theo các bước sau:

1. **Fork** repository
2. Tạo **branch** mới (`git checkout -b feature/AmazingFeature`)
3. **Commit** thay đổi (`git commit -m 'Add some AmazingFeature'`)
4. **Push** lên branch (`git push origin feature/AmazingFeature`)
5. Tạo **Pull Request**

### 📝 Quy tắc đóng góp

- Tuân thủ coding standards của Laravel
- Viết tests cho các tính năng mới
- Cập nhật documentation khi cần thiết
- Đảm bảo code không có lỗi syntax

---

## 📄 Giấy phép

Dự án này được cấp phép theo [MIT License](LICENSE).

---

<div align="center">

### 🌟 Hỗ trợ dự án

Nếu dự án này hữu ích, hãy cho chúng tôi một ⭐️

[![GitHub stars](https://img.shields.io/github/stars/your-username/phenikaa-fashion-shop?style=social)](https://github.com/your-username/phenikaa-fashion-shop)
[![GitHub forks](https://img.shields.io/github/forks/your-username/phenikaa-fashion-shop?style=social)](https://github.com/your-username/phenikaa-fashion-shop)

**Phenikaa Fashion Shop** - Thời trang sành điệu, phong cách riêng bạn! ✨

</div>

