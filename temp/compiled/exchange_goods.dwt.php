<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript">
function $id(element)
{
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str)
{
  var bt=$id(str+"_b").getElementsByTagName("h2");

  for(var i=0;i<bt.length;i++)
  {
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";

    bt[i].onclick=function()
    {
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;

      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++)
      {
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
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block box">
  <div id="ur_here">
    <?php echo $this->fetch('library/ur_here.lbi'); ?>
  </div>
</div>

<div class="blank"></div>

<div class="block clearfix">
  
  <div class="AreaL">
  
  <?php echo $this->fetch('library/cart.lbi'); ?>
  <?php echo $this->fetch('library/category_tree.lbi'); ?>
  
  
  
  
  <?php echo $this->fetch('library/history.lbi'); ?>
  </div>
  

  
  <div class="AreaR">
    
    <div id="goodsInfo" class="clearfix">
      
      <div class="imgInfo">
        <?php if ($this->_var['pictures']): ?>
          <a href="javascript:;" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;">
            <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"/>
          </a>
        <?php else: ?>
          <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"/>
        <?php endif; ?>
        <div class="blank5"></div>

        
        <?php echo $this->fetch('library/goods_gallery.lbi'); ?>
        <div class="blank5"></div>
        
        
        
      </div>
      

      <div class="textInfo">
      <form action="exchange.php?act=buy" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
              <div class="clearfix">
        <p class="f_l"><?php echo $this->_var['goods']['goods_style_name']; ?></p>
        <p class="f_r">
          <?php if ($this->_var['prev_good']): ?>
          <a href="<?php echo $this->_var['prev_good']['url']; ?>"><img alt="prev" src="themes/my/images/up.gif" /></a>
          <?php endif; ?>
          <?php if ($this->_var['next_good']): ?>
          <a href="<?php echo $this->_var['next_good']['url']; ?>"><img alt="next" src="themes/my/images/down.gif" /></a>
          <?php endif; ?>
        </p>
                </div>

        <ul>
          <?php if ($this->_var['cfg']['show_goodssn']): ?>
          <li class="clearfix">
            <dd>
              <strong><?php echo $this->_var['lang']['goods_sn']; ?></strong><?php echo $this->_var['goods']['goods_sn']; ?>
            </dd>
          </li>
          <?php endif; ?>
          <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
          <li class="clearfix">
            <dd>
              <strong><?php echo $this->_var['lang']['goods_brand']; ?></strong><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a>
            </dd>
          </li>
          <?php endif; ?>
          <?php if ($this->_var['cfg']['show_goodsweight']): ?>
          <li class="clearfix">
            <dd>
            <strong><?php echo $this->_var['lang']['goods_weight']; ?></strong><?php echo $this->_var['goods']['goods_weight']; ?>
            </dd>
          </li>
          <?php endif; ?>
          <li class="clearfix">
            <dd>
            <strong><?php echo $this->_var['lang']['exchange_integral']; ?></strong><font class="shop"><?php echo $this->_var['goods']['exchange_integral']; ?></font><br />
            </dd>
          </li>
          
          <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
          <li class="padd loop">
            <strong><?php echo $this->_var['spec']['name']; ?>:</strong><br />
            <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> />
                <?php echo $this->_var['value']['label']; ?> </label>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php else: ?>
              <select name="spec_<?php echo $this->_var['spec_key']; ?>" style="border:1px solid #ccc;">
              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> </option>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
            <?php endif; ?>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
          <li class="padd">
            <input type="hidden" name="goods_id" value="<?php echo $this->_var['goods']['goods_id']; ?>" />
            <input type="submit" value="<?php echo $this->_var['lang']['exchange_goods']; ?>" class="bnt_blue_1"/>
          </li>
        </ul>
      </form>
      </div>
    </div>
    <div class="blank"></div>
    

    
    <div class="box">
      <div class="box_1">
        <h3 style="padding:0 5px;">
          <div id="com_b" class="history clearfix">
            <h2><?php echo $this->_var['lang']['goods_brief']; ?></h2>
            <h2 class="h2bg"><?php echo $this->_var['lang']['goods_attr']; ?></h2>
          </div>
        </h3>

        <div id="com_v" class="boxCenterList RelaArticle"></div>

        <div id="com_h">
          <blockquote>
            <?php echo $this->_var['goods']['goods_desc']; ?>
          </blockquote>

          <blockquote>
            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
              <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
              <tr>
                <th colspan="2" bgcolor="#FFFFFF"><?php echo htmlspecialchars($this->_var['key']); ?></th>
              </tr>
              <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
              <tr>
                <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[<?php echo htmlspecialchars($this->_var['property']['name']); ?>]</td>
                <td bgcolor="#FFFFFF" align="left" width="70%"><?php echo htmlspecialchars($this->_var['property']['value']); ?></td>
              </tr>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </table>
          </blockquote>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    <!--
    reg("com");
    //-->
    </script>

    <div class="blank"></div>
    

  </div>
  
</div>
<div class="blank5"></div>


<div class="block">
  <div class="box">
    <div class="helpTitBg clearfix">
      <?php echo $this->fetch('library/help.lbi'); ?>
    </div>
  </div>
</div>
<div class="blank"></div>



<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="bottomNav" class="box">
  <div class="box_1">
    <div class="links clearfix">
      <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
        <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php if ($this->_var['txt_links']): ?>
        <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
          [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>]
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php endif; ?>
<div class="blank"></div>


<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>

<script type="text/javascript">

onload = function()
{
  fixpng();
}

</script>
</html>
