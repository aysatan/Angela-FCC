function formValidation() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var repassword = document.forms["register"]["repassword"].value;
  var email = document.forms["register"]["email"].value;
  var fullName = document.forms["register"]["fullName"].value;
  var gender = document.forms["register"]["gender"].value;
  var nationality = document.forms["register"]["nationality"].value;
  var dob = document.forms["register"]["dob"].value;
  var photo = document.forms["register"]["photo"].value;

  if (username === "" || password === "") {
    alert("Please fill all the field");
    return false;
  }

  //   if (password !== repassword) {
  //     return false;
  //   }

  return true;
}
