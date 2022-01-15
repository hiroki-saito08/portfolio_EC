// 商品の詳細ページを表示
$(function () {
  $('.click_pop').on('click', function () {

    var target = $(this).data('target');
    var target_pop_area = document.getElementById(target);

    if ($(target_pop_area).css('display') == 'none') {
      $(target_pop_area).css('display', 'block');
    }
  });
});
