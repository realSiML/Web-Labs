// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const form = document.getElementsByClassName("needs-validation")[0];
  const recaptcha = document.getElementsByClassName("g-recaptcha")[0];
  // Loop over them and prevent submission
  form.addEventListener(
    "submit",
    (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      var response = grecaptcha.getResponse();
      if (response.length == 0) {
        recaptcha.classList.add("border", "border-danger");
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add("was-validated");
    },
    false
  );

  form.addEventListener("input", () => {
    form.classList.remove("was-validated");
    recaptcha.classList.remove("border", "border-danger");
  });


})();

// UserName - /^[a-zA-Z0-9]+$/;
