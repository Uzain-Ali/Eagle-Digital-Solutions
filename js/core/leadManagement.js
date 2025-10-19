
// function onLoadCaptcha() {

//     $('.g-recaptcha').each(function (index, el) {
//         var widgetId = grecaptcha.render(el, {
//             'sitekey': jQuery(el).attr('data-sitekey')
//             , 'theme': jQuery(el).attr('data-theme')
//             , 'size': jQuery(el).attr('data-size')
//             , 'tabindex': jQuery(el).attr('data-tabindex')
//             , 'callback': jQuery(el).attr('data-callback')
//             , 'expired-callback': jQuery(el).attr('data-expired-callback')
//             , 'error-callback': jQuery(el).attr('data-error-callback')
//         });
//         $(this).attr('captcha-index', widgetId);
//     });
// }
$(function () {


    $(document).on("submit", ".leadFormWithOrder", function () {

        // var captchaResponse = grecaptcha.getResponse($(this).find('[captcha-index]').attr('captcha-index'));
        // if (captchaResponse == "") {
        //     generalHelper.errorHandler(["Captcha required"]);
        // } else {
        $(this).find('#formResult').removeClass("alert alert-success alert-danger").html('');
        $(this).find('#signupBtn').hide();
        $(this).find('#formResult').html('<img src="/order/img/loader.gif" alt="Loading, Please Wait..." />');
        var formType = $(this).parents('[data-form-type]').attr('data-form-type');
        $(this).find("#formType").val(formType);
        $(this).find("#referer").val(document.URL);
        $(this).find("#package_sku").val();
        $(this).find("#price").val();
        $(this).find("#title").val();
        $(this).find("#package-id").val();
        $(this).find("#promotionId").val();
        var currentForm = $(this);
        data = {
           sku : $(this).find("#package_sku").val(),
           price: $(this).find("#price").val(),
           title: $(this).find("#title").val(),
           id: $(this).find("#package-id").val(),
           priceText : $(this).find("#priceText").val(),
           promotion_id : $(this).find("#promotionId").val(),

            orderSession: 1
        };
        console.log($(this).find("#package_sku").val());
        var formData = new FormData(this);
        formData.append('orderData', JSON.stringify(data));
        // formData.append('captcha', captchaResponse);
       
       _ajax.postFormData("../crm_inc/core/leadWithOrderManagement", formData, function (response) {
           currentForm.find('#signupBtn').show();
           if (response.status) {
               currentForm.find('#formResult').addClass('alert alert-success').html("Congratulations! You've Signed up, redirecting please wait.....");
               currentForm.find('input:not([type="hidden"]),textarea,select').val('');
               generalHelper.redirectToNextPage(formType, currentForm.find("#package_sku").val());
           } else {
            var errorsData = JSON.parse(response.data);

            currentForm.find('#formResult').hide();

            if (errorsData.hasOwnProperty("errors")) {
                generalHelper.errorHandler(errorsData.errors);
            } else {
                generalHelper.errorHandler(response.messages);
            }
           }
       });




        }
    
    );


    $(document).on("submit", ".leadForm", function () {

        // var captchaResponse = grecaptcha.getResponse($(this).find('[captcha-index]').attr('captcha-index'));
        // if (captchaResponse == "") {
        //     generalHelper.errorHandler(["Captcha required"]);
        // } else {
        $(this).find('#formResult').removeClass("alert alert-success alert-danger").html('');
        $(this).find('#signupBtn').hide();
        $(this).find('#formResult').html('<img src="/order/img/loader.gif" alt="Loading, Please Wait..." />');
        var formType = $(this).parents('[data-form-type]').attr('data-form-type');
        $(this).find("#formType").val(formType);
        $(this).find("#referer").val(document.URL);
        var formData = new FormData(this);
        // formData.append('captcha', captchaResponse);
        // formData.append('captcha', captchaResponse);
        var currentForm = $(this);
        _ajax.postFormData("../crm_inc/core/leadManagement", formData, function (response) {
            currentForm.find('#signupBtn').show();
            if (response.status) {
                currentForm.find('#formResult').addClass('alert alert-success').html("Congratulations! You've Signed up, redirecting please wait.....");
                currentForm.find('input:not([type="hidden"]),textarea,select').val('');
                generalHelper.redirectToNextPage(formType, currentForm.find("#package_sku").val());
            } else {
                currentForm.find('#formResult').hide();
                var errorsData = response.messages;
                console.log(errorsData);

                currentForm.find('#formResult').hide();

                if (errorsData.hasOwnProperty("errors")) {
                    generalHelper.errorHandler(errorsData.errors);
                } else {
                    generalHelper.errorHandler(response.messages);
                }
            }
        });
        // }
    }
    );
}

);