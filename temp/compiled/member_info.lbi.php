<div id="append_parent"></div>
<?php if ($this->_var['user_info']): ?>
  <div class="login_welcome"><?php echo $this->_var['lang']['hello']; ?>，<font class="f4_b"><?php echo $this->_var['user_info']['username']; ?></font>, <?php echo $this->_var['lang']['welcome_return']; ?>！</div>
  <div class="login_login">
    <a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a>
    <span>|</span>
    <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>
  </div>
<?php else: ?>
  <div class="login_welcome">欢迎来到光之缘!</div>
  <div class="login_login">
    <a href="user.php">登陆</a>
    <span>|</span>
    <a href="user.php?act=register">注册</a>
  </div>
<?php endif; ?>