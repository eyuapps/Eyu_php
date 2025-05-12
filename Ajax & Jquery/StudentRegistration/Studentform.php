<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Docbn jument</title>
</head>
<body>
<div class="container mt-5">
      <h2 class="text-center mb-4">School of Computing Student Registration</h2>
      <form id="studentForm">
        <div class="mb-3">
          <label for="studentId" class="form-label">Student ID</label>
          <input
            type="text"
            class="form-control"
            name="stuId"
            id="studentId"
            placeholder="DDU10000000"
          />
          <small class="form-text text-muted"
            >Your unique student identification number.</small
          >
        </div>
        <div class="mb-3">
          <label for="firstName" class="form-label">First Name</label>
          <input
            type="text"
            class="form-control"
            name="fName"
            id="firstName"
            placeholder="Your given first name"
          />
        </div>
        <div class="mb-3">
          <label for="middleName" class="form-label">Middle Name</label>
          <input
            type="text"
            class="form-control"
            name="mName"
            id="middleName"
            placeholder="Your middle name"
          />
        </div>
        <div class="mb-3">
          <label for="lastName" class="form-label">Last Name</label>
          <input
            type="text"
            class="form-control"
            name="lName"
            id="lastName"
            placeholder="Your family or last name"
          />
        </div>
        <div class="mb-3">
          <label for="sex" class="form-label">Sex</label>
          <select class="form-select" id="sex" name="sex" >
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="batch" class="form-label">Batch</label>
          <select class="form-select" name="batch" id="batch">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="department" class="form-label">Department</label>
          <select class="form-select" name="dep" id="department">
            <option value="CS">CS</option>
            <option value="IT">IT</option>
            <option value="SE">SE</option>
          </select>
        </div>
        
        <div class="text-center">
 <button type="submit" class="btn btnprimary">Submit</button>
 </div>
 <div id="addMsg" class="text-success text-center"></div>

      </form>
      <div id="studentList" class="container mt-2"> </div>

    </div>

    <script src="stuajax.js" type="text/javascript"></script>
</body>
</html>
