<div id="header"><div class="section clearfix">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php echo base_path() . path_to_theme(); ?>/logo.png" alt="<?php print t('Home'); ?>" width="155" height="55"/>
        </a>
    </div></div>
<div id="page-wrapper"><div id="page" class="contact-page">
        <div id="main-wrapper"><div id="main" class="clearfix">
                <div id="content" class="column"><div class="section">
                        <a id="main-content"></a>
                        <div class="content-card-wrapper">
                            <div class="content-card">
                                <div class="content-card-padding" >
                                    <p style="padding-top: 75px;">
                                    <img src="<?php echo base_path() . path_to_theme(); ?>/images/card_a-text_1.png" alt="<?php print t('Home'); ?>" width="355" height="65"/>
                                    </p>
                                    <p style="padding-top: 35px;">
                                    <a href="#start" id="start_btn" class="sprite1"></a>
                                    </p>
                                </div>
                            </div>
                            <div class="content-card" style="display: none;">
                                <div class="content-card-padding">
                                    <img src="<?php echo base_path() . path_to_theme(); ?>/images/card_b-text_1.png" alt="<?php print t('Home'); ?>" width="155" height="55"/>
                                </div>
                            </div>
                            <div class="content-card" style="display: none;">
                                <div class="content-card-padding">
                                    <?php print render($page['content']); ?>
                                </div>
                            </div>
                            <a href="#next" id="next_btn" class="sprite1"></a>
                            <a href="#prev" id="prev_btn" class="sprite1"></a>
                        </div>
                        <?php if (isset($user->uid)): ?>
                            <?php if ($user->uid != 0): ?>
                                <?php print $messages; ?>
                                <?php print render($title_prefix); ?>
                                <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                                <?php print render($title_suffix); ?>
                                <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                                <?php print render($page['help']); ?>
                                <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>                                    
                            <?php endif; ?>
                        <?php endif; ?>
                    </div></div> <!-- /.section, /#content -->

            </div></div> <!-- /#main, /#main-wrapper -->

        <div id="footer"><div class="section">
            </div></div> <!-- /.section, /#footer -->
    </div></div> <!-- /#page, /#page-wrapper -->
