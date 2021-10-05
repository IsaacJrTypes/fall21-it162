//https://tinyurl.com/dynamic-html-checker
document
  .getElementById("html-checker")
  .setAttribute("href", "https://validator.w3.org/nu/?doc=" + location.href);

//manages mobile nav
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
