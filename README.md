## 🌐 Xây dựng web phân phối sản phẩm thời trang

**1. Trang quản trị nội dung (Backend)**

- [ ] Chức năng blog

    - [ ] Quản lý bình luận
    - [x] Thêm - Xóa - Sửa
    - [ ] Quản lý Mmenu
    - [x] Quản lý Banners

<br/>

- [ ] Chức năng collection 🔁 `Đang tiến hành`

- [ ] Chức năng project

- [ ] Chức năng product

<br/>

**2. Mặt tiền trang web (Frontend)**

>Sơ đồ trang web

---
```mermaid
flowchart 

WWW[( Website )] --> A & B

A[( Home )];

A-1((( Blog )));

A-2((( Topic )));

A-3((( Collection )));

A-4((( Tag )));

A-5((( Post view )));

A --> A-1 -->A-5;
A --> A-2 -->A-5;
A --> A-3 -->A-5;
A --> A-4 -->A-5;

B[( Ecommerce )];

B-1(((Categories)));

B-2((( Tag )));

B-3((( Product view )));

B --> B-1;
B --> B-2;

B-1 & B-2 --> B-3;

A-5 <--> B-3

```
---

<br/>

**Nhiệm vụ**

- [ ] Giao diện blog

    - [ ] Chức năng đăng nhập đăng ký
    - [ ] Chức năng bình luận
    - [ ] Chức năng newlated ❌ `Tạm thời hủy bỏ`
    - [x] Chức năng tìm kiếm
    - [x] Trang Topic.Posts
    - [x] Trang Tag.Posts
    - [x] Trang chính       
    - [ ] Bình luận
    - [x] SlideBar          
    - [x] Navbar            
    - [x] Header            
    - [x] Footer            

<br/>

- [ ] Trang Collections 🔁`Đang tiến hành`

- [ ] Hiển thị sản phẩm

<br/>

---

*📖 Ghi chú*
- Trạng thái

    - ✅ *Hoàn thành*

    - ❌ *Hủy bỏ nhiệm vụ*

    - 🔀 *Đang tiến hành*

    - 📌 *Lưu tâm*

    - 🎯 *Đang tập trung*

    - 🗓️ *Việc cần làm trong ngày*

    - 🔶 *Việc cần làm*

    - 🔷 *Việc quan trọng*


