<?php
if(isset($_REQUEST['entryid']) && $_REQUEST['entryid']!='') {
  global $wpdb;
  $data = $wpdb->get_row( "SELECT * FROM `prefix_rul_team` WHERE id = '".$_REQUEST['entryid']."'" );
?>
  <div class="wrap wqmain_body">
    <h3 class="wqpage_heading">Edit Team Member</h3>
    <div class="wqform_body">
      <form name="update_form" id="update_form">
        <input type="hidden" name="wqentryid" id="wqentryid" value="<?=$_REQUEST['entryid']?>" />
        <div class="member-add">       
        <div class="wqlabel">Name</div>
        <div class="wqfield">
          <input type="text" class="wqtextfield" name="wqtitle" id="wqtitle"  value="<?=$data->title?>" />
          <div id="wqtitle_message" class="wqmessage"></div>
        </div>
        

        <div>&nbsp;</div>
        </div>
        <div class="member-add">
      <div class="wqlabel">Designation</div>
      <div class="wqfield">
        <input type="text" class="wqtextfield" name="wqdesignation" id="wqdesignation"  value="<?=$data->designation?>" />
        <div id="wqdesignation_message" class="wqmessage"></div>
      </div>
      

      <div>&nbsp;</div>
      </div>

      <div class="member-add">
      <div class="wqlabel">ID</div>
      <div class="wqfield">
        <input type="number" class="wqtextfield" name="wqempid" id="wqempid"  value="<?=$data->empid?>" />
        <div id="wqempid_message" class="wqmessage"></div>
      </div>

      <div>&nbsp;</div>
      </div>
      <div class="member-add">
         <div class="wqlabel">Email</div>
       <div class="wqfield">
        <input type="email" class="wqtextfield" name="wqemail" id="wqemail" value="<?=$data->email?>"/>
        <div id="wqemail_message" class="wqmessage"></div>   
      </div>
     

      <div>&nbsp;</div>
     </div>
        <div><input type="submit" class="wqsubmit_button" id="wqedit" value="Update" /></div>
        <div>&nbsp;</div>
        <div class="wqsubmit_message"></div>

      </form>
    </div>
  </div>
<?php
} else {
?>
<div class="wrap wqmain_body">
  <h3 class="wqpage_heading">Add Team Member</h3>
  <div class="wqform_body">
    <form name="entry_form" id="entry_form">

    <div class="member-add">
      <div class="wqlabel">Name</div>
      <div class="wqfield">
        <input type="text" class="wqtextfield" name="wqtitle" id="wqtitle" value="" />
        <div id="wqtitle_message" class="wqmessage"></div>
      </div>
      
      <div>&nbsp;</div>
    </div>

    <div class="member-add">
      <div class="wqlabel">Designation</div>
      <div class="wqfield">
        <input type="text" class="wqtextfield" name="wqdesignation" id="wqdesignation" value=""/>
        <div id="wqdesignation_message" class="wqmessage"></div>
      </div>

      <div>&nbsp;</div>
    </div>

    <div class="member-add">
      <div class="wqlabel">ID</div>
      <div class="wqfield">
        <input type="number" class="wqtextfield" name="wqempid" id="wqempid" value="" />
        <div id="wqempid_message" class="wqmessage"></div>
      </div>

      <div>&nbsp;</div>
    </div>
    <div class="member-add">
      <div class="wqlabel">Email</div>
      <div class="wqfield">
        <input type="email" class="wqtextfield" name="wqemail" id="wqemail" value="" />
        <div id="wqemail_message" class="wqmessage"></div>
      </div>

      <div>&nbsp;</div>
    </div>
      <div><input type="submit" class="wqsubmit_button" id="wqadd" value="Add Member" /></div>
      <div>&nbsp;</div>
      <div class="wqsubmit_message"></div>

    </form>
  </div>
</div>
<?php } ?>
