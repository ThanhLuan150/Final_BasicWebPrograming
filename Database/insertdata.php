<?php
        $mysqli =new mysqli("localhost","root","", "LISTPRODUCT");
        //check connection
        if($mysqli === false){
            die("ERROR:Could not connect. ". $mysqli ->connect_error);
        }
        //
        $sql ="INSERT INTO LISTPRODUCT(id,img,names,price) VALUES
        ('1','https://tse1.mm.bing.net/th?id=OIP.z_Z2K3GNjDSzGC_BioBcLAHaJK&pid=Api&P=0','Áo đối khâm-tân niên hoài niệm','200.000'),
        ('2','https://64.media.tumblr.com/571f69491c45c6ac058f4e011d4b6195/cc6afffc3b6be8d1-35/s1280x1920/099f3801c83b78c295f7ba9b3b3b539ae489fbe6.jpg','Áo đối khâm-tân niên hoài niệm','200.000'),
        ('3','https://i.pinimg.com/736x/91/17/2a/91172ae03ce7fb9d6da5d67637081675.jpg','Áo đối khâm -tân niên hoài niệm','200.000'),
        ('4','https://i.pinimg.com/736x/85/ca/75/85ca754e4b765f0067fbfbfd0d7f7b7c.jpg','Áo đối khâm-tân niên hoài niệm','200.000'),
        ('5','https://i.pinimg.com/originals/d0/eb/4a/d0eb4a42eee89e9ee61e4432e4be1224.jpg','Áo đối khâm-tân niên hoài niệm','200.000'),
        ('6','https://emoi.vn/wp-content/uploads/2020/12/ao-doi-kham.jpg','Áo đối khâm-tân niên hoài niệm','200.000'),
        ('7','https://i.pinimg.com/originals/7d/cd/a2/7dcda215c1153f1bb274607f614017e3.jpg','Áo đối khâm-tân niên hoài niệm','200.000'),
        ('8','https://vietphuc.net/wp-content/uploads/2021/04/MG_7779-1.jpg','Áo đối khâm-tân niên hoài niệm','200.000'),
        ('9','https://i.pinimg.com/originals/87/5b/b9/875bb95541579fa797bdcb4caec59345.jpg','Áo giao lĩnh-tân niên hoài niệm','300.000'),
        ('10','https://i.pinimg.com/originals/94/66/ea/9466eab7ae6cb04720966affdaba1b98.jpg','Áo giao lĩnh-tân niên hoài niệm','300.000'),
        ('11','https://img.vietcetera.com/uploads/images/27-may-2022/vnpao-giao-linh-1653652498269.jpeg','Áo giao lĩnh-tân niên hoài niệm','300.000'),
        ('12','https://i.pinimg.com/736x/fd/fe/13/fdfe139bb21fdedcebf9f1b1eb213099.jpg','Áo giao lĩnh-tân niên hoài niệm','300.000'),
        ('13','https://i.pinimg.com/originals/11/59/d3/1159d3bead76887e7fbf1a4f08881faf.png','Áo giao lĩnh-tân niên hoài niệm','300.000'),
        ('14','https://i.pinimg.com/736x/8a/8b/89/8a8b8952a6031c4c8f41bed31eb8daa9.jpg','Áo giao lĩnh-tân niên hoài niệm','300.000'),
        ('15','https://i.pinimg.com/originals/88/ba/9a/88ba9adecc374f160dbd05db7a322231.jpg','Áo giao lĩnh-tân niên hoài niệm','300.000'),
        ('16','hhttps://i.pinimg.com/originals/e2/6a/be/e26abe259d0fbd84e1e8756e4c0a89ce.jpg','Áo giao lĩnh-tân niên hoài niệm','300.000'),
        ('17','https://i.pinimg.com/originals/36/4c/6c/364c6c27bb94c82765875120c110fe9c.jpg','Áo nhật bình-tân niên hoài niệm','400.000'),
        ('18','https://tse1.mm.bing.net/th?id=OIP.z_Z2K3GNjDSzGC_BioBcLAHaJK&pid=Api&P=0','Áo nhật bình-tân niên hoài niệm','400.000'),
        ('19','https://i.pinimg.com/originals/c4/82/4b/c4824bd0a808831872d49ef274536d39.jpg','Áo nhật bình-tân niên hoài niệm','400.000'),
        ('20','https://media.christinas.vn/uploads/2018/07/ao-nhat-binh-vietnam-Source-Facebook-@-Nguyen-Phong-Doan-Linh.jpg','Áo nhật bình-tân niên hoài niệm','400.000'),
        ('21','https://i.pinimg.com/736x/e8/05/01/e805018d6c206ca74780c9eab2270e0b.jpg','Áo nhật bình-tân niên hoài niệm','400.000'),
        ('22','https://i.pinimg.com/736x/5b/34/db/5b34dbf74ed2271eb36ce1c59a8151f0--cambodia-vietnam.jpg','Áo nhật bình-tân niên hoài niệm','400.000'),
        ('23','https://i.pinimg.com/originals/50/07/8c/50078cefa02f42a79d11677ab0fea83c.png','Áo nhật bình-tân niên hoài niệm','400.000'),
        ('24','https://hatvan.vn/wp-content/uploads/2020/10/7be6530c-e2a7-4805-96ee-cde25cf08ac1.jpg','Áo nhật bình-tân niên hoài niệm','400.000'),
        ('25','https://i.pinimg.com/originals/24/0e/f5/240ef517e85076b16d94868ce6d34613.png','Áo tấc-tân niên hoài niệm','100.000'),
        ('26','https://1.bp.blogspot.com/-6BktyZNqtrQ/X9oU9xOC-6I/AAAAAAAA1ug/KTJeqZxZ_bUlFsh2wW73fmSKuz07nvnbgCPcBGAYYCw/s1709/ao%2Btac%2Bdung%2Bchuan%2Bnha%2Bnguyen%2B%25282%2529.jpg','Áo tấc-tân niên hoài niệm','100.000'),
        ('27','https://baothuathienhue.vn/image/fckeditor/upload/2020/20200802/images/6.jpg','Áo tấc-tân niên hoài niệm','100.000'),
        ('28','https://i.pinimg.com/originals/34/a6/14/34a6147b9250e7cc7a7623edf86685aa.jpg','Áo tấc-tân niên hoài niệm','100.000'),
        ('29','https://i.pinimg.com/originals/c2/f0/75/c2f07572b4ac5a9cd1352d445d142978.jpg','Áo tấc-tân niên hoài niệm','100.000'),
        ('30','https://i.pinimg.com/originals/1f/ca/25/1fca253666f1bd925b8bf5b8031dac26.jpg','Áo tấc-tân niên hoài niệm','100.000'),
        ('31','https://i.pinimg.com/originals/7a/f7/bd/7af7bda2a2b116befc7d931b705c6801.png','Áo tấc-tân niên hoài niệm','100.000'),
        ('32','hhttps://i.pinimg.com/originals/75/7f/a2/757fa20938714e34b65a5eb1b167a31a.jpg','Áo tấc-tân niên hoài niệm','100.000'),
        ('33','https://i.pinimg.com/originals/82/e3/da/82e3dad084a64f7263fb50336ecbf156.png','Áo ngũ thân-tân niên hoài niệm','150.000'),
        ('34','https://i.pinimg.com/originals/82/e3/da/82e3dad084a64f7263fb50336ecbf156.png','Áo ngũ thân-tân niên hoài niệm','150.000'),
        ('35','https://i.pinimg.com/originals/eb/0f/e7/eb0fe79fdc42f9f8ca4ed73dba963975.jpg','Áo ngũ thân-tân niên hoài niệm','150.000'),
        ('36','https://i.pinimg.com/originals/f4/04/a5/f404a5a50ccc3e676d63364c96fb721e.jpg','Áo ngũ thân-tân niên hoài niệm','150.000'),
        ('37','https://cotranghoangcung.com/wp-content/uploads/2021/12/190102650_4155887171161742_5636596352801830650_n.jpg','Áo ngũ thân-tân niên hoài niệm','150.000'),
        ('38','https://i.pinimg.com/originals/3c/a2/c8/3ca2c8967467a68a6ee0d50e283011dd.jpg','Áo ngũ thân-tân niên hoài niệm','150.000'),
        ('39','https://aodainini.vn/wp-content/uploads/2021/03/a571d8de436cf332fcc843da67820894.jpg','Áo ngũ thân-tân niên hoài niệm','150.000'),
        ('40','https://cotranghoangcung.com/wp-content/uploads/2021/12/255185675_4662638383819949_4211348006644853240_n.jpg','Áo ngũ thân-tân niên hoài niệm','150.000')
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