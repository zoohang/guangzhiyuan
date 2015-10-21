<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
  <meta name="Description" content="<?php echo $this->_var['description']; ?>" />
  <title><?php echo $this->_var['page_title']; ?></title>
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="icon" href="animated_favicon.gif" type="image/gif" />
  <link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="themes/my/css/all.css">

</head>
<body>

  
  <div class="top">
    <div class="top_bar">
      <div class="w1000 header">
        <div class="logo">
          <a href="./"><img src="themes/my/images/index_05.png" alt=""></a>
        </div>
        <div class="top_right">
          <div class="login">
            <div class="login_cart">
              <a href="flow.php"><img src="themes/my/images/index_02.png" alt=""></a>
            </div>
            <div class="login_box">
              <?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.11.1.min.js,jquery.json.js')); ?>
              <script type="text/javascript" src="themes/my/js/all.js"></script>
              <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
              <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
            </div>
          </div>
          <div class="nav">
            <ul>
              <li><a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['lang']['home']; ?></li>
              <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
              <li><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  