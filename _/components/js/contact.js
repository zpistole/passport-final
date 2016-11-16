$(document).ready(function() {
    $('#contact-form').formValidation({
        message: 'This value is not valid',
        icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
        fields: {
            firstName: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required'
                    }
                }
            },
            lastName: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            phone: {
                message: 'The phone number is not valid',
                validators: {
                    notEmpty: {
                        message: 'The phone number is required'
                    },
                    digits: {
                        message: 'The value can contain only digits'
                    }
                }
            },
        }
    })
    //this function makes it so that when you click on the "Request Catalog"
    //checkbox form fields show allowing you to fill in your address, it
    //also makes it so that when hidden, then input fields are not validated
    //but when they are visible they are validated
    .find('input[type="checkbox"][name="catalog"]')
        .on('change', function() {
            var topic      = $(this).val(),
                $container = $('[data-topic="' + topic + '"]');
            $container.toggle();

            var display = $container.css('display');
            switch (true) {
                case ('addressInfo' == topic && 'block' == display):
                    $('#contact-form').formValidation('addField', 'address-line1', {
                        validators: {
                            notEmpty: {
                                message: 'Street Name is required'
                            }
                        }
                    });
                    $('#contact-form').formValidation('addField', 'city', {
                        validators: {
                            notEmpty: {
                                message: 'City Name is required'
                            }
                        }
                    });
                    $('#contact-form').formValidation('addField', 'state', {
                        validators: {
                            notEmpty: {
                                message: 'State Name is required'
                            }
                        }
                    });
                    $('#contact-form').formValidation('addField', 'zipcode', {
                        validators: {
                            notEmpty: {
                                message: 'Zipcode is required'
                            }
                        }
                    });
                    $('#contact-form').formValidation('addField', 'country', {
                        validators: {
                            notEmpty: {
                                message: 'Country Name is required'
                            }
                        }
                    });
                    break;
                case ('addressInfo' == topic && 'none' == display):
                    $('#contact-form').formValidation('removeField', 'address-line1');
                    $('#contact-form').formValidation('removeField', 'city');
                    $('#contact-form').formValidation('removeField', 'state');
                    $('#contact-form').formValidation('removeField', 'zipcode');
                    $('#contact-form').formValidation('removeField', 'country');
                    break;
            }
        });
});

//this function clears the form if they begin to fill out
//the address fields and then decide to uncheck the box
$("#form_catalog").click(function() {
    $(this).closest('form').find("input.reset").val("");
});

//this function formats the phone number in making
//it show (123)456-7890 instead of 1234567890
// $(function() {
//   $("input[name='phone']").keyup(function() {
//       var curchr = this.value.length;
//       var curval = $(this).val();
//       if (curchr == 3) {
//           $("input[name='phone']").val("(" + curval + ")" + "-");
//       } else if (curchr == 9) {
//           $("input[name='phone']").val(curval + "-");
//       }
//   });
// });

$(function () {
    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {

                        $('.has-success').css("display", "none");
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                        setTimeout(function() {
                          $('#modal').modal('hide');
                        }, 3500);
                    }
                }
            });
            return false;
        }
    })
});
