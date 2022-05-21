# google-sheet
sourcode php and google sheet api

# Link cài đặt api cho google sheet

+ https://console.cloud.google.com/marketplace/product/google/sheets.googleapis.com?q=search&referrer=search&project=ethereal-radar-326003
# active google sheet
+ https://console.developers.google.com/apis/api/sheets.googleapis.com/overview?project=1027340246538
# Hướng dẫn dụng

Cài đặt api ở link trên và lấy 
id client
Code secret du client

# Insert database 

CREATE TABLE `google_oauth` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `provider` varchar(255) NOT NULL,
 `provider_value` text NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

# Chỉnh sửa file connect php
  +  private $dbHost     = "localhost";
  +  private $dbUsername = "root";
  +  private $dbPassword = "";
  +  private $dbName     = "google-sheet";
# Bước 1: chạy file
+ callback.php

# Bước 2: chạy file
+ create-sheet.php 
+ copy dòng Spreadsheet ID:

# Bước 3: chạy file
+ write-sheet.php
+ write_to_sheet('nhập dữ liệu Spreadsheet ID vào đây');

# Bước 4: chạy file
+ append-sheet.php
+ append_to_sheet('nhập dữ liệu Spreadsheet ID vào đây');

# Hoàn thành
+ Sau khi chạy xong các bạn truy cập vào driver và kiểm tra file vừa insert mở lên và xem kết quả. Chúc các bạn thành công
