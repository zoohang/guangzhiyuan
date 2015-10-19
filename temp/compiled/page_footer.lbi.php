  
  <div class="footer-bg">
    <div class="online_zixun">
      <a href=""><img src="themes/my/images/index_26.png" alt=""></a>
      <a href=""><img src="themes/my/images/index_42.png" style="margin-top: -2px" alt=""></a>
    </div>
    <div class="w1000">
      <div class="lianxi">
        <ul>
          <?php if ($this->_var['service_phone']): ?>
          <li>电话：<?php echo $this->_var['service_phone']; ?></li>
          <?php endif; ?>

          <?php if ($this->_var['shop_address']): ?>
          <li>地址：<?php echo $this->_var['shop_address']; ?></li>
          <?php endif; ?>

          <?php if ($this->_var['skype']): ?>
          <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'skype_0_60342600_1445223060');if (count($_from)):
    foreach ($_from AS $this->_var['skype_0_60342600_1445223060']):
?>
          <li>邮编：<?php echo $this->_var['skype_0_60342600_1445223060']; ?></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php endif; ?>

          <?php if ($this->_var['qq']): ?>
          <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qq_0_60355100_1445223060');if (count($_from)):
    foreach ($_from AS $this->_var['qq_0_60355100_1445223060']):
?>
          <li>QQ：<?php echo $this->_var['qq_0_60355100_1445223060']; ?></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php endif; ?>
        </ul>
      </div>
      <div class="copyright">
        <?php echo $this->_var['copyright']; ?>
      </div>
      <div class="help_index">
        <a href="">帮助中心</a> |
        <a href="">支付方式</a> |
        <a href="">关于我们</a>
      </div>
    </div>
  </div>
  
</body>
</html>