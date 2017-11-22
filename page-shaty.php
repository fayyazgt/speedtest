<?php

header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

require('../wp-blog-header.php');
?>

<script>
document.addEventListener( 'wpcf7submit', function( event ) {
    window.location='http://wordpress-95482-281345.cloudwaysapps.com/speedtest/result.php?url='+document.getElementsByName("url")[0].value+'&email='+document.getElementsByName("email")[0].value;
}, false );
</script>

<?php

get_header();

wp_head();

$my_postid = 5948; //This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$contentfilter = apply_filters('the_content', $content);
$contentfinal = str_replace(']]>', ']]&gt;', $contentfilter);
?>
<div class="main wrap cf" style="transform: none;">
    <div class="row" style="transform: none;">
        <div class="col-8 main-content">
            <article class="page type-page status-publish">
                <header class="post-header">
                    <h1 class="main-heading">Magenticians Page Speed Test</h1>
                </header>
                <div class="post-content">
                    <div class="mg-cnt-box">
                        <div role="form" class="wpcf7" id="wpcf7-f2361-p19-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <?php echo $contentfinal; ?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>