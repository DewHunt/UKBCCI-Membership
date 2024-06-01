<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ukbcci-Membership Form</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <style>
        .error,
        .required {
            color: #ff0000;
        }

        .error {
            padding-left: 5px;
            padding-right: 5px;
        }

        .show {
            display: block
        }

        .hide {
            display: none
        }

        .alert-msg-div {
            margin-left: 20px;
            margin-right: 20px;
        }
    </style>

    <body>
        <div class="container">
            <div id="sec-1">
                <nav class=" navbar-expand-lg navbar-light bg-secondery">
                    <div class="header-top-content">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p>UK Bangladesh Catalysts of Commerce & Industry</p>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div id="sec-2">
                <div class=" logo-img">
                    <img src="assets/images/logo.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="header-title">Joining Us</div>
                <div class="alert-msg-div">
                    <div class="alert alert-success alert-dismissible hide success-alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Success!</strong> <span class="succes-message"></span>
                    </div>
                    <div class="alert alert-danger alert-dismissible hide error-alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Oops!</strong> <span class="error-message"></span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form method="post" id="registration-form" name="registration_form" action="registration.php">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12 mb-1">
                                    <label for="first_name">First name <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="first-name" name="first_name"
                                        placeholder="Please enter your first name" value="" required>
                                    <span class="error" id="first-name-err"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12 mb-1">
                                    <label for="last_name">Last name <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="last-name" name="last_name"
                                        placeholder="Please enter your last name" value="" required>
                                    <span class="error" id="last-name-err"></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
                                    <label for="company_name">Company Name & Trading As <span
                                            class="red">*</span></label>
                                    <input type="text" class="form-control" id="company-name" name="company_name"
                                        placeholder="Please enter your business name you wish to register" value=""
                                        required>
                                    <span class="error" id="company-name-err"></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
                                    <label for="business-type">Type of Business</label>
                                    <input type="text" class="form-control" id="business-type" name="business_type"
                                        value="">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
                                    <label for="establish-year">Year Established</label>
                                    <input type="number" class="form-control" id="establish-year" name="establish_year"
                                        value="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
                                    <label for="Tel">Tel</label>
                                    <input type="number" class="form-control" id="tel" name="tel" value="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
                                    <label for="business_address">Business Address <span class="red">*</span></label>
                                    <textarea class="form-control" rows="5" id="business-address"
                                        name="business_address"
                                        placeholder="Please enter your business name you wish to register"
                                        required></textarea>
                                    <span class="error" id="business-address-err"></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
                                    <label for="mobile">Mobile</label>
                                    <input type="number" class="form-control" id="mobile" name="mobile" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
                                    <label for="fax">Fax</label>
                                    <input type="number" class="form-control" id="fax" name="fax" value="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
                                    <label for="email">Email <span class="red">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Please enter your email address" value="" required>
                                    <span class="error" id="email-err"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
                                    <label for="website">Website</label>
                                    <input type="text" class="form-control" id="website" name="website"
                                        placeholder="Please enter your full URL" value="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
                                    <label for="employee-number">Number of Employees <span class="red">*</span></label>
                                    <input type="number" class="form-control" id="employee-number"
                                        name="employee_number" value="" required>
                                    <span class="error" id="employee-number-err"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
                                    <label for="reference">References</label>
                                    <input type="text" class="form-control" id="reference" name="reference" value="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
                                    <div class="checkbox-title">Annual Membership Fee</div>
                                    <!-- if you want to change the payment amount, you have to change the amount attribute value in the input filed -->
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input membership-type-radio"
                                            id="student-membership" name="membership_type" value="student" amount="50">
                                        <label class="form-check-label" for="student-membership">Student Member (Fees
                                            £50)</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input membership-type-radio"
                                            id="regular-membership" name="membership_type" value="regular" amount="200">
                                        <label class="form-check-label" for="regular-membership">Regular Member (Fees
                                            £200)</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input membership-type-radio"
                                            id="corporate-membership" name="membership_type" value="corporate"
                                            amount="500">
                                        <label class="form-check-label" for="corporate-membership">Corporate Member
                                            (Fees £500)</label>
                                    </div>
                                    <input type="hidden" class="selected-membership-amount"
                                        name="selected_membership_amount" value="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
                                    <div class="checkbox-title">
                                        Your business details will be stored on UKBCCI’s computerised membership list.
                                        This list is made available to other UKBCCI members, who may wish to send you
                                        information about their products/services, by post, email and telephone. If you
                                        do not agree to your information being shared in this way, please tick the
                                        relevant boxes.
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input shared-way-checkbox"
                                            id="email-checkbox" name="shared_way[]" value="email">
                                        <label class="form-check-label" for="email-checkbox">Email</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input shared-way-checkbox"
                                            id="post-checkbox" name="shared_way[]" value="post">
                                        <label class="form-check-label" for="post-checkbox">Post</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input shared-way-checkbox"
                                            id="telephone-checkbox" name="shared_way[]" value="telephone">
                                        <label class="form-check-label" for="telephone-checkbox">Telephone</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
                                    <div class="form-check">
                                        <input type="hidden" name="agree_check" value="no">
                                        <input type="checkbox" class="form-check-input agreed-checkbox"
                                            id="agree-checkbox" name="agree_check" value="yes">
                                        <label class="form-check-label" for="agree-checkbox">
                                            I agree to my details being stored for administrative purposes <span
                                                class="red">*</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" id="stripe-token" name="stripe_token" value="">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-1 text-end">
                                    <button type="submit" class="btn btn-primary save-btn"
                                        name="form_submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment Modal -->
        <div class="modal" id="paymentModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
                                <h5 class="payment-title"></h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
                                <div class="stripe-card-payment">
                                    <div class="sr-input sr-card-element StripeElement" id="card-element"></div>
                                    <div class="sr-field-error" id="card-errors" role="alert" style="color: red"></div>
                                    <div class="sr-result hidden">
                                        <p></p>
                                        <pre><code></code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-6 col mb-1 text-start">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-6 col mb-1 text-end">
                                <button type="button" class="btn btn-success pay-now" data-bs-dismiss="modal">Pay
                                    Now</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.validate.js"></script>
        <script type="text/javascript" src="assets/js/additional-methods.js"></script>
        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        <script type="text/javascript" src="https://js.stripe.com/v3/"></script>

        <script type="text/javascript">
            Stripe.setPublishableKey('pk_test_51Gs90iG29g7sUkRNQlMH6Fa1r98ykHh52E5gRqX7S2H1d13285TQ0KIlXTlPba02M2h4YKC1a8thuMiSGBGbowcb00SHObIYnt');
            var stripe = Stripe('pk_test_51Gs90iG29g7sUkRNQlMH6Fa1r98ykHh52E5gRqX7S2H1d13285TQ0KIlXTlPba02M2h4YKC1a8thuMiSGBGbowcb00SHObIYnt');
            var card;
            setupElements();

            $(document).on('change', '.membership-type-radio', function () {
                var selectedAmount = $(this).attr('amount');
                $('.selected-membership-amount').val(selectedAmount);
            });

            function emptyFormFields() {
                $('#first-name').val("");
                $('#last-name').val("");
                $('#company-name').val("");
                $('#business-type').val("");
                $('#establish-year').val("");
                $('#tel').val("");
                $('#business-address').val("");
                $('#mobile').val("");
                $('#fax').val("");
                $('#email').val("");
                $('#website').val("");
                $('#employee-number').val("");
                $('#reference').val("");
                $('.shared-way-checkbox').prop('checked', false);
                $('.membership-type-radio').prop('checked', false);
                $('.agreed-checkbox').prop('checked', false);
            }

            $.validator.addMethod("lettersDigitsSpaces", function (value, element) {
                return this.optional(element) || /^[a-zA-Z0-9\s.]*$/.test(value);
            },);

            $("form[name='registration_form']").validate({
                rules: {
                    first_name: { required: true, lettersDigitsSpaces: true },
                    last_name: { required: true, lettersDigitsSpaces: true },
                    company_name: { required: true, lettersDigitsSpaces: true },
                    business_type: { required: true, lettersDigitsSpaces: true },
                    establish_year: "required",
                    tel: "required",
                    business_address: { required: true, lettersDigitsSpaces: true },
                    mobile: "required",
                    email: { required: true, email: true },
                    website: "url",
                    employee_number: "required",
                    membership_type: "required",
                    agree_check: "required",
                },

                messages: {
                    first_name: { required: "Please enter your first name", lettersDigitsSpaces: "Please enter only letters, digits, or spaces" },
                    last_name: { required: "Please enter your last name", lettersDigitsSpaces: "Please enter only letters, digits, or spaces" },
                    company_name: { required: "Please enter your company name", lettersDigitsSpaces: "Please enter only letters, digits, or spaces" },
                    business_type: { required: "Please enter your business type", lettersDigitsSpaces: "Please enter only letters, digits, or spaces" },
                    establish_year: "Please enter the year of establishment",
                    tel: "Please enter your telephone number",
                    business_address: { required: "Please enter your business address", lettersDigitsSpaces: "Please enter only letters, digits, or spaces" },
                    mobile: "Please enter your mobile number",
                    email: {
                        required: "Please enter your email address",
                        email: "Please enter a valid email address"
                    },
                    website: "Please enter a valid URL for your website",
                    employee_number: "Please enter the number of employees",
                    membership_type: "Please select membership type",
                    agree_check: "Please check this",
                },

                errorElement: "em",
                errorPlacement: function (error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block");
                    if ((element.prop("type") === "checkbox")) {
                        error.insertAfter(element.parent().nextAll().last("div"));
                        error.insertAfter(element.parent("div"));
                    } else if (element.prop("type") === "radio") {
                        error.insertAfter(element.parent().nextAll().last("div"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).parents(".error-message").addClass("has-error").removeClass("has-success");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents(".error-message").addClass("has-success").removeClass("has-error");
                },

                submitHandler: function (form, event) {
                    event.preventDefault();
                    var membershipTypeId = $("input[name='membership_type']:checked").attr('id');
                    var membershipLabel = $(`label[for='${membershipTypeId}']`).text();
                    openPaymentModal(membershipLabel);
                    // stripePayment(form);
                }
            });

            function setupElements() {
                var elements = stripe.elements();
                var style = {
                    base: {
                        color: "#32325d",
                        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                        fontSmoothing: "antialiased",
                        fontSize: "16px",
                        "::placeholder": {
                            color: "#aab7c4"
                        }
                    },
                    invalid: {
                        color: "#fa755a",
                        iconColor: "#fa755a"
                    }
                };
                card = elements.create("card", { hidePostalCode: true, style: style });
                card.mount("#card-element");
                return { stripe: stripe, card: card, };
            };

            function openPaymentModal(membershipLabel) {
                $('.payment-title').html(`Please pay for ${membershipLabel}`);
                $('#paymentModal').modal('show');
            }

            $(document).on('click', '.pay-now', function () {
                var amount = $(".selected-membership-amount").val();
                $.ajax({
                    type: "POST",
                    url: "stripe_payment.php",
                    data: { amount },
                    success: function (data) {
                        console.log('data: ', data.clientSecret);
                        if (data.clientSecret) {
                            // Initiate the payment. If authentication is required, 
                            // confirmCardPayment will automatically display a modal
                            stripe.confirmCardPayment(data.clientSecret, { payment_method: { card: card } }).then(function (confirmResult) {
                                if (confirmResult.error) {
                                    // Show error to your customer
                                    showError(confirmResult.error.message);
                                } else {
                                    // The payment has been processed!
                                    stripe.retrievePaymentIntent(data.clientSecret).then(function (retrieveResult) {
                                        var paymentIntent = retrieveResult.paymentIntent;
                                        var paymentIntentJson = JSON.stringify(paymentIntent, null, 2);

                                        if (paymentIntent.status == 'succeeded') {
                                            $('#stripe-token').val(data.token);
                                            var formData = $("#registration-form").serialize();
                                            console.log('formData: ', formData);
                                            $.ajax({
                                                type: "POST",
                                                url: "registration.php",
                                                dataType: 'json',
                                                data: formData,
                                                success: function (response) {
                                                    console.log('response: ', response);
                                                    if (response.is_valid == false) {
                                                        $('#first-name-err').html(response.first_name_err);
                                                        $('#last-name-err').html(response.last_name_err);
                                                        $('#company-name-err').html(response.company_name_err);
                                                        $('#business-address-err').html(response.business_address_err);
                                                        $('#email-err').html(response.email_err);
                                                        $('#employee-number-err').html(response.employee_number_err);
                                                    } else if (response.is_saved) {
                                                        emptyFormFields();
                                                        $('.succes-message').html(response.message);
                                                        $('.success-alert').show();
                                                    } else {
                                                        $('.error-message').html(response.message);
                                                        $('.error-alert').show();
                                                    }
                                                },
                                            });
                                        }
                                    });
                                }
                            });
                        } else {
                            // form.submit();
                        }
                    },
                    error: function (error) {
                        console.log("error: ", error);
                    }
                });
            });

            // function stripePayment(form) {
            //     $.ajax({
            //         type: "POST",
            //         url: "stripe_payment.php",
            //         data: $(form).serialize(),
            //         success: function (data) {
            //             console.log('data: ',data);
            //             console.log('data: ',data.clientSecret);
            //             if (data.clientSecret) {
            //                 // Initiate the payment. If authentication is required, 
            //                 // confirmCardPayment will automatically display a modal
            //                 stripe.confirmCardPayment(data.clientSecret,{ payment_method: { card: card } }).then(function(confirmResult) {
            //                     console.log('confirmResult: ',confirmResult);
            //                     if (confirmResult.error) {
            //                         // Show error to your customer
            //                         showError(confirmResult.error.message);
            //                     } else {
            //                         // The payment has been processed!
            //                         stripe.retrievePaymentIntent(data.clientSecret).then(function(retrieveResult) {
            //                             var paymentIntent = retrieveResult.paymentIntent;
            //                             var paymentIntentJson = JSON.stringify(paymentIntent, null, 2);
            //                             console.log('paymentIntent: ',paymentIntent);

            //                             if (paymentIntent.status == 'succeeded') {
            //                                 $('.stripe-card-payment #stripe-token').val(data.token);
            //                                 $.ajax({
            //                                     type: "POST",
            //                                     url: "registration.php",
            //                                     dataType: 'json',
            //                                     data: $(form).serialize(),
            //                                     success: function (response) {
            //                                         console.log('response: ', response);
            //                                         if (response.is_valid == false) {
            //                                             $('#first-name-err').html(response.first_name_err);
            //                                             $('#last-name-err').html(response.last_name_err);
            //                                             $('#company-name-err').html(response.company_name_err);
            //                                             $('#business-address-err').html(response.business_address_err);
            //                                             $('#email-err').html(response.email_err);
            //                                             $('#employee-number-err').html(response.employee_number_err);
            //                                         } else if (response.is_saved) {
            //                                             emptyFormFields();
            //                                             $('.succes-message').html(response.message);
            //                                             $('.success-alert').show();
            //                                         } else {
            //                                             $('.error-message').html(response.message);
            //                                             $('.error-alert').show();
            //                                         }
            //                                     },
            //                                 });
            //                             }
            //                         });
            //                     }
            //                 });
            //             } else {
            //                 // form.submit();
            //             }
            //         },
            //         error: function (error) {
            //             console.log("error: ",error);
            //         }
            //     });
            // }

            var showError = function (errorMsgText) {
                // changeLoadingState(false);
                var errorMsg = document.querySelector(".sr-field-error");
                errorMsg.textContent = errorMsgText;
                setTimeout(function () { errorMsg.textContent = ""; }, 8000);
                // $('.save-btn').css('display','block');
                // $('.process-order-loader').css('display','none');
            };
        </script>
    </body>

</html>