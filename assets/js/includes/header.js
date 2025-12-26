//Export de notre fonction

export function initHeader() {
  console.log("Header chargé");

  let main = document.querySelector(".main-menu");
  let burger = document.querySelector(".menu-burger");
  let close = document.querySelector(".menu-close");

  // Quand l'utilsateur clique sur le menu burger ça ouvre le sous-menu

  burger.addEventListener("click", () => {
    burger.style.display = "none";
    close.style.display = "block";
    main.style.display = "block";
  });

  close.addEventListener("click", () => {
    close.style.display = "none";
    burger.style.display = "block";
    main.style.display = "none";
  });
  
};
