<?php /* Smarty version Smarty-3.0.4, created on 2015-02-04 17:00:13
         compiled from "D:/Work/AppServ/www/erafree/manager/templates/default/help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1063754d2501d943f88-72273920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f9b0481b6002e1003c61e21eb94f5fa2d326d4a' => 
    array (
      0 => 'D:/Work/AppServ/www/erafree/manager/templates/default/help.tpl',
      1 => 1413920170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1063754d2501d943f88-72273920',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="container" id="help-content-here-people"></div>
<div id="modx-page-help-content">

    <h2><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['help_page_title']) ? $_smarty_tpl->getVariable('_lang')->value['help_page_title'] : null);?>
</h2>

    <div id="helpBanner">
        <h3><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['help_main_head']) ? $_smarty_tpl->getVariable('_lang')->value['help_main_head'] : null);?>
</h3>

        <p><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['help_main_subhead']) ? $_smarty_tpl->getVariable('_lang')->value['help_main_subhead'] : null);?>
</p>
    </div>

    <div id="managerbuttons">
        <ul>

            <li>
                <a href="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['forums_link']) ? $_smarty_tpl->getVariable('_lang')->value['forums_link'] : null);?>
" target="_blank" title="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['forums_title']) ? $_smarty_tpl->getVariable('_lang')->value['forums_title'] : null);?>
">
                    <span class="icon"><i class="icon icon-comments icon-3x"></i></span>
                    <span class="headline"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['forums']) ? $_smarty_tpl->getVariable('_lang')->value['forums'] : null);?>
</span>
                    <span class="subline"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['forums_description']) ? $_smarty_tpl->getVariable('_lang')->value['forums_description'] : null);?>
</span>
                </a>
            </li>

            <li>
                <a href="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['docs_link']) ? $_smarty_tpl->getVariable('_lang')->value['docs_link'] : null);?>
" target="_blank" title="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['docs_title']) ? $_smarty_tpl->getVariable('_lang')->value['docs_title'] : null);?>
">
                    <span class="icon"><i class="icon icon-book icon-3x"></i></span>
                    <span class="headline"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['docs']) ? $_smarty_tpl->getVariable('_lang')->value['docs'] : null);?>
</span>
                    <span class="subline"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['docs_description']) ? $_smarty_tpl->getVariable('_lang')->value['docs_description'] : null);?>
</span>
                </a>
            </li>

            <li>
                <a href="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['bugs_link']) ? $_smarty_tpl->getVariable('_lang')->value['bugs_link'] : null);?>
" target="_blank" title="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['bugs_title']) ? $_smarty_tpl->getVariable('_lang')->value['bugs_title'] : null);?>
">
                    <span class="icon"><i class="icon icon-exclamation-circle icon-3x"></i></span>
                    <span class="headline"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['bugs']) ? $_smarty_tpl->getVariable('_lang')->value['bugs'] : null);?>
</span>
                    <span class="subline"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['bugs_description']) ? $_smarty_tpl->getVariable('_lang')->value['bugs_description'] : null);?>
</span>
                </a>
            </li>

            <li>
                <a href="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['support_link']) ? $_smarty_tpl->getVariable('_lang')->value['support_link'] : null);?>
" target="_blank" class="supportTicket" title="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['support_title']) ? $_smarty_tpl->getVariable('_lang')->value['support_title'] : null);?>
">
                    <span class="icon"><i class="icon icon-credit-card icon-3x"></i></span>
                    <span class="headline"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['support']) ? $_smarty_tpl->getVariable('_lang')->value['support'] : null);?>
</span>
                    <span class="subline"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['support_description']) ? $_smarty_tpl->getVariable('_lang')->value['support_description'] : null);?>
</span>
                </a>
            </li>

        </ul>
    </div>

    <div id="contactus">
        <h3><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['email_sub']) ? $_smarty_tpl->getVariable('_lang')->value['email_sub'] : null);?>
 </h3>
        <p><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['email_sub_description']) ? $_smarty_tpl->getVariable('_lang')->value['email_sub_description'] : null);?>
</p>
        <form id="mcsignup" action="http://modxcms.list-manage.com/subscribe/post" method="post">
            <input type="hidden" name="u" value="08b25a8de68a29fe03a483720"/>
            <input type="hidden" name="id" value="848cf40420"/>

            <input type="hidden" name="MERGE7" value="[[++site_url]] Manager" id="MERGE7">

            <input type="email" placeholder="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['email_placeholder']) ? $_smarty_tpl->getVariable('_lang')->value['email_placeholder'] : null);?>
" required id="MERGE0" name="MERGE0" value=""
                   class="textbox"/>
            <input type="submit" class="x-btn primary-button" name="Submit" value="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['email_sub_button']) ? $_smarty_tpl->getVariable('_lang')->value['email_sub_button'] : null);?>
"/>
        </form>

        <p><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['social_follows']) ? $_smarty_tpl->getVariable('_lang')->value['social_follows'] : null);?>
</p>

        <p><a href="https://twitter.com/modx" target="_blank"><i class="icon icon-2x icon-twitter"></i>Twitter: twitter.com/modx</a></p>

        <p><a href="https://www.facebook.com/modxcms" target="_blank"><i class="icon icon-2x icon-facebook"></i>Facebook: www.facebook.com/modxcms </a></p>

        <p><a href="https://www.linkedin.com/groups/MODX-697477" target="_blank"><i class="icon icon-2x icon-linkedin"></i>LinkedIn: google.com/+modx </a></p>

        <p><a href="http://www.pinterest.com/modx/" target="_blank"><i class="icon icon-2x icon-pinterest"></i>Pinterest: pinterest.com/modx </a></p>

        <p><a href="https://plus.google.com/+modx/" target="_blank"><i class="icon icon-2x icon-google-plus"></i>Google+: google.com/+modx </a></p>



    </div>

    <div id="aboutMODX">
        <p><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['help_about']) ? $_smarty_tpl->getVariable('_lang')->value['help_about'] : null);?>
</p>

        <p><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['help_credit']) ? $_smarty_tpl->getVariable('_lang')->value['help_credit'] : null);?>
</p>
    </div>
</div>
