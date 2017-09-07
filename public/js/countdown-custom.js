/*jQuery(document).ready(function() {
        $(function setTimer (y,m,d) {
            $('#defaultCountdown').countdown({until: new Date(2017, 10-2, 10-2, 0)}); // year, month, date, hour
        });
});*/
window.onload = function hold(me,newdate){
    // Set the date we're counting down to
    var d = document.getElementById('holder').innerHTML;
  var countDownDate = new Date(d).getTime();
  
  // Update the count down every 1 second
  var x = setInterval(function() {
  
    // Get todays date and time
    var now = new Date().getTime();
  
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
  
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
    // Display the result in the element with id="defaultCountdown"
   /* timer += '<span class="number-wrapper"><div class="line"></div><div class="caption">DAYS</div><span class="number day">'+day+'</span></span>';
    timer += '<span cl*/
    document.getElementById("defaultCountdown").innerHTML =
    '<span class="number-wrapper"><div class="line"></div><div class="caption">DAYS</div><span class="number day">'+ days + "</span></span> " + 
    '<span class="number-wrapper"><div class="line"></div><div class="caption">HOURS</div><span class="number hour">'+ hours + "</span></span> "+
    '<span class="number-wrapper"><div class="line"></div><div class="caption">MINS</div><span class="number min">'+ minutes + "</span></span> "+
    '<span class="number-wrapper"><div class="line"></div><div class="caption">SECS</div><span class="number sec">'+ seconds + "</span></span> ";
   // + hours + "h "
    //+ minutes + "m " + seconds + "s ";
  
  }, 1000);
  
  }
  
          

