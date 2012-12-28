<?php include 'errorlist.php'; ?>
<?php
include 'detect_device.php';
$flag = "no";
?>
<div id="header">
    <div class="section clearfix">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php echo base_path() . path_to_theme(); ?>/logo.png" alt="<?php print t('Home'); ?>" width="155" height="55"/>
        </a>
    </div>
</div>
<div id="page-wrapper">
    <div id="page" class="contact-page">
        <div id="main-wrapper">
            <div id="main" class="clearfix">
                <div id="content" class="column">
                    <div class="section">
                        <a id="main-content"></a>
                        <div class="content-card-wrapper">
                            <div class="content-card">
                                <div class="form_bg content-card-padding">
                                    <?php print render($page['content']); ?>
                                </div>
                            </div>
                            <?php if (isset($node->field_next_link["und"])): ?>
                                <a href="<?php print $node->field_next_link["und"][0]["value"] ?>" id="next_btn" class="sprite1"></a>
                            <?php endif; ?>
                            <?php if (isset($node->field_prev_link["und"])): ?>
                                <a href="<?php print $node->field_prev_link["und"][0]["value"] ?>" id="prev_btn" class="sprite1"></a>
                            <?php endif; ?>
                            <div class="samsung-callcenter">

                            </div>
                        </div>
                        <?php if ($iPod || $iPhone || ($iPad) || ($Android) || ($AndroidTablet) || ($webOS) || ($BlackBerry) || ($RimTablet)): ?>
                            <div class="footer_text">
                                <img alt="For best viewing experience, hold your tab in landscape position" src="<?php echo base_path() . path_to_theme(); ?>/images/tab.png" />
                            </div>
                        <?php endif; ?>
                        <?php if (isset($messages)): ?>
                            <?php if (!empty($messages)): ?>
                                <?php
                                $errors = "";
                                foreach ($errorlist as $value) {
                                    if (strstr($messages, $value[0])) {
                                        $errors .= "<li>$value[1]</li>";
                                    }
                                }
                                ?>
                                <?php if (!empty($errors)): ?>
                                    <?php $flag = "yes"; ?>
                                    <div class="overlay" id="overlay" style="display:none;"></div>
                                    <div class="box" id="msg-box">
                                        <a class="boxclose" id="msgboxclose"></a>
                                        <h1 class="msg-title">
                                            Attention: some fields are missing or invalid
                                        </h1>
                                        <div class="vSpace10"></div>
                                        <p class="msg-body">
                                            <br />
                                            <b>Please correct the following issues and try to submit the form again! Thank you</b><br /><br />
                                        <ul>
                                            <?php echo $errors; ?>
                                        </ul>
                                        </p>
                                        <div class="vSpace10"></div>
                                        <p class="msg-action">
                                            <a href="#close" class="inline-block close-button">Close</a>
                                        </p>
                                    </div> 
                                <?php endif; ?>
                            <?php endif; ?>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var flag = "<?php print $flag ?>";
</script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/js/script.js"></script>