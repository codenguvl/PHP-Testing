document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("contactForm")
    .addEventListener("submit", function (e) {
      e.preventDefault();

      var isValid = true;
      var emailPattern = validator.isEmail;
      var phonePattern = (value) =>
        validator.isMobilePhone(value, "any", { strictMode: false });

      var fields = [
        {
          id: "floatingInput",
          name: "Your Name",
        },
        {
          id: "email",
          name: "Email Address",
          pattern: emailPattern,
          errorMessage: "Please enter a valid email address!",
        },
        {
          id: "phone",
          name: "Phone Number",
          pattern: phonePattern,
          errorMessage: "Please enter a valid phone number!",
        },
        {
          id: "company",
          name: "Company",
        },
        {
          id: "message",
          name: "Message",
        },
      ];

      for (var field of fields) {
        var input = document.getElementById(field.id);
        if (input.value.trim() === "") {
          Swal.fire("Error", `Please fill the ${field.name} field!`, "error");
          isValid = false;
          break;
        }
        if (field.pattern && !field.pattern(input.value)) {
          Swal.fire("Error", field.errorMessage, "error");
          isValid = false;
          break;
        }
      }

      if (isValid) {
        var formData = new FormData(this);
        var submitButton = document.querySelector('button[type="submit"]');
        submitButton.disabled = true;
        submitButton.innerHTML =
          'Sending... <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>';

        fetch("actions/process_form.php", {
          method: "POST",
          body: formData,
        })
          .then((response) => response.json())
          .then((data) => {
            submitButton.disabled = false;
            submitButton.innerHTML = "Send";
            if (data.status === "success") {
              document.getElementById("modalName").textContent = data.data.name;
              document.getElementById("modalPhone").textContent =
                data.data.phone;
              document.getElementById("modalEmail").textContent =
                data.data.email;
              document.getElementById(
                "modalEmail"
              ).href = `mailto:${data.data.email}`;
              document.getElementById("modalCompany").textContent =
                data.data.company || "N/A";
              document.getElementById("successModal").classList.add("show");
              document.getElementById("contactForm").reset();
            } else {
              Swal.fire(
                "Error",
                data.errors ? data.errors.join("<br>") : data.message,
                "error"
              );
            }
          })
          .catch((error) => {
            submitButton.disabled = false;
            submitButton.innerHTML = "Send";
            Swal.fire(
              "Error",
              "An error occurred while submitting the form.",
              "error"
            );
          });
      }
    });

  document.querySelector(".close").onclick = function () {
    document.getElementById("successModal").classList.remove("show");
  };

  window.onclick = function (event) {
    if (event.target == document.getElementById("successModal")) {
      document.getElementById("successModal").classList.remove("show");
    }
  };
});
