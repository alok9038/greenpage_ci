<div class="container-fluid my-5" style="width:90%;">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
            <div class="header border-0 text-white mt-n3 p-3 ml-3 shadow rounded w-75 bg-success">Add Category</div>
                <div class="card-body">
                <?= form_open('admin/category'); ?>
                <div class="from-group">
                    <label for="">Parent Category</label>
                    <select name="parent_cat" id="" class="form-control">
                        <option disabled hidden selected>Select Parent Category</option>
                        <option value="0">Main Parent</option>
                        <?php foreach($parent_cat as $pc): ?>
                            <option value="<?= $pc->cat_id; ?>"><?= $pc->cat_title; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="from-group mt-4">
                    <label for="">Category title</label>
                    <input type="text" class="form-control" name="title" id="">
                </div>
                <div class="form-group mt-3">
                    <label for="">Description</label>
                    <textarea name="description" id="" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group ml-auto col-5">
                    <input type="submit" value="Add" class="btn btn-info" >
                </div>
            <?= form_close(); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="header border-0 text-white mt-n3 p-3 ml-3 shadow rounded w-75 bg-success">Category</div>
                <div class="card-body">
                    <table class="table table-md table-borderless table-hover ">
                        <tr class="bg-light">
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Parent Category</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <?php 
                        $sr = 1;
                        foreach($category as $cat): ?>
                        <tr>
                            <td><?= $sr; ?></td>
                            <td><?= $cat->cat_title; ?></td>
                            <td><?= $cat->cat_description; ?></td>
                            <td><?= $cat->cat_parent; ?></td>
                            <td><a href="" class="btn btn-info rounded-circle px-2 py-1"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-danger rounded-circle p-1 px-2 float-right"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php $sr +=1; endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>