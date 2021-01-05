<div class="container mt-5">
    <div class="card">
    <div class="header border-0 text-white mt-n3 p-3 ml-3 shadow rounded w-75 bg-success">Manage Business</div>
        <div class="card-body">
            <table class="table-lg table table-borderless table-hover">
                <tr class="bg-light">
                    <th class="font-weight-bold">Id</th>
                    <th class="font-weight-bold">Image</th>
                    <th class="font-weight-bold">Title</th>
                    <th class="font-weight-bold">Contact</th>
                    <th class="font-weight-bold">alternate contact</th>
                    <th class="font-weight-bold">Owner name</th>
                    <th class="font-weight-bold">Action</th>
                </tr>
                <?php $sr = 1; foreach($business as $biz): ?>
                    <tr>
                        <td><?= $sr; ?></td>
                        <td><div style="height:50px; width:50px;"><img src="<?= base_url('assets/upload/'.$biz->images); ?>" alt="" class="img-fluid"></div></td>
                        <td><?= $biz->title; ?></td>
                        <td><?= $biz->contact1; ?></td>
                        <td><?= $biz->contact2; ?></td>
                        <td><?= $biz->owner_name; ?></td>
                        <td>
                            <a href="" class="btn btn-info rounded-circle px-2 p-1"><i class="fas fa-trash"></i></a>
                            <a href="" class="btn btn-danger rounded-circle px-2 p-1"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php $sr+=1; endforeach; ?>
            </table>
        </div>
    </div>
</div>