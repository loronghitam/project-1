<form id="createForm">
    <div class="modal fade text-left w-100" id="createModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel20"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edukasi</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="title" id="title" class="form-control">
                        </label>
                    </div>

                    <div class="form-group">
                        <label>Minimal</label>
                        <select class="form-control select2" style="width: 100%;" name="category" id="category">
                            <option value="" selected disabled>Pilih</option>
                            <option value="Makanan_Berat">Makanan Berat</option>
                            <option value="Makanan_Penutup">Makanan Penutup</option>
                            <option value="Minuman">Minuman</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea id="body" name="body"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="createImage">Image</label>
                        <input type="file" id="createImage" name="image" data-show-loader="false"
                               class="form-control" required data-allowed-file-extensions="jpg png"
                               data-max-file-size-preview="3M" data-max-file-size="3M">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary" id="createSubmit">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
