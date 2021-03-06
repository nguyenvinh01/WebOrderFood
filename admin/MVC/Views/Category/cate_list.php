
<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách danh mục</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row_pr">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button pl">
                            <div class="col-sm-2">
                              <a class="btn btn-add btn-sm" href="?act=category&xuli=addcate" title="Thêm DM"><i class="fas fa-plus"></i>
                                Tạo danh mục mới</a>
                            </div>
                          </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>Mã Danh Mục</th>
                                    <th>Tên sản phẩm</th>
                                     <th>Tên sản phẩm</th>
                                   <!-- <th>Tình trạng</th>-->

                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data_cate as $cus) {?>
                <tr>
                    <td class="col-md-1"><?= $cus['category_id'];?></td>

                    <td><?= $cus['category_name'];?></td>
                    <td class="col-md-6"><?= $cus['category_desc'];?></td>
                    <td>
                     <a href="?act=category&xuli=delete&id=<?= $cus['category_id'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');"
                      type="button" ><i class="fas fa-trash-alt"></i></a>
                  <a class="" href="?act=category&xuli=update&id=<?= $cus['category_id'] ?>" 
                      data-target="#ModalUP"><i class="fas fa-edit" ></i></a>
                       </td>
                        </tr>
                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</main>
 