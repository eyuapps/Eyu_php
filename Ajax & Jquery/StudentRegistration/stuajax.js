function loadStudents() {
   fetch("viewStudent.php")
     .then((response) => response.text())
     .then((data) => {
       document.getElementById("studentList").innerHTML = data;
     })
     .catch((error) => {
       document.getElementById("studentList").innerHTML =
         "No student data or unable to load.";
     });
 }
 