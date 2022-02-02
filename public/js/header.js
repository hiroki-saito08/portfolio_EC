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
// ------humbreger--------
$(function () {
  $('.js-btn').on('click', function () {        // js-btnクラスをクリックすると、
    $('.gnav_wrap , .btn-line ,.btn').toggleClass('open'); // メニューとバーガーの線にopenクラスをつけ外しする
  })
});
// ------acount-icon--------
$(function () {
  $('#icon-menu').on('click', function () {        // js-btnクラスをクリックすると、
    $('#icon-menubox').toggleClass('open'); // メニューとバーガーの線にopenクラスをつけ外しする
  })
});
// ------slick--------
$(function() {
  $('.thumb-item').slick({
       infinite: true,
       slidesToShow: 1,
       slidesToScroll: 1,
       arrows: false,
       fade: true,
       zIndex: 0,
       asNavFor: '.thumb-item-nav' //サムネイルのクラス名
  });
  $('.thumb-item-nav').slick({
       infinite: true,
       slidesToShow: 4,
       slidesToScroll: 1,
       autoplay:true,
       autoplaySpeed:2000,
       zIndex: 1,
       asNavFor: '.thumb-item', //スライダー本体のクラス名
       focusOnSelect: true,
  });
});
