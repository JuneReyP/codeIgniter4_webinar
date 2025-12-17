<?= $this->extend('employees/layouts/main') ?>
<?= $this->section('content') ?>

<div>
    

    <?php if(session()->getFlashdata('validation')): ?>
        <div style="color: red;">
            <?= session()->getFlashdata('validation')->listErrors() ?>
        </div>
    <?php endif; ?>



    <form class="row g-3 m-4 border border-primary rounded-3 p-3" action="<?= site_url('employees/update/'.$employee['id']) ?>" method="post">
        <h1>Edit Employee</h1>
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationDefault01"  name="first_name" value="<?= esc(old('first_name', $employee['first_name'])) ?>">
        </div>
        <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationDefault02" name="last_name" value="<?= esc(old('last_name', $employee['last_name'])) ?>">
        </div>
        <div class="col-md-4">
            <label for="validationDefault03" class="form-label">Middle name</label>
            <input type="text" class="form-control" id="validationDefault03" name="middle_name" value="<?= esc(old('middle_name', $employee['middle_name'])) ?>">
        </div>        
        <div class="col-md-4">
            <label for="validationDefault03" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="validationDefault03" name="birthday" value="<?= esc(old('birthday', $employee['birthday'])) ?>">
        </div>        
        <div class="col-md-6">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender" value="<?= esc(old('gender', $employee['gender'])) ?>">
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Nationality</label>
            <input type="text" class="form-control" id="validationDefault03" name="nationality" value="<?= esc(old('nationality', $employee['nationality'])) ?>">
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Height</label>
            <input type="text" class="form-control" id="validationDefault03" name="height" value="<?= esc(old('height', $employee['height'])) ?>">
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Weight</label>
            <input type="text" class="form-control" id="validationDefault03" name="weight" value="<?= esc(old('weight', $employee['weight'])) ?>">
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="validationDefault03" name="mobile_number" value="<?= esc(old('mobile_number', $employee['mobile_number'])) ?>">
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Province</label>
            <input type="text" class="form-control" id="validationDefault03" name="province" value="<?= esc(old('province', $employee['province'])) ?>">
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">City</label>
            <input type="text" class="form-control" id="validationDefault03" name="city" value="<?= esc(old('city', $employee['city'])) ?>">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Update Employee</button>
        </div>
    </form>

</div>

<?= $this->endSection() ?>