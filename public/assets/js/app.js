let NETLIFY_DEFAULT_DOMAIN = "friendly-heyrovsky-704163.netlify.app";
let REDIRECT_URL = "https://up-tri.me";
window.onload = function () {
  let hostname = location.hostname;
  if (hostname === NETLIFY_DEFAULT_DOMAIN) {
    location.href = REDIRECT_URL;
  }
  document.getElementById("js--hostname").textContent = hostname;
};
