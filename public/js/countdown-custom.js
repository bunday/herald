jQuery(document).ready(function() {
        $(function setTimer (y,m,d) {
            $('#defaultCountdown').countdown({until: new Date(y, m-2, d-2, 0)}); // year, month, date, hour
        });
});		

