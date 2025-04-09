<!DOCTYPE html>
<html>
  <head>
    <title>Appointment Form</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Load custom CSS -->
    <style>
      .required:after {
        content: " *";
        color: red;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header bg-primary text-white">
              <h1 class="text-center mb-0">Appointment Form</h1>
            </div>
            <div class="card-body">
              <form action="connect2.php" method="post">
                <div class="form-group">
                  <label for="patientId">Patient ID<span class="required"></span></label>
                  <input type="text" class="form-control" id="patientId" name="patientId" required>
                </div>
                <div class="form-group">
                  <label for="department">Department Preference<span class="required"></span></label>
                  <select class="form-control" id="department" name="department" required>
                    <option value="">--Select--</option>
                    <option value="Cardiologist">Cardiologist</option>
                    <option value="Neurologist">Neurologist</option>
                    <option value="Orthopedist">Orthopedist</option>
                    <option value="Gynecologist">Gynecologist</option>
                    <option value="Psychiatrist">Psychiatrist</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="doctor">Appointed Doctor<span class="required"></span></label>
                  <input type="text" class="form-control" id="doctor" name="doctor" required>
                </div>
                <div class="form-group">
                  <label for="serviceType">Service Type</label>
                  <select class="form-control" id="serviceType" name="serviceType">
                    <option value="">--Select--</option>
                    <option value="Emergency Care">Emergency Care</option>
                    <option value="Surgery">Surgery</option>
                    <option value="Medical Test">Medical Test</option>
                    <option value="Check Up">Check Up</option>
                    <option value="Admission">Hospitalization</option>
                  </select>
                </div>
                <div class="form-group mt-4 mb-0">
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Load Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
