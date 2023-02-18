var frmComponents = function() {
    'use strict';
    var a = function() {
        function calcval(productQTY, productID, productPRICE) {
            var calval = productQTY * productPRICE;
            return calval;
        }
        $(".qtybutton-1").bind('blur keyup change', function(e) {
            e.preventDefault();
            var productQTY = $(this).val();
            var productID = $(this).data('productid');
            var productPRICE = $(this).data('productprice');
            var productSAVE = $(this).data('offerprice');
            var productFULL = $(this).data('fullrate');
            var cval = calcval(productQTY, productID, productPRICE);
            $("#prototal-" + productID).html('<span>&#x20B9;</span>&nbsp;' + parseFloat(cval).toFixed(2));
            // NET VALUE
            var totalv = 0;
            $('.qtybutton-1').each(function(index, element) {
                if ($(element).val() !== null) {
                    totalv = totalv + calcval($(element).val(), $(element).data('productid'), $(element).data('productprice'));
                }
            });
            var discount_value = $('#discount_value').val();
            var ototal = (100 * parseFloat(totalv) / (100 - discount_value));
            var ototal = Math.round(ototal);
            var osave = ototal - totalv;
            $("#ototal").html('&#x20B9; ' + parseFloat(ototal).toFixed(2));
            $("#onettotal").html('&#x20B9; ' + parseFloat(totalv).toFixed(2));
            $("#osave").html('&#x20B9; ' + parseFloat(osave).toFixed(2));
            $("#ototalb").html('&#x20B9; ' + parseFloat(ototal).toFixed(2));
            $("#onettotalb").html('&#x20B9; ' + parseFloat(totalv).toFixed(2));
            $("#osaveb").html('&#x20B9; ' + parseFloat(osave).toFixed(2));
            $("#totalamountval").val(parseFloat(ototal));
            $("#totaldiscountval").val(parseFloat(totalv));
            $("#totalsaveval").val(parseFloat(osave));
        });
    };
    var b = function() {
        $("#crackers_form").validate({
            rules: {
                firstname: {
                    required: true,
                    minlength: 4
                },
                email: {
                    required: false,
                    email: false
                },
                address1: {
                    required: true
                },
                city: {
                    required: true
                },
                //	postcode: { required: true },
                telephone: {
                    required: true
                }
            },
            messages: {
                firstname: {
                    required: "Please Enter Your Name",
                    minlength: "Minimum Length should be 4"
                },
                //	email: { required: "Please Enter Your Email", email: "Please Enter Valid Email" },
                address1: {
                    required: "Please Enter Shipping Address"
                },
                city: {
                    required: "Please Enter City Name"
                },
                postcode: {
                    required: "Please Enter Postal Code"
                },
                telephone: {
                    required: "Please Enter Telephone Number"
                }
            },
            submitHandler: function(form) {
                var OBPARAM_1 = {
                    action: 'order_form_data'
                };
                $.ajax({
                        type: 'POST',
                        url: 'datasave.php',
                        data: $("#crackers_form").serialize() + '&' + $.param(OBPARAM_1),
                        dataType: 'json',
                        //encode      : true
                    })
                    .done(function(data) {
                        if (data.RESULT == 'SUCCESS') {
                            window.location.href = 'thank-you.php?orderkey=' + data.REFERENCENO;
                        }
                        if (data.RESULT == 'ERROR') {
                            alert("Minimum Purchase Value above Rs. 2500 for TN");
                        }
                    });
            }
            //event.preventDefault();
        });
    };
    return {
        //main function to initiate the module
        init: function() {
            a();
            b();
        }
    };
}();
$(document).ready(function() {
    'use strict';
    frmComponents.init();
    $("a.colorred").click(function() {
        var oldURL = window.location.href;
        var index = 0;
        var newURL = oldURL;
        index = oldURL.indexOf('?');
        if (index == -1) {
            index = oldURL.indexOf('#');
        }
        if (index != -1) {
            newURL = oldURL.substring(0, index);
        }
        window.history.pushState("object or string", "Title", newURL);
    });
    $(":input").not($(":button")).keypress(function(evt) {
        if (evt.keyCode == 13) {
            iname = $(this).val();
            if (iname !== 'Submit') {
                var fields = $(this).parents('form:eq(0),body').find('button, input[type=Number], textarea, select');
                var index = fields.index(this);
                if (index > -1 && (index + 1) < fields.length) {
                    fields.eq(index + 1).focus();
                }
                return false;
            }
        }
    });
});