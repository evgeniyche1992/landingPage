$(function(){
    $('.minimized').click(function(event) {
      var i_path = $(this).attr('src');
      $('body').append('<div id="overlay"></div><div id="magnify"><img src="'+i_path+'"><div id="close-popup"><i></i></div></div>');
      $('#magnify').css({
       left: ($(document).width() - $('#magnify').outerWidth())/2,
       // top: ($(document).height() - $('#magnify').outerHeight())/2 upd: 24.10.2016
              top: ($(window).height() - $('#magnify').outerHeight())/2
     });
      $('#overlay, #magnify').fadeIn('fast');
     // disableScroll();//при увеличении убиарем скролл
    });
    
    $('body').on('click', '#close-popup, #overlay', function(event) {
      event.preventDefault();
      $('#overlay, #magnify').fadeOut('fast', function() {
        $('#close-popup, #magnify, #overlay').remove();
      });
   //   enableScroll();//при закрытии окна скролл включаем на исходное состояние
    });
  });

  //блокировка скролла при открытии фотографии
  const disableScroll=()=>{
    const widthScroll=window.innerWidth-document.body.offsetWidth;
    document.body.dbScrollY = window.scrollY;
document.body.style.cssText=`
position:fixed;
top:${-window.scrollY}px;
left:0;
width:100%;
height:100vh;
overflow:hidden;
padding-right:${widthScroll}px;
`;
};
const enableScroll=()=>{
    const widthScroll=window.innerWidth-document.body.offsetWidth;
    document.body.dbScrollY = window.scrollY;
document.body.style.cssText=``;
top=window.document;
};

//при отправке формы окно, что успешнь отправлено
/*const sendContact=document.querySelector('.inputSubmit');
sendContact.addEventListener('click',event=>{
var inputPhone=document.querySelector('#phone');
var inputName=document.querySelector('#name');
var inputMail=document.querySelector('#mail');
if(!inputMail.value||!inputName.value||!inputPhone.value){alert("Введите пожалуйста все данные")}
else {alert("Спасибо, в ближайшее время мы свяжемся с Вами")}
});*/

//модальное окно после отправки формы

/*const subheaderCart =document.querySelector('.inputSubmit');//указать здесь кнопку для того , чтобы октрывать модальное окно 
const cartOverlay=document.querySelector('.cart-overlay');
const cartModalOpen=()=>{
    cartOverlay.classList.add('cart-overlay-open');
    disableScroll();
}
const cartModalClose=()=>{
    cartOverlay.classList.remove('cart-overlay-open');
    enableScroll();
}
subheaderCart.addEventListener('click',cartModalOpen);
cartOverlay.addEventListener('click',event=>{
   const target=event.target;
   if(target.matches('.cart__btn-close')|| target.matches('.cart-overlay')){
       cartModalClose();
   }}
);
*/
/*const headerCityButton = document.querySelector('.headerButton');

if(localStorage.getItem('site-location')){
    headerCityButton.textContent=localStorage.getItem('site-location');
}

headerCityButton.addEventListener('click',()=>{
    var city = prompt("Укажите Ваш город");
    headerCityButton.textContent=city;
    localStorage.setItem('site-location',city)}
);*/


