<?php
/**
 * Created by PhpStorm.
 * User: sivushkin
 * Date: 29.11.17
 * Time: 11:29
 */
?>

<?php wp_footer(); ?>
<script>
    $(document).ready(function(){
        $('ul.menu a').each(function () {
            if (this.href == location.href) $(this).parent().addClass('active');
        });
    });
</script>
</body>
</html>
