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
        </div>
        
        <div class="w760 goods_list">
          <div class="date_title">
            <span class="date_th">日期</span><span class="title_th">标题&主题</span>
          </div>
          <?php $_from = $this->_var['artciles_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
          <div class="service_obj_row">
            <div class="date_time">
              <p class="date_time_day"><?php echo $this->_var['article']['add_time']['day']; ?></p>
              <p class="date_time_date"><?php echo $this->_var['article']['add_time']['month']; ?></p>
            </div>
            <div class="service_info">
              <p class="service_info_title">
                <a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo $this->_var['article']['title']; ?></a>
              </p>
              <p class="service_info_desc">
                <?php echo sub_str($this->_var['article']['description'],60); ?>
              </p>
            </div>
          </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php echo $this->fetch('library/pages.lbi'); ?>
        </div>
        
      </div>
    </div>
  </div>
  <script type="text/javascript">


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
