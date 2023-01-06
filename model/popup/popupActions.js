const openAction = new PopupActions();
openAction.open();
openAction.close();

class PopupActions {
  constructor() {
    this.popup = document.querySelector(".popup");
    this.popupOpen = document.querySelector(".popup-open");
    this.popupClose = document.querySelector(".popup-close");
  }

  open() {
    this.popupOpen.addEventListener("click", () => {
      this.popup.style.display = "block";
    });
  }

  close() {
    this.popupClose.addEventListener("click", () => {
      this.popup.style.display = "none";
    });
    window.addEventListener("click", (e) => {
      if (e.target === this.popup) {
        this.popup.style.display = "none";
      }
    });
  }
}
