<?php echo $this->fetch('library/page_header.lbi'); ?>
<script type="text/javascript" src="themes/my/js/jquery.jqzoom.js"></script>
<script type="text/javascript" src="themes/my/js/base.js"></script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript">
  function $id(element) {
    return document.getElementById(element);
  }
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>
  
<div class="w1000">
   <div class="w1000 url_here">
    <?php echo $this->fetch('library/ur_here.lbi'); ?>
  </div>
</div>

<div class="w1000 text">
  
  <div class="w210 goods_cat">
    <div class="cat_block">
      <p class="cat_title"><img src="themes/my/images/icon.png" alt="">热门推荐</p>
      <?php if ($this->_var['best_goods']): ?>
      <ul class="cat_child">
      <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_97647200_1445420145');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_97647200_1445420145']):
?>
        <li class="cat_goods_tuijian">
          <a href="<?php echo $this->_var['goods_0_97647200_1445420145']['url']; ?>"><img src="<?php echo $this->_var['goods_0_97647200_1445420145']['thumb']; ?>" width="191px" height="146px" alt="" /></a>
          <p class="cat_goods_tuijian_title"><a href="<?php echo $this->_var['goods_0_97647200_1445420145']['url']; ?>"><?php echo $this->_var['goods_0_97647200_1445420145']['name']; ?></a></p>  
        </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
      <?php endif; ?>
    </div>
    
  
  </div>


<div class="w760 goods_list">
 
 <div class="w760 goods_option">

   
   <?php if ($this->_var['pictures']): ?>
   <div class="goods_img_fangda">
    <div id="preview" class="spec-preview"> <span class="jqzoom"><img jqimg="<?php echo $this->_var['goods']['goods_img']; ?>" src="<?php echo $this->_var['goods']['goods_img']; ?>" /></span> </div>
      <div class="spec-scroll"> <a class="prev">&lt;</a> <a class="next">&gt;</a>
        <div class="items">
          <ul>
            <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');if (count($_from)):
    foreach ($_from AS $this->_var['picture']):
?>
            <li><img alt="佳能" bimg="<?php echo $this->_var['picture']['img_url']; ?>" src="<?php echo $this->_var['picture']['thumb_url']; ?>" onmousemove="preview(this);"></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
      </div>
  </div>
  <?php endif; ?>
  

  <div class="goods_option_detail">
   <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >

      <p class="goods_title"><?php echo $this->_var['goods']['goods_style_name']; ?></p>
      <p class="goods_title_desc"><?php echo sub_str($this->_var['goods']['goods_brief'],50); ?></p>
      <p class="goods_price_desc">金额：<span class="goods_price" id="ECS_GOODS_AMOUNT"><?php echo $this->_var['goods']['shop_price']; ?>元</span><span style="color:#f87d01;"></span></p>
      <div class="goods_option_row">
        
        <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
        <p class="option_attr">选择规格</p>
        
          
          <?php if ($this->_var['spec']['attr_type'] == 1): ?>
          <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
          <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
          <label class="goods_option_one" for="spec_value_<?php echo $this->_var['value']['id']; ?>">
            <input type="radio" style="display:none" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
            <?php echo $this->_var['value']['label']; ?> </label>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
            <?php else: ?>
            <select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
              <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </select>
            <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
            <?php endif; ?>
            <?php else: ?>
            <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
            <label class="goods_option_one" for="spec_value_<?php echo $this->_var['value']['id']; ?>">
              <input type="checkbox" style="display:none" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
              <?php echo $this->_var['value']['label']; ?>  </label><br />
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
              <?php endif; ?>
            
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            
      </div>
      <p class="goods_num">
        <span class="goods_num_title">数量：</span>
        <span class="i_box">
              <a href="javascript:;" class="J_minus" onclick="goods_cut(<?php echo $this->_var['goods']['goods_id']; ?>)">-</a>
              <!-- <input name="number" type="text" id="number" value="1" size="4" onblur="changePrice()" style="border:1px solid #ccc; "/> -->
              
              <input type="text" name="number" id="number_<?php echo $this->_var['goods']['goods_id']; ?>" value="1" size="4" style="text-align:center" onchange="changePrice()" class="J_input" />

              <a href="javascript:;" class="J_add" onclick="goods_add(<?php echo $this->_var['goods']['goods_id']; ?>)">+</a>
              <script type="text/javascript">
                  
                    function goods_cut($val){
                      var num_val=document.getElementById('number_'+$val);
                      var new_num=num_val.value;
                      if(isNaN(new_num)){alert('请输入数字');return false}
                      var Num = parseInt(new_num);
                      if(Num>1)Num=Num-1;
                      num_val.value=Num;
                      changePrice();
                  }
                  
                  function goods_add($val){
                      var num_val=document.getElementById('number_'+$val);
                      var new_num=num_val.value;
                      if(isNaN(new_num)){alert('请输入数字');return false}
                      var Num = parseInt(new_num);
                      Num=Num+1;
                      num_val.value=Num;
                      changePrice();
                  }                                 
                  </script>
        </span>
      </p>
      <p class="goods_button">
        <a href="javascript:addToCart2(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/my/images/goods_17.png" alt=""></a>
        <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/my/images/goods_19.png" alt=""></a>
      </p>
    <ul>
     <?php if ($this->_var['promotion']): ?>
     <li class="padd">
      <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      <?php echo $this->_var['lang']['activity']; ?>
      <?php if ($this->_var['item']['type'] == "snatch"): ?>
      <a href="snatch.php" title="<?php echo $this->_var['lang']['snatch']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['snatch']; ?>]</a>
      <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
      <a href="group_buy.php" title="<?php echo $this->_var['lang']['group_buy']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['group_buy']; ?>]</a>
      <?php elseif ($this->_var['item']['type'] == "auction"): ?>
      <a href="auction.php" title="<?php echo $this->_var['lang']['auction']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['auction']; ?>]</a>
      <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
      <a href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['favourable']; ?>]</a>
      <?php endif; ?>
      <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" style="font-weight:100; color:#006bcd;"><?php echo $this->_var['item']['act_name']; ?></a><br />
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </li>
    <?php endif; ?>
    <li class="clearfix">
     <dd>
       <?php if ($this->_var['cfg']['show_goodssn']): ?>
       <strong><?php echo $this->_var['lang']['goods_sn']; ?></strong><?php echo $this->_var['goods']['goods_sn']; ?>
       <?php endif; ?>
     </dd>
     <dd class="ddR">
       <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
       <?php if ($this->_var['goods']['goods_number'] == 0): ?>
       <strong><?php echo $this->_var['lang']['goods_number']; ?></strong>
       <font color='red'><?php echo $this->_var['lang']['stock_up']; ?></font>
       <?php else: ?>
       <strong><?php echo $this->_var['lang']['goods_number']; ?></strong>
       <?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?>
       <?php endif; ?>
       <?php endif; ?>
     </dd>
   </li>
   <li class="clearfix">
     <dd>
       <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
       <strong><?php echo $this->_var['lang']['goods_brand']; ?></strong><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a>
       <?php endif; ?>
     </dd>
     <dd class="ddR">
       <?php if ($this->_var['cfg']['show_goodsweight']): ?>
       <strong><?php echo $this->_var['lang']['goods_weight']; ?></strong><?php echo $this->_var['goods']['goods_weight']; ?>
       <?php endif; ?>
     </dd>
   </li>
   <li class="clearfix">
     <dd>
       <?php if ($this->_var['cfg']['show_addtime']): ?>
       <strong><?php echo $this->_var['lang']['add_time']; ?></strong><?php echo $this->_var['goods']['add_time']; ?>
       <?php endif; ?>
     </dd>
   </li>

<?php if ($this->_var['goods']['is_shipping']): ?>
<li style="height:30px;padding-top:4px;">
  <?php echo $this->_var['lang']['goods_free_shipping']; ?><br />
</li>
<?php endif; ?>
  </ul>
</form>
</div>
</div>
      <div class="w760 goods_desc">
        <p class="goods_desc_title">详情结束</p>
        <div class="goods_desc_info">
          <?php echo $this->_var['goods']['goods_desc']; ?>
        </div>
      </div>
  </div>
  </div>


<script type="text/javascript">
  var goods_id = <?php echo $this->_var['goods_id']; ?>;
  var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
  var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
  <?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  var goodsId = <?php echo $this->_var['goods_id']; ?>;
  var now_time = <?php echo $this->_var['now_time']; ?>;


    $(function () {
    $('.goods_option_one:first').addClass('option_select');
  })
  $('.goods_option_one').click(function () {
    $('.goods_option_one').removeClass('option_select');
    $(this).addClass('option_select');
  });
  
  onload = function(){
    changePrice();
    fixpng();
    try {onload_leftTime();}
    catch (e) {}
  }

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
 function changePrice()
 {
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
 function changePriceResponse(res)
 {
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
