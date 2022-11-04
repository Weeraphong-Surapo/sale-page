
<?php

class Libarys{

    function Swal($type, $title, $text, $link){
        ?>
            <script>
                setTimeout(function() {
                    swal({
                        type: "<?= $type ?>",
                        title: "<?= $title ?>", 
                        text: "<?= $text ?>", 
                        timer: 2000,
                        showConfirmButton: true 
                    }, function() {
                        window.location.href = "<?= $link ?>";
                    });
                });
            </script>
        <?php
    }


}

$use = new Libarys();
?>