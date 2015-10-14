<?php echo $this->fetch('library/page_header.lbi'); ?>
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>

  <div class="w100">
    <div class="w1000">
      <div class="w1000 url_here">
      <?php echo $this->fetch('library/ur_here.lbi'); ?>
      </div>
      <div class="w1000 text">

        <div class="w210 goods_cat">
          <?php if ($this->_var['article_categories']): ?>
          <div class="cat_block">
            <p class="cat_title"><img src="themes/my/images/icon.png" alt="">文章分类</p>
            <ul class="cat_child">
              <?php $_from = $this->_var['article_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
          </div>
          <?php endif; ?>
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
          <div class="cat_block">
            <p class="cat_title"><img src="themes/my/images/icon.png" alt="">文章推荐</p>
            <ul class="cat_child">
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="">习近平九论互联网</a></li>
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="">全球PC出货量持续下降</a></li>
              <li><img src="themes/my/images/goods_28.png" alt="" /><a href="">多种有疗效廉价药消失</a></li>
            </ul>
          </div>
        </div>
        
        <div class="w760 goods_list">
          <p class="article_desc_title"><?php echo htmlspecialchars($this->_var['article']['title']); ?><span class="aricle_time"><?php echo $this->_var['article']['add_time']; ?></span></p>
          <div class="article_desc_info">
          <?php if ($this->_var['article']['content']): ?>
            <?php echo $this->_var['article']['content']; ?>
          <?php endif; ?>
          <?php if ($this->_var['article']['open_type'] == 2 || $this->_var['article']['open_type'] == 1): ?><br />
          <div><a href="<?php echo $this->_var['article']['file_url']; ?>" target="_blank"><?php echo $this->_var['lang']['relative_file']; ?></a></div>
          <?php endif; ?>
          </div>
          <?php if ($this->_var['next_article']): ?>
            <p class="article_prev_next">上一篇：<a href="<?php echo $this->_var['next_article']['url']; ?>"><?php echo $this->_var['next_article']['title']; ?></a></p>
          <?php else: ?>
            <p class="article_prev_next">上一篇：没有了</p>
          <?php endif; ?>
          <?php if ($this->_var['prev_article']): ?>
            <p class="article_prev_next">下一篇：<a href="<?php echo $this->_var['prev_article']['url']; ?>"><?php echo $this->_var['prev_article']['title']; ?></a></p>
          <?php else: ?>
            <p class="article_prev_next">下一篇：没有了</p>
          <?php endif; ?>
        </div>
        
      </div>
    </div>
  </div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
