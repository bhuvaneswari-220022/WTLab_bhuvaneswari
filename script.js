window.onload = function () {

  //VARIABLES
  const websiteName = "Online Resume Builder";
  let role = "Student";
  let experience = 0;

  document.getElementById("roleText").innerText =
    "Role: " + role;

  document.getElementById("experienceText").innerText =
    "Experience: " + experience + " years";

  document.getElementById("updateExpBtn").addEventListener("click", function () {
    experience = experience + 1;
    document.getElementById("experienceText").innerText =
      "Experience: " + experience + " years";
  });

  //FUNCTIONS
  function getWelcomeMessage() {
    return "Welcome to QUICKRESUME!";
  }

  var showWelcomeText = function (msg) {
    document.getElementById("welcomeText").innerText = msg;
  };

  window.changeWelcome = function () {
    var message = getWelcomeMessage();
    showWelcomeText(message);
  };
  //OBJECTS 
  var profile = {
    name: "Bhuvana",
    role: "Student",
    skills: "HTML, CSS, JavaScript"
  };

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

  //METHODS
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

  //POPUPS
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

};
