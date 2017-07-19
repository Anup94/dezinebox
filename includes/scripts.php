<?php
foreach (glob($_SERVER['DOCUMENT_ROOT']."/admin/js/thirdparty/*.js") as $filename) {
    ?>
    <script type="text/javascript" src="/admin/js/thirdparty/<?php echo basename($filename)."?".RANDOM_NO;?>"></script>
    <?php
}
foreach (glob($_SERVER['DOCUMENT_ROOT']."/admin/js/custom/*.js") as $filename) {
    ?>
    <script type="text/javascript" src="/admin/js/custom/<?php echo basename($filename)."?".RANDOM_NO;?>"></script>
    <?php
}
?>