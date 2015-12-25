window.setTimeout(function() {
$("#message1").fadeTo(1000, 0).slideUp(1000, function(){
$(this).remove();});}, 5500);



$(window).load(function() {
  $("html, body").animate({ scrollTop: $(document).height() }, 1000);
});
 (function($) {
	    $.fn.writeText = function(content) {
	    var contentArray = content.split(""),
	    current = 0,elem = this;
	    setInterval(function() {
	    if(current < contentArray.length) {
	    elem.text(elem.text() + contentArray[current++]);}}, 100);
	    elem.text('');
	    };
	})(jQuery);
    (function($) {
	$.fn.persent = function(value) {
	var contentArray = new Array();
	var j = 0;
	for (var i = 10; i < 100; i=i+10) {
	contentArray[j] = Math.floor((Math.random()*10)+i) + '%';
	j++;};
	var current = 0,
	elem = this;elem.text('');
	setInterval(function() {
	if(current < contentArray.length) {
	elem.text(contentArray[current++]);
	if(current == 9) {elem.text('100%');}
	}
  },value);};
})(jQuery);
function haxjk(){
	var msg =    $('.status');
	var status = $('.status#status1');
	msg.text('');
   	msg.writeText("GetInfo....wait");
    setTimeout(function() { msg.writeText("Accsses url Http(s)....");status.persent(200);}, 2000);
	setTimeout(function() { msg.writeText("Running Exploit Port..."); status.persent(600); }, 6000);
	setTimeout(function() { msg.writeText("Getting Data from url..."); status.persent(1000); }, 12000);
	setTimeout(function() { msg.writeText("#########################################################"); status.persent(900); }, 23000);
	setTimeout(function() { msg.writeText("Explode Data..."); status.persent(1700); }, 32000);
	setTimeout(function() { msg.writeText("Verifying Accsses."); status.persent(1700); }, 50000);
    setTimeout(function() { msg.writeText("Please wait data is pulled and saved..."); status.persent(6000); }, 68000);
};



window.setTimeout(function() {
$("#message").fadeTo(1000, 0).slideUp(1000, function(){
$(this).remove();});}, 5500);

window.setTimeout(function() {
$("#message2").fadeTo(800, 0).slideUp(800, function(){
$(this).remove();});}, 8000);

setInterval(function(){
$('#timeval').load('js/time.php');
},800);



$(function() {
    $('#num').keyup(function() {
        var pos = 0;
        if (this.selectionStart) {
            pos = this.selectionStart;
        } else if (document.selection) {
            this.focus();

            var r = document.selection.createRange();
            if (r == null) {
                pos = 0;
            } else {

                var re = this.createTextRange(),
                rc = re.duplicate();
                re.moveToBookmark(r.getBookmark());
                rc.setEndPoint('EndToStart', re);

                pos = rc.text.length;
            }
        }
        $('#c').html(this.value.substr(0, pos).split("\n").length);
    });
});






