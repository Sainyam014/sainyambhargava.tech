const username = document.getElementById("username");

const password = document.getElementById("password");

const login = (e) => {
  const data = { username: username.value, password: password.value };

  $.ajax({
    type: "POST",
    url: "loginservis.php",
    data: data,
    dataType: "json",
    encode: true,
  }).done(function (data) {
    if (data.status === "successfully") {
      window.location.assign("dashboard");
    } else {
      alert("failed");
    }
  });
};
