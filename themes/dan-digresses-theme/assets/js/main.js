const showSearchModalBtn = document.querySelector("#show-search-modal-btn");

function toggleSearchModal() {
  const searchModal = document.querySelector("#search-modal");
  searchModal.classList.toggle("hidden");
}

showSearchModalBtn.addEventListener("click", toggleSearchModal());
