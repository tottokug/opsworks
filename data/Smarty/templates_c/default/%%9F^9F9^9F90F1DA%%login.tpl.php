<?php /* Smarty version 2.6.26, created on 2013-05-26 22:16:36
         compiled from /srv/www/eccube/releases/20130526131321/html/../data/Smarty/templates/default/frontparts/bloc/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/srv/www/eccube/releases/20130526131321/html/../data/Smarty/templates/default/frontparts/bloc/login.tpl', 25, false),array('modifier', 'h', '/srv/www/eccube/releases/20130526131321/html/../data/Smarty/templates/default/frontparts/bloc/login.tpl', 29, false),array('modifier', 'number_format', '/srv/www/eccube/releases/20130526131321/html/../data/Smarty/templates/default/frontparts/bloc/login.tpl', 35, false),array('modifier', 'default', '/srv/www/eccube/releases/20130526131321/html/../data/Smarty/templates/default/frontparts/bloc/login.tpl', 35, false),array('modifier', 'sfGetChecked', '/srv/www/eccube/releases/20130526131321/html/../data/Smarty/templates/default/frontparts/bloc/login.tpl', 50, false),array('modifier', 'sfTrimURL', '/srv/www/eccube/releases/20130526131321/html/../data/Smarty/templates/default/frontparts/bloc/login.tpl', 58, false),)), $this); ?>

<div class="block_outer">
    <div id="login_area">
        <h2><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/title/tit_bloc_login.gif" alt="ログイン" /></h2>
        <form name="login_form" id="login_form" method="post" action="<?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
frontparts/login_check.php" onsubmit="return fnCheckLogin('login_form')">
            <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
            <input type="hidden" name="mode" value="login" />
            <input type="hidden" name="url" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['REQUEST_URI'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
            <div class="block_body">
                <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <p>ようこそ<br />
                        <span class="user_name"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 様</span><br />
                        <?php if (((is_array($_tmp=@USE_POINT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) !== false): ?>
                            所持ポイント：<span class="point"> <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_user_point'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 pt</span>
                        <?php endif; ?>
                    </p>
                    <?php if (! ((is_array($_tmp=$this->_tpl_vars['tpl_disable_logout'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <p class="btn">
                            <input type="image" onmouseover="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_logout_on.jpg',this)" onmouseout="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_logout.jpg',this)" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_logout.jpg" onclick="fnFormModeSubmit('login_form', 'logout', '', ''); return false;" alt="ログアウト" />
                        </p>
                    <?php endif; ?>
                <?php else: ?>
                    <dl class="formlist">
                        <dt>メールアドレス</dt>
                        <dd>
                            <input type="text" name="login_email" class="box140" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_login_email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" style="ime-mode: disabled;" />
                        </dd>
                        <dd class="mini">
                            <input type="checkbox" name="login_memory" id="login_memory" value="1" <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_login_memory'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetChecked', true, $_tmp, 1) : SC_Utils_Ex::sfGetChecked($_tmp, 1)); ?>
 />
                            <label for="login_memory"><span>コンピューターに記憶する</span></label>
                        </dd>
                    </dl>
                    <dl class="formlist">
                        <dt class="password">パスワード</dt>
                        <dd><input type="password" name="login_pass" class="box140" /></dd>
                        <dd class="mini">
                        <a href="<?php echo ((is_array($_tmp=((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfTrimURL', true, $_tmp) : SC_Utils_Ex::sfTrimURL($_tmp)); ?>
/forgot/<?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" onclick="win01('<?php echo ((is_array($_tmp=((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfTrimURL', true, $_tmp) : SC_Utils_Ex::sfTrimURL($_tmp)); ?>
/forgot/<?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
','forget','600','400'); return false;" target="_blank">パスワードを忘れた方はこちら</a>
                        </dd>
                    </dl>
                    <p class="btn">
                        <input type="image" onmouseover="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_login_on.jpg',this)" onmouseout="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_login.jpg',this)" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_login.jpg" alt="ログイン" />
                    </p>
                <?php endif; ?>
            </div>
        </form>
    </div>
</div>