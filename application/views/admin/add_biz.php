<div class="container my-5">
    <div class="card">
    <div class="header border-0 text-white mt-n3 p-3 ml-3 shadow rounded w-75 bg-success">Add Business</div>
        <div class="card-body">
            <?= form_open_multipart('admin/add_biz'); ?>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title">
                    <?= form_error('title'); ?>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="contact1">Contact <span class="text-danger">*</span></label>
                        <input type="number" name=" contact1" class="form-control" id="contact1">
                        <?= form_error('contact1'); ?>
                    </div>
                    <div class="form-group col">
                        <label for="contact2">Alternate Contact</label>
                        <input type="number" name="contact2" class="form-control" id="contact2">
                        <?= form_error('contact2'); ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-5">
                        <label for="email">Email </label>
                        <input type="email" name="email" class="form-control" id="email">
                        <?= form_error('email'); ?>
                    </div>
                    <div class="form-group col">
                        <label for="website">Website</label>
                        <input type="text" name="website" class="form-control" id="website">
                        <?= form_error('website'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="o_name">Owner name</label>
                    <input type="text" name="owner_name" class="form-control" id="o_name">
                    <?= form_error('owner_name'); ?>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="8" class="form-control"></textarea>
                    <?= form_error('description'); ?>
                </div>
                <div class="form-group">
                    <label for="cate">Category</label>
                    <select name="category" id="cate" class="form-control">
                        <option disabled hidden selected>Select category</option>
                        <?php foreach($category as $cat): ?>
                            <option value="<?= $cat->cat_id; ?>"><?= $cat->cat_title; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('category'); ?>
                </div>
                <div class="form-group  ">
                    <span>Image</span>
                    <input type="file" class="file-input btn btn-info" name='image'>
                    </div>
                </div>
                <div class="form-group col-2 ml-auto">
                    <input type="submit" class="border-0  btn-info p-2 px-3" value="+ ADD">
                </div>

            <?= form_close(); ?>
            </div>
    </div>
</div>