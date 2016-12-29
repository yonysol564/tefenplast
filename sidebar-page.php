<?php $contact_form_general   = get_field('contact_form_general','option'); ?>
<div class="about_wraper">
    <span class="sidebar_title">
        שירותים נוספים
    </span>
    <div class="single_nav">
        <div class="row">
            <div class="large-12 column">
                <ul>
                    <?php wp_nav_menu( array( 'theme_location' => 'service_menu', 'menu_class' => 'service_menu' ) ); ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="form_div">
    <span class="sidebar_title">נשמח לעמוד <span>לשרותכם</span></span>
    <div>
        <?php echo do_shortcode($contact_form_general); ?>
    </div>
</div>
