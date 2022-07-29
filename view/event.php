<?php include('../elements/top.php')   ?>
<?php include('../elements/header.php')   ?>



<body class="d-flex flex-column min-vh-100">
    
<div class="text-center">

    <h2>Calendrier</h2>
    <h3><a  class="btn" href="event.php"<?= isset($_GET['month']) ? 'month=' .$_GET['month'] . '&' : '' ?>year=<?= $year -1?>><i class="bi bi-chevron-left"></i></a><a  class="btn" href="event.php"><i class="bi bi-chevron-right"></i></a></h3>
    <h3><a  class="btn" href="event.php"><i class="bi bi-chevron-left"></i></a><a  class="btn" href="event.php"><i class="bi bi-chevron-right"></i></a></h3>
    
</div>












</body>





<?php include('../elements/footer.php') ?>