$(document).ready(function() {
  // Main menu - close - toggle
  $('#closeMenu').click(function() {
    console.log("-----inchid-----");
    $('#mainMenu').addClass('hidden');
    $('#main-menu-toggle').removeClass('hidden');

  });
  //	 Main menu button - toggle
  $('#main-menu-toggle').click(function() {
    console.log("-----deschid-----");
    $(this).addClass('hidden');
    $(this).parent().removeClass('hidden');
    $('#mainMenu').removeClass('hidden');
  });


});

$(document).click(function(event) {
  var clickover = $(event.target);
  if ($('#main-menu-toggle').hasClass('hidden'))
    $('#main-menu-toggle').removeClass('hidden');
  $('#mainMenu').addClass('hidden');
});
$('#main-menu-toggle').click(function(event) {
  event.stopPropagation();
});


$(document).ready(function() {
  $('#myform').bootstrapValidator({
    container: '#messages',
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok ',
      invalid: 'glyphicon glyphicon-remove ',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      Name: {
        validators: {
          notEmpty: {
            message: 'The full name is required and cannot be empty'
          }
        }
      },
      Email: {
        validators: {
          notEmpty: {
            message: 'The email address is required and cannot be empty'
          },
          emailAddress: {
            message: 'The email address is not valid'
          }
        }
      },
      Phone: {
        validators: {
          notEmpty: {
            message: 'The title is required and cannot be empty'
          },
          stringLength: {
            max: 20,
            message: 'The title must be less than 20 characters long'
          }
        }
      },
      Message: {
        validators: {
          notEmpty: {
            message: 'The content is required and cannot be empty'
          },
          stringLength: {
            max: 500,
            message: 'The content must be less than 500 characters long'
          }
        }
      }
    }
  });
});


(function() {
  $(document).ready(function() {
    return $('#myform').submit(function(e) {
      var email, phone, message, name;
      name = document.getElementById('Name');
      email = document.getElementById('Email');
      phone = document.getElementById('Phone');
      message = document.getElementById('Message');
      if (!name.value || !email.value || !phone.value || !message.value) {
        //  alertify.error('Please check your entries');
        return false;
      } else {
        $.ajax({
          method: 'POST',
          url: 'input.php',
          data: $('#myform').serialize(),
          datatype: 'json'
        });
        e.preventDefault();
        $(this).get(0).reset();
        //  return alertify.success('Message sent');
      }
    });
  });

}).call(this);
