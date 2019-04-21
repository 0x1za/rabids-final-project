<?php require_once 'app/init.php';require 'app/parts/header-final.php'; ?>

<?php
$validate = new Validate();
$user = new User();
if(Input::exists()){
    $login = $user->login('username', 'password');
    try{
        if($login){
            if(Cookie::exists('cookie_name')){
                $cart = new Cart();
                $cart->update();
                Cookie::delete('cookie_name');
            }

            header('Location: index.php');
        }
    }catch(Exception $e){
        $e->getMessage();
    }
}
?>
<section class="hotel-section">
    <div class="container">
        <div class="row probootstrap-gutter40">
            <div class="col-md-8">
                <h4 class="mt0">Login - Santa Maria Shop</h4>
                <form action="#" method="post" class="probootstrap-form">
                    <div class="form-group">
                        <label for="email">Username</label>
                        <div class="form-field">
                            <i class="icon icon-user"></i>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="<?php echo Input::get('username'); ?>"><span><?php echo $user->error(0); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Password</label>
                        <div class="form-field">
                            <i class="icon icon-lock"></i>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" autocomplete="off" <?php echo $user->error(0); ?>><span><?php echo $user->error(1); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Sign In">
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