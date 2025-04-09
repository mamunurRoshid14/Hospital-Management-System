<!DOCTYPE html>
<html>
  <head>
    <title>Patient Information Form</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Load custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header bg-primary text-white">
              <h1 class="text-center mb-0">Patient Information Form</h1>
            </div>
            <div class="card-body">
              <form action="connect.php" method="post">
                <div class="form-group">
                  <label for="name">Name<span class="required">*</span></label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="age">Age<span class="required">*</span></label>
                  <input
                    type="number"
                    class="form-control"
                    id="age"
                    name="age"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="gender">Gender<span class="required">*</span></label>
                  <select class="form-control" id="gender" name="gender" required>
                    <option value="">--Select--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="contactNumber">Contact Number<span class="required">*</span></label>
                  <input
                    type="text"
                    class="form-control"
                    id="contactNumber"
                    name="contactNumber"
                    required
                    oninput="this.value=this.value.replace(/[^0-9]/g,'');"
                  />
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea
                    class="form-control"
                    id="address"
                    name="address"
                  ></textarea>
                </div>
                <div class="form-group">
                  <label for="bloodGroup">Blood Group<span class="required">*</span></label>
                  <select class="form-control" id="bloodGroup" name="bloodGroup" required>
                    <option value="">--Select--</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                  </select>
                </div>
                <div class="form-group mt-4 mb-0">
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
              </form>
            </div>
          </div>