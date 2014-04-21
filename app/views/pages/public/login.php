<?php $this->load->view('layouts/header'); ?>

<div class="row">
  <div class="col-lg-8 col-lg-offset-2">
    <!-- <div class="black-box"> -->
      <h4 class="title-divider">Login</h4>
      <!-- <p class="alert alert-warning"><small>For staff use only. No public access.</small></p> -->
    <?php
      echo form_open('admin/login_validation');
      if (form_error('email')) {
        echo form_error('email'); 
      }elseif(form_error('password')){
        echo form_error('password');
      } else{
        echo validation_errors();
      }
      echo "<div class=\"col-lg-10 col-lg-offset-1\">";

      echo "<div class=\"form-group\">";
        $attributes = array('class' => 'control-label form-info');
        echo form_label('Email:', 'email', $attributes); 
        $attributes = array('class' => 'form-control input-small', 'name' => 'email', 'value' => $this->input->post('email'));
        echo form_input($attributes);
      echo "</div>";

      echo "<div class=\"form-group\">";
        $attributes = array('class' => 'control-label form-info');
        echo form_label('Password:', 'password', $attributes);
        $attributes = array('class' => 'form-control input-small', 'name' => 'password');
        echo form_password($attributes);  
      echo "</div>";

      echo "<div class=\"form-group\">";
        $attributes = array( 'class' => 'btn btn-primary btn-mini btn-block',
                             'name'  => 'submit',
                             'type' => 'submit',
                             'content' => 'Login' );
        echo form_button($attributes);  
      echo "</div>";

      echo "</div>";
      echo form_close();
    ?>
    <!-- </div> --><!-- black-box -->  
  </div>  
</div><!-- row -->

<?php $this->load->view('layouts/footer'); ?>

