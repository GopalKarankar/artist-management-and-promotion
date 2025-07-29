// =======================preloader============================

const preloader = document.getElementById("preloader");

window.addEventListener("load", function () {
  preloader.style.display="none";
});

// ======================= Book now button ============================

const bookNow = document.getElementById('book-now');
const optionsContainer = document.getElementById('options-container');

bookNow.addEventListener('click', () => {
  optionsContainer.classList.toggle('show-options');
  optionsContainer.style.display = optionsContainer.classList.contains('show-options') ? 'flex' : 'none';
});

// =======================Confirm delete============================

    function confirmDelete() {
      return confirm("Are you sure you want to delete this ?");
    }

// ========================resp-nav============================

  const closebtn1 =document.getElementById('closebtn1');
  const closebtn2 =document.getElementById('closebtn2');
  const column1 =document.getElementById('column1');
  const column2 =document.getElementById('column2');

  function chng1() {
    column1.classList.toggle("shiftc1");
    column2.classList.toggle("shiftc2");
    closebtn2.classList.add("show-hide");
  }

  function chng2() {
    column1.classList.toggle("shiftc1");
    column2.classList.toggle("shiftc2");
    closebtn2.classList.remove("show-hide");
  }

// =======================toggle button sidebar============================
const btn= document.getElementById('hb');
const sdbr = document.getElementById("sidebar");

  btn.addEventListener("click", function() {
    sdbr.classList.toggle("shifthb");
    this.classList.toggle("fa-xmark");


  });

