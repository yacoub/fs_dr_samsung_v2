<?php
$flag = "no";
$errorlist = array();
$errorlist[] = array("NAME field is required", "Please fill in your name.");
$errorlist[] = array("MOBILE# field is required", "Please fill in your mobile number so we can contact you.");
$errorlist[] = array("ADDRESS field is required", "Please fill in your address.");
$errorlist[] = array("The entered date must be 23 Dec 2012 or later.", "You entered an invalid date, Please correct the date field by selecting a date in the future.");
$errorlist[] = array('VISIT TIME</em> field is required', "Please choose an hour.");
$errorlist[] = array('VISIT DATE field is required', "Please choose an hour.");
?>
<div id="header"><div class="section clearfix">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php echo base_path() . path_to_theme(); ?>/logo.png" alt="<?php print t('Home'); ?>" width="155" height="55"/>
        </a>
    </div></div>
<div id="page-wrapper"><div id="page" class="contact-page">
        <div id="main-wrapper"><div id="main" class="clearfix">
                <div id="content" class="column"><div class="section">
                        <a id="main-content"></a>
                        <?php if (isset($node)): ?>
                            <div class="content-card-wrapper">
                                <div class="content-card">
                                    <?php
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
                        
                        
                        <?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))):?>
<div class="footer_text">For best viewing experience, hold your tab in landscape position</div>     
<?php endif; ?>
                        
                        
                        
                        
                        
                        
                        <?php else: ?>
                            <div class="system-page">
                                <?php print render($page['content']); ?>
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
                                if (!empty($errors)):
                                    ?>

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
                        <script type="text/javascript">
                            flag = "<?php print $flag ?>";
                        </script>





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

