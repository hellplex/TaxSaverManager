/*
*  TaxSaverManager Validations
*/

 function myValidate(){
  console.log("it's on");
  return false;
 }

 function validate(form)
{
  console.log("it's on");
  fail += validateEmail(form.usr_email.value)
  fail += validatePassword(form.usr_password.value)


 /*
  fail  = validateForename(form.usr_firstName.value)
  fail += validateSurname(form.usr_lastName.value)
  fail += validateTravelCard(form.usr_travelCardId.value) 
  usr_departmentId
  fail += validateUsername(form.username.value)
  fail += validateAge(form.age.value)*/

  if   (fail == "")   return true
  else { alert(fail); return false }
}

function validateTravelCard(field)
{
  return (field == "") ? "No Travel card ID was entered.\n" : ""
}

function validateTravelCard(field)
{
  return (field == "") ? "No Travel card ID was entered.\n" : ""
}

function validateForename(field)
{
  return (field == "") ? "No Forename was entered.\n" : ""
}

function validateSurname(field)
{
  return (field == "") ? "No Surname was entered.\n" : ""
}

function validateUsername(field)
{
  if (field == "") return "No Username was entered.\n"
  else if (field.length < 5)
    return "Usernames must be at least 5 characters.\n"
  else if (/[^a-zA-Z0-9_-]/.test(field))
    return "Only a-z, A-Z, 0-9, - and _ allowed in Usernames.\n"
  return ""
}

function validatePassword(field)
{
  if (field == "") return "No Password was entered.\n"
  else if (field.length < 6)
    return "Passwords must be at least 6 characters.\n"
  else if (! /[a-z]/.test(field) ||
           ! /[A-Z]/.test(field) ||
           ! /[0-9]/.test(field))
    return "Passwords require one each of a-z, A-Z and 0-9.\n"
  return ""
}

function validateAge(field)
{
  if (isNaN(field)) return "No Age was entered.\\n"
  else if (field < 18 || field > 110)
    return "Age must be between 18 and 110.\n"
  return ""
}

function validateEmail(field)
{
  if (field == "") return "No Email was entered.\n"
    else if (!((field.indexOf(".") > 0) &&
               (field.indexOf("@") > 0)) ||
               /[^a-zA-Z0-9.@_-]/.test(field))
      return "The Email address is invalid.\n"
  return ""
}