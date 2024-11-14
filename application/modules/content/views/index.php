<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
	<div class="row">
		<div class="col-xxl-12 mb-6 order-0">
            <div class="card">
                <h5 class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 clas><?= $title ?></h5>
                        <span class="me-2">
                        <a href="<?= base_url('content/add') ?>" class="btn btn-primary">
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z" />
                                </svg>
                            </span> Tambah Content
                        </a>
                    </div>
                </h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table id="datatable" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Thumbnail</th>
                                    <th>Name</th>
                                    <th>URL</th>
                                    <th>Kategori</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach($content as $c) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td>
                                      <img src="<?= base_url('upload/' . $c['thumbnail']) ?>" class="img-thumbnail" width="80%" alt="">  
                                    </td>
                                    <td><?= $c['name'] ?></td>
                                    <td>
                                        <a href="<?= $c['url'] ?>"><?= $c['url'] ?></a>
                                    </td>
                                    <td><?= $c['nm_kategori'] ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                            <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?= site_url("content/update/" . $c['id']); ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="<?= base_url('content/delete/' . $c['id']); ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                                            </div>
                                        </div>   
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div> 
        </div>
	</div>
</div>
<!-- / Content -->




