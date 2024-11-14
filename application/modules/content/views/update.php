<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xxl-8 mb-6 order-0">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5><?= $title; ?></h5>
                        <small class="text-muted float-end">
                            <a href="<?= base_url('content') ?>" class="btn btn-secondary">
                                <span class="me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                                    </svg>
                                </span>
                                Kembali
                            </a>
                        </small>
                    </div> 
                </div>
                <div class="card-body">
                    <?= form_open(); ?>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="id_category">Kategori</label>
                            <div class="col-sm-10">
                                <select name="id_category" id="id_category" class="form-select <?= form_error('id_category') == true ? 'invalid' : '' ?>">
                                    <?php foreach($kategori as $k): ?>
                                        <option <?= $k['id'] == $content['id_category'] ? 'selected' : ''  ?> value="<?= $k['id'] ?>"><?= $k['nm_kategori'] ?></option>
                                    <?php endforeach ?>
                                </select>
                                <?= form_error('id_category') ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="name">Judul</label>
                            <div class="col-sm-10">
                                <input  type="text" class="form-control <?= form_error('name') == true ? 'invalid' : '' ?>" name="name" id="name" value="<?= $content['name'] ?>" placeholder="Masukan nama judul...">
                                <?= form_error('name') ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="url">URL</label>
                            <div class="col-sm-10">
                                <input  type="text" class="form-control <?= form_error('url') == true ? 'invalid' : '' ?>" name="url" id="url" value="<?= $content['url'] ?>" placeholder="Masukan URL...">
                                <?= form_error('url') ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="thumbnail">Thumbnail</label>
                            <div class="col-sm-10">
                                <input  type="file" class="form-control <?= form_error('thumbnail') == true ? 'invalid' : '' ?>" name="thumbnail" id="thumbnail" placeholder="Masukan Thumbnail...">
                                <!-- <?= form_error('thumbnail') ?> -->
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
