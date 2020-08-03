<?php
/* Smarty version 3.1.29, created on 2020-07-27 05:32:20
  from "/home4/sexydive/public_html/shop/admin/themes/default/template/user_list.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f1ead34aae813_12194358',
  'file_dependency' => 
  array (
    'fb3471fccc23b296d238d2d83d467c9865e786aa' => 
    array (
      0 => '/home4/sexydive/public_html/shop/admin/themes/default/template/user_list.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_5f1ead34aae813_12194358 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/home4/sexydive/public_html/shop/include/smarty/libs/plugins/function.html_options.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/colorbox.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.dataTables','load'=>'footer','path'=>'themes/default/js/plugins/jquery.dataTables.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/default/js/plugins/datatables/css/jquery.dataTables.css"),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.selectize','load'=>'footer','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('id'=>'jquery.selectize','path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.underscore','load'=>'footer','path'=>'themes/default/js/plugins/underscore.js'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.ui.slider','require'=>'jquery.ui','load'=>'footer','path'=>'themes/default/js/ui/minified/jquery.ui.slider.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/default/js/ui/theme/jquery.ui.slider.css"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

var selectedMessage_pattern = "<?php echo strtr(l10n('%d of %d users selected'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
var selectedMessage_none = "<?php echo strtr(l10n('No user selected of %d users'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
var selectedMessage_all = "<?php echo strtr(l10n('All %d users are selected'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
var applyOnDetails_pattern = "<?php echo strtr(l10n('on the %d selected users'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
var newUser_pattern = "&#x2714; <?php echo strtr(l10n('User %s added'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
var registeredOn_pattern = "<?php echo strtr(l10n('Registered on %s, %s.'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
var lastVisit_pattern = "<?php echo strtr(l10n('Last visit on %s, %s.'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
var missingConfirm = "<?php echo strtr(l10n('You need to confirm deletion'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
var missingUsername = "<?php echo strtr(l10n('Please, enter a login'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";

var allUsers = [<?php echo $_smarty_tpl->tpl_vars['all_users']->value;?>
];
var selection = [];
var pwg_token = "<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
";

var protectedUsers = [<?php echo $_smarty_tpl->tpl_vars['protected_users']->value;?>
];
var passwordProtectedUsers = [<?php echo $_smarty_tpl->tpl_vars['password_protected_users']->value;?>
];
var guestUser = <?php echo $_smarty_tpl->tpl_vars['guest_user']->value;?>
;

var truefalse = {
  'true':"<?php echo l10n('Yes');?>
",
  'false':"<?php echo l10n('No');?>
",
};

var statusLabels = {
<?php
$_from = $_smarty_tpl->tpl_vars['label_of_status']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_label_0_saved_item = isset($_smarty_tpl->tpl_vars['label']) ? $_smarty_tpl->tpl_vars['label'] : false;
$__foreach_label_0_saved_key = isset($_smarty_tpl->tpl_vars['status']) ? $_smarty_tpl->tpl_vars['status'] : false;
$_smarty_tpl->tpl_vars['label'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['status'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['label']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['status']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
$__foreach_label_0_saved_local_item = $_smarty_tpl->tpl_vars['label'];
?>
  '<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
' : '<?php echo strtr($_smarty_tpl->tpl_vars['label']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
<?php
$_smarty_tpl->tpl_vars['label'] = $__foreach_label_0_saved_local_item;
}
if ($__foreach_label_0_saved_item) {
$_smarty_tpl->tpl_vars['label'] = $__foreach_label_0_saved_item;
}
if ($__foreach_label_0_saved_key) {
$_smarty_tpl->tpl_vars['status'] = $__foreach_label_0_saved_key;
}
?>
};
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery(document).ready(function() {
  /**
   * Add user
   */
  jQuery("#addUser").click(function() {
    jQuery("#addUserForm").toggle();
    jQuery("#showAddUser .infos").hide();
    jQuery("input[name=username]").focus();
    return false;
  });

  jQuery("#genPass").click(function(e){
    e.preventDefault();

    var characterSet = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789';

    var i;
    var password;
    var length = getRandomInt(8, 15);

    password = '';
    for (i = 0; i < length; i++) {
      password += characterSet.charAt(Math.floor(Math.random() * characterSet.length));
    }

    jQuery('input[name=password]').val(password);
  });

  jQuery("#addUserClose").click(function() {
    jQuery("#addUserForm").hide();
    return false;
  });

  jQuery("#addUserForm").submit(function() {
    jQuery.ajax({
      url: "ws.php?format=json&method=pwg.users.add",
      type:"POST",
      data: jQuery(this).serialize()+"&pwg_token="+pwg_token,
      beforeSend: function() {
        jQuery("#addUserForm .errors").hide();

        if (jQuery("input[name=username]").val() == "") {
          jQuery("#addUserForm .errors").html('&#x2718; '+missingUsername).show();
          return false;
        }

        jQuery("#addUserForm .loading").show();
      },
      success:function(data) {
        oTable.api().draw();
        jQuery("#addUserForm .loading").hide();

        var data = jQuery.parseJSON(data);
        if (data.stat == 'ok') {
          jQuery("#addUserForm input[type=text], #addUserForm input[type=password]").val("");

          var new_user = data.result.users[0];
          allUsers.push(parseInt(new_user.id));
          jQuery("#showAddUser .infos").html(sprintf(newUser_pattern, new_user.username)).show();
          checkSelection();

          jQuery("#addUserForm").hide();
        }
        else {
          jQuery("#addUserForm .errors").html('&#x2718; '+data.message).show();
        }
      },
      error:function(XMLHttpRequest, textStatus, errorThrows) {
        jQuery("#addUserForm .loading").hide();
      }
    });

    return false;
  });

  /**
   * Table with users
   */
  /**
   * find the key from a value in the startStopValues array
   */
  function getSliderKeyFromValue(value, values) {
    for (var key in values) {
      if (values[key] >= value) {
        return key;
      }
    }
    return 0;
  }

  var recent_period_values = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,25,30,40,50,60,80,99];

  function getRecentPeriodInfoFromIdx(idx) {
    return sprintf(
      "<?php echo l10n('%d days');?>
",
      recent_period_values[idx]
    );
  }

  var nb_image_page_values = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,35,40,45,50,60,70,80,90,100,200,300,500,999];

  function getNbImagePageInfoFromIdx(idx) {
    return sprintf(
      "<?php echo l10n('%d photos per page');?>
",
      nb_image_page_values[idx]
    );
  }

  /* nb_image_page slider */
  var nb_image_page_init = getSliderKeyFromValue(jQuery('#action_nb_image_page input[name=nb_image_page]').val(), nb_image_page_values);
  
  jQuery('#action_nb_image_page .nb_image_page_infos').html(getNbImagePageInfoFromIdx(nb_image_page_init));
  
  jQuery('#action_nb_image_page .nb_image_page').slider({
    range: "min",
    min: 0,
    max: nb_image_page_values.length - 1,
    value: nb_image_page_init,
    slide: function( event, ui ) {
      jQuery('#action_nb_image_page .nb_image_page_infos').html(getNbImagePageInfoFromIdx(ui.value));
    },
    stop: function( event, ui ) {
      jQuery('#action_nb_image_page input[name=nb_image_page]').val(nb_image_page_values[ui.value]).trigger('change');
    }
  });

  /* recent_period slider */
  var recent_period_init = getSliderKeyFromValue(jQuery('#action_recent_period input[name=recent_period]').val(), recent_period_values);
  jQuery('#action_recent_period .recent_period_infos').html(getRecentPeriodInfoFromIdx(recent_period_init));
  
  jQuery('#action_recent_period .recent_period').slider({
    range: "min",
    min: 0,
    max: recent_period_values.length - 1,
    value: recent_period_init,
    slide: function( event, ui ) {
      jQuery('#action_recent_period .recent_period_infos').html(getRecentPeriodInfoFromIdx(ui.value));
    },
    stop: function( event, ui ) {
      jQuery('#action_recent_period input[name=recent_period]').val(recent_period_values[ui.value]).trigger('change');
    }
  });

  /* Formating function for row details */
  function fnFormatDetails(oTable, nTr) {
		var userId = oTable.api().row(nTr).data()[0];
    console.log("userId = "+userId);
    var sOut = null;

    jQuery.ajax({
      url: "ws.php?format=json&method=pwg.users.getList",
      type:"POST",
      data: {
        user_id: userId,
        display: "all",
      },
      success:function(data) {
        jQuery("#user"+userId+" .loading").hide();

        var data = jQuery.parseJSON(data);
        if (data.stat == 'ok') {
          var user = data.result.users[0];

          /* Prepare data for template */
          user.statusOptions = [];
          jQuery("#action select[name=status] option").each(function() {
            var option = {value:jQuery(this).val(), label:jQuery(this).html(), isSelected:false};
          
            if (user.status == jQuery(this).val()) {
              option.isSelected = true;
            }
          
            user.statusOptions.push(option);
          });
          
          user.levelOptions = [];
          jQuery("#action select[name=level] option").each(function() {
            var option = {value:jQuery(this).val(), label:jQuery(this).html(), isSelected:false};
          
            if (user.level == jQuery(this).val()) {
              option.isSelected = true;
            }
          
            user.levelOptions.push(option);
          });
          
          user.groupOptions = [];
          jQuery("#action select[name=associate] option").each(function() {
            var option = {value:jQuery(this).val(), label:jQuery(this).html(), isSelected:false};
          
            if (user.groups.indexOf( parseInt(jQuery(this).val()) ) != -1) {
              option.isSelected = true;
            }
          
            user.groupOptions.push(option);
          });
          
          user.themeOptions = [];
          jQuery("#action select[name=theme] option").each(function() {
            var option = {value:jQuery(this).val(), label:jQuery(this).html(), isSelected:false};
          
            if (user.theme == jQuery(this).val()) {
              option.isSelected = true;
            }
          
            user.themeOptions.push(option);
          });
          
          user.languageOptions = [];
          jQuery("#action select[name=language] option").each(function() {
            var option = {value:jQuery(this).val(), label:jQuery(this).html(), isSelected:false};
          
            if (user.language == jQuery(this).val()) {
              option.isSelected = true;
            }
          
            user.languageOptions.push(option);
          });
          
          user.isGuest = (parseInt(userId) == guestUser);
          user.isProtected = (protectedUsers.indexOf(parseInt(userId)) != -1);
          user.isPasswordProtected = (passwordProtectedUsers.indexOf(parseInt(userId)) != -1);
          
          user.registeredOn_string = sprintf(
            registeredOn_pattern,
            user.registration_date_string,
            user.registration_date_since
          );
          
          user.lastVisit_string = "";
          if (typeof user.last_visit != 'undefined') {
            user.lastVisit_string = sprintf(lastVisit_pattern, user.last_visit_string, user.last_visit_since);
          }
          
          user.email = user.email || '';
          
          user.statusLabel = statusLabels[user.status];
          
		      /* Render the underscore template */
          _.templateSettings.variable = "user";
          
          var template = _.template(
            jQuery("script.userDetails").html()
		      );
          
          jQuery("#user"+userId).html(template(user));

          /* groups select */
          jQuery('[data-selectize=groups]').selectize({
            valueField: 'value',
            labelField: 'label',
            searchField: ['label'],
            plugins: ['remove_button']
          });

          var groupSelectize = jQuery('[data-selectize=groups]')[0].selectize;

          groupSelectize.load(function(callback) {
            callback(user.groupOptions);
          });

          jQuery.each(jQuery.grep(user.groupOptions, function(group) {
            return group.isSelected;
          }), function(i, group) {
            groupSelectize.addItem(group.value);
          });

          /* nb_image_page slider */
          var nb_image_page_init = getSliderKeyFromValue(jQuery('#user'+userId+' input[name=nb_image_page]').val(), nb_image_page_values);
          
          jQuery('#user'+userId+' .nb_image_page_infos').html(getNbImagePageInfoFromIdx(nb_image_page_init));
          
          jQuery('#user'+userId+' .nb_image_page').slider({
            range: "min",
            min: 0,
            max: nb_image_page_values.length - 1,
            value: nb_image_page_init,
            slide: function( event, ui ) {
              jQuery('#user'+userId+' .nb_image_page_infos').html(getNbImagePageInfoFromIdx(ui.value));
            },
            stop: function( event, ui ) {
              jQuery('#user'+userId+' input[name=nb_image_page]').val(nb_image_page_values[ui.value]).trigger('change');
            }
          });

          /* recent_period slider */
          var recent_period_init = getSliderKeyFromValue(jQuery('#user'+userId+' input[name=recent_period]').val(), recent_period_values);
          jQuery('#user'+userId+' .recent_period_infos').html(getRecentPeriodInfoFromIdx(recent_period_init));
          
          jQuery('#user'+userId+' .recent_period').slider({
            range: "min",
            min: 0,
            max: recent_period_values.length - 1,
            value: recent_period_init,
            slide: function( event, ui ) {
              jQuery('#user'+userId+' .recent_period_infos').html(getRecentPeriodInfoFromIdx(ui.value));
            },
            stop: function( event, ui ) {
              jQuery('#user'+userId+' input[name=recent_period]').val(recent_period_values[ui.value]).trigger('change');
            }
          });
        }
        else {
          console.log('error loading user details');
        }
      },
      error:function(XMLHttpRequest, textStatus, errorThrows) {
        console.log('technical error loading user details');
      }
    });

    jQuery(".user_form_popin")
      .attr("id", "user"+userId)
      .html('<div class="popinWait"><span><img class="loading" src="themes/default/images/ajax-loader-small.gif"> <?php echo strtr(l10n('Loading...'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
</span></div>')
    ;
  }

jQuery(document).on('click', '.close-user-details',  function(e) {
  jQuery('.user_form_popin').colorbox.close();
  e.preventDefault();
});


  /* change password */
  jQuery(document).on('click', '.changePasswordOpen',  function() {
    var userId = jQuery(this).parentsUntil('form').parent().find('input[name=user_id]').val();

    jQuery(this).hide();
    jQuery('#user'+userId+' .changePasswordDone').hide();
    jQuery('#user'+userId+' .changePassword').show();
    jQuery('#user'+userId+' .changePassword input[type=text]').focus();

    return false;
  });

  jQuery(document).on('click', '.changePassword a.updatePassword',  function() {
    var userId = jQuery(this).parentsUntil('form').parent().find('input[name=user_id]').val();

    jQuery('#user'+userId+' .changePassword a .text').hide();
    jQuery('#user'+userId+' .changePassword a img').show();

    jQuery.ajax({
      url: "ws.php?format=json&method=pwg.users.setInfo",
      type:"POST",
      data: {
        pwg_token:pwg_token,
        user_id:userId,
        password: jQuery('#user'+userId+' .changePassword input[type=text]').val()
      },
      beforeSend: function() {
        jQuery('#user'+userId+' .changePassword input[type=text]').val("");
      },
      success:function(data) {
        jQuery('#user'+userId+' .changePassword a .text').show();
        jQuery('#user'+userId+' .changePassword a img').hide();
        jQuery('#user'+userId+' .changePassword').hide();
        jQuery('#user'+userId+' .changePasswordOpen').show();
        jQuery('#user'+userId+' .changePasswordDone').show();
      },
      error:function(XMLHttpRequest, textStatus, errorThrows) {
      }
    });

    return false;
  });

  jQuery(document).on('click', '.changePassword a.cancel',  function() {
    var userId = jQuery(this).parentsUntil('form').parent().find('input[name=user_id]').val();

    jQuery('#user'+userId+' .changePassword').hide();
    jQuery('#user'+userId+' .changePasswordOpen').show();

    return false;
  });

  /* change username */
  jQuery(document).on('click', '.changeUsernameOpen a',  function() {
    var userId = jQuery(this).parentsUntil('form').parent().find('input[name=user_id]').val();
    var username = jQuery('#user'+userId+' .username').html();

    jQuery('#user'+userId+' .changeUsernameOpen').hide();
    jQuery('#user'+userId+' .changeUsername').show();
    jQuery('#user'+userId+' .changeUsername input[type=text]').val(username).focus();

    return false;
  });

  jQuery(document).on('click', 'a.updateUsername',  function() {
    var userId = jQuery(this).parentsUntil('form').parent().find('input[name=user_id]').val();

    jQuery('#user'+userId+' .changeUsername a .text').hide();
    jQuery('#user'+userId+' .changeUsername a img').show();

    jQuery.ajax({
      url: "ws.php?format=json&method=pwg.users.setInfo",
      type:"POST",
      data: {
        pwg_token:pwg_token,
        user_id:userId,
        username: jQuery('#user'+userId+' .changeUsername input[type=text]').val()
      },
      success:function(data) {
        jQuery('#user'+userId+' .changeUsername a .text').show();
        jQuery('#user'+userId+' .changeUsername a img').hide();
        jQuery('#user'+userId+' .changeUsername').hide();
        jQuery('#user'+userId+' .changeUsernameOpen').show();

        var data = jQuery.parseJSON(data);
        jQuery('#user'+userId+' .username').html(data.result.users[0].username);
      },
      error:function(XMLHttpRequest, textStatus, errorThrows) {
      }
    });

    return false;
  });

  jQuery(document).on('click', '.changeUsername a.cancel',  function() {
    var userId = jQuery(this).parentsUntil('form').parent().find('input[name=user_id]').val();

    jQuery('#user'+userId+' .changeUsername').hide();
    jQuery('#user'+userId+' .changeUsernameOpen').show();

    return false;
  });

  /* display the "save" button when a field changes */
  jQuery(document).on('change', '.userProperties input, .userProperties select',  function() {
    var userId = jQuery(this).parentsUntil('form').parent().find('input[name=user_id]').val();

    jQuery('#user'+userId+' input[type=submit]').show();
    jQuery('#user'+userId+' .propertiesUpdateDone').hide();
  });

  /* delete user */
  jQuery(document).on('click', '.userDelete a',  function() {
    if (!confirm("<?php echo strtr(l10n('Are you sure?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
")) {
      return false;
    }

    var userId = jQuery(this).data('user_id');
    var username = jQuery('#user'+userId+' .username').html();

    jQuery.ajax({
      url: "ws.php?format=json&method=pwg.users.delete",
      type:"POST",
      data: {
        user_id:userId,
        pwg_token:pwg_token
      },
      beforeSend: function() {
        jQuery('#user'+userId+' .userDelete .loading').show();
      },
      success:function(data) {
        jQuery('.user_form_popin').colorbox.close();
        jQuery('#showAddUser .infos').html('&#x2714; User '+username+' deleted').show();
      },
      error:function(XMLHttpRequest, textStatus, errorThrows) {
        jQuery('#user'+userId+' .userDelete .loading').hide();
      }
    });

    return false;
  });

  jQuery(document).on('click', '.userProperties input[type=submit]',  function() {
    var userId = jQuery(this).data('user_id');

    var formData = jQuery('#user'+userId+' form').serialize();
    formData += '&pwg_token='+pwg_token;

    if (jQuery('#user'+userId+' form select[name="group_id[]"] option:selected').length == 0) {
      formData += '&group_id=-1';
    }

    if (!jQuery('#user'+userId+' form input[name=enabled_high]').is(':checked')) {
      formData += '&enabled_high=false';
    }

    if (!jQuery('#user'+userId+' form input[name=expand]').is(':checked')) {
      formData += '&expand=false';
    }

    if (!jQuery('#user'+userId+' form input[name=show_nb_hits]').is(':checked')) {
      formData += '&show_nb_hits=false';
    }

    if (!jQuery('#user'+userId+' form input[name=show_nb_comments]').is(':checked')) {
      formData += '&show_nb_comments=false';
    }

    jQuery.ajax({
      url: "ws.php?format=json&method=pwg.users.setInfo",
      type:"POST",
      data: formData,
      beforeSend: function() {
        jQuery('#user'+userId+' .submitWait').show();
      },
      success:function(data) {
        jQuery('#user'+userId+' .submitWait').hide();

        var html_message;

        var data = jQuery.parseJSON(data);
        if (data.stat == 'ok') {
          var message = sprintf(
            "<?php echo strtr(l10n('User %s updated'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
            data.result.users[0].username
          );

          html_message = '<span class="infos">&#x2714; '+message+'</span>';
        }
        else {
          html_message = '<span class="errors">&#x2718; '+data.message+'</span>';
        }

        jQuery('#user'+userId+' .propertiesUpdateDone')
          .html(html_message)
          .show();
      },
      error:function(XMLHttpRequest, textStatus, errorThrows) {
        jQuery('#user'+userId+' .submitWait').hide();
      }
    });

    return false;
  });

  /* Add event listener for opening and closing details
   * Note that the indicator for showing which row is open is not controlled by DataTables,
   * rather it is done here
   */
  jQuery(document).on('click', '#userList tbody td .openUserDetails',  function() {
    var nTr = this.parentNode.parentNode;

    jQuery.colorbox({
      inline:true,
      title:"<?php echo l10n('Edit user');?>
",
      href:".user_form_popin",
      onClosed: function() {
        oTable.api().draw();
      }
    });

    fnFormatDetails(oTable, nTr);
  });


  /* first column must be prefixed with the open/close icon */
  var aoColumns = [
    {
      visible:false
    },
    {
      render: function(data, type, full) {
        return '<label><input type="checkbox" data-user_id="'+full[0]+'"> '+data+'</label> <a title="<?php echo strtr(l10n('Open user details'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
" class="icon-pencil openUserDetails"><?php echo l10n('edit');?>
</a>';
      }
    }
  ];

  for (i=2; i<jQuery("#userList thead tr th").length; i++) {
    aoColumns.push(null);
  }

  var oTable = jQuery('#userList').dataTable({
    pageLength: 10,
    autoWidth: false,
    deferRender: true,
    processing: true,
    serverSide: true,
		serverMethod: "POST",
    ajaxSource: "admin/user_list_backend.php",
		pagingType: "simple",
<?php if ((isset($_smarty_tpl->tpl_vars['filter_group']->value))) {?>
    "oSearch": {"sSearch": "group:<?php echo $_smarty_tpl->tpl_vars['filter_group']->value;?>
"},
<?php }?>
    language: {
      processing: "<?php echo strtr(l10n('Loading...'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
      lengthMenu: sprintf("<?php echo strtr(l10n('Show %s users'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", '_MENU_'),
      zeroRecords: "<?php echo strtr(l10n('No matching user found'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
      info: sprintf("<?php echo strtr(l10n('Showing %s to %s of %s users'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", '_START_', '_END_', '_TOTAL_'),
      infoEmpty: "<?php echo strtr(l10n('No matching user found'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
      infoFiltered: sprintf("<?php echo strtr(l10n('(filtered from %s total users)'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", '_MAX_'),
      search: '<span class="icon-search"></span>'+"<?php echo strtr(l10n('Search'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
      loadingRecords: "<?php echo strtr(l10n('Loading...'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
      paginate: {
          first:    "<?php echo strtr(l10n('First'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
          previous: '← '+"<?php echo strtr(l10n('Previous'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
          next:     "<?php echo strtr(l10n('Next'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"+' →',
          last:     "<?php echo strtr(l10n('Last'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
      }
    },
    "drawCallback": function( oSettings ) {
      jQuery("#userList input[type=checkbox]").each(function() {
        var user_id = jQuery(this).data("user_id");
        jQuery(this).prop('checked', (selection.indexOf(user_id) != -1));
      });
    },
    columns: aoColumns
  });

  /**
   * Selection management
   */
  function checkSelection() {
    if (selection.length > 0) {
      jQuery("#forbidAction").hide();
      jQuery("#permitAction").show();

      jQuery("#applyOnDetails").text(
        sprintf(
          applyOnDetails_pattern,
          selection.length
        )
      );

      if (selection.length == allUsers.length) {
        jQuery("#selectedMessage").text(
          sprintf(
            selectedMessage_all,
            allUsers.length
          )
        );
      }
      else {
        jQuery("#selectedMessage").text(
          sprintf(
            selectedMessage_pattern,
            selection.length,
            allUsers.length
          )
        );
      }
    }
    else {
      jQuery("#forbidAction").show();
      jQuery("#permitAction").hide();

      jQuery("#selectedMessage").text(
        sprintf(
          selectedMessage_none,
          allUsers.length
        )
      );
    }

    jQuery("#applyActionBlock .infos").hide();
  }

  jQuery(document).on('change', '#userList input[type=checkbox]',  function() {
    var user_id = jQuery(this).data("user_id");

    array_delete(selection, user_id);

    if (jQuery(this).is(":checked")) {
      selection.push(user_id);
    }

    checkSelection();
  });

  jQuery("#selectAll").click(function () {
    selection = allUsers;
    jQuery("#userList input[type=checkbox]").prop('checked', true);
    checkSelection();
    return false;
  });

  jQuery("#selectNone").click(function () {
    selection = [];
    jQuery("#userList input[type=checkbox]").prop('checked', false);
    checkSelection();
    return false;
  });

  jQuery("#selectInvert").click(function () {
    var newSelection = [];
    for(var i in allUsers)
    {
      if (selection.indexOf(allUsers[i]) == -1) {
        newSelection.push(allUsers[i]);
      }
    }
    selection = newSelection;

    jQuery("#userList input[type=checkbox]").each(function() {
      var user_id = jQuery(this).data("user_id");
      jQuery(this).prop('checked', (selection.indexOf(user_id) != -1));
    });

    checkSelection();
    return false;
  });

  /**
   * Action management
   */
  jQuery("[id^=action_]").hide();
  
  jQuery("select[name=selectAction]").change(function () {
    jQuery("#applyActionBlock .infos").hide();

    jQuery("[id^=action_]").hide();

    jQuery("#action_"+$(this).prop("value")).show();
  
    if (jQuery(this).val() != -1) {
      jQuery("#applyActionBlock").show();
    }
    else {
      jQuery("#applyActionBlock").hide();
    }
  });

  jQuery("#permitAction input, #permitAction select").click(function() {
    jQuery("#applyActionBlock .infos").hide();
  });

  jQuery("#applyAction").click(function() {
    var action = jQuery("select[name=selectAction]").prop("value");
    var method = 'pwg.users.setInfo';
    var data = {
      pwg_token: pwg_token,
      user_id: selection
    };

    switch (action) {
      case 'delete':
        if (!jQuery("input[name=confirm_deletion]").is(':checked')) {
          alert(missingConfirm);
          return false;
        }
        method = 'pwg.users.delete';
        break;
      case 'group_associate':
        method = 'pwg.groups.addUser';
        data.group_id = jQuery("select[name=associate]").prop("value");
        break;
      case 'group_dissociate':
        method = 'pwg.groups.deleteUser';
        data.group_id = jQuery("select[name=dissociate]").prop("value");
        break;
      case 'status':
        data.status = jQuery("select[name=status]").prop("value");
        break;
      case 'enabled_high':
        data.enabled_high = jQuery("input[name=enabled_high]:checked").val();
        break;
      case 'level':
        data.level = jQuery("select[name=level]").val();
        break;
      case 'nb_image_page':
        data.nb_image_page = jQuery("input[name=nb_image_page]").val();
        break;
      case 'theme':
        data.theme = jQuery("select[name=theme]").val();
        break;
      case 'language':
        data.language = jQuery("select[name=language]").val();
        break;
      case 'recent_period':
        data.recent_period = jQuery("input[name=recent_period]").val();
        break;
      case 'expand':
        data.expand = jQuery("input[name=expand]:checked").val();
        break;
      case 'show_nb_comments':
        data.show_nb_comments = jQuery("input[name=show_nb_comments]:checked").val();
        break;
      case 'show_nb_hits':
        data.show_nb_hits = jQuery("input[name=show_nb_hits]:checked").val();
        break;
      default:
        alert("Unexpected action");
        return false;
    }

    jQuery.ajax({
      url: "ws.php?format=json&method="+method,
      type:"POST",
      data: data,
      beforeSend: function() {
        jQuery("#applyActionLoading").show();
      },
      success:function(data) {
        oTable.api().draw();
        jQuery("#applyActionLoading").hide();
        jQuery("#applyActionBlock .infos").show();

        if (action == 'delete') {
          var allUsers_new = [];
          for(var i in allUsers)
          {
            if (selection.indexOf(allUsers[i]) == -1) {
              allUsers_new.push(allUsers[i]);
            }
          }
          allUsers = allUsers_new;
          console.log('allUsers_new.length = '+allUsers_new.length);
          selection = [];
          checkSelection();
        }
      },
      error:function(XMLHttpRequest, textStatus, errorThrows) {
        jQuery("#applyActionLoading").hide();
      }
    });

    return false;
  });

});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

.dataTables_wrapper, .dataTables_info {clear:none;}
.dataTables_wrapper .dataTables_info {clear:none;}
.dataTables_wrapper::after {clear:none;}

table.dataTable {clear:right;padding-top:10px;}
.dataTable td img {margin-bottom: -6px;margin-left: -6px;}

.paginate_button, .paginate_button:hover {background:none !important;}
.dataTables_wrapper .dataTables_paginate .paginate_button {color:#005E89 !important;}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {color:#D54E21 !important; text-decoration:underline !important; border-color:transparent;}

.paginate_button.next {padding-right:3px !important;}

table.dataTable tbody th,
table.dataTable tbody td {
  padding: 3px 5px;
}

.bulkAction {margin-top:10px;}
#addUserForm p {margin-left:0;}
#applyActionBlock .actionButtons {margin-left:0;}
span.infos, span.errors {background-image:none; padding:2px 5px; margin:0;border-radius:5px;}

.userStats {margin-top:10px;}
.recent_period_infos {margin-left:10px;}
.nb_image_page, .recent_period {width:340px;margin-top:5px;}
#action_recent_period .recent_period {display:inline-block;}
.checkActions {padding:0 1em;}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="titrePage">
  <h2><?php echo l10n('User list');?>
</h2>
</div>

<p class="showCreateAlbum" id="showAddUser">
  <a href="#" id="addUser" class="icon-plus-circled"><?php echo l10n('Add a user');?>
</a>
  <span class="infos" style="display:none"></span>
</p>

<form id="addUserForm" style="<?php if (!isset($_smarty_tpl->tpl_vars['show_add_user']->value)) {?>display:none<?php }?>" method="post" name="add_user" action="<?php echo $_smarty_tpl->tpl_vars['F_ADD_ACTION']->value;?>
">
  <fieldset class="with-border">
    <legend><?php echo l10n('Add a user');?>
</legend>

    <p>
      <strong><?php echo l10n('Username');?>
</strong><br>
      <input type="text" name="username" maxlength="50" size="20">
    </p>

    <p>
      <strong><?php echo l10n('Password');?>
</strong><br>
      <input type="<?php if ($_smarty_tpl->tpl_vars['Double_Password']->value) {?>password<?php } else { ?>text<?php }?>" name="password">
      <a id="genPass" href="#" class="icon-lock"><?php echo l10n('generate random password');?>
</a>
    </p>
    
<?php if ($_smarty_tpl->tpl_vars['Double_Password']->value) {?>
    <p>
      <strong><?php echo l10n('Confirm Password');?>
</strong><br>
      <input type="password" name="password_confirm">
    </p>
<?php }?>

    <p>
      <strong><?php echo l10n('Email address');?>
</strong><br>
      <input type="text" name="email">
    </p>

    <p>
      <label><input type="checkbox" name="send_password_by_mail"> <strong><?php echo l10n('Send connection settings by email');?>
</strong></label>
    </p>

    <p class="actionButtons">
      <input class="submit" name="submit_add" type="submit" value="<?php echo l10n('Submit');?>
">
      <a href="#" id="addUserClose"><?php echo l10n('Cancel');?>
</a>
      <span class="loading" style="display:none"><img src="themes/default/images/ajax-loader-small.gif"></span>
      <span class="errors" style="display:none"></span>
    </p>
  </fieldset>
</form>

<form method="post" name="preferences" action="">

<table id="userList">
  <thead>
    <tr>
      <th>id</th>
      <th><?php echo l10n('Username');?>
</th>
      <th><?php echo l10n('Status');?>
</th>
      <th><?php echo l10n('Email address');?>
</th>
      <th><?php echo l10n('Groups');?>
</th>
      <th><?php echo l10n('Privacy level');?>
</th>
      <th><?php echo l10n('registration date');?>
</th>
    </tr>
  </thead>
</table>

<div style="clear:right"></div>

<p class="checkActions">
  <?php echo l10n('Select:');?>

  <a href="#" id="selectAll"><?php echo l10n('All');?>
</a>,
  <a href="#" id="selectNone"><?php echo l10n('None');?>
</a>,
  <a href="#" id="selectInvert"><?php echo l10n('Invert');?>
</a>

  <span id="selectedMessage"></span>
</p>

<fieldset id="action">
  <legend><?php echo l10n('Action');?>
</legend>

  <div id="forbidAction"><?php echo l10n('No user selected, no action possible.');?>
</div>
  <div id="permitAction" style="display:none">

    <select name="selectAction">
      <option value="-1"><?php echo l10n('Choose an action');?>
</option>
      <option disabled="disabled">------------------</option>
      <option value="delete" class="icon-trash"><?php echo l10n('Delete selected users');?>
</option>
      <option value="status"><?php echo l10n('Status');?>
</option>
      <option value="group_associate"><?php echo l10n('associate to group');?>
</option>
      <option value="group_dissociate"><?php echo l10n('dissociate from group');?>
</option>
      <option value="enabled_high"><?php echo l10n('High definition enabled');?>
</option>
      <option value="level"><?php echo l10n('Privacy level');?>
</option>
      <option value="nb_image_page"><?php echo l10n('Number of photos per page');?>
</option>
      <option value="theme"><?php echo l10n('Theme');?>
</option>
      <option value="language"><?php echo l10n('Language');?>
</option>
      <option value="recent_period"><?php echo l10n('Recent period');?>
</option>
      <option value="expand"><?php echo l10n('Expand all albums');?>
</option>
<?php if ($_smarty_tpl->tpl_vars['ACTIVATE_COMMENTS']->value) {?>
      <option value="show_nb_comments"><?php echo l10n('Show number of comments');?>
</option>
<?php }?>
      <option value="show_nb_hits"><?php echo l10n('Show number of hits');?>
</option>
    </select>

    
    <div id="action_delete" class="bulkAction">
      <p><label><input type="checkbox" name="confirm_deletion" value="1"> <?php echo l10n('Are you sure?');?>
</label></p>
    </div>

    
    <div id="action_status" class="bulkAction">
      <select name="status">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['pref_status_options']->value,'selected'=>$_smarty_tpl->tpl_vars['pref_status_selected']->value),$_smarty_tpl);?>

      </select>
    </div>

    
    <div id="action_group_associate" class="bulkAction">
      <?php echo smarty_function_html_options(array('name'=>'associate','options'=>$_smarty_tpl->tpl_vars['association_options']->value,'selected'=>$_smarty_tpl->tpl_vars['associate_selected']->value),$_smarty_tpl);?>

    </div>

    
    <div id="action_group_dissociate" class="bulkAction">
      <?php echo smarty_function_html_options(array('name'=>'dissociate','options'=>$_smarty_tpl->tpl_vars['association_options']->value,'selected'=>$_smarty_tpl->tpl_vars['dissociate_selected']->value),$_smarty_tpl);?>

    </div>

    
    <div id="action_enabled_high" class="bulkAction">
      <label><input type="radio" name="enabled_high" value="true"><?php echo l10n('Yes');?>
</label>
      <label><input type="radio" name="enabled_high" value="false" checked="checked"><?php echo l10n('No');?>
</label>
    </div>

    
    <div id="action_level" class="bulkAction">
      <select name="level" size="1">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['level_options']->value,'selected'=>$_smarty_tpl->tpl_vars['level_selected']->value),$_smarty_tpl);?>

      </select>
    </div>

    
    <div id="action_nb_image_page" class="bulkAction">
      <strong class="nb_image_page_infos"></strong>
      <div class="nb_image_page"></div>
      <input type="hidden" name="nb_image_page" value="<?php echo $_smarty_tpl->tpl_vars['NB_IMAGE_PAGE']->value;?>
">
    </div>

    
    <div id="action_theme" class="bulkAction">
      <select name="theme" size="1">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['theme_options']->value,'selected'=>$_smarty_tpl->tpl_vars['theme_selected']->value),$_smarty_tpl);?>

      </select>
    </div>

    
    <div id="action_language" class="bulkAction">
      <select name="language" size="1">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['language_options']->value,'selected'=>$_smarty_tpl->tpl_vars['language_selected']->value),$_smarty_tpl);?>

      </select>
    </div>

    
    <div id="action_recent_period" class="bulkAction">
      <div class="recent_period"></div>
      <span class="recent_period_infos"></span>
      <input type="hidden" name="recent_period" value="<?php echo $_smarty_tpl->tpl_vars['RECENT_PERIOD']->value;?>
">
    </div>

    
    <div id="action_expand" class="bulkAction">
      <label><input type="radio" name="expand" value="true"><?php echo l10n('Yes');?>
</label>
      <label><input type="radio" name="expand" value="false" checked="checked"><?php echo l10n('No');?>
</label>
    </div>

    
    <div id="action_show_nb_comments" class="bulkAction">
      <label><input type="radio" name="show_nb_comments" value="true"><?php echo l10n('Yes');?>
</label>
      <label><input type="radio" name="show_nb_comments" value="false" checked="checked"><?php echo l10n('No');?>
</label>
    </div>

    
    <div id="action_show_nb_hits" class="bulkAction">
      <label><input type="radio" name="show_nb_hits" value="true"><?php echo l10n('Yes');?>
</label>
      <label><input type="radio" name="show_nb_hits" value="false" checked="checked"><?php echo l10n('No');?>
</label>
    </div>

    <p id="applyActionBlock" style="display:none" class="actionButtons">
      <input id="applyAction" class="submit" type="submit" value="<?php echo l10n('Apply action');?>
" name="submit"> <span id="applyOnDetails"></span>
      <span id="applyActionLoading" style="display:none"><img src="themes/default/images/ajax-loader-small.gif"></span>
      <span class="infos" style="display:none">&#x2714; <?php echo l10n('Users modified');?>
</span>
    </p>

  </div> 
</fieldset>

</form> 


<?php echo '<script'; ?>
 type="text/template" class="userDetails">
<form>
  <div class="userActions">
<?php echo '<%';?> if (!user.isPasswordProtected) { <?php echo '%>';?>
    <span class="changePasswordDone infos" style="display:none">&#x2714; <?php echo l10n('Password updated');?>
</span>
    <span class="changePassword" style="display:none"><?php echo l10n('New password');?>
 <input type="text"> <a href="#" class="buttonLike updatePassword"><img src="themes/default/images/ajax-loader-small.gif" style="margin-bottom:-1px;margin-left:1px;display:none;"><span class="text"><?php echo l10n('Submit');?>
</span></a> <a href="#" class="cancel"><?php echo l10n('Cancel');?>
</a></span>
    <a class="icon-key changePasswordOpen" href="#"><?php echo l10n('Change password');?>
</a>
    <br>
<?php echo '<%';?> } <?php echo '%>';?>

    <a target="_blank" href="admin.php?page=user_perm&amp;user_id=<?php echo '<%';?>- user.id <?php echo '%>';?>" class="icon-lock"><?php echo l10n('Permissions');?>
</a>

<?php echo '<%';?> if (!user.isProtected) { <?php echo '%>';?>
    <br><span class="userDelete"><img class="loading" src="themes/default/images/ajax-loader-small.gif" style="display:none;"><a href="#" class="icon-trash" data-user_id="<?php echo '<%';?>- user.id <?php echo '%>';?>"><?php echo l10n('Delete');?>
</a></span>
<?php echo '<%';?> } <?php echo '%>';?>

  </div>

  <span class="changeUsernameOpen"><strong class="username"><?php echo '<%';?>- user.username <?php echo '%>';?></strong>

<?php echo '<%';?> if (!user.isGuest) { <?php echo '%>';?>
  <a href="#" class="icon-pencil"><?php echo l10n('Change username');?>
</a></span>
  <span class="changeUsername" style="display:none">
  <input type="text"> <a href="#" class="buttonLike updateUsername"><img src="themes/default/images/ajax-loader-small.gif" style="margin-bottom:-1px;margin-left:1px;display:none;"><span class="text"><?php echo l10n('Submit');?>
</span></a> <a href="#" class="cancel"><?php echo l10n('Cancel');?>
</a>
<?php echo '<%';?> } <?php echo '%>';?>

  </span>

  <div class="userStats"><?php echo '<%';?>- user.registeredOn_string <?php echo '%>';?><br><?php echo '<%';?>- user.lastVisit_string <?php echo '%>';?></div>

  <div class="userPropertiesContainer">
    <input type="hidden" name="user_id" value="<?php echo '<%';?>- user.id <?php echo '%>';?>">
    <div class="userPropertiesSet">
      <div class="userPropertiesSetTitle"><?php echo l10n('Properties');?>
</div>

      <div class="userProperty"><strong><?php echo l10n('Email address');?>
</strong>
        <br>
<?php echo '<%';?> if (!user.isGuest) { <?php echo '%>';?>
        <input name="email" type="text" value="<?php echo '<%';?>- user.email <?php echo '%>';?>">
<?php echo '<%';?> } else { <?php echo '%>';?>
      <?php echo l10n('N/A');?>

<?php echo '<%';?> } <?php echo '%>';?>
      </div>

      <div class="userProperty"><strong><?php echo l10n('Status');?>
</strong>
        <br>
<?php echo '<%';?> if (!user.isProtected) { <?php echo '%>';?>
        <select name="status">
  <?php echo '<%';?> _.each( user.statusOptions, function( option ){ <?php echo '%>';?>
          <option value="<?php echo '<%';?>- option.value<?php echo '%>';?>" <?php echo '<%';?> if (option.isSelected) { <?php echo '%>';?>selected="selected"<?php echo '<%';?> } <?php echo '%>';?>><?php echo '<%';?>- option.label <?php echo '%>';?></option>
  <?php echo '<%';?> }); <?php echo '%>';?>
        </select>
<?php echo '<%';?> } else { <?php echo '%>';?>
        <?php echo '<%';?>- user.statusLabel <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>
      </div>

      <div class="userProperty"><strong><?php echo l10n('Privacy level');?>
</strong>
        <br>
        <select name="level">
<?php echo '<%';?> _.each( user.levelOptions, function( option ){ <?php echo '%>';?>
          <option value="<?php echo '<%';?>- option.value<?php echo '%>';?>" <?php echo '<%';?> if (option.isSelected) { <?php echo '%>';?>selected="selected"<?php echo '<%';?> } <?php echo '%>';?>><?php echo '<%';?>- option.label <?php echo '%>';?></option>
<?php echo '<%';?> }); <?php echo '%>';?>
        </select>
      </div>

      <div class="userProperty"><label><input type="checkbox" name="enabled_high"<?php echo '<%';?> if (user.enabled_high == 'true') { <?php echo '%>';?> checked="checked"<?php echo '<%';?> } <?php echo '%>';?>> <strong><?php echo l10n('High definition enabled');?>
</strong></label></div>

      <div class="userProperty"><strong><?php echo l10n('Groups');?>
</strong><br>
        <select data-selectize="groups" placeholder="<?php echo l10n('Type in a search term');?>
" 
          name="group_id[]" multiple style="width:340px;"></select>
      </div>
    </div>

    <div class="userPropertiesSet userPrefs">
      <div class="userPropertiesSetTitle"><?php echo l10n('Preferences');?>
</div>

      <div class="userProperty"><strong class="nb_image_page_infos"></strong>
        <div class="nb_image_page"></div>
        <input type="hidden" name="nb_image_page" value="<?php echo '<%';?>- user.nb_image_page <?php echo '%>';?>">
      </div>

      <div class="userProperty"><strong><?php echo l10n('Theme');?>
</strong><br>
        <select name="theme">
<?php echo '<%';?> _.each( user.themeOptions, function( option ){ <?php echo '%>';?>
          <option value="<?php echo '<%';?>- option.value<?php echo '%>';?>" <?php echo '<%';?> if (option.isSelected) { <?php echo '%>';?>selected="selected"<?php echo '<%';?> } <?php echo '%>';?>><?php echo '<%';?>- option.label <?php echo '%>';?></option>
<?php echo '<%';?> }); <?php echo '%>';?>
        </select>
      </div>

      <div class="userProperty"><strong><?php echo l10n('Language');?>
</strong><br>
        <select name="language">
<?php echo '<%';?> _.each( user.languageOptions, function( option ){ <?php echo '%>';?>
          <option value="<?php echo '<%';?>- option.value<?php echo '%>';?>" <?php echo '<%';?> if (option.isSelected) { <?php echo '%>';?>selected="selected"<?php echo '<%';?> } <?php echo '%>';?>><?php echo '<%';?>- option.label <?php echo '%>';?></option>
<?php echo '<%';?> }); <?php echo '%>';?>
        </select>
      </div>

      <div class="userProperty"><strong><?php echo l10n('Recent period');?>
</strong> <span class="recent_period_infos"></span>
        <div class="recent_period"></div>
        <input type="hidden" name="recent_period" value="<?php echo '<%';?>- user.recent_period <?php echo '%>';?>">
      </div>

      <div class="userProperty"><label><input type="checkbox" name="expand"<?php echo '<%';?> if (user.expand == 'true') { <?php echo '%>';?> checked="checked"<?php echo '<%';?> }<?php echo '%>';?>> <strong><?php echo l10n('Expand all albums');?>
</strong></label></div>

      <div class="userProperty"><label><input type="checkbox" name="show_nb_comments"<?php echo '<%';?> if (user.show_nb_comments == 'true') { <?php echo '%>';?> checked="checked"<?php echo '<%';?> }<?php echo '%>';?>> <strong><?php echo l10n('Show number of comments');?>
</strong></label></div>

      <div class="userProperty"><label><input type="checkbox" name="show_nb_hits"<?php echo '<%';?> if (user.show_nb_hits == 'true') { <?php echo '%>';?> checked="checked"<?php echo '<%';?> }<?php echo '%>';?>> <strong><?php echo l10n('Show number of hits');?>
</strong></label></div>

    </div>

    <div style="clear:both"></div>
  </div> 

  <input type="submit" value="<?php echo htmlspecialchars(l10n('Update user'), ENT_QUOTES, 'UTF-8', true);?>
" data-user_id="<?php echo '<%';?>- user.id <?php echo '%>';?>">
  <img class="submitWait" src="themes/default/images/ajax-loader-small.gif" style="display:none">
  <a href="#close" class="icon-cancel-circled close-user-details" title="<?php echo l10n('Close user details');?>
"><?php echo l10n('close');?>
</a>
  <span class="propertiesUpdateDone" style="display:none">
    <span class="infos">&#x2714; ...</span>
    <span class="errors">&#x2718; ...</span>
  </span>
</form>
<?php echo '</script'; ?>
>

<div style="display:none">
  <div class="user_form_popin userProperties"></div>
</div><?php }
}
