<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor's Registration</title>
    <!-- Bootstrap CSS CDN Link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="cdn.jsdelivr.net" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 rounded p-5" style="background: #F3F6FA;">
        <h2 class="mb-4">Welcome to MARINA</h2>
        <h6 class="mb-4">Please register below to complete your check in.</h6><br>
        <form action="register.php" method="POST">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Department</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="person" name="person" placeholder="Person to Visit" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Purpose of Visit</option>
                        <option>Project Discussion</option>
                        <option>Training Session</option>
                        <option>Site Visit</option>
                        <option>Interview</option>
                        <option>Others</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="date" class="form-control" id="event_date" name="event_date" placeholder="Event Date" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label>Please click the camera button to verify your identity upon entering our premises.
                    </label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="invalidCheck"
                        required
                        />
                    <label class="form-check-label" for="invalidCheck">
                              Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">You must agree before submitting.</div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-md-12" style="background: #1C3F60;">Register</button>
        </form>
    </div>

    <!-- Bootstrap JS CDN Link (optional, for some components) -->
    <script src="cdn.jsdelivr.net" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
