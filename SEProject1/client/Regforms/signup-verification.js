/**
 * Email regex
 * This expression matches email addresses, and checks that they are of the proper form.
 * It checks to ensure the top level domain is between 2 and 4 characters long. 
 * Does not check the specific domain against a list .
 */
let email_regex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

/**
 * Password Regex
 * Password matching expression. 
 * Password must be at least 4 characters, no more than 15 characters.
 * Must include at least one upper case letter, one lower case letter, and one numeric digit.
 */
let password_regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$/

// Boolean for regex tests
let email_valid = false;
let username_valid = false;
let password_valid = false;

// Retyping password validation
let repassword_valid = false;

// Function to get value from input elements
const extractval = (id) => document.querySelector(`#${id}`).value;

const form = document.querySelector("#form");

const validate = () => {
  const email = extractval("email");
  const password = extractval("password");
  const repassword = extractval("repassword");

  if (email_regex.test(email) == true) {
    email_valid = true;
    $('#email').css('border-bottom', '1px solid black');
    $('#email-error-msg').html('');
  } else {
    email_valid = false;
    $('#email').css('border-bottom', '1px solid red');
    $('#email-error-msg').html('Email must have its top level domain is between 2 and 4 characters');
  }

  if(password_regex.test(password) == true) {
    password_valid = true;
    $('#password').css('border-bottom', '1px solid black');
    $('#password-error-msg').html('');
  }else {
      password_valid = false;
      $('#password').css('border-bottom', '1px solid red');
      $('#password-error-msg').html('Password must be between 4 and 15 characters with at least one capital letter, digit and small case character');
  }

  if (password === repassword) {
    repassword_valid = true;
    $('#repassword').css('border-bottom', '1px solid black');
    $('#repassword-error-msg').html('');
  } else {
    repassword_valid = false;
    $('#repassword').css('border-bottom', '1px solid red');
    $('#repassword-error-msg').html('Password Mismatch');
  }

  if (password_valid && repassword_valid && email_valid) {
    return true;
  } else {
      alert('Fill details correctly');
      return false;
  } 
}