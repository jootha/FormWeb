
var err;
$('input').on('mouseover', function () {
  $(this).addClass('inputHover');
});

$('input').on('mouseleave', function () {
  $(this).removeClass('inputHover');
});
$('input').on('blur', function () {
  if($(this).val()===''){
    $(this).css('background-color','#CC0000');
    }
});
$('input').on('focus', function () {
  $(this).css('background-color','#C8D9DB');
});

$('#unage').on('blur', function () {
  if($(this).val()===''||$(this).val()>=200||$(this).val()<0){
      console.log('erreur saisie Age');
    $(this).css('background-color','#CC0000');
  }
});

$('input[type="radio"][name="personage"]').on('change', function () {
  if($(this).val()==='autre'){
    $('#saisie_autre_mal').show();
  }else{
    $('#saisie_autre_mal').hide();
  }
});

$('#selectFem').on('change', function () {
  if($(this).val()==='autre'){
    $('#saisie_autre_fem').show();
  }else{
    $('#saisie_autre_fem').hide();
  }
});


$('form').on('submit', function (){
    //||'input[name=nom]'==''||'input[name=age]'==''
    if($('#uprenom').val() ==''||$('#unom').val() ==''||$('#unage').val() ==''){
        alert("Erreur : champ vide");
        return false;
    } else{
        return true;
    }
});



// window.setInterval(function(){
//   $('#poisson').animate(width:'5%').animate(width:'3%',2000)
//   .delay(1000);
//  }, 2000);

