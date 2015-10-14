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

        <div class="w1000 goods_list">
          <?php if ($this->_var['article']['article_id'] != 4): ?>
          <p class="article_desc_title" style="text-align:center;"><?php echo htmlspecialchars($this->_var['article']['title']); ?></p>
          <?php endif; ?>
          <div class="article_desc_info">
          <?php if ($this->_var['article']['content']): ?>
            <?php echo $this->_var['article']['content']; ?>
          <?php endif; ?>
          <?php if ($this->_var['article']['article_id'] != 4): ?>
          <?php if ($this->_var['article']['open_type'] == 2 || $this->_var['article']['open_type'] == 1): ?><br />
          <div><a href="<?php echo $this->_var['article']['file_url']; ?>" target="_blank"><?php echo $this->_var['lang']['relative_file']; ?></a></div>
          <?php endif; ?>
          </div>
          <?php if ($this->_var['next_article']): ?>
            <p class="article_prev_next article_prev">上一篇：<a href="<?php echo $this->_var['next_article']['url']; ?>"><?php echo $this->_var['next_article']['title']; ?></a></p>
          <?php else: ?>
            <p class="article_prev_next article_prev">上一篇：没有了</p>
          <?php endif; ?>
          <?php if ($this->_var['prev_article']): ?>
            <p class="article_prev_next article_next">下一篇：<a href="<?php echo $this->_var['prev_article']['url']; ?>"><?php echo $this->_var['prev_article']['title']; ?></a></p>
          <?php else: ?>
            <p class="article_prev_next article_next">下一篇：没有了</p>
          <?php endif; ?>
          <?php endif; ?>
        </div>
        
      </div>
    </div>
  </div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
