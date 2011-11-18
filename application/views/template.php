<!DOCTYPE html>
<html>
    <head>
        <title>Mencoba Peta</title>
        <link rel="stylesheet" href="<?php base_url(); ?>template/jquerymobile/jquery.mobile-1.0a1.min.css" />
        <script src="<?php base_url(); ?>template/jquerymobile/jquery-1.4.3.min.js"></script>
        <script src="<?php base_url(); ?>template/jquerymobile/jquery.mobile-1.0a1.min.js"></script>
        <?php echo $headerjs; ?>
        <?php echo $headermap; ?>
    </head>
    <div data-role="page">

        <div data-role="header">
            <h1>Coba peta</h1>
        </div>

        <div data-role="content">
            <?php echo $onload; ?>
            <?php echo $map; ?>
            <?php echo $sidebar; ?>
        </div>
        <div data-role="footer">
            <h4>Copyright &copy;</h4>
        </div>
    </div>

</body>
</html>