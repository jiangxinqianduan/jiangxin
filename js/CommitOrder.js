/**
 * Created by zhao.ren on 2016/4/15.
 */
$('input:radio[name="address"]').change(function () {
    var check=$(this).is(":checked");
    if (check) {
        $(this).parent().child("span").css("font-size","30px");
    }else{
        $(this).parent().child("span").css("font-size","15px");
    }
});
$('input[name="num"]').change(cal);

cal();

function cal() {
    var singlePrice = parseFloat($('.price').text());
    var num = $('input[name="num"]').val();
    $('.price-sum').text(num * singlePrice);
    var sum = num * singlePrice;
    var transFee = parseFloat($('.trans').text());


    $('.total').text(sum + transFee);
    $('.payy').text(sum + transFee);
}


