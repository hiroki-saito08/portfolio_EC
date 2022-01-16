const main = document.querySelectorAll(".main_menu");
const item = Array.prototype.slice.call(main,0);

item.forEach(function (element) {
  element.addEventListener("mouseover",function(){
    element.querySelector(".sub_menu").classList.add("open");
  },false);
  element.addEventListener("mouseout",function(){
    element.querySelector(".sub_menu").classList.remove("open");
  },false);
});

$(function() {
  $('.thumb-item').slick({
       infinite: true,
       slidesToShow: 1,
       slidesToScroll: 1,
       arrows: false,
       fade: true,
       asNavFor: '.thumb-item-nav' //サムネイルのクラス名
  });
  $('.thumb-item-nav').slick({
       infinite: true,
       slidesToShow: 4,
       slidesToScroll: 1,
       autoplay:true,
       autoplaySpeed:2000,
       asNavFor: '.thumb-item', //スライダー本体のクラス名
       focusOnSelect: true,
  });
});
