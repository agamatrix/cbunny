<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <?php 
          echo $this->Html->link('Cake Bunny 2.0',array(
              'controller' => 'dashboards',
              'action' => 'index'
            ),array('class' => 'brand'));
        ?>
        <div class="nav-collapse">
          <ul class="nav">
            <li>
              <?php 
                echo $this->Html->link('Dashboard',array(
                    'controller' => 'dashboards',
                    'action' => 'index'
                  ));
              ?>
            </li>
            <li>
              <?php 
                echo $this->Html->link('Auto Complete',array(
                  'controller' => 'users', 
                  'action' => 'index'
                )); 
              ?>
            </li>
            <li>
              <?php 
                echo $this->Html->link('Cake Bunny 1.0','http://www.rudylee.com/cbunny'); 
              ?>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
</div>