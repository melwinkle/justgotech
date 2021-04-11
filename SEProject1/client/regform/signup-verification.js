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
 * Password must be at least 4 characters, no more than 8 characters.
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

// form.addEventListener("submit", (e) => {
//   e.preventDefault();
// });


const validate = () => {
  const email = extractval("email");
  const password = extractval("password");
  const repassword = extractval("repassword");

  if (email_regex.test(email) == true) {
    email_valid = true;
    console.log("email good");
  } else {
    email_valid = false;
    console.log("email bad");
  }

  if(password_regex.test(password) == true) {
    password_valid = true;
    console.log("password good");
  }else {
      password_valid = false;
      console.log("password bad");
  }

  if (password === repassword) {
    repassword_valid = true;
    console.log("repassword good");
  } else {
    repassword_valid = false;
    console.log("repassword bad");
  }

  if (password_valid && repassword_valid && email_valid) {
    return true;
  } else {
      alert('Fill details correctly');
      return false;
  } 
}