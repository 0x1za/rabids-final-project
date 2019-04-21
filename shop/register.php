<?php
require_once 'app/init.php';

$validate = new Validate();
$user = new User();

if(Input::exists()){
    $validate->requirements(array(
        'name' => Input::get('name'),
        'username' => Input::get('username'),
        'password' => Input::get('password'),
        'password_again' => Input::get('password_again'),
    ));
    if(!$validate->errorExists()){
        try{
            $user->register('name', 'username', 'password');
            header('Location: index.php');

        }catch(Exception $e){
            $e->getMessage();
        }
    }
}

require 'app/parts/header-final.php'; ?>
<section class="hotel-section">
    <div class="container">
        <div class="row probootstrap-gutter40">
            <div class="col-md-8">
                <h4 class="mt0">Login - Santa Maria Shop</h4>
                <form action="#" method="post" class="probootstrap-form">
                    <div class="form-group">
                        <label for="text">Name</label>
                        <div class="form-field">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?php echo Input::get('name'); ?>"><span><?php echo $validate->error('name'); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Username</label>
                        <div class="form-field">
                            <i class="icon icon-user"></i>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="<?php echo Input::get('username'); ?>"><span><?php echo $validate->error('username'); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Enter Password</label>
                        <div class="form-field">
                            <i class="icon icon-lock"></i>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" autocomplete="off"><span><?php echo $validate->error('password'); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Confirm Password</label>
                        <div class="form-field">
                            <i class="icon icon-lock"></i>
                            <input type="password" class="form-control" id="password_again" name="password_again" placeholder="Enter password again" autocomplete="off"><span><?php echo $validate->error('password_again'); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg" id="submit" name="r" value="Register">
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <h4 class="mt0">Welcome</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie convallis vehicula. Donec viverra mattis ipsum eget aliquet. Cras luctus vitae purus eget vulputate. </p>
            </div>
        </div>
    </div>
</section>

<?php require 'app/parts/footer.php'; ?>