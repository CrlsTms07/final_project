const isLoggedIn = document.querySelector(".isLoggedIn");

if (isLoggedIn.classList.contains("loggedIn")) {
  isLoggedIn.innerHTML = "Log Out";
  isLoggedIn.classList.add("notLoggedIn");
} else {
  isLoggedIn.innerHTML = "Sign Up / Sign In";
  isLoggedIn.classList.add("loggedIn");
  
}

