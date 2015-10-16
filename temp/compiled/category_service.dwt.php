<?php echo $this->fetch('library/page_header.lbi'); ?>
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.11.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>

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
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="">健康养生</a></li>
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="">心理咨询</a></li>
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="">能量疗育</a></li>
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="">其他项目</a></li>
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="">个案分享</a></li>
            </ul>
          </div>

          <div class="cat_block">
            <p class="cat_title"><img src="themes/my/images/icon.png" alt="">帮助中心</p>
            <ul class="cat_child">
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="">会员权益</a></li>
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="">积分兑换</a></li>
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="">常见问题</a></li>
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="">支付方式</a></li>
            </ul>
          </div>
          
        </div>

        <div class="w760 goods_list">
          <div class="cate_desc">
            <p class="cate_desc_title">
              原生命平衡疗法
            </p>
            <div class="w760 cate_desc_content">
              如果从交易额来算，10月14日中国铁塔宣布收购三大运营商2314亿资产，完全与前几日戴尔670亿美金收购EMC想提并论。因为涉及国有资产，不少人会觉得这是左手倒右手，甚至认为铁塔公司会因为垄断而产生诸多新的问题，甚至诱生腐败。但从通信行业的角度来说，铁塔公司虽然并不能解决所有电信行业深化改革的难题，但至少从铁塔公司成立的那一天起，它一直是朝着正确的方向在前进。
            </div>
          </div>
          <div class="service_goods">
            <div class="service_goods_row">
              <div class="service_goods_title">
                预约服务/Reservation service
              </div>
              <div class="service_goods_area">
                <select name="" id="choose_erea">
                  <option value="category.php?id=21">地区 | --请选择--</option>
                  <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                  <?php if ($this->_var['cat']['id'] == 21): ?>
                  <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
                  <option value="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></option>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
                  <span class="service_title_name">李雪主</span>
                  <span class="service_title_info">灵气能量疗法导师</span>
                  <span class="service_title_info">3星级</span>
                </p>
                <div class="service_goods_content">
                  <img src="themes/my/images/service_people.png" alt="">
                  <div class="service_goods_miaoshu">
                    <p class="service_goods_miaoshu_desc">信行业的角度来说，铁塔公司虽然并不能解决所有电信行业深化改革的难题，但至少从铁塔公司成立的那一天起，它一直是</p>
                    <p class="service_price">价格：<span class="jifen_price">5000</span>元</p>
                    <a href=""><div class="service_order_btn">预约</div></a>
                  </div>
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
  $('#choose_erea').change(function () {
    alert( $(this).val());
    window.location.href = $(this).val();
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
