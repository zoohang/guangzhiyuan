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
            <p class="cat_title"><img src="themes/my/images/icon.png" alt="">服务项目</p>
            <ul class="cat_child">
              <?php $_from = $this->_var['categories_service']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_76378300_1445423514');if (count($_from)):
    foreach ($_from AS $this->_var['cat_0_76378300_1445423514']):
?>
              <?php if ($this->_var['cat_0_76378300_1445423514']['id'] == 18): ?>
              <?php $_from = $this->_var['cat_0_76378300_1445423514']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
          </div>

          <?php if ($this->_var['helps']): ?>
          <div class="cat_block">
            <p class="cat_title"><img src="themes/my/images/icon.png" alt="">帮助中心</p>
            <ul class="cat_child">
              <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');if (count($_from)):
    foreach ($_from AS $this->_var['help_cat']):
?>
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href='<?php echo $this->_var['help_cat']['cat_id']; ?>' title="<?php echo $this->_var['help_cat']['cat_name']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></a></li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
          </div>
          <?php endif; ?>
          
        </div>

        <div class="w760 goods_list">
          <div class="cate_desc">
            <p class="cate_desc_title">
              <?php echo $this->_var['cat']['cat_name']; ?>
            </p>
            <div class="w760 cate_desc_content">
              <?php echo $this->_var['cat']['cat_description']; ?>
            </div>
          </div>
          <div class="service_goods">
            <div class="service_goods_row">
              <div class="service_goods_title">
                预约服务/Reservation service
              </div>
              <div class="service_goods_area">
                <select name="" id="choose_erea">
                  <option value="<?php echo $this->_var['category']; ?>">地区 | --请选择--</option>
                  <?php $_from = $this->_var['categories_xiala']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
                  <?php if ($this->_var['child']['id'] == $this->_var['category']): ?>
                  <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'chi');if (count($_from)):
    foreach ($_from AS $this->_var['chi']):
?>
                  <option value="<?php echo $this->_var['chi']['id']; ?>" <?php if ($this->_var['category'] == $this->_var['chi']['id']): ?> selected="selected" <?php endif; ?>><?php echo htmlspecialchars($this->_var['chi']['name']); ?></option>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <?php endif; ?>
                  <?php if (! $this->_var['child']['cat_id']): ?>
                  <option value="<?php echo $this->_var['child']['id']; ?>" <?php if ($this->_var['category'] == $this->_var['child']['id']): ?> selected="selected" <?php endif; ?>><?php echo htmlspecialchars($this->_var['child']['name']); ?></option>
                  <?php endif; ?>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </select>
              </div>
            </div>

            <div class="service_goods_list">
              <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
              <?php if ($this->_var['goods']): ?>
              <div class="service_goods_list_one">
                <p class="service_title">
                  <span class="service_title_name"><?php echo $this->_var['goods']['name']; ?></span>
                  <span class="service_title_info"><?php echo $this->_var['goods']['designation']; ?></span>
                  <span class="service_title_info"><?php echo $this->_var['goods']['level']; ?></span>
                </p>
                <div class="service_goods_content">
                  <img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="160px" height="158px" alt="">
                  <div class="service_goods_miaoshu">
                    <p class="service_goods_miaoshu_desc"><?php echo sub_str($this->_var['goods']['goods_brief'],50); ?></p>
                    <p class="service_price">价格：<span class="jifen_price"><?php echo $this->_var['goods']['shop_price']; ?></span></p>
                    <a href="javascript:void(0);"><div class="service_order_btn" goodsid="<?php echo $this->_var['goods']['goods_id']; ?>" isLogin="<?php echo $_SESSION['user_name']; ?>">预约</div></a>
                  </div>
                </div>
              </div>
              
              <div class="exchange_div" style="top:auto;">
                <img src="themes/my/images/exchange_close.png" onclick="closeDiv()" alt="">
                <div class="exchange_form">
                  <p class="goods_price_desc">预约：<?php echo $this->_var['goods']['name']; ?> 
                    <span class="service_title_info"><?php echo $this->_var['goods']['designation']; ?></span>
                    <span class="service_title_info"><?php echo $this->_var['goods']['level']; ?></span>
                  </p>
                  <p class="goods_price_desc">价格：<?php echo $this->_var['goods']['shop_price']; ?></p>
                  <form action="message.php" method="post" name="formMsg" onSubmit="return submitMsgBoard(this)">
                    <input type="text" name="user_name" value="<?php echo $_SESSION['user_name']; ?>" placeholder="姓名">
                    <input type="text" name="tel"  placeholder="电话">
                    <input type="text" name="num" style="margin-right:0;" placeholder="预约时间 例如 2015/05/05">
                    <input type="text" name="user_email" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" placeholder="邮箱">
                    <input type="text" style="width:466px;margin-right:0" name="address" placeholder="地址">
                    <textarea name="msg_content" id="">备注</textarea>
                    <input name="msg_title" type="hidden" value="兑换 <?php echo $this->_var['goods']['goods_name']; ?>" />
                    <input type="hidden" name="msg_type" value="4">
                    <input type="hidden" name="act" value="act_add_message">
                    <input type="submit" class="exchange_btn" onclick="location.href='flow.php?step=consignee&direct_shopping=1'">
                  </form>
                </div>
              </div>
              
              <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
          </div>
          
          
          <?php echo $this->fetch('library/pages.lbi'); ?>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $('.service_order_btn').click(function () {
      var isLogin = $(this).attr('isLogin');
      var id = $(this).attr('goodsid');
      if(isLogin == '' || isLogin < 1){
        var r=confirm("您没有登录,是否先登录在进行购买?");
        if(r == true){
          window.location.href = 'user.php?act=login';
          return false;
        }else{
          $(this).parents('.service_goods_list_one').next('.exchange_div').show();
          var htmlH = window.document.body.offsetHeight;
          $('#DialogBGDiv').css('height',htmlH).show();
          return false;
        }
      }
      addToCart2(id);
      $(this).parents('.service_goods_list_one').next('.exchange_div').show();
      var htmlH = window.document.body.offsetHeight;
      $('#DialogBGDiv').css('height',htmlH).show();
      return false;

      
    });
    function closeDiv() {
      $('.exchange_div').hide();
      $('#DialogBGDiv').hide();
    }

  $('#choose_erea').change(function () {
    var id = $(this).val();
    window.location.href = 'category.php?id='+id;
  });

    $('.goods_one').hover(function () {
      $(this).children('.add_cart_div').show();
      $(this).children('.cat_goods_desc').css('border-bottom','5px solid #f87d01');
    },function () {
      $(this).children('.add_cart_div').hide();
      $(this).children('.cat_goods_desc').css('border-bottom','5px solid #000');
    });
  
  </script>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
