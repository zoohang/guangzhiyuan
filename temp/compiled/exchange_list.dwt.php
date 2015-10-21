<?php echo $this->fetch('library/page_header.lbi'); ?>
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.11.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
  <div id="DialogBGDiv" style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; z-index: 666;display:none;">
      <div style="position:relative;width:100%;height:100%;">
        <div id="_DialogBGMask" style="position: absolute; opacity: 0.4; width: 100%; height: 100%; background-color: rgb(51, 51, 51);">   
        </div>
      </div>
    </div>
    
  <div class="w100">
    <div class="w1000">
      <div class="w1000 url_here">
      <?php echo $this->fetch('library/ur_here.lbi'); ?>
      </div>
      <div class="w1000 text">

        <div class="w210 goods_cat">
          <div class="cat_block">
            <p class="cat_title"><img src="themes/my/images/icon.png" alt="">产品分类</p>
            <ul class="cat_child">
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&type=&page=<?php echo $this->_var['pager']['page']; ?>">所有产品</a></li>
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&type=hot&page=<?php echo $this->_var['pager']['page']; ?>">热销产品</a></li>
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&type=new&page=<?php echo $this->_var['pager']['page']; ?>">新品推荐</a></li>
            </ul>
          </div>
          <div class="cat_block">
            <p class="cat_title"><img src="themes/my/images/icon.png" alt="">积分商城</p>
            <ul class="cat_child">
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="">积分产品</a></li>
            </ul>
          </div>
          <div class="cat_block">
            <p class="cat_title"><img src="themes/my/images/icon.png" alt="">热门标签</p>
            <div class="hot_tag">
              <?php if ($this->_var['tags']): ?>
              <?php $_from = $this->_var['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?>
              <a href="search.php?keywords=<?php echo $this->_var['tag']['tag_words']; ?>"><div class="tag_row"><?php echo htmlspecialchars($this->_var['tag']['tag_words']); ?></div></a>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>

        <div class="w760 goods_list">
          <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
          <?php if ($this->_var['goods']): ?>
          <div class="goods_jifen_one">
            <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="179px" height="136px" alt=""></a>
            <div class="cat_goods_jifen">
              <p class="jifen_title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></p>
              <p class="jifen_desc"><?php echo sub_str($this->_var['goods']['goods_brief'],150); ?></p>
              <p class="jifen_desc">需要：<span class="jifen_price"><?php echo $this->_var['goods']['exchange_integral']; ?></span>积分</p>
              <p class="jifen_duihuan">
                <a href="javascript:void(0);" class="exchange_btn_duihuan" isLogin="<?php echo $_SESSION['user_name']; ?>">立即兑换&gt;&gt;</a>
              </p>
            </div>
          </div>
          
          <div class="exchange_div">
            <img src="themes/my/images/exchange_close.png" onclick="closeDiv()" alt="">
            <div class="exchange_form">
              <p class="goods_price_desc">积分兑换：<?php echo $this->_var['goods']['name']; ?></p>
              <p class="goods_price_desc">所需积分：<?php echo $this->_var['goods']['exchange_integral']; ?>/份</p>
              <form action="message.php" method="post" name="formMsg" onSubmit="return submitMsgBoard(this)">
                <input type="text" name="user_name" value="<?php echo $_SESSION['user_name']; ?>" placeholder="姓名">
                <input type="text" name="tel" placeholder="电话">
                <input type="text" name="num" style="margin-right:0;" placeholder="兑换数量">
                <input type="text" name="user_email" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" placeholder="邮箱">
                <input type="text" style="width:466px;margin-right:0" name="address" placeholder="地址">
                <textarea name="msg_content" id="">备注</textarea>
                <input name="msg_title" type="hidden" value="兑换 <?php echo $this->_var['goods']['goods_name']; ?>" />
                <input type="hidden" name="msg_type" value="4">
                <input type="hidden" name="act" value="act_add_message">
                <input type="submit" class="exchange_btn">
              </form>
            </div>
          </div>
          
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php echo $this->fetch('library/pages.lbi'); ?>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $('.exchange_btn_duihuan').click(function () {
      var isLogin = $(this).attr('isLogin');
      if(isLogin == '' || isLogin < 1){
        alert('请先登录!');
        window.location.href = 'user.php?act=login';
        return false;
      }
      $(this).parents('.goods_jifen_one').next('.exchange_div').show();
      //$('.exchange_div').show();
      var htmlH = window.document.body.offsetHeight;
      $('#DialogBGDiv').css('height',htmlH).show();
    });
    function closeDiv() {
      $('.exchange_div').hide();
      $('#DialogBGDiv').hide();
    }

    $('.goods_list div:first-child').css('padding-top','0');
    
    $('.goods_jifen_one').hover(function () {
      $(this).css('background-color','#f7f7f7');
      $(this).find('.jifen_duihuan a').css('color','#f87d01');
    }, function () {
      $(this).css('background-color','#fff');
      $(this).find('.jifen_duihuan a').css('color','#333');
    });
  
  </script>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
