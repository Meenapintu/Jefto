
<footer class="page-footer"  style='margin-top:0px;'>

<a name='contact' ></a>
  <div class=" container row" >
    <div class="col l6 s12 m6">
      <h5 class="white-text">Jefto.com</h5>
      <p class="grey-text text-lighten-4">Jefto is a analytic marketing tool which analyze the data of an event and makes it easy for a marketing manager to make a decision of sponsorship to events.</p>
    </div>
    <div class="col l1 offset-l1 s6 m3 " >
      <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="https://plus.google.com/u/0/+JeftoGlobal">Google+</a></li>
          <li><a class="grey-text text-lighten-3" href=" https://www.facebook.com/JeftoGlobal">Facebook</a></li>
          <li><a class="grey-text text-lighten-3" href="https://linkedin.com/company/jefto">Linkedin</a></li>
          <li><a class="grey-text text-lighten-3" href="https://twitter.com/JeftoGlobal">Twitter</a></li>
        </ul>
    </div>


    <div class="col l3  s4  offset-l1  offset-s1 m3" >
      <h5 class="white-text">Contact</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">+918898231726</a></li>
          <li><a class="grey-text text-lighten-3" href="mailto:info@jefto.com">info@jefto.com</a></li>
         
        </ul>
    </div>

  
  </div>

  <div class="footer-copyright" style="background:rgba(0,0,0,1);">
    <div class="container" style="background:transparent;">
      © 2015 Copyright 
      <a class="white-text text-lighten-4 right" href="#!">Jefto.com</a>
    </div>
  </div>
</footer>
<script src="materialize/js/materialize.min.js"></script>
<script >

$('#logo').css('height',($(".nav-wrapper").height()+'px'));
$('.dh').css('height',$('.udh').height());
function select_one(e){
  $(e).parent().siblings().children('#valtext').attr('value',e.value);
  $(e).parent().siblings().children('#valtext').change();
  $(e).parent().siblings("#other").hide();
  $(e).parent().parent().siblings("p").attr('class','msg');

}

function select_mult(e){
  var val = $(e).parent().siblings().children('.checkbox');
  var newval ='';
  for (var i = 0; i < val.length; i++) {
    if($(val[i]).attr('type') == 'checkbox'){
      if($(val[i]).is(':checked')){
        newval += val[i].value;
        newval += "___";
      }
    }
    else{
      if(typeof(val[i]) != "undefined"){
        newval += val[i].value;
        newval += "___";
      }
    }
  }
  if($(e).attr('type') == 'checkbox'){
    if($(e).is(':checked')){
      newval += e.value;
      newval += "___";
    }
  }
  else{
    if(typeof(e) != "undefined"){
      newval += e.value;
      newval += "___";
    }
  }
  $(e).parent().siblings().children('#valtext').attr('value',newval);
  $(e).parent().parent().siblings("p").attr('class','msg');
}

function other_input(e){
  if($(e).is(':checked')){
    $(e).parent().siblings("#other").show();
    $(e).parent().siblings("#other").children().attr('class','checkbox');
  }
  else{
    $(e).parent().siblings("#other").hide();
    $(e).parent().siblings("#other").children().attr('class','NOTCHECKD');
  }
}


function selectform1(name,option){
  var sform= "<select name= '"+name+"' class='browser-default'>";
    for (var i = option.length - 1; i >= 0; i--) {
      sform+= "<option value = '"+option[i]+"' >"+option[i]+"</option>";
    }
    sform+= "</select>";
  return sform;
}


function add_feild(e){
  if (e.name =='social_media'){
    var placeholder = 'https://';
      type = "text";
  }
  else if (e.name == 'key_number'){
    var placeholder ='How Many ';
      type = "number";
  }
  else if (e.name == 'online_promotion'){
       var placeholder ='https://';
      type = "text";
  }
  else{
    var placeholder ='How much ( write % ) ';
      type = "number";  
  }
  $(e).siblings("#replace_me").replaceWith(key_numbers(eval(e.name),e.id+"["+ e.value++ +"]",e.id+"["+e.value++ +"]",placeholder,type
    ));
  $(e).siblings("#"+e.id).attr('value',e.value);
  $(".sage_range__").each( function(){$(this).siblings('input').attr("readonly",true);});
  //$( "input[name^='age_range__']" ).attr("readonly",true);
}
 

$('#select_in').keypress(function(){
 
  $('.s-div').hide();
});

$('#select_in').on('focus',function(){
   //console.log($(this).attr('value',this.value));
});
$('#select_in').on('input',function(){
   //console.log(this.value);
   //this.value='text101';
});
function showop(e) {
  $(e).siblings('.s-div').show();
}

function setv(th,e) {
      //   e.parentElement.nodeName.parentElement.nodeName.previousSibling
  //var ptr = $(e).parent().parent().siblings("#select_in").attr('value',$(e).html());
       // $(e).parent().parent().siblings("#select_in").attr('',$(e).html());
    //ptr.value = $(e).html();
   // $(e).parent().parent().siblings("#select_in").value='test102';
  //alert(e);
 //alert(e);
    document.getElementsByClassName(e)[0].value = $(th).html()
 //console.log();
  $('.s-div').hide();
};

$(".button-collapse").sideNav();

$(document).ready( function(){
  $('#gender_ratio__').mousemove(function(event){
    $('.value').html($(this).val());
  });

  $(window).resize(function(){
        $('#logo').css('height',($(".nav-wrapper").height()+'px'));
        $('.dh').css('height',$('.udh').height());
        $('.ellipsis').width(($('.container').width()-90)+'px');
        //alert($(".p0_segmentMainLabel-outer").attr('id'));
    });

  $(document).click(function(e){
    if($(e.target).attr('id')!='select_in'){
      $('.s-div').hide();
    }
  });
});
$(window).ready(function(){
  $('.ellipsis').width(($('.container').width()-90)+'px');
});

</script>