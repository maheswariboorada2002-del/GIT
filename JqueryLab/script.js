$(document).ready(function () {

  // 1) Basic effects
  $("#btnShow").on("click", function () {
    $("#basicBox").show();
  });

  $("#btnHide").on("click", function () {
    $("#basicBox").hide();
  });

  $("#btnToggle").on("click", function () {
    $("#basicBox").toggle();
  });

  // 2) Fade effects
  $("#btnFadeIn").on("click", function () {
    $("#fadeBox").fadeIn(400);
  });

  $("#btnFadeOut").on("click", function () {
    $("#fadeBox").fadeOut(400);
  });

  $("#btnFadeToggle").on("click", function () {
    $("#fadeBox").fadeToggle(400);
  });

  $("#btnFadeTo").on("click", function () {
    $("#fadeBox").fadeTo(500, 0.2);
  });

  // 3) Slide effects
  $("#btnSlideDown").on("click", function () {
    $("#slideBox").slideDown(300);
  });

  $("#btnSlideUp").on("click", function () {
    $("#slideBox").slideUp(300);
  });

  $("#btnSlideToggle").on("click", function () {
    $("#slideBox").slideToggle(300);
  });

  // 4) Custom animate + animation control
  $("#btnAnimate").on("click", function () {
    // Horizontal move + opacity + resize
    $("#animBox")
      .stop(true, true) // reset any current animation for a clean demo
      .animate({ left: "300px", opacity: 0.3, width: "160px" }, 700)
      .animate({ left: "0px", opacity: 1, width: "110px" }, 700);
  });

  // stop()
  $("#btnStop").on("click", function () {
    // stop current animation immediately
    $("#animBox").stop();
  });

  // finish()
  $("#btnFinish").on("click", function () {
    // finish queued animations
    $("#animBox").finish();
  });

  // queue() (add two animations to the queue)
  $("#btnQueue").on("click", function () {
    const $box = $("#animBox");

    $box.queue(function (next) {
      // delay() is an effect/animation helper; shown separately below too
      $box.animate({ left: "220px" }, 500);
      next();
    });

    $box.queue(function (next) {
      // resize + opacity after first queued step
      $box.animate({ width: "170px", opacity: 0.25 }, 500);
      next();
    });

    // Start the queue processing
    $box.dequeue();
  });

  // dequeue()
  $("#btnDequeue").on("click", function () {
    $("#animBox").dequeue();
  });

  // clearQueue()
  $("#btnClearQueue").on("click", function () {
    $("#animBox").clearQueue();
  });

});
