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
          <div class="goods_one">
            <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="221px" height="168px" alt=""></a>
            <div class="add_cart_div"><a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)">添加到购物车</a></div>
            <p class="cat_goods_title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['goods_name']; ?></a></p>
            <div class="cat_goods_desc">
              <?php echo sub_str($this->_var['goods']['goods_brief'],35); ?>
            </div>
          </div>
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
