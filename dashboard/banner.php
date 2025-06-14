<?php
include_once "./backend_layout/header_1.php";
$query = "SELECT * from banners limit 1 ";
$result = mysqli_query($conn, $query);
$banner = mysqli_fetch_assoc($result);
?>
<link
    href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet"
/>
  <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<form action="../controller/BannerStore.php" method="POST" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header"> Banner</div>
        <div class="card-body">
            <input type="hidden" name="id" value="<?= $banner['id'] ?? '' ?>">
            <input type="hidden" name="prev_img" value="<?= $banner['featured'] ?? '' ?>">

            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="">Banner title</label>
                        <input type="text" name="title" value="<?= $banner['heading'] ?? '' ?>" class="form-control">
                    </div>

                    <div class="form-group my-3">
                        <label for="">Banner Sub Heading</label>
                        <input type="text" name="sub_heading" value="<?= $banner['sub_heading'] ?? '' ?>" class="form-control">
                    </div>

                    <div class="row my-3">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="">Button One</label>
                                <input type="text" name="cta_btn_one" value="<?= $banner['cta_btn_one'] ?? '' ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="">Button One link</label>
                                <input type="text" name="cta_btn_one_link" value="<?= $banner['cta_btn_one_link'] ?? '' ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="">Button two</label>
                                <input type="text" name="cta_btn_two" value="<?= $banner['cta_btn_two'] ?? '' ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="">Button two link</label>
                                <input type="text" name="cta_btn_two_link" value="<?= $banner['cta_btn_two_link'] ?? '' ?>" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Banner Details</label>
                        <textarea name="details" class="form-control" rows="5"><?= $banner['detalis'] ?? '' ?></textarea>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-3">
                        <img src="<?= "../uploads/banner/" . ($banner['featured'] ?? 'default.jpg') ?>" alt="" width="50px">
                    </div>
                    <div class="form-group">
                        <label for="">Featured Image</label>
                        <input type="file" name="featured" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Save banner</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
include_once "./backend_layout/footer_1.php";
?>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

<script>
    const inputElement = document.querySelector('input[type="file"]');
  FilePond.registerPlugin(FilePondPluginImagePreview);
    // Create a FilePond instance
    const pond = FilePond.create(inputElement, {
        storeAsFile: true
    });
</script>