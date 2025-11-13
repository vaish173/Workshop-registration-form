/* script.js - validation and small UX touches for TechTrail 2025
   Uses jQuery for concise DOM handling
*/

$(document).ready(function(){
  // gentle focus visual is handled in CSS; add small behavior here
  $('#registrationForm input, #registrationForm select, #registrationForm textarea').on('focus', function(){
    $(this).closest('.field').addClass('focused');
  }).on('blur', function(){
    $(this).closest('.field').removeClass('focused');
  });

  // Form validation on submit
  $('#registrationForm').on('submit', function(e){
    // Collect values
    const name = $('#fullname').val().trim();
    const email = $('#email').val().trim();
    const phone = $('#phone').val().trim();
    const college = $('#college').val().trim();
    const department = $('#department').val().trim();
    const year = $('#year').val();
    const topic = $('#topic').val();
    const mode = $('input[name="mode"]:checked').val();

    // Simple helpers
    function showMessage(msg){
      // gentle alert - uses browser alert for simplicity
      alert(msg);
    }

    // Validate required fields
    if(!name){ showMessage('Please enter your full name.'); e.preventDefault(); return false; }
    if(!email){ showMessage('Please enter your email address.'); e.preventDefault(); return false; }

    // Email regex
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!emailRegex.test(email)){ showMessage('Please enter a valid email address.'); e.preventDefault(); return false; }

    // Phone validation: exactly 10 digits
    const phoneDigits = phone.replace(/\D/g,'');
    if(phoneDigits.length !== 10){ showMessage('Please enter a valid 10-digit phone number.'); e.preventDefault(); return false; }

    if(!college){ showMessage('Please enter your college name.'); e.preventDefault(); return false; }
    if(!department){ showMessage('Please enter your department.'); e.preventDefault(); return false; }
    if(!year){ showMessage('Please select your year of study.'); e.preventDefault(); return false; }
    if(!topic){ showMessage('Please select a workshop topic.'); e.preventDefault(); return false; }
    if(!mode){ showMessage('Please choose mode of participation (Online or Offline).'); e.preventDefault(); return false; }

    // if all checks pass, allow the form to submit
    return true;
  });

  // small tasteful page entrance animation handled by CSS 'fade-in'
});          