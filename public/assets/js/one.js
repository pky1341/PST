const reg = document.getElementById("regBtn");
reg.addEventListener("click", function () {
    document.querySelector("#modalRegisterForm").style.display = "contents";
});

const close = document.querySelector(
    "#modalRegisterForm > div > div > div.modal-header.text-center > button"
);
close.addEventListener("click", function () {
    document.querySelector("#modalRegisterForm").style.display = "none";
});
