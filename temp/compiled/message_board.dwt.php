<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php if ($this->_var['auto_redirect']): ?>
<meta http-equiv="refresh" content="3;URL=<?php echo $this->_var['message']['href']; ?>" />
<?php endif; ?>

<title><?php echo $this->_var['page_title']; ?></title>


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>

<div class="w100">
  <div class="w1000">
    <div class="w1000 url_here">
    <?php echo $this->fetch('library/ur_here.lbi'); ?>
    </div>


    <div class="w1000 contact_text">

      

        <div class="contact_left">
          <p class="contact_title">联系方式</p>
          <p class="contact_content">公司地址：重庆市九龙坡区石桥铺石油路A-113</p>
          <p class="contact_content">电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：400-8008800</p>
          <p class="contact_content">Q&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Q：123456789</p>
          <p class="contact_content">微&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;信：abcde(公众号) 或者扫描下面的二维码</p>
          <img class="contact_erweima" src="themes/my/images/erweima.png" alt="">
          <p class="contact_content mt20">重庆分公司</p>
          <p class="contact_content">公司地址：重庆市九龙坡区石桥铺石油路A-113</p>
          <p class="contact_content">电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：400-8008800</p>
          <p class="contact_content mt20">重庆分公司</p>
          <p class="contact_content">公司地址：重庆市九龙坡区石桥铺石油路A-113</p>
          <p class="contact_content">电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：400-8008800</p>
        </div>


      <div class="contact_right">
        <p class="contact_title">留言板</p>
        <form action="message.php" method="post" name="formMsg" onSubmit="return submitMsgBoard(this)">
          <div class="form_control">
              <p class="liuyan_title">姓名：</p>
             <?php if ($_SESSION['user_name']): ?>
                <font class="f4_b"><?php echo $this->_var['username']; ?></font>
                
                <?php else: ?>
                <?php echo $this->_var['lang']['anonymous']; ?>
                <?php endif; ?>
            </div>
            <div class="form_control">
              <p class="liuyan_title">电话：</p>
              <input type="text" name="tel">
            </div>
            <div class="form_control">
              <p class="liuyan_title">邮箱：</p>
              <td><input name="user_email" type="text" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" /></td>
            </div>
            
              <input name="msg_type" type="hidden" value="0" checked="checked" />
            
            <div class="form_control">
              <p class="liuyan_title">主题：</p>
              <input name="msg_title" type="text" />
            </div>
            <div class="form_control">
              <p class="liuyan_title">内容：</p>
              <textarea name="msg_content"></textarea>
            </div>
            <div class="form_control">
              
              <input type="hidden" name="act" value="act_add_message" />
              <input type="submit" class="liuyan_submit" value="提交">
            </div>
        </form>
      </div>
    </div>

  </div>

</div>

<script type="text/javascript">
  <?php $_from = $this->_var['lang']['message_board_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
        /**
         * 提交留言信息
         */
         function submitMsgBoard(frm)
         {
          var msg = new Object;

          msg.user_email  = frm.elements['user_email'].value;
          msg.msg_title   = frm.elements['msg_title'].value;
          msg.msg_content = frm.elements['msg_content'].value;
          msg.captcha     = frm.elements['captcha'] ? frm.elements['captcha'].value : '';

          var msg_err = '';

          if (msg.user_email.length > 0)
          {
           if (!(Utils.isEmail(msg.user_email)))
           {
            msg_err += msg_error_email + '\n';
          }
        }
        else
        {
          msg_err += msg_empty_email + '\n';
        }
        if (msg.msg_title.length == 0)
        {
          msg_err += msg_title_empty + '\n';
        }
        if (frm.elements['captcha'] && msg.captcha.length==0)
        {
          msg_err += msg_captcha_empty + '\n'
        }
        if (msg.msg_content.length == 0)
        {
          msg_err += msg_content_empty + '\n'
        }
        if (msg.msg_title.length > 200)
        {
          msg_err += msg_title_limit + '\n';
        }

        if (msg_err.length > 0)
        {
          alert(msg_err);
          return false;
        }
        else
        {
          return true;
        }
      }
      
    </script>
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
