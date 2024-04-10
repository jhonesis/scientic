</body>
  <script>
    /*The code defines an event listener for a button with the ID “btn_aside”. When clicked, 
    it toggles the visibility of a menu with the class “aside”.
    It also selects all elements with the class “btns_admin” and adjusts their display based 
    on the user’s role (contributor or otherwise). */
    
    let bt=document.querySelector("#btn_aside");
    var menu = document.querySelector(".aside");
    bt.addEventListener("click",function () {
      menu.classList.toggle('open');
    })
    let btns_admin = document.querySelectorAll(".btns_admin");
    if ("<?= $_SESSION["role"] ?>" === "contributor") {
      btns_admin.forEach(btn => {
        btn.style.display = "none";
      });
    } else {
      btns_admin.forEach(btn => {
        btn.style.display = "block";
      });
    }
  </script>
</html>