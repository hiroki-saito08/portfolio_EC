// 商品の詳細ページを表示
$(function () {
  $('.click_pop').on('click', function () {
    var target = $(this).data('target');
    var target_pop_area = document.getElementById(target);

    if ($(target_pop_area).css('display') == 'none') {
      $(target_pop_area).css('display', 'block');
    }
  });
  $('.pop_area').on('click', function () {
    $('.pop_area').css('display', 'none');
  });
});

// ------カート計算
let value= document.getElementById('select-value');
let object = document.getElementById('object');

// object.innerHTML = currentTarget.value;

function inputChange(){
  console.log(event.currentTarget.value);
  object.innerHTML = event.currentTarget.value;
}
value.addEventListener('change', inputChange);
