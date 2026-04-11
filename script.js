window.onload = function () {

  // VARIABLES
  const websiteName = "Online Resume Builder";
  let role = "Student";
  let experience = 0;

  console.log(websiteName, role, experience);

  document.getElementById("roleText").innerText =
    "Role: " + role;

  document.getElementById("experienceText").innerText =
    "Experience: " + experience + " years";

  document.getElementById("updateExpBtn").addEventListener("click", function () {
    experience = experience + 1;
    document.getElementById("experienceText").innerText =
      "Experience: " + experience + " years";
  });

  // FUNCTIONS

  // Function Declaration
  function getWelcomeMessage() {
    return "Welcome to QUICKRESUME!";
  }

  // Function Expression
  var showWelcomeText = function (msg) {
    document.getElementById("welcomeText").innerText = msg;
  };

  // Arrow Function (ADDED)
  const addExp = (a, b) => a + b;
  console.log("Arrow Function Output:", addExp(2, 3));

  window.changeWelcome = function () {
    var message = getWelcomeMessage();
    showWelcomeText(message);
  };

  // OBJECTS
  var profile = {
    name: "Bhuvana",
    role: "Student",
    skills: "HTML, CSS, JavaScript"
  };

  // Dot notation
  console.log(profile.name);

  // Bracket notation (ADDED)
  console.log(profile["role"]);

  // Log object (ADDED)
  console.log(profile);

  document.getElementById("profileText").innerText =
    "Name: " + profile.name +
    ", Role: " + profile.role +
    ", Skills: " + profile.skills;

  document.getElementById("updateRoleBtn").addEventListener("click", function () {
    profile.role = "Web Developer";
    document.getElementById("profileText").innerText =
      "Name: " + profile.name +
      ", Role: " + profile.role +
      ", Skills: " + profile.skills;
  });

  // METHODS
  var user = {
    name: "Bhuvana",
    role: "Student",
    experience: 0,

    updateDetails: function () {
      this.role = "Frontend Developer";
      this.experience = this.experience + 1;
      return this.name + " is now a " + this.role;
    }
  };

  document.getElementById("methodBtn").addEventListener("click", function () {
    document.getElementById("methodResult").innerText =
      user.updateDetails();
  });

  // POPUPS
  window.showAlert = function () {
    alert("Profile updated successfully!");
  };

  window.confirmUpdate = function () {
    var choice = confirm("Do you want to update?");
    alert(choice ? "You clicked OK" : "You clicked Cancel");
  };

  window.askName = function () {
    var userName = prompt("Enter your name:");
    document.getElementById("popupResult").innerText =
      userName ? "Hello " + userName : "No name entered";
  };

  // EVENTS (ADDED EXTRA EVENT)

  // Hover event
  let profileBox = document.getElementById("profileText");

  profileBox.addEventListener("mouseover", function () {
    profileBox.style.color = "blue";
  });

  profileBox.addEventListener("mouseout", function () {
    profileBox.style.color = "black";
  });

};