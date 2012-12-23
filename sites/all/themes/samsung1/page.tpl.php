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
                                <?php
                                if (isset($node))
                                    if ($node->type == "webform"):
                                        ?>
                                        <div class="form_bg content-card-padding">
                                        <?php print render($page['content']); ?>
                                        </div>
                                        <?php else: ?>
                                        <div class="content-card-padding">
                                        <?php print render($page['content']); ?>
                                        </div>
                            <?php endif; ?>
                            </div>
                            <?php if (isset($node->field_next_link["und"])): ?>
                                <a href="<?php print $node->field_next_link["und"][0]["value"] ?>" id="next_btn" class="sprite1"></a>
                            <?php endif; ?>
                            <?php if (isset($node->field_prev_link["und"])): ?>
                                <a href="<?php print $node->field_prev_link["und"][0]["value"] ?>" id="prev_btn" class="sprite1"></a>
<?php endif; ?>
                        </div>

                        <?php if(isset($messages)): ?>
                        <div class="overlay" id="overlay" style="display:none;"></div>
                        <div class="box" id="msg-box">
                            <a class="boxclose" id="msgboxclose"></a>
                            <h1 class="msg-title">

                            </h1>
                            <div class="vSpace10"></div>
                            <p class="msg-body">
                                  <?php print $messages; ?>
                            </p>
                            <div class="vSpace10"></div>
                            <p class="msg-action">
                                <a href="#close" class="inline-block close-button"><?php echo ($lang == "ar" ? "إغلاق" : "Close"); ?></a>
                            </p>
                        </div> 
                        <?php endif; ?>




                        <?php if (isset($user->uid)): ?>
                            <?php if ($user->uid != 0): ?>
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
<script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/js/script.js"></script>