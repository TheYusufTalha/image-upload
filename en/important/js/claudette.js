$(function() {
	var taeb = $(".taeb-switch");
	taeb.find(".taeb").on("click", function() {
	  var $this = $(this);
  
	  if ($this.hasClass("active")) return;
  
	  var direction = $this.attr("taeb-direction");
  
	  taeb.removeClass("left right").addClass(direction);
	  taeb.find(".taeb.active").removeClass("active");
	  $this.addClass("active");
	});
  });
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
	if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
	  document.getElementById("nav").style.height = "120px";
	  document.getElementById("nav").style.boxShadow = "0px 3px 5px #000";
	} else {
	  document.getElementById("nav").style.height = "90px";
	  document.getElementById("nav").style.boxShadow = "0px 0px 0px #000";
	}
  }

  
  