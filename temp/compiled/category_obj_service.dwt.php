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
            <p class="cat_title"><img src="themes/my/images/icon.png" alt="">服务项目</p>
            <ul class="cat_child">
              <?php $_from = $this->_var['categories_service']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_47964900_1445407907');if (count($_from)):
    foreach ($_from AS $this->_var['cat_0_47964900_1445407907']):
?>
              <?php if ($this->_var['cat_0_47964900_1445407907']['id'] == 18): ?>
              <?php $_from = $this->_var['cat_0_47964900_1445407907']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
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
          <?php if ($this->_var['parent_id'] == 0): ?>
            <?php $_from = $this->_var['child_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_48006500_1445407907');if (count($_from)):
    foreach ($_from AS $this->_var['cat_0_48006500_1445407907']):
?>
            <?php if ($this->_var['cat_0_48006500_1445407907']['cat_id']): ?>
            <?php $_from = $this->_var['cat_0_48006500_1445407907']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
            <div class="goods_service_one">
              <a href="<?php echo $this->_var['child']['url']; ?>"><img class="goods_service_img" src="<?php echo $this->_var['child']['cat_img']; ?>" width="480px" height="242px" alt=""></a>
              <div class="goods_service_info">
                <div class="goods_service_title"><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></div>
                <p class="goods_service_detail"><?php echo sub_str($this->_var['child']['cat_desc'],80); ?></p>
              </div>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php else: ?>
            <?php $_from = $this->_var['child_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
            <div class="goods_service_one">
              <a href="<?php echo $this->_var['child']['url']; ?>"><img class="goods_service_img" src="<?php echo $this->_var['child']['cat_img']; ?>" width="480px" height="242px" alt=""></a>
              <div class="goods_service_info">
                <div class="goods_service_title"><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></div>
                <p class="goods_service_detail"><?php echo sub_str($this->_var['child']['cat_desc'],80); ?></p>
              </div>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php endif; ?>
        </div>
      </div>

      </div>
    </div>
  </div>
  <script type="text/javascript">


    $('.goods_one').hover(function () {
      $(this).children('.add_cart_div').show();
      $(this).children('.cat_goods_desc').css('border-bottom','5px solid #f87d01');
    },function () {
      $(this).children('.add_cart_div').hide();
      $(this).children('.cat_goods_desc').css('border-bottom','5px solid #000');
    });
  
  </script>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
