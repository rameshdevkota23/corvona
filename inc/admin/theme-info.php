<?php
$pro_purchase_url = "https://trendthemeswp.com/products/corvona-pro";
$doc_url = "https://trendthemeswp.com/products/corvona-pro";
$live_demo_url = "https://demos.trendthemeswp.com/corvona-pro/";
$support_url = "https://trendthemeswp.com/contact-us/";

$theme_name = esc_html( $theme->Name );
$free_theme_name = str_replace( ' Pro', '',$theme_name );
?>
<div class="corvona--about-page--wrapper">
    <div id="corvona-admin-about-page">
        <div class="corvona-admin-card-header">
            <div class="corvona-header-left">
                <h2>
                    <?php echo esc_html( $theme->Name ); ?>
                </h2>
                <p>
                    <?php esc_html_e( 'Consultica - A Multipurpose, browser & device-friendly Full Site Editing Theme for WordPress', 'corvona' ); ?>
                </p>

            </div>
            <div class="corvona-header-right">
                <div class="corvona-card-header-button-group">
                    <a href="<?php echo $live_demo_url; ?>" class="corvona-admin-button premium-button" target="_blank"
                        rel="noreferrer"><span class="dashicons dashicons-book-alt"></span>
                        <?php esc_html_e( 'Pro Live Demo', 'corvona' ); ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="feature-list">
            <div class="corvona-about-container">
                <div class="corvona-admin-card features">
                    <div class="corvona-about-container corvona-compare-table">
                        <div class="admin-grid-1">
                            <h3>
                                <?php echo esc_html( $free_theme_name ); ?>
                                <?php esc_html_e( 'Free Vs Pro', 'corvona' ); ?>
                            </h3>
                            <p class="corvona-compare-table-subtitle"><a href="<?php echo $pro_purchase_url; ?>"
                                    target="__blank">
                                    <?php echo esc_html( 'Get Consultica Pro', 'corvona' ); ?>
                                    <i class="dashicons dashicons-arrow-right-alt"></i>
                                </a></p>
                            <table>
                                <thead>
                                    <tr>
                                        <th>
                                            <?php echo esc_html( $theme->Name ); ?>
                                            <?php esc_html_e( 'Free', 'corvona' ); ?>
                                            <?php esc_html_e( '( Limited blocks available )', 'corvona' ); ?>
                                            
                                        </th>
                                        <th>
                                            <?php esc_html_e( 'Features', 'corvona' ); ?>
                                        </th>
                                        <th>
                                            <?php esc_html_e( 'Consultica Pro ( More Blocks & Settings available )', 'corvona' ); ?>
                                        </th>
                                    </tr>
                                </thead>
                                                             <tbody>
                                    <tr>
                                        <td><span class="dashicons"><?php echo esc_html__('Limited', 'corvona'); ?></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('All Pre-Built Template', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons"><?php echo esc_html__('Unlimited', 'corvona'); ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Easy Setup', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Responsive Desgin', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons"><?php echo esc_html__('Good', 'corvona'); ?></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Speed and Performance', 'corvona'); ?>
                                        </td>
                                        <td><span class=""><?php echo esc_html__('Ultra fast and Lightweight', 'corvona'); ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('SEO Friendly', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Animation', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Back to Top Button (Scrool to Top)', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Icon Picker', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Contact Form', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('24/7 premium support', 'corvona'); ?>
                                        </td>
                                        <td><?php esc_html_e('High-Priority Dedicated Support', 'corvona'); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Different niches starter sites', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Secure transaction', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Lifetime Updates', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('No coding required', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Better Customization Without Code', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Advanced Templates', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Multiple Header/Footer Layouts', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons ">Limited</span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Block Patterns', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons">Unlimited</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons">Limited</span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Global Style Variations', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Premium Support', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Frequent Updates', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Drag and Drop functionality', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e(' Featured Slider', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e('Limited', 'corvona'); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Typography and color options', 'corvona'); ?>
                                        </td>
                                        <td><?php esc_html_e('Unlimited', 'corvona'); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e('Limited', 'corvona'); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Import components/ templates', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('One Click Demo Import', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                           
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Profile card (Block)', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e('Limited', 'corvona'); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Blog (block)', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span><?php esc_html_e('Unlimited', 'corvona'); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Testimonials(block)', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><?php esc_html_e('Limited', 'corvona'); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Templates and block patterns', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e('Limited', 'corvona'); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Advanced Color Options', 'corvona'); ?>
                                        </td>
                                        <td><?php esc_html_e('Unlimited', 'corvona'); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Enable Testimonial Slider', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Enable Sponsor Slider', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e('Enable Sticky Header', 'corvona'); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="corvona-about-side">
                <div class="corvona-admin-card cart-two">
                    <h3 class="corvona-admin-card-title is-small">
                        <?php esc_html_e( 'Questions Welcome - We\'re here to help', 'corvona' ); ?>
                    </h3>
                    <p>
                        <?php esc_html_e( '"Fearless Setup - Our Dedicated Team will have your website up in minutes', 'corvona' ); ?>
                    </p><a href="<?php echo $support_url; ?>" class="corvona-admin-button primary large"
                        target="_blank">
                        <?php esc_html_e( 'Get Support', 'corvona' ); ?>
                    </a>
                    <a href="<?php echo $pro_purchase_url; ?>" class="corvona-admin-button primary large"
                        target="_blank">
                        <?php esc_html_e( 'Get Premium Version', 'corvona' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>