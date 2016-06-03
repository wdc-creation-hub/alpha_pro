var mq = window.matchMedia('all and (max-width: 992px)');
if(mq.matches) {
    document.getElementsByClassName("col-md-6 col-sm-12").className = "col-xs-12";
     document.getElementsByClassName("styled-input").className = "styled-input wide";
    
} 

else {
   
}