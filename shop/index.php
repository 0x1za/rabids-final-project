<?php
require_once 'app/init.php';
require_once 'app/parts/header-final.php';

$db = new DB();
$items = $db->get('items');
?>
    <section class="probootstrap-slider flexslider sm-inner">
        <ul class="slides">
            <li style="background-image: url(../img/banner-min.jpg);" class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="sm-slider-text text-center">
                                <p><img src="../img/curve_white.svg" class="seperator sm-animate" ></p>
                                <h1 class="sm-heading sm-animate">Our Shop</h1>
                                <div class="sm-animate sm-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <header>
        <div class="header-center">
            <ul>
                <li class="crt">
                    <a class="cc" href="#"><i id="drop" class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>

                    <div class="for">
                        <div class="cart-drop"></div>
                    </div>

                </li>
                <?php if(!$user->isLogged()): ?>
                    <li class="head-btn <?php echo (url() == 'Login') ? 'active' : ''; ?>" id="login"><a href="login.php">Login</a></li>
                    <li class="head-btn <?php echo (url() == 'Register') ? 'active' : ''; ?>" id="register"><a href="register.php">Register</a></li>
                <?php else: ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </header>
    <section class="hotel-section">
        <div class="container">
            <div class="row">
            <?php foreach($items->results() as $item): ?>
                    <form class="frm" method="post" action="app/ajax/action/add.php">
                        <div class="col-md-4">
                            <div class="probootstrap-hentry">
                                <p><a href="#"><img src="<?php echo $item->img; ?>" class="img-responsive"></a></p>
                                <h5 class="mt0"><a href="#" class="hover-reverse"><?php echo $item->name; ?></a></h5>
                                <?php
                                $string = strip_tags($item->description);
                                if (strlen($string) > 30) {

                                    // truncate string
                                    $stringCut = substr($string, 0, 120);
                                    $endPoint = strrpos($stringCut, ' ');

                                    //if the string doesn't contain any space then it will cut without word basis.
                                    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                    $string .= '... <a href="">Read More</a>';
                                }
                                ?>
                                <p class="text-mute" style="font-size: 13px;"></i><?php echo $string; ?></p>
                                <h5>RWF <?php echo $item->price; ?></h5>
                                <button name="sbmt" class="add" type="submit"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                                <button type="button" id="plus" class="plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <button type="button" id="minus" class="minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                <input type="number" class="count-add" name="count" min="1" value="1" disabled>

                                <input type="hidden" name="id" value="<?php echo $item->id; ?>">
                            </div>
                        </div>
                    </form>
            <?php endforeach; ?>
            </div>
        </div>
    </section>
<div class="content">
    <div class="for">
        <ul>

        </ul>
    </div>
</div>


<?php require_once 'app/parts/footer.php';