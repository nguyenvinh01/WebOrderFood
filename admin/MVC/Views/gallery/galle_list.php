
<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Gallery list</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row_pr">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button pl">
                            <div class="col-sm-2">
                              <a class="btn btn-add btn-sm" href="?act=gallery&xuli=addcate" title="Thêm DM"><i class="fas fa-plus"></i>
                                Tạo mới</a>
                            </div>
                          </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Gallery</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data_cate as $cus) {?>
                <tr>
                    <td class="col-md-1"><?= $cus['id'];?></td>

                    
                    <td class="col-md-6"><img src="<?= $cus['image_url'];?>" height="200px" width="300px"></td>
                    <!-- <td class="col-md-3"> <?= $cus['image_url'];?></td> -->
                    <td class="col-md-1">
                     <a href="?act=gallery&xuli=delete&id=<?= $cus['id'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');"
                      type="button" ><i class="fas fa-trash-alt"></i></a>
                     <a class="" href="?act=gallery&xuli=update&id=<?= $cus['id'] ?>" 
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
 