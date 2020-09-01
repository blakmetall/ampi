$(function () {
  var viewport;
  var sending_contact_form = false;

  // general functions
  function get_viewport() {
    var w = Math.max(
      document.documentElement.clientWidth,
      window.innerWidth || 0
    );
    var h = Math.max(
      document.documentElement.clientHeight,
      window.innerHeight || 0
    );
    return { w: w, h: h };
  }

  viewport = get_viewport();

  $(window).resize(function () {
    viewport = get_viewport();
    fixImgHeight();
  });

  $(window).load(function () {
    fixImgHeight();
  });

  function fixImgHeight() {
    if (viewport.w > 767) {
      $(".about-image").css("height", "");
      var h = $(".about-image").closest(".us-row").outerHeight();
      h += "px";
    } else {
      var h = "";
    }
    $(".about-image").css("height", h);
  }

  // events
  function register_contact_event() {
    var $contact_form = $("#contact-form");

    if ($contact_form.length > 0) {
      $contact_form.submit(function (e) {
        e.preventDefault();
        var form = $(this);

        if (!sending_contact_form) {
          sending_contact_form = true;

          form.find(".app-msg-success").hide();

          $.post(
            form.attr("action"),
            $(this).serializeArray(),
            function (data) {
              if (data.success) {
                form.find(".app-msg-success").fadeIn();
              }
              sending_contact_form = false;
              form.trigger("reset");
            },
            "json"
          );
        }
      });

      setTimeout(function () {
        $contact_form.find(".form-captcha").val(_CAPTCHA);
      }, 2000);
    }
  }

  register_contact_event();
});
