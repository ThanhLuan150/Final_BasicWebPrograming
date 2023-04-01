<?php
        $mysqli =new mysqli("localhost","root","", "LISTPRODUCT");
        //check connection
        if($mysqli === false){
            die("ERROR:Could not connect. ". $mysqli ->connect_error);
        }
        //
        $sql ="INSERT INTO blog(id,img,cardname,descriptions) VALUES
        ('1','https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Ngomon2.jpg/640px-Ngomon2.jpg','Kinh thành Huế về đêm mang một vẻ đẹp mới - Hot năm 2023','Quần thể di tích Cố đô Huế nằm dọc hai bên bờ sông Hương thuộc thành phố Huế và một vài vùng phụ cận thuộc tỉnh Thừa Thiên Huế. Thành phố Huế là trung tâm văn hoá, chính trị, kinh tế của tỉnh, là cố đô của Việt Nam thời phong kiến dưới 
  triều nhà Nguyễn, từ 1802 đến 1945'),
        ('2','http://sinaitravel.com.vn/upload/images/blogs/5%20ly%20do%20phai%20den%20kinh%20thanh%20hue%20mot%20lan%20trong%20doi%201.jpg','Lich sử cố đố huế qua từng các thời kì','Từ năm 1306, sau cuộc hôn phối giữa công chúa Huyền Trân (Nhà Trần) với vua Chàm là Chế Mân, 
 vùng đất Châu Ô, Châu Lý (gồm Quảng Trị, Thừa Thiên Huế và một phần của Bắc Quảng Nam ngày nay)
  được lấy tên là Thuận Hoá. Vào nửa cuối thế kỷ 15, thời vua Lê Thánh Tông, 
  địa danh Huế lần đầu tiên xuất hiện (?). Năm 1636 phủ Chúa Nguyễn đặt ở Kim Long (Huế), 
  tới năm 1687 dời về Phú Xuân - thành Nội Huế ngày nay. Vào những năm đầu của thế kỷ 18, 
  Phú Xuân là trung tâm chính trị, kinh tế, văn hoá của xứ 'Đàng Trong'. 
  Từ năm 1788 đến 1801, Phú Xuân trở thành kinh đô của triều đại Tây Sơn.'),
        ('3','https://saigonstartravel.com/wp-content/uploads/2018/11/doi-net-gioi-thieu-ve-kinh-thanh-hue-1-1.jpg','lich sử cố đố huế qua từng các thời kì','Từ năm 1306, sau cuộc hôn phối giữa công chúa Huyền Trân (Nhà Trần) với vua Chàm là Chế Mân, 
 vùng đất Châu Ô, Châu Lý (gồm Quảng Trị, Thừa Thiên Huế và một phần của Bắc Quảng Nam ngày nay)
  được lấy tên là Thuận Hoá. Vào nửa cuối thế kỷ 15, thời vua Lê Thánh Tông, 
  địa danh Huế lần đầu tiên xuất hiện (?). Năm 1636 phủ Chúa Nguyễn đặt ở Kim Long (Huế), 
  tới năm 1687 dời về Phú Xuân - thành Nội Huế ngày nay. Vào những năm đầu của thế kỷ 18, 
  Phú Xuân là trung tâm chính trị, kinh tế, văn hoá của xứ 'Đàng Trong'. 
  Từ năm 1788 đến 1801, Phú Xuân trở thành kinh đô của triều đại Tây Sơn.'),
        ('4','http://baohungyen.vn/file/4028eaa4679b32c401679c0c74382a7e/fb9e3a036995663501699973b0f40c32/062021/image048_20210617102822.jpg','Lich sử cố đố huế qua từng các thời kì','Từ năm 1306, sau cuộc hôn phối giữa công chúa Huyền Trân (Nhà Trần) với vua Chàm là Chế Mân, 
 vùng đất Châu Ô, Châu Lý (gồm Quảng Trị, Thừa Thiên Huế và một phần của Bắc Quảng Nam ngày nay)
  được lấy tên là Thuận Hoá. Vào nửa cuối thế kỷ 15, thời vua Lê Thánh Tông, 
  địa danh Huế lần đầu tiên xuất hiện (?). Năm 1636 phủ Chúa Nguyễn đặt ở Kim Long (Huế),'),
  ('5','Kinh thành Huế về đêm mang một vẻ đẹp mới - Hot năm 2023','Quần thể di tích Cố đô Huế nằm dọc hai bên bờ sông Hương thuộc thành phố Huế và một vài vùng phụ cận thuộc tỉnh Thừa Thiên Huế. Thành phố Huế là trung tâm văn hoá, chính trị, kinh tế của tỉnh, là cố đô của Việt Nam thời phong kiến dưới 
  triều nhà Nguyễn, từ 1802 đến 1945'),
        ('5','http://cdn.tgdd.vn/Files/2022/03/25/1422359/kham-pha-dau-an-lich-su-co-do-dai-noi-hue-hoang-thanh-hue-202203251516507682.jpg','Lich sử cố đố huế qua từng các thời kì','Từ năm 1306, sau cuộc hôn phối giữa công chúa Huyền Trân (Nhà Trần) với vua Chàm là Chế Mân, 
 vùng đất Châu Ô, Châu Lý (gồm Quảng Trị, Thừa Thiên Huế và một phần của Bắc Quảng Nam ngày nay)
  được lấy tên là Thuận Hoá. Vào nửa cuối thế kỷ 15, thời vua Lê Thánh Tông, 
  địa danh Huế lần đầu tiên xuất hiện (?). Năm 1636 phủ Chúa Nguyễn đặt ở Kim Long (Huế), 
  tới năm 1687 dời về Phú Xuân - thành Nội Huế ngày nay. Vào những năm đầu của thế kỷ 18, 
  Phú Xuân là trung tâm chính trị, kinh tế, văn hoá của xứ 'Đàng Trong'. 
  Từ năm 1788 đến 1801, Phú Xuân trở thành kinh đô của triều đại Tây Sơn.'),
        ('6','https://static.mservice.io/blogscontents/momo-upload-api-200626154330-637287830108743791.jpg','lich sử cố đố huế qua từng các thời kì','Từ năm 1306, sau cuộc hôn phối giữa công chúa Huyền Trân (Nhà Trần) với vua Chàm là Chế Mân, 
 vùng đất Châu Ô, Châu Lý (gồm Quảng Trị, Thừa Thiên Huế và một phần của Bắc Quảng Nam ngày nay)
  được lấy tên là Thuận Hoá. Vào nửa cuối thế kỷ 15, thời vua Lê Thánh Tông, 
  địa danh Huế lần đầu tiên xuất hiện (?). Năm 1636 phủ Chúa Nguyễn đặt ở Kim Long (Huế), 
  tới năm 1687 dời về Phú Xuân - thành Nội Huế ngày nay. Vào những năm đầu của thế kỷ 18, 
  Phú Xuân là trung tâm chính trị, kinh tế, văn hoá của xứ 'Đàng Trong'. 
  Từ năm 1788 đến 1801, Phú Xuân trở thành kinh đô của triều đại Tây Sơn.'),
        ('7','https://media.ex-cdn.com/EXP/media.vntravellive.com/files/news/2021/09/15/cuoc-xay-dung-kinh-thanh-cuoi-cung-cua-viet-nam-040809.jpg','Lich sử cố đố huế qua từng các thời kì','Từ năm 1306, sau cuộc hôn phối giữa công chúa Huyền Trân (Nhà Trần) với vua Chàm là Chế Mân, 
 vùng đất Châu Ô, Châu Lý (gồm Quảng Trị, Thừa Thiên Huế và một phần của Bắc Quảng Nam ngày nay)
  được lấy tên là Thuận Hoá. Vào nửa cuối thế kỷ 15, thời vua Lê Thánh Tông, 
  địa danh Huế lần đầu tiên xuất hiện (?). Năm 1636 phủ Chúa Nguyễn đặt ở Kim Long (Huế),'),
  ('9','Kinh thành Huế về đêm mang một vẻ đẹp mới - Hot năm 2023','Quần thể di tích Cố đô Huế nằm dọc hai bên bờ sông Hương thuộc thành phố Huế và một vài vùng phụ cận thuộc tỉnh Thừa Thiên Huế. Thành phố Huế là trung tâm văn hoá, chính trị, kinh tế của tỉnh, là cố đô của Việt Nam thời phong kiến dưới 
  triều nhà Nguyễn, từ 1802 đến 1945'),
        ('8','https://cdn.alongwalk.info/wp-content/uploads/2022/06/26013511/image-tim-hieu-so-do-kinh-thanh-hue-va-nhung-net-dep-co-kinh-noi-day-165615691118457.jpg','https://media.ex-cdn.com/EXP/media.vntravellive.com/files/news/2021/09/15/cuoc-xay-dung-kinh-thanh-cuoi-cung-cua-viet-nam-040809.jpg','Lich sử cố đố huế qua từng các thời kì','Từ năm 1306, sau cuộc hôn phối giữa công chúa Huyền Trân (Nhà Trần) với vua Chàm là Chế Mân, 
 vùng đất Châu Ô, Châu Lý (gồm Quảng Trị, Thừa Thiên Huế và một phần của Bắc Quảng Nam ngày nay)
  được lấy tên là Thuận Hoá. Vào nửa cuối thế kỷ 15, thời vua Lê Thánh Tông, 
  địa danh Huế lần đầu tiên xuất hiện (?). Năm 1636 phủ Chúa Nguyễn đặt ở Kim Long (Huế), 
  tới năm 1687 dời về Phú Xuân - thành Nội Huế ngày nay. Vào những năm đầu của thế kỷ 18, 
  Phú Xuân là trung tâm chính trị, kinh tế, văn hoá của xứ 'Đàng Trong'. 
  Từ năm 1788 đến 1801, Phú Xuân trở thành kinh đô của triều đại Tây Sơn.'),
        ('9','https://kenhhomestay.com/wp-content/uploads/2022/07/kinh-thanh-hue-6.jpg','lich sử cố đố huế qua từng các thời kì','Từ năm 1306, sau cuộc hôn phối giữa công chúa Huyền Trân (Nhà Trần) với vua Chàm là Chế Mân, 
 vùng đất Châu Ô, Châu Lý (gồm Quảng Trị, Thừa Thiên Huế và một phần của Bắc Quảng Nam ngày nay)
  được lấy tên là Thuận Hoá. Vào nửa cuối thế kỷ 15, thời vua Lê Thánh Tông, 
  địa danh Huế lần đầu tiên xuất hiện (?). Năm 1636 phủ Chúa Nguyễn đặt ở Kim Long (Huế), 
  tới năm 1687 dời về Phú Xuân - thành Nội Huế ngày nay. Vào những năm đầu của thế kỷ 18, 
  Phú Xuân là trung tâm chính trị, kinh tế, văn hoá của xứ 'Đàng Trong'. 
  Từ năm 1788 đến 1801, Phú Xuân trở thành kinh đô của triều đại Tây Sơn.'),
        ";

        if($mysqli ->query($sql) === true){
            echo"Records inserted successfully.";
        }
        else{
            echo"ERROR:Could not able to execute $sql.".$mysqli->error;
        }
        //close
        $mysqli ->close();
?>