<?php
//session_start();
function open_database(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "cuahangmayvitinh";
    $conn =new mysqli($servername, $username,$password, $db);
    if($conn->connect_error) {
        die("Connection failed" . $conn->connect_error);
    }
    return $conn;
}

//
//if(isset($_POST['login'])){
//    $email = $_POST['email'];
//    $password = md5($_POST['password']);
//
//    $sql="select * from users where email ='$email' AND password='$password'";
//    $result = $conn->query($sql);
//
//
//    if($result->num_rows > 0){//Nếu mọi thứ ok, thì login
//        $_SESSION['logged'] = 1;
//        $_SESSION['email'] = $email;
//        exit('Success');
//    }else{
//        exit('Failed');
//    }
//
//}

function login($email, $password){
    $sql = "select * from users where email = ? AND password =? AND type = 'Quản lý'";

    $conn = open_database();

    $stm = $conn->prepare($sql);
    $stm -> bind_param('ss',$email, $password);
    if (!$stm -> execute()){
        return array('code' => 1, 'error' => 'Can not execute command');
    }
    $result = $stm->get_result();

    if($result->num_rows == 0){
        return array('code' => 1, 'error' => 'User does not exist');
    }

    $data = $result->fetch_assoc();
    $hashed_password = $data['password'];
    if(!$hashed_password){
        return array('code' => 2, 'error' => 'Invalid password');
    }else
        return array('code' => 0, 'error' => '','data' => $data);
}
function exist($phone){
    $sql = "SELECT * FROM users WHERE soDienThoai = ? AND type = 'Nhân viên'";
    $conn = open_database();

    $stm = $conn->prepare($sql);
    $stm->bind_param('s', $phone);

    if(!$stm->execute()){
        die('Can not execute'.$stm->error);
    }

    $result =$stm->get_result();
//    $data =  $result->fetch_all();
    if($result->num_rows > 0){
        return true;
    }
    return false;
}

function addStaff($id, $phone, $deg, $pos){
    if(exist($phone)){
        return array('code' => 3, 'error' => 'Tài khoản đã tồn tại');
    }
    $sql = "INSERT INTO nhanvien (maNhanVien, soDienThoai, bangCap, chucVu) 
            VALUES (?,?,?,?)";
    $conn = open_database();

    $stm = $conn->prepare($sql);
    $stm->bind_param("ssss", $id, $phone, $deg, $pos);
    if(!$stm->execute()){
        return array('code' => 2, 'error' => 'Can not execute');
    }
    return array('code' => 0, 'error' => 'Add employee success');

}
function addUserAccount($email, $name, $gender,$birth, $phone){
    if(exist($phone)){
        return array('code' => 3, 'error' => 'Tài khoản đã tồn tại');
    }
    $sql = "INSERT INTO users (email, password, hoVaTen, gioiTinh, ngaySinh, soDienThoai, type) 
            VALUES (?,'okmart123',?,?,?,?,'Nhân viên')";
    $conn = open_database();

    $stm = $conn->prepare($sql);
    $stm->bind_param("sssss", $email, $name, $gender,$birth, $phone);
    if(!$stm->execute()){
        return array('code' => 2, 'error' => 'Can not execute'.$stm->error);
    }
    return array('code' => 0, 'error' => 'Add account success');
}
function getUsers(){
    $sql ="SELECT * FROM nhanvien nv,users us WHERE nv.soDienThoai = us.sodienThoai AND us.type='Nhân viên'";
    $conn =open_database();

    return $result= $conn->query($sql);
}
//function getEmail($soDienThoai){
//    $sql = "SELECT email FROM users WHERE soDienThoai = '$soDienThoai'";
//    $conn =open_database();
//    $result= $conn->query($sql);
//    $data = $result->fetch_assoc();
//    return $data;
//}

function deleteUser($id){
    $conn =open_database();
    $sql ="DELETE FROM nhanvien WHERE nhanvien.maNhanVien = '$id' ";
    $stm = $conn->prepare($sql);
    if(!$stm->execute()){
        return array('code' => 1, 'error' => 'Can not execute command');
    }
    $conn->close();

    return array('code' => 0, 'error' => 'Delete info successful');

}
//function editUser( $name, $email, $phone, $pos, $deg, $password, $gender, $birth){
//    $conn = open_database();
//    $sql = "UPDATE nhanvien SET soDienthoai ='$phone', bangCap ='$deg',chucVu = '$pos' WHERE sodienThoai = '$phone';
//            UPDATE users SET email ='$email', password ='$password', hoVaTen = '$name', gioiTinh ='$gender', ngaySinh = '$birth', soDienThoai ='$phone' WHERE soDienthoai = '$phone'";
//    if($conn->query($sql) == TRUE){
//        echo "Dữ liệu đã được cập nhật";
//    }else{
//        echo "Không thể cập nhật dữ liệu" . $conn->error;
//    }
//    $conn->close();
//}

function getProduct(){
    $sql = "SELECT * FROM sanpham sp, loaihang lh where sp.loaiSanPham = lh.maLoaiHang";
    $conn = open_database();
    return $result = $conn->query($sql);
}
function getDetailProduct($id){
    $sql ="SELECT * FROM sanpham WHERE maSanPham = '$id'";
    $conn =open_database();
    $result =$conn->query($sql);
    $data =$result->fetch_assoc();
    return $data;
}
function getUserDetails($soDienThoai){
    $sql = "SELECT * FROM users WHERE soDienThoai = '$soDienThoai'";
    $conn =open_database();
    $result= $conn->query($sql);
    $data = $result->fetch_assoc();
    return $data;
}
function upProduct($maSanPham, $tenSanPham,$giaBan,$thuongHieu, $soLuong, $ngayNhapHang, $tinhTrang){
    $conn = open_database();
    $sql = "UPDATE sanpham
    SET
        maSanPham = '$maSanPham',
        ten = '$tenSanPham',
        gia = '$giaBan',
        loaiSanPham = '$thuongHieu',
        trangThai = '$tinhTrang',
        soLuongTrongKho = '$soLuong',
        ngayNhap = '$ngayNhapHang'
    Where maSanPham = '$maSanPham' ";
    $conn->query($sql);
//    if ($conn->query($sql) === TRUE) {
//        echo "Record updated successfully";
//    } else {
//        echo "Error updating record: " . $conn->error;
//    }
    $conn->close();

}
function getVoucher(){
    $sql = "SELECT * FROM giamGia ";
    $conn = open_database();
    $result = $conn->query($sql);
//    $data =$result->fetch_assoc();
//    return $data;
    if($result === FALSE){
        die("Connect not work");
    }
    return $result;
}
function delVoucher($id){
    $sql = "DELETE FROM giamGia Where maGiamGia = '$id'";
    $conn = open_database();
    $result = $conn->query($sql);
    $conn->close();
}
function insertVoucher($id, $maGiamGia, $phanTramGiam, $soDienThoai){
    $sql = "INSERT INTO giamGia VALUES ('$id','$maGiamGia', '$phanTramGiam', '$soDienThoai')";
    $conn = open_database();
    $result= $conn->query($sql);
    $conn->close();

    return $result;
}
function delSanPham($maSanPham){
    $sql = "DELETE FROM sanpham WHERE maSanPham = '$maSanPham'";
    $conn = open_database();
    $result = $conn->query($sql);
    $conn->close();
}
function addProduct($maSanPham, $ten, $gia, $loaiSanPham, $trangThai, $thongSo, $soLuongTrongKho,$ngayNhap){
    $sql = "INSERT INTO sanpham(
    maSanPham,
    ten,
    gia,
    loaiSanPham,
    trangThai,
    thongSo,
    soLuongTrongKho,
    ngayNhap
)
VALUES(
    '$maSanPham',
    '$ten',
    '$gia',
    '$loaiSanPham',
    '$trangThai',
    '$thongSo',
    '$soLuongTrongKho',
    '$ngayNhap'
)";
    $conn = open_database();
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function editUser($ngaySinh, $hoVaTen, $email, $soDienThoai, $chucVu){
    $sql = "UPDATE users, nhanvien SET ngaySinh = '$ngaySinh', hoVaTen = '$hoVaTen', email = '$email', nhanvien.chucVu = '$chucVu' WHERE users.soDienThoai = '$soDienThoai'";
    $conn = open_database();
    $conn->query($sql);
    $conn->close();
}
