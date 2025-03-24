<?php
require_once 'includes/header.php';
?>



<main>
    <div id="flipping">
        <?php require_once 'includes/sections/hero.php'; ?>
        <?php require_once 'includes/sections/flipping.php'; ?>
    </div>
    <?php require_once 'includes/sections/stats.php'; ?>
    <?php require_once 'includes/sections/before-after.php'; ?>
    <?php require_once 'includes/sections/marquee.php'; ?>
    <?php require_once 'includes/sections/comparison.php'; ?>
    <div id="founder">
        <?php require_once 'includes/sections/founder.php'; ?>
    </div>
    <div id="cases">
        <?php require_once 'includes/sections/cases.php'; ?>
    </div>
    <div id="franchise">
        <?php require_once 'includes/sections/franchise.php'; ?>
        <?php require_once 'includes/sections/key-stages.php'; ?>
    </div>
    <div id="income">
        
    </div>
    <?php require_once 'includes/sections/showroom.php'; ?>
    <?php require_once 'includes/sections/homestaging.php'; ?>
    <?php require_once 'includes/sections/tabs-section.php'; ?> 
    <?php require_once 'includes/sections/saler.php'; ?> <div id="form">
         <?php require_once 'includes/sections/form.php'; ?> </div>
         <?php require_once 'includes/sections/footer.php'; ?>
</main>

<?php require_once 'includes/sections/modal.php'; ?>

<script src="assets/js/script.js"></script>
<script src="assets/js/modal.js"></script>
<script src="assets/js/income-hover.js"></script>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
?>