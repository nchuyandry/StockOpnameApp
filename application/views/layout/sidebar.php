<div class="sidebar" data="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            <img src="<?=base_url()?>assets/img/tvip.png" width="32px">
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            Stock Opname
          </a>
        </div>
        <ul class="nav">
          <li class="<?=($this->uri->segment(1)=== NULL)?'active':''?>">
            <a href="<?=base_url()?>">
              <i class="fa fa-home"></i>
              <p>Home</p>
            </a>
          </li> 
          <li class="<?=($this->uri->segment(1)==='input')?'active':''?>">
            <a href="<?=base_url('input')?>">
              <i class="fab fa-wpforms"></i>
              <p>Input Berita Acara</p>
            </a>
          </li>
        </ul>
      </div>
    </div>