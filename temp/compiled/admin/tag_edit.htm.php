<!-- $Id: tag_edit.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'validator.js,../js/transport.org.js')); ?>
<div class="main-div">
<form method="post" action="tag_manage.php" name="theForm" onSubmit="return validate()">
<table cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <td class="label"><?php echo $this->_var['lang']['tag_words']; ?></td>
    <td><input name="tag_name" type="text" id="tag_name" value="<?php echo $this->_var['tag']['tag_words']; ?>" maxlength="60" />
    </td>
  </tr>
  
  <tr>
    <td align="right"><?php echo $this->_var['lang']['name_search']; ?></td>
    <td><input name="keyword" type="text" id="keyword">
      <input name="search" type="button" id="search" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" onclick="searchGoods()" /></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['goods_name']; ?></td>
    <td><select name="goods_id" id="goods_id">
      <option value="<?php echo $this->_var['tag']['goods_id']; ?>" selected="selected"><?php echo $this->_var['tag']['goods_name']; ?></option>
    </select>    
    </td>
  </tr>

  <tr>
    <td colspan="2" align="center">
      <input type="submit" class="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
      <input type="reset" class="button" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
      <input type="hidden" name="id" value="<?php echo $this->_var['tag']['tag_id']; ?>" /></td>
      <input type="hidden" name="act" value="<?php echo $this->_var['insert_or_update']; ?>" />
  </tr>
</table>
</form>
</div>


<script language="JavaScript">
<!--
onload = function()
{
    // 开始检查订单
    startCheckOrder();
}
/**
 * 检查表单输入的数据
 */
function validate()
{
    validator = new Validator("theForm");
    validator.required('tag_name', tag_name_not_empty);
    return validator.passed();
}

function searchGoods()
{
  var filter = new Object;
  filter.keyword  = document.forms['theForm'].elements['keyword'].value;

  Ajax.call('tag_manage.php?is_ajax=1&act=search_goods', filter, searchGoodsResponse, 'GET', 'JSON');
}

function searchGoodsResponse(result)
{
  if (result.error == '1' && result.message != '')
  {
    alert(result.message);
	return;
  }

  var sel = document.forms['theForm'].elements['goods_id'];

  sel.length = 0;

  /* 创建 options */
  var goods = result.content;
  if (goods)
  {
    for (i = 0; i < goods.length; i++)
    {
      var opt = document.createElement("OPTION");
      opt.value = goods[i].goods_id;
      opt.text  = goods[i].goods_name;
      sel.options.add(opt);
    }
  }

  return;
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>
