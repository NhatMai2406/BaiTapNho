<?php
   //Kết nối dữ liệu từ database
   include 'connection.php';

   // Đọc các giá trị gửi đến từ Ajax
   $draw = $_POST['draw'];
   $row = $_POST['start'];
   $rowperpage = $_POST['length']; // Số dòng mỗi trang
   $columnIndex = $_POST['order'][0]['column']; // Cột đánh chỉ số
   $columnName = $_POST['columns'][$columnIndex]['data']; // Cột tên
   $columnSortOrder = $_POST['order'][0]['dir']; // Sắp xếp asc / desc
   $search = $_POST['search']['value']; // Từ khóa tìm kiếm

   $searchArray = array();

   // Tìm kiếm
   $searchQuery = " ";
   if($search != ''){
      $searchQuery = " AND (book_name LIKE :book_name ) ";
      $searchArray = array( 
           'book_name'=>"%$search%",
      );
   }

   // Tổng số dữ liệu khi chưa có lọc tìm kiếm
 
   // Lấy dữ liệu
   $stmt = $conn->prepare("SELECT * FROM book WHERE 1 ".$searchQuery." ORDER BY ".$columnName." ".$columnSortOrder." LIMIT :limit,:offset");

   // Ràng buộc giá trị
   foreach ($searchArray as $key=>$search) {
      $stmt->bindValue(':'.$key, $search,PDO::PARAM_STR);
   }

   $stmt->bindValue(':limit', (int)$row, PDO::PARAM_INT);
   $stmt->bindValue(':offset', (int)$rowperpage, PDO::PARAM_INT);
   $stmt->execute();
   $empRecords = $stmt->fetchAll();
  $stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM book ");
   $stmt->execute();
   $records = $stmt->fetch();
   $totalRecords = $records['allcount'];

   // Tổng số dữ liệu khi có lọc tìm kiếm
   $stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM book WHERE 1 ".$searchQuery);
   $stmt->execute($searchArray);
   $records = $stmt->fetch();
   $totalRecordwithFilter = $records['allcount'];

   $data = array();

   foreach ($empRecords as $row) {
      $data[] = array(
         "book_id"=>$row['book_id'],
         "book_name"=>$row['book_name'],
         "description"=>$row['description'],
         "img"=>$row['img'],
         "price"=>$row['price'],
         "pub_id"=>$row['pub_id']
      );
   }

   // Kết quả trả về
   $response = array(
      "draw" => intval($draw),
      "iTotalRecords" => $totalRecords,
      "iTotalDisplayRecords" => $totalRecordwithFilter,
      "aaData" => $data
   );

   echo json_encode($response);