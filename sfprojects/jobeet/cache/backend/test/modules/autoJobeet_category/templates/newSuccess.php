<?php use_helper('I18N', 'Date') ?>
<?php include_partial('jobeet_category/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Category', array(), 'messages') ?></h1>

  <?php include_partial('jobeet_category/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('jobeet_category/form_header', array('jobeet_category' => $jobeet_category, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('jobeet_category/form', array('jobeet_category' => $jobeet_category, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('jobeet_category/form_footer', array('jobeet_category' => $jobeet_category, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
