<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATION</li>
  <li class="<?php if ($bar == 0 || $bar == 1) { echo 'active treeview'; } else { echo 'treeview'; } ?>">
    <a href="#">
      <i class="fa fa-dashboard"></i>
      <span>应用</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="<?php if ($bar == 0) { echo 'active'; } ?>"><a href="<?php echo site_url('admin/applist'); ?>"><i class="fa fa-circle-o"></i> 列表</a></li>
      <li class="<?php if ($bar == 1) { echo 'active'; } ?>"><a href="<?php echo site_url('admin/appadd'); ?>"><i class="fa fa-circle-o"></i> 添加</a></li>
    </ul>
  </li>
  <li class="<?php if ($bar == 2) { echo 'active'; } ?>">
    <a href="<?php echo site_url('admin/user'); ?>">
      <i class="fa fa-th"></i>
      <span>帐号查询</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-green"></small>
      </span>
    </a>
  </li>
  <li class="<?php if ($bar == 3) { echo 'active'; } ?>">
    <a href="<?php echo site_url('admin/pay'); ?>">
      <i class="fa fa-th"></i>
      <span>支付查询</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-green"></small>
      </span>
    </a>
  </li>
  <li><a href="#"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
</ul>
</section>
<!-- /.sidebar -->
</aside>
