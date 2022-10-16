<style>
#wpcontent, #wpfooter {
    margin-left: 140px;
}
.folded #wpcontent, .folded #wpfooter {
    margin-left: 16px;
}
@media screen and (max-width: 782px) {
    .auto-fold #wpcontent {
        padding-left: 0;
        margin-left: 0;;
    }
}
#wpbody-content {
    height: calc(100vh - 32px);
    padding: 0;
}
#wpfooter {
    display: none;
}
</style>

<script>jQuery(function(){
    jQuery('body').addClass('folded');
})</script>

<iframe src="<?php echo home_url( LARAWP_PREFIX ); ?>" width="100%" height="100%"></iframe>
