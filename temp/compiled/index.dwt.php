<?php echo $this->fetch('library/page_header.lbi'); ?>
<link rel="stylesheet" type="text/css" href="themes/my/css/swiper.min.css">
<script type="text/javascript" src="themes/my/js/swiper.min.js"></script>

  
  <div class="w1600 h418">
    
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'lunbo');if (count($_from)):
    foreach ($_from AS $this->_var['lunbo']):
?>
          <div class="swiper-slide" style="text-align:center;"><a href="<?php echo $this->_var['lunbo']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['lunbo']['src']; ?>" alt=""></a></div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
        
        <div class="swiper-pagination"></div>
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
  </div>
    <script type="text/javascript">
      var swiper = new Swiper('.swiper-container', {
          pagination: '.swiper-pagination',
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev',
          paginationClickable: true,
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: 0,
          autoplayDisableOnInteraction: false
        });
  </script>
  
  
  
  <div class="w1000 news_index">
    <div class="news_bar">
      <div class="news_cat_title">
        <div class="news_cat_title_font"><img src="themes/my/images/index_29.png" alt=""><?php echo sub_str($this->_var['dongtai']['0']['cat_name'],20); ?></div>
        <div class="news_more"><a href="<?php echo $this->_var['dongtai']['0']['cat_url']; ?>">更多<span style="font-size: 12px;">&gt;&gt;</span></a></div>
      </div>
      <div class="news_cat_content">
        <div class="news_first">
          <a href="<?php echo $this->_var['dongtai']['0']['url']; ?>"><img src="<?php echo $this->_var['dongtai']['0']['article_img']; ?>" width="316px" height="170px" alt=""></a>
          <p class="news_time"><?php echo $this->_var['dongtai']['0']['add_time']; ?></p>
          <p class="news_title"><a href="<?php echo $this->_var['dongtai']['0']['url']; ?>"><?php echo $this->_var['dongtai']['0']['title']; ?></a></p>
          <p class="news_content"><?php echo $this->_var['dongtai']['0']['description']; ?></p>
        </div>
        <div style="display:none;"><?php echo array_shift($this->_var['dongtai']); ?></div>
        <?php $_from = $this->_var['dongtai']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
        <div class="news_other">
          <p class="news_time"><?php echo $this->_var['article']['add_time']; ?></p>
          <p class="news_title"><img src="themes/my/images/index_70.png" alt=""><a href="<?php echo $this->_var['article']['url']; ?>"><?php echo $this->_var['article']['title']; ?></a></p>
        </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    </div>

    <div class="news_bar">
      <div class="news_cat_title">
        <div class="news_cat_title_font"><img src="themes/my/images/index_29.png" alt="">课程培训</div>
        <div class="news_more"><a href="category.php?id=16">更多<span style="font-size: 12px;">&gt;&gt;</span></a></div>
      </div>
      <div class="news_cat_content">
        
        <?php $_from = $this->_var['kechengpeixun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['kechengpeixun'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['kechengpeixun']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['kechengpeixun']['iteration']++;
?>
        <?php if (($this->_foreach['kechengpeixun']['iteration'] - 1) == 0): ?>
        <div class="news_first">
          <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" width="316px" height="170px" alt=""></a>
          <p class="news_time"><?php echo $this->_var['goods']['add_time']; ?></p>
          <p class="news_title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></p>
          <p class="news_content"><?php echo sub_str($this->_var['goods']['goods_brief'],40); ?></p>
        </div>
        <?php else: ?>
        <div class="news_other">
          <p class="news_time"><?php echo $this->_var['goods']['add_time']; ?></p>
          <p class="news_title"><img src="themes/my/images/index_70.png" alt=""><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></p>
        </div>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    </div>

    <div class="news_bar">
      <div class="news_cat_title">
        <div class="news_cat_title_font"><img src="themes/my/images/index_29.png" alt=""><?php echo sub_str($this->_var['guangan']['0']['cat_name'],20); ?></div>
        <div class="news_more"><a href="<?php echo $this->_var['guangan']['0']['cat_url']; ?>">更多<span style="font-size: 12px;">&gt;&gt;</span></a></div>
      </div>
      <div class="news_cat_content">
        <div class="news_first">
          <a href="<?php echo $this->_var['guangan']['0']['url']; ?>"><img src="<?php echo $this->_var['guangan']['0']['article_img']; ?>" width="316px" height="170px" alt=""></a>
          <p class="news_time"><?php echo $this->_var['guangan']['0']['add_time']; ?></p>
          <p class="news_title"><a href="<?php echo $this->_var['guangan']['0']['url']; ?>"><?php echo $this->_var['guangan']['0']['title']; ?></a></p>
          <p class="news_content"><?php echo $this->_var['guangan']['0']['description']; ?></p>
        </div>
        <div style="display:none;"><?php echo array_shift($this->_var['guangan']); ?></div>
        <?php $_from = $this->_var['guangan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
        <div class="news_other">
          <p class="news_time"><?php echo $this->_var['article']['add_time']; ?></p>
          <p class="news_title"><img src="themes/my/images/index_70.png" alt=""><a href="<?php echo $this->_var['article']['url']; ?>"><?php echo $this->_var['article']['title']; ?></a></p>
        </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    </div>
  </div>
  

  
  <div class="w1000 chanpin_index">
    <div class="chanpin_desc">
      <div class="news_cat_title">
        <div class="news_cat_title_font"><img src="themes/my/images/index_29.png" alt="">能量产品</div>
        <div class="news_more"><a href="category.php?id=17">更多<span style="font-size: 12px;">&gt;&gt;</span></a></div>
      </div>
      <div class="chanpin_three">

        <?php $_from = $this->_var['nengliangchanpin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['nengliangchanpin'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nengliangchanpin']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['nengliangchanpin']['iteration']++;
?>
        <?php if (($this->_foreach['nengliangchanpin']['iteration'] - 1) < 3): ?>
        <div class="chanpin_detail">
          <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb_img']; ?>" width="155px" height="118px" alt=""></a>
          <p class="chanpin_title"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></p>
        </div>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    </div>
    <div class="gean_desc">
      <div class="news_cat_title">
        <div class="news_cat_title_font"><img src="themes/my/images/index_29.png" alt=""><?php echo $this->_var['gean']['0']['cat_name']; ?></div>
        <div class="news_more"><a href="<?php echo $this->_var['gean']['0']['cat_url']; ?>">更多<span style="font-size: 12px;">&gt;&gt;</span></a></div>
      </div>
      <div class="gean_four">
        <?php $_from = $this->_var['gean']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
        <div class="gean_row">
          <div class="gean_info">
            <a href="<?php echo $this->_var['article']['url']; ?>"><img src="<?php echo $this->_var['article']['article_img']; ?>" width="56px" height="50px" alt=""></a>
            <p class="news_title"><a href="<?php echo $this->_var['article']['url']; ?>"><?php echo sub_str($this->_var['article']['title'],12); ?></a></p>
            <p class="news_content"><?php echo sub_str($this->_var['article']['description'],30); ?></p>
          </div>
        </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    </div>
  </div>
  

  
  <div class="w100 tuijian_index">
    <div class="w1000">
      <div class="tuijian_part">
        <a href=""><img src="themes/my/images/index_53.png" alt=""></a>
        <p class="tuijian_title"><a href="">滋养你的灵魂</a></p>
        <div class="gray_bar"></div>
        <p class="tuijian_content">了解真实的自我 "超越心灵"和成为一个更高的灵魂</p>
      </div>
      <div class="tuijian_part">
        <a href=""><img src="themes/my/images/index_56.png" alt=""></a>
        <p class="tuijian_title"><a href="">滋养你的灵魂</a></p>
        <div class="gray_bar"></div>
        <p class="tuijian_content">了解真实的自我 "超越心灵"和成为一个更高的灵魂</p>
      </div>
      <div class="tuijian_part">
        <a href=""><img src="themes/my/images/index_59.png" alt=""></a>
        <p class="tuijian_title"><a href="">滋养你的灵魂</a></p>
        <div class="gray_bar"></div>
        <p class="tuijian_content">了解真实的自我 "超越心灵"和成为一个更高的灵魂</p>
      </div>
      <div class="tuijian_part">
        <a href=""><img src="themes/my/images/index_62.png" alt=""></a>
        <p class="tuijian_title"><a href="">滋养你的灵魂</a></p>
        <div class="gray_bar"></div>
        <p class="tuijian_content">了解真实的自我 "超越心灵"和成为一个更高的灵魂</p>
      </div>
      <div class="tuijian_part">
        <a href=""><img src="themes/my/images/index_65.png" alt=""></a>
        <p class="tuijian_title"><a href="">滋养你的灵魂</a></p>
        <div class="gray_bar"></div>
        <p class="tuijian_content">了解真实的自我 "超越心灵"和成为一个更高的灵魂</p>
      </div>
    </div>
  </div>
  

<?php echo $this->fetch('library/page_footer.lbi'); ?>