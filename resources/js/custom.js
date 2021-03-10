$(document).ready(function(){
    var iframe = document.getElementById('select_dropdown');
    var cssLink = document.createElement("link");
    var full = location.pathname;
    cssLink.href = "../css/custom.css";
    cssLink.rel = "stylesheet";
    cssLink.type = "text/css";
    iframe.contentDocument.head.appendChild(cssLink);
  });
