<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Setting Website</h3>
          <h6 class="font-weight-normal mb-0">JeWePe Wedding Organizer</h6>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Setting Profile Website</h4>
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('admin/Settings/updateData'); ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $settings->id; ?>">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="website_name">Nama Website</label>
                    <input type="text" class="form-control" id="website_name" name="website_name" placeholder="Website Name" value="<?= htmlspecialchars($settings->website_name); ?>" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="phone_number1">Phone Number 1</label>
                    <input type="text" class="form-control" id="phone_number1" name="phone_number1" placeholder="Phone Number 1" value="<?= htmlspecialchars($settings->phone_number1); ?>" required pattern="\d{10,15}">
                  </div>
                  <div class="form-group">
                    <label for="phone_number2">Phone Number 2</label>
                    <input type="text" class="form-control" id="phone_number2" name="phone_number2" placeholder="Phone Number 2" value="<?= htmlspecialchars($settings->phone_number2); ?>" pattern="\d{10,15}">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="email1">Email 1</label>
                    <input type="email" class="form-control" id="email1" name="email1" placeholder="Email 1" value="<?= htmlspecialchars($settings->email1); ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="email2">Email 2</label>
                    <input type="email" class="form-control" id="email2" name="email2" placeholder="Email 2" value="<?= htmlspecialchars($settings->email2); ?>">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="4"><?= htmlspecialchars($settings->address); ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="maps">Maps</label>
                    <textarea class="form-control" id="maps" name="maps" rows="4"><?= htmlspecialchars($settings->maps); ?></textarea>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="logo">Logo Website</label>
                    <input type="file" class="form-control" id="logo" name="logo">
                  </div>
                  <div class="form-group">
                    <img src="<?= base_url('assets/files/') . $settings->logo; ?>" class="img-thumbnail" style="max-width: 120px;" alt="Website Logo">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="facebook_url">Facebook</label>
                    <input type="text" class="form-control" id="facebook_url" name="facebook_url" placeholder="Facebook" value="<?= htmlspecialchars($settings->facebook_url); ?>">
                  </div>
                  <div class="form-group">
                    <label for="instagram_url">Instagram</label>
                    <input type="text" class="form-control" id="instagram_url" name="instagram_url" placeholder="Instagram" value="<?= htmlspecialchars($settings->instagram_url); ?>">
                  </div>
                  <div class="form-group">
                    <label for="youtube_url">Youtube</label>
                    <input type="text" class="form-control" id="youtube_url" name="youtube_url" placeholder="Youtube" value="<?= htmlspecialchars($settings->youtube_url); ?>">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="header_bussines_hour">Header Bussines Hour</label>
                    <textarea class="form-control" id="header_bussines_hour" name="header_bussines_hour" rows="4"><?= htmlspecialchars($settings->header_bussines_hour); ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="time_bussines_hour">Time Bussines Hour</label>
                    <textarea class="form-control" id="time_bussines_hour" name="time_bussines_hour" rows="4"><?= htmlspecialchars($settings->time_bussines_hour); ?></textarea>
                  </div>
                </div>
                <div class="col-lg-12 text-right">
                  <button type="submit" class="btn btn-primary mr-2">Update</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>