<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    
    <!-- flash data -->
    <?php if(session()->getFlashdata('success')): ?>
        <div style="color: green; padding: 10px; border: 1px solid green; margin-bottom: 10px;">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    <?php if(session()->getFlashdata('error')): ?>
        <div style="color: red; padding: 10px; border: 1px solid red; margin-bottom: 10px;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>


    <div class="container-fluid pt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-3 m-4 border border-primary rounded-3 p-3 mt-5">
                <h2>Login Test</h2>
                <form action="<?= site_url('/login') ?>" method="post">
                    <?=  csrf_field() ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    </form>
            </div>
        </div>
    </div>

</body>
</html>