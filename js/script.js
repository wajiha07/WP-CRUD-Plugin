jQuery(document).ready(function () {
  $(document).on("submit", "#entry_form", function (e) {
    e.preventDefault();
    $(".wqmessage").html("");
    $(".wqsubmit_message").html("");

    var wqtitle = $("#wqtitle").val();
    var wqdesignation = $("#wqdesignation").val();
    var wqempid = $("#wqempid").val();
    var wqemail = $("#wqemail").val();

    if (wqtitle == "") {
      $("#wqtitle_message").html("Title is Required");
    }
    if (wqdesignation == "") {
      $("#wqdesignation_message").html("Designation is Required");
    }
    if (wqempid == "") {
      $("#wqempid_message").html("ID is Required");
    }
    if (wqemail == "") {
      $("#wqemail_message").html("Email is Required");
    }

    if (
      wqtitle != "" &&
      wqdesignation != "" &&
      wqempid != "" &&
      wqemail != ""
    ) {
      var fd = new FormData(this);
      var action = "wqdata_entry";
      fd.append("action", action);

      $.ajax({
        data: fd,
        type: "POST",
        url: ajax_var.ajaxurl,
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
          var res = JSON.parse(response);
          $(".wqsubmit_message").html(res.message);
          if (res.rescode != "404") {
            $("#entry_form")[0].reset();
            $(".wqsubmit_message").css("color", "green");
          } else {
            $(".wqsubmit_message").css("color", "red");
          }
        },
      });
    } else {
      return false;
    }
  });

  
  $(document).on("submit", "#update_form", function (e) {
    e.preventDefault();
    $(".wqmessage").html("");
    $(".wqsubmit_message").html("");

    var wqtitle = $("#wqtitle").val();
    var wqdesignation = $("#wqdesignation").val();
    var wqempid = $("#wqempid").val();
    var wqemail = $("#wqemail").val();

    if (wqtitle == "") {
      $("#wqtitle_message").html("Title is Required");
    }
    if (wqdesignation == "") {
      $("#wqdesignation_message").html("Designation is Required");
    }
    if (wqempid == "") {
      $("#wqempid_message").html("ID is Required");
    }
    if (wqemail == "") {
      $("#wqemail_message").html("Email is Required");
    }

    if (
      wqtitle != "" &&
      wqdesignation != "" &&
      wqempid != "" &&
      wqemail != ""
    ) {
      var fd = new FormData(this);
      var action = "wqedit_entry";
      fd.append("action", action);

      $.ajax({
        data: fd,
        type: "POST",
        url: ajax_var.ajaxurl,
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
          var res = JSON.parse(response);
          $(".wqsubmit_message").html(res.message);
          if (res.rescode != "404") {
            $(".wqsubmit_message").css("color", "green");
          } else {
            $(".wqsubmit_message").css("color", "red");
          }
        },
      });
    } else {
      return false;
    }
  });
});
