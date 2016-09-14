// JavaScript File
jQuery.fn.topLink = function(settings) {
  settings = jQuery.extend({
    min: 1,
    fadeSpeed: 100
  }, settings);
  return this.each(function() {
    //listen for scroll
    var el = jQuery(this);
    el.hide(); //in case the user forgot
    jQuery(window).scroll(function() {
      if(jQuery(window).scrollTop() >= settings.min)
      {
        el.fadeIn(settings.fadeSpeed);
      }
      else
      {
        el.fadeOut(settings.fadeSpeed);
      }
    });
  });
};

//usage w/ smoothscroll
jQuery(document).ready(function() {
  //set the link
  jQuery('#top-link').topLink({
    min: 500,
    fadeSpeed: 100
  });
  //smoothscroll
  jQuery('#top-link').click(function(r) {    
    jQuery("html, body").animate({ scrollTop: 0 }, 300);
  });
});



$(document).ready(function () {
    $(".content").hide();
    $(".show_hide").on("click", function () {
        var txt = $(".content").is(':visible') ? 'More Information' : 'Less Information';
        $(".show_hide").text(txt);
        $(this).next('.content').slideToggle(200);
    });
    
    });
      
    $(document).ready(function () {
    $("#contactus").click(function() {
    $('html, body').animate({
        scrollTop: $("#contactinfo").offset().top - 50
    }, 2000);
    });
    
    $("#tofooter").click(function() {
    $('html, body').animate({
        scrollTop: $("#colophon").offset().top - 50
    }, 2000);
    });
        
    $("#arrowtoaboutus").click(function() {
    $('html, body').animate({
        scrollTop: $("#immigration").offset().top - 50
    }, 2000);
    });
    });
      
    $(document).ready(function () {
    $(".testimonials").hide();
    $("#tier1entvisa").click(function() {
        $('html, body').animate({
            scrollTop: $("#entrepreneur").offset().top - 50
        }, 2000);
        $(".testimonials").show();
    });
        
    $(".investorsback").hide();
    $("#tier1invisa").click(function() {
        $('html, body').animate({
            scrollTop: $("#investor").offset().top - 50
        }, 2000);
        $(".investorsback").show();
    });
        
    $(".soleback").hide();
    $("#sole1invisa").click(function() {
        $('html, body').animate({
            scrollTop: $("#sole").offset().top - 50
        }, 2000);
        $(".soleback").show();
    });
        
    $(".turkback").hide();
    $("#turkishvia").click(function() {
        $('html, body').animate({
            scrollTop: $("#turkish").offset().top - 50
        }, 2000);
        $(".turkback").show();
    });
        
    $(".tier2visa").hide();
    $("#generaltier2").click(function() {
        $('html, body').animate({
            scrollTop: $("#tier2visa").offset().top - 50
        }, 2000);
        $(".tier2visa").show();
    });
        
    $(".tier4visaback").hide();
    $("#tier4studvisa").click(function() {
        $('html, body').animate({
            scrollTop: $("#tier4studentvisa").offset().top - 50
        }, 2000);
        $(".tier4visaback").show();
    });
        
    $(".turkishworkerback").hide();
    $("#tuworkervisa").click(function() {
        $('html, body').animate({
            scrollTop: $("#turkishworker").offset().top - 50
        }, 2000);
        $(".turkishworkerback").show();
    });
        
    $(".ilrback").hide();
    $("#irlnat").click(function() {
        $('html, body').animate({
            scrollTop: $("#ilr").offset().top - 50
        }, 2000);
        $(".ilrback").show();
    });

    $(".eeaback").hide();
    $("#eeaec").click(function() {
        $('html, body').animate({
            scrollTop: $("#eea").offset().top - 50
        }, 2000);
        $(".eeaback").show();
    });
    
    $(".sponsorback").hide();
    $("#t2sponsor").click(function() {
        $('html, body').animate({
            scrollTop: $("#sponsorship").offset().top - 50
        }, 2000);
        $(".sponsorback").show();
    });
        
    $(".sponsorback4").hide();
    $("#t4sponsor").click(function() {
        $('html, body').animate({
            scrollTop: $("#sponsorship4").offset().top - 50
        }, 2000);
        $(".sponsorback4").show();
    });
        
    $(".complianceback").hide();
    $("#comsupport").click(function() {
        $('html, body').animate({
            scrollTop: $("#compliance").offset().top - 50
        }, 2000);
        $(".complianceback").show();
    });
    
    $("#exitentrepreneur").click(function(){
        $(".testimonials").hide();
    });

     $("#exitinvestor").click(function(){
        $(".investorsback").hide();
    });
    
    $("#exitsole").click(function(){
         $(".soleback").hide();
    });    
        
    $("#exitturkish").click(function(){
         $(".turkback").hide();
    });
    
    $("#exittier2visa").click(function(){
         $(".tier2visa").hide();
    });
        
    $("#exittier4studentvisa").click(function(){
         $(".tier4visaback").hide();
    });    
        
    $("#exitturkishworker").click(function(){
         $(".turkishworkerback").hide();
    });
    
    $("#exitilr").click(function(){
         $(".ilrback").hide();
    });
        
    $("#exitilr").click(function(){
         $(".ilrback").hide();
    });
    
    $("#exiteea").click(function(){
         $(".eeaback").hide();
    });
    
    $("#exitsponsorship").click(function(){
         $(".sponsorback").hide();
    });
    
    $("#exitsponsorship4").click(function(){
        $(".sponsorback4").hide();
    });
    
    $("#exitcompliance").click(function(){
        $(".complianceback").hide();
    });    
    
    
    
    
});



$("#tier1entvisa").stop.click(function() {
    $('html, body').animate({
        scrollTop: $("#entrepreneur").offset().top - 50
    }, 2000);
});

$("#tier1invisa").stop.click(function() {
    $('html, body').animate({
        scrollTop: $("#investor").offset().top - 50
    }, 2000);
});

$("#sole1invisa").stop.click(function() {
    $('html, body').animate({
        scrollTop: $("#sole").offset().top - 50
    }, 2000);
});

$("#turkishvia").stop.click(function() {
    $('html, body').animate({
        scrollTop: $("#turkish").offset().top - 50
    }, 2000);
});

$("#generaltier2").stop.click(function() {
    $('html, body').animate({
        scrollTop: $("#tier2visa").offset().top - 50
    }, 2000);
});

$("#tier4studvisa").stop.click(function() {
    $('html, body').animate({
        scrollTop: $("#tier4studentvisa").offset().top - 50
    }, 2000);
});

$("#tuworkervisa").stop.click(function() {
    $('html, body').animate({
        scrollTop: $("#turkishworker").offset().top - 50
    }, 2000);
});

$("#irlnat").stop.click(function() {
    $('html, body').animate({
        scrollTop: $("#ilr").offset().top - 50
    }, 2000);
});

$("#t2sponsor").stop.click(function() {
    $('html, body').animate({
        scrollTop: $("#sponsorship").offset().top - 50
    }, 2000);
});

$("#t4sponsor").stop.click(function() {
    $('html, body').animate({
        scrollTop: $("#sponsorship4").offset().top - 50
    }, 2000);
});

$("#t4sponsor").stop.click(function() {
    $('html, body').animate({
        scrollTop: $("#sponsorship4").offset().top - 50
    }, 2000);
});

$("#eeaec").stop.click(function() {
    $('html, body').animate({
        scrollTop: $("#eea").offset().top - 50
    }, 2000);
});

$("#comsupport").stop.click(function() {
    $('html, body').animate({
        scrollTop: $("#compliance").offset().top - 50
    }, 2000);
});


