document.addEventListener('DOMContentLoaded', function() {
  document.querySelector(".my-button > a").addEventListener("click", function(){
    this.style.backgroundColor = "red";
  });
});