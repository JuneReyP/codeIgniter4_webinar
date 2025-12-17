<?= $this->extend('employees/layouts/main') ?>
<?= $this->section('content') ?>

<div>
    
    <form class="row g-3 m-4 border border-primary rounded-3 p-3" action="<?= site_url('employees/store') ?>" method="post">
        <h1>Add Employee</h1>
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationDefault01"  name="first_name" value="<?= esc(old('first_name')) ?>">

            <?php if(session()->has('validation') && session()->getFlashdata('validation')->hasError('first_name')): ?>
                <div style="color: red; font-size: 0.875rem;">
                    <?= session()->getFlashdata('validation')->getError('first_name') ?>
                </div>
            <?php endif; ?>
            
        </div>
        <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationDefault02" name="last_name" value="<?= esc(old('last_name')) ?>">

            <?php if(session()->has('validation') && session()->getFlashdata('validation')->hasError('last_name')): ?>
                <div style="color: red; font-size: 0.875rem;">
                    <?= session()->getFlashdata('validation')->getError('last_name') ?>
                </div>
            <?php endif; ?>

        </div>
        <div class="col-md-4">
            <label for="validationDefault03" class="form-label">Middle name</label>
            <input type="text" class="form-control" id="validationDefault03" name="middle_name" value="<?= esc(old('middle_name')) ?>">

            <?php if(session()->has('validation') && session()->getFlashdata('validation')->hasError('middle_name')): ?>
                <div style="color: red; font-size: 0.875rem;">
                    <?= session()->getFlashdata('validation')->getError('middle_name') ?>
                </div>
            <?php endif; ?>

        </div>        
        <div class="col-md-4">
            <label for="validationDefault03" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="validationDefault03" name="birthday" value="<?= esc(old('birthday')) ?>">
            <?php if(session()->has('validation') && session()->getFlashdata('validation')->hasError('birthday')): ?>
                <div style="color: red; font-size: 0.875rem;">
                    <?= session()->getFlashdata('validation')->getError('birthday') ?>
                </div>
            <?php endif; ?>

        </div>        
        <div class="col-md-6">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender" value="<?= esc(old('gender')) ?>">
            <?php if(session()->has('validation') && session()->getFlashdata('validation')->hasError('gender')): ?>
                <div style="color: red; font-size: 0.875rem;">
                    <?= session()->getFlashdata('validation')->getError('gender') ?>
                </div>
            <?php endif; ?>

        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Nationality</label>
            <input type="text" class="form-control" id="validationDefault03" name="nationality" value="<?= esc(old('nationality')) ?>">
            
            <?php if(session()->has('validation') && session()->getFlashdata('validation')->hasError('nationality')): ?>
                <div style="color: red; font-size: 0.875rem;">
                    <?= session()->getFlashdata('validation')->getError('nationality') ?>
                </div>
            <?php endif; ?>

        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Height</label>
            <input type="text" class="form-control" id="validationDefault03" name="height" value="<?= esc(old('height')) ?>">
            <?php if(session()->has('validation') && session()->getFlashdata('validation')->hasError('height')): ?>
                <div style="color: red; font-size: 0.875rem;">
                    <?= session()->getFlashdata('validation')->getError('height') ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Weight</label>
            <input type="text" class="form-control" id="validationDefault03" name="weight" value="<?= esc(old('weight')) ?>">
            <?php if(session()->has('validation') && session()->getFlashdata('validation')->hasError('weight')): ?>
                <div style="color: red; font-size: 0.875rem;">
                    <?= session()->getFlashdata('validation')->getError('weight') ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="validationDefault03" name="mobile_number" value="<?= esc(old('mobile_number')) ?>">
            <?php if(session()->has('validation') && session()->getFlashdata('validation')->hasError('mobile_number')): ?>
                <div style="color: red; font-size: 0.875rem;">
                    <?= session()->getFlashdata('validation')->getError('mobile_number') ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Province</label>
            <input type="text" class="form-control" id="validationDefault03" name="province" value="<?= esc(old('province')) ?>">
            <?php if(session()->has('validation') && session()->getFlashdata('validation')->hasError('province')): ?>
                <div style="color: red; font-size: 0.875rem;">
                    <?= session()->getFlashdata('validation')->getError('province') ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">City</label>
            <input type="text" class="form-control" id="validationDefault03" name="city" value="<?= esc(old('city')) ?>">
            <?php if(session()->has('validation') && session()->getFlashdata('validation')->hasError('city')): ?>
                <div style="color: red; font-size: 0.875rem;">
                    <?= session()->getFlashdata('validation')->getError('city') ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Add Employee</button>
        </div>
    </form>

</div>

<?= $this->endSection() ?>