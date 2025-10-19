        total_amount = 0;
        var calculateTotal = function(){
                var numberOfPages = $(".number-of-pages").val();
                var selectedValuePrice = $(".product-values").val();
                var totalTime = $(".total-time").val();
                total_amount = numberOfPages * selectedValuePrice * totalTime;
                $("#demo").html("$"+total_amount);
                $("#total_amount").val(total_amount);
        };
                
        $("#product").on("change",function(){
            var ele = $(this),
                value = JSON.parse(ele.val());
                productValuesHTML = "";   
                for (var key in value) {
                    if (value.hasOwnProperty(key)) {
                        productValuesHTML += '<option value="'+value[key]+'">'+key+'</option>';
                    }
                }
                $(".product-values").html(productValuesHTML);
            });
                $(".calAble").on('change',function(){
                    calculateTotal();
                });


    

        var totalPrice = 0;
            $(".calculate-products").change(function(){                   
                var ele = $(this),
                    isChecked = ele.is(':checked'),
                    value = parseFloat(ele.val()),
                    printText = ele.attr('data-print-text'),
                    product = ele.attr('data-product-text');
                    
                    if(!isChecked){
                        totalPrice -= value;    
                    }else{
                        totalPrice += value;
                    }

                    $(".total-amount").text(totalPrice);


           });
           

           $("#proceed").click(function(e) {
            if($(".abc").find("span").html().substr(1) ==0){
                alert("Please Select atleast one package to Proceed!");
            }else{
            
                $(".total-amount").val($(".abc").find("span").html().substr(1));
                // window.location.href = "http://logoorb.com/order/order-now";
            }
        });