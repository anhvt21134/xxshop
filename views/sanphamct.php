 <?php
    extract($onesp);
    ?>
 <!-- container-row -->
 <div class="row">
     <!-- ARTICLE -->
     <article class="col-sm-9">
         <div class="wrap-article">
             <div class="img-art text-center pt-5 pb-4">
                 <img src="<?= $img = $img_path . $img ?>" alt="" width="200px;" />
             </div>
             <div class="list-detail-prd">
                 <ul>
                     <li><a href="#">Mã HH: <?= $id ?></a></li>
                     <li><a href="#">Tên HH: <?= $name ?></a></li>
                     <li><a href="#">Đơn giá: <?= $price ?></a></li>
                     <li><a href="#">Giảm giá: 0%</a></li>
                 </ul>
             </div>
             <div class="content-detail" style="padding: 0px 30px; margin: 0px; text-align: justify">
                 <p style="padding: 0px; margin: 5px 0px">
                     <?= $mota ?>
                 </p>
                 <p style="padding: 0px; margin: 5px 0px">
                     Watch S1 Active hướng đến hầu như mọi đối tượng và phong cách của
                     người dùng, dù là cổ điển hay thanh lịch, nhân viên văn phòng hay
                     dân chơi thể thao,... đều có thể sử dụng mẫu smartwatch này nhờ
                     ngoại hình tối giản nhưng không kém cá tính với những đường cắt
                     mạnh mẽ trên khung viền.
                 </p>
             </div>
             <div class="comment-detail mt-5">
                 <!-- card 1 -->
                 <div class="card">
                     <div class="card-header text-uppercase">Bình luận</div>
                     <div class="card-body">
                         <ul style="padding: 0px 30px; margin: 0px">
                             <li>
                                 <div class="flex-cmt">
                                     <div class="content-cmt">
                                         <span>Sản phẩm rất tuyệt vời </span>
                                     </div>
                                     <div class="customer-cmt">
                                         <p><i>PhuongCT,</i> <span>2022-09-22</span></p>
                                     </div>
                                 </div>
                             </li>
                             <li>
                                 <div class="flex-cmt">
                                     <div class="content-cmt">
                                         <span>Đồng hồ rất đẹp, tiện lợi và phù hợp với giá tiền
                                         </span>
                                     </div>
                                     <div class="customer-cmt">
                                         <p><i>TuanAP,</i> <span>2022-07-24</span></p>
                                     </div>
                                 </div>
                             </li>
                             <li>
                                 <div class="flex-cmt">
                                     <div class="content-cmt">
                                         <span>Chất lượng sản phẩm tuyệt vời </span>
                                     </div>
                                     <div class="customer-cmt">
                                         <p><i>NgocDM,</i> <span>2022-01-22</span></p>
                                     </div>
                                 </div>
                             </li>
                         </ul>
                     </div>
                     <div class="card-footer">
                         <div class="flex-ip">
                             <div class="ip-cmt">
                                 <input type="text" class="form-control form-control-lg" placeholder="Nhập bình luận của bạn..." />
                             </div>
                             <div class="btn-cmt">
                                 <button type="button" class="btn btn-primary">
                                     Bình luận
                                 </button>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- card 2 -->
                 <div class="card mt-4">
                     <div class="card-header text-uppercase">Hàng cùng loại</div>

                     <div class="card-body list-same">
                         <ul style="padding: 0px 30px; margin: 0px">
                             <?php
                                foreach ($sp_cung_loai as $sp_cungloai) {
                                    extract($sp_cungloai);
                                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                    echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
                                }
                                ?>
                         </ul>
                     </div>
                     <div class="card-footer">
                         <div class="flex-ip">
                             <div class="ip-cmt">
                                 <input type="text" class="form-control form-control-lg" placeholder="Nhập sản phẩm bạn muốn tìm kiếm..." />
                             </div>
                             <div class="btn-cmt">
                                 <button type="button" class="btn btn-primary">
                                     Tìm kiếm
                                 </button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </article>
     <!-- ASIDE -->
     <aside class="col-sm-3 mt-3">
         <?php
            include "boxright.php";
            ?>
     </aside>
 </div>