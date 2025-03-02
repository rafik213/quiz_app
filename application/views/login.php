<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= lang('admin_login'); ?> | <?php echo (is_settings('app_name')) ? is_settings('app_name') : "" ?></title>

    <?php base_url() . include 'include.php'; ?>
    <style>
        body {
            background: #f4f6f8;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
        }
        .login-container {
            width: 100%;
            max-width: 500px;
            padding: 20px;
        }
        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 1rem;
        }
        .login-brand {
            text-align: center;
            margin-bottom: 2rem;
        }
        .login-brand img {
            max-width: 150px;
            height: auto;
        }
        .login-welcome-text {
            text-align: center;
            margin-bottom: 2rem;
        }
        .login-welcome-text h3 {
            color: #2d3748;
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }
        .login-welcome-text p {
            color: #718096;
            margin-bottom: 0;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-control {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            transition: all 0.2s;
        }
        .form-control:focus {
            border-color: #4299e1;
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.15);
        }
        .btn-primary {
            background: #4299e1;
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-weight: 600;
            transition: all 0.2s;
        }
        .btn-primary:hover {
            background: #3182ce;
            transform: translateY(-1px);
        }
        .checkbox {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
            color: #718096;
        }
        .input-group-text {
            background: transparent;
            border: 1px solid #e2e8f0;
            border-left: none;
            cursor: pointer;
        }
        .text-muted {
            color: #718096;
            font-size: 0.875rem;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="card">
            <div class="login-brand">
                <?php if (is_settings('full_logo')) { ?>
                    <img src="<?= base_url() . LOGO_IMG_PATH . is_settings('full_logo'); ?>" alt="logo">
                <?php } ?>
            </div>
            <div class="login-welcome-text">
                <h3><?= lang('sign_in'); ?></h3>
                <p><?= lang('welcome_lets_get_started_sign_in_to_explore'); ?></p>
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url() ?>loginMe" class="needs-validation" novalidate="">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">

                    <div class="form-group">
                        <label for="email"><?= lang('username'); ?></label>
                        <input type="text" class="form-control" name="username" placeholder="<?= lang('enter_username'); ?>" required value="<?= isset($_COOKIE["system_user_login"]) ? $_COOKIE["system_user_login"] : '' ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= lang('please_fill_in_your_username'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label"><?= lang('password'); ?></label>
                        </div>
                        <div class="input-group">
                            <input type="password" id="password" class="form-control" name="password" placeholder="<?= lang('enter_password'); ?>" value="<?= isset($_COOKIE["system_userpassword"]) ? $_COOKIE["system_userpassword"] : '' ?>" required>
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-eye-slash" id="btnIcon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?= lang('please_fill_in_your_password'); ?>
                        </div>
                    </div>

                    <label class="checkbox">
                        <input type="checkbox" name="rememberMe" id="rememberMe" <?php if (isset($_COOKIE["system_user_login"])) { ?> checked <?php } ?> />
                        <?= lang('remember_me'); ?>
                    </label>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            <?= lang('login'); ?>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <?php $footer_copyrights_text = $this->db->where('type', 'footer_copyrights_text')->get('tbl_settings')->row_array(); ?>
        <div class="text-center mt-4 pb-3">
            <?php
            if (isset($footer_copyrights_text) && !empty($footer_copyrights_text['message'])) { ?>
                <div class="text-muted"> <?= $footer_copyrights_text['message'] ?> </div>
            <?php } else { ?>
                <div class="text-muted"> <?= lang('copyright'); ?> &copy; <?php echo (is_settings('app_name')) ? is_settings('app_name') : "" ?> <?= date('Y') ?></div>
            <?php }
            ?>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- Template JS File -->
    <script src="<?= base_url(); ?>assets/js/stisla.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/js/scripts.js" type="text/javascript"></script>

    <!-- Toast JS -->
    <script src="<?= base_url(); ?>assets/js/iziToast.min.js"></script>

    <script>
        $(document).ready(function() {
            $('form').on('submit', function(e) {
                if ($(this).data('submitted') === true) {
                    e.preventDefault();
                } else {
                    $(this).data('submitted', true);
                }
            });
        });

        $("#btnIcon").click(function() {
            var input = $('#password');
            if (input.attr("type") == "password") {
                input.attr("type", "text");
                $(this).attr("class", "fa fa-eye");
            } else {
                input.attr("type", "password");
                $(this).attr("class", "fa fa-eye-slash");
            }
        });
    </script>
    <?php if ($this->session->flashdata('error')) { ?>
        <script type='text/javascript'>
            iziToast.error({
                message: '<?= $this->session->flashdata('error'); ?>',
                position: 'topRight'
            });
        </script>
    <?php } ?>
</body>

</html>