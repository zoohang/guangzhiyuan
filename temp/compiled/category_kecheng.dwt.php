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
          <div class="date_title">
            <span class="date_th">日期</span><span class="title_th">标题&主题</span><span class="title_th" style="margin-left:70%;">浏览</span>
          </div>
          <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
          <?php if ($this->_var['goods']): ?>
          <div class="service_obj_row">
            <div class="date_time">
              <p class="date_time_day"><?php echo $this->_var['goods']['add_time_day']; ?></p>
              <p class="date_time_date"><?php echo $this->_var['goods']['add_time']; ?></p>
            </div>
            <div class="service_info" style="width:660px">
              <p class="service_info_title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo sub_str($this->_var['goods']['name'],50); ?></a></p>
              <p class="service_info_desc">
                <?php echo sub_str($this->_var['goods']['goods_brief'],220); ?>
              </p>
            </div>
            <div class="service_read_num">
              <?php echo $this->_var['goods']['click_count']; ?>
            </div>
          </div>
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php echo $this->fetch('library/pages.lbi'); ?>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  
  </script>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
