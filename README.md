## In

- **echo** : hiện thị 1 string ra màn hình. Có thể nối nhiều xâu kí tự.
  - Nếu giá trị echo là true thì in ra 1, còn là false thì ko in ra gì cả.
- **print** : ko nối được nhiều chuỗi.
- **print_r**() : dùng để in các object.
- **var_dump** : hiển thị kiểu dự liệu và dự liệu.
- **var_export**: hiển thị dữ liệu.
- **date()**: lấy ra date và format theo chuỗi truyền vào trong ().
- **date_default_timezone_set**: set múi giờ cho date.
- **empty()**: kiểm tra mảng có rỗng hay không.

---

- In constants thì ko cần có dấu $.
- nối chuỗi bằng kí tự ".".
- Biến cũng có thể nội suy bên trong 1 string có dấu nháy kép, dấu nháy đơn không thể nội suy đến biến được.
- Tạo biến trong PHP thì sử dụng dấu $.
- Trong file PHP có thể chèn mã HTML. Đoạn nào là PHP thì ta phải nhớ đóng thẻ lại.
- Quản lí lỗi trong file php.ini trong phần display error để xác định cách thức hiển thị lỗi trong môi trường dev và production.

## Expression

- Trong PHP thì '1' + '1' = 2. 😓
- Hằng số (constants): **define('key', 'value')**.

## Arrays

- Lưu trữ được đối tượng hoặc các biến.
- Khởi tạo array dùng ngoặc vuông, hoặc dùng hàm array().
- Khai báo 1 mảng theo dạng (assosiative array) **(key: value)**.

```php
$colors = [
    3 => 'red',
    5 => 'green',
    7 => 'yellow'
];
```

## Conditionals

- Conditionals trong PHP khá giống C++.
- Cấu trúc if và switch..case tương tự như JS, C++, Java.

## Operators

- **Toán tử số học:**

  - `+`: Cộng
  - `-`: Trừ
  - `*`: Nhân
  - `/`: Chia
  - `%`: Chia lấy dư

- **Toán tử logic:**

  - `!`: Phủ định (not)

- **Toán tử kết hợp chuỗi:**

  - `.`: Nối chuỗi

- **Toán tử null coalescing:**

  - `a ?? b`: Nếu `a` là `null`, trả về `b`.

- **Toán tử spread:**
  - `...`: Nhân bản một mảng (spread) mà không chia sẻ vùng nhớ.

## Iterations

- for loop, foreach
- while, do...while

## Functions

- functions, arrow functions.
- **isset(value)**: kiểm tra xem một biến hoặc nhiều biến có được khởi tạo và không có giá trị `null` hay không.

## Arrays

- **count(arr)**: Đếm số phần tử trong mảng.
- **in_array(value, array)**: Kiểm tra `value` có nằm trong `array` hay không.
- **array_push(array, value)**: Thêm `value` vào cuối mảng.
- **array_unshift(array, value)**: Thêm `value` vào đầu mảng.
- **array_pop(array)**: Xóa phần tử cuối mảng.
- **array_shift(array)**: Xóa phần tử đầu mảng.
- **unset(array[index])**: Xóa phần tử tại vị trí `index`. (**Lưu ý:** Sau khi xóa, key `index` sẽ bị mất.)
- **array_chunk(array, size)**: Chia một mảng lớn thành các mảng con có kích thước xác định trước.
- **array_merge(arr1, arr2)**: Gộp hai mảng lại với nhau, mảng sau sẽ nối đuôi mảng trước.
- **array_combine(arr1, arr2)**: Kết hợp hai mảng lại với nhau, lấy các giá trị từ `$arr1` làm key và các giá trị từ `$arr2` làm value. (**Lưu ý:** `arr1` và `arr2` phải có kích thước bằng nhau.)
- **array_keys(arr)**: Trả về một mảng chứa các `key` của mảng `arr`.
- **array_values(arr)**: Trả về một mảng chứa các `giá trị` của mảng `arr`.
- **range(start, end)**: Tạo ra một mảng chứa các số từ `start` đến `end`.
- **array_map(callback, arr)**: Áp dụng hàm `callback` lên từng phần tử của mảng `arr` và trả về một mảng mới với các giá trị đã được xử lý.
- **array_filter(arr, callback)**: Lọc các phần tử của mảng `arr` dựa trên hàm `callback`, trả về một mảng chứa các phần tử thoả mãn điều kiện của `callback`.

## String functions

- **strlen(string)**: Trả về độ dài của chuỗi `string`.
- **strrev(string)**: Đảo ngược chuỗi `string`.
- **strtolower(string)**: Chuyển tất cả các ký tự trong chuỗi `string` thành chữ thường.
- **strtoupper(string)**: Chuyển tất cả các ký tự trong chuỗi `string` thành chữ hoa.
- **str_replace(search, replace, subject)**: Thay thế tất cả các xuất hiện của `search` trong chuỗi `subject` bằng `replace`.
- **str_starts_with(string, prefix)**: Kiểm tra xem chuỗi `string` có bắt đầu bằng `prefix` hay không.
- **str_ends_with(string, suffix)**: Kiểm tra xem chuỗi `string` có kết thúc bằng `suffix` hay không.
- **htmlspecialchars(string)**: Chuyển đổi các ký tự đặc biệt trong chuỗi `string` thành các thực thể HTML, thường dùng để bảo vệ dữ liệu lấy từ form.

## Scope

- Trong PHP các biên được định nghĩa chỉ có thể được sử dụng trong khối lệnh, kể cả function bên trong khối lệnh cũng ko dùng được biến dc định nghĩa bên ngoài function trừ khi làm cho biến đó thành **global**.

- Chúng ta cũng có thể gán function cho 1 biến. Nhưng khi gọi hàm thông qua biến cần thêm dấu **$**.

## Super globals

- Là những biến global có sẵn.
- **\$\_SERVER**: Mảng chứa thông tin về môi trường thực thi của script, bao gồm thông tin về máy chủ, đường dẫn và thông tin yêu cầu.
- **\$\_GET**: Mảng chứa các giá trị được gửi đến script thông qua phương thức GET, thường được sử dụng để lấy dữ liệu từ URL.
- **\$\_POST**: Mảng chứa các giá trị được gửi đến script thông qua phương thức POST, thường được sử dụng để gửi dữ liệu từ form.

## Sử dụng `htmlspecialchars` trong PHP

### 1. Lý do cần sử dụng `htmlspecialchars`

Trong lập trình web, khi bạn nhận dữ liệu từ người dùng thông qua biểu mẫu (form), dữ liệu này thường được gửi qua phương thức `POST` hoặc `GET`. Việc xử lý trực tiếp dữ liệu nhập vào mà không kiểm tra hay xử lý có thể dẫn đến các lỗ hổng bảo mật, phổ biến nhất là **XSS (Cross-site scripting)**.

XSS là một lỗ hổng bảo mật cho phép kẻ tấn công chèn các đoạn mã độc hại (thường là JavaScript) vào trang web. Để phòng tránh điều này, chúng ta cần mã hóa các ký tự đặc biệt mà người dùng có thể nhập vào (như `<`, `>`, `"`, `'`, `&`) trước khi hiển thị chúng trên trang HTML.

Hàm `htmlspecialchars` sẽ thay thế các ký tự đặc biệt trong chuỗi thành các thực thể HTML an toàn, sau đó trả về dưới dạng string. Ví dụ:

- Ký tự `<` sẽ được thay thế bằng `&lt;`
- Ký tự `>` sẽ được thay thế bằng `&gt;`
- Ký tự `"` sẽ được thay thế bằng `&quot;`

### 2. Cú pháp của `htmlspecialchars`

```php
htmlspecialchars(string $string, int $flags = ENT_COMPAT | ENT_HTML401, ?string $encoding = null, bool $double_encode = true): string
```

- Ngoài cách trên ta cũng có thể dùng **filter_var()** để lọc đi các kí tự đặc biệt.

**filter_var()**: Hàm kiểm tra và lọc dữ liệu theo bộ lọc (vd: `FILTER_VALIDATE_EMAIL` để kiểm tra email, `FILTER_SANITIZE_STRING` để lọc chuỗi).

## Cookies

### 1. Định nghĩa

**Cookies** là các tệp nhỏ được trình duyệt lưu trữ trên máy tính của người dùng. Chúng được sử dụng để lưu trữ thông tin tạm thời, như phiên đăng nhập, tùy chọn người dùng, hoặc thông tin theo dõi hoạt động của người dùng trên trang web. PHP có thể gửi và đọc cookies từ trình duyệt để lưu trữ dữ liệu liên tục trong một khoảng thời gian nhất định.

**Cookies** hết hạn sẽ được tự động xóa khỏi trình duyệt.

### 2. Cú pháp tạo cookie trong PHP

```php
setcookie(name, value, expire, path, domain, secure, httponly);
```
