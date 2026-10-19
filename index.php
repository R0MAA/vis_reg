<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Permissions-Policy" content="camera=(self)">
  <title>MaViRMS · Register</title>
  <link rel="icon" type="image/x-icon" href="assets/images/MarinaLogo.png">
  <!-- Bootstrap 5 + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- Google Font (Inter) for a modern look -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
  <style>
    * { font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif; }
    body {
      background: linear-gradient(145deg, #eef2f7 0%, #f8fafd 100%);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      padding: 1.5rem 1rem;
    }
    .register-card {
      background: rgba(255,255,255,0.75);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      border: 1px solid rgba(255,255,255,0.9);
      border-radius: 48px;
      box-shadow: 0 30px 60px -20px rgba(0,20,50,0.15), 0 0 0 1px rgba(255,255,255,0.7) inset;
      padding: 2.5rem 2.8rem;
      transition: all 0.2s ease;
    }
    @media (max-width: 576px) {
      .register-card { padding: 1.8rem 1.2rem; border-radius: 32px; }
    }
    .form-control, .form-select {
      background: rgba(255,255,255,0.7);
      backdrop-filter: blur(4px);
      -webkit-backdrop-filter: blur(4px);
      border: 1px solid #e2e9f2;
      border-radius: 20px;
      padding: 0.7rem 1.2rem;
      font-weight: 500;
      transition: 0.2s;
      color: #1a2634;
    }
    .form-control:focus, .form-select:focus {
      background: #ffffff;
      border-color: #1C3F60;
      box-shadow: 0 0 0 4px rgba(28,63,96,0.12);
    }
    .form-control.is-invalid, .form-select.is-invalid {
      border-color: #d1454a;
      box-shadow: 0 0 0 4px rgba(209,69,74,0.12);
    }
    .form-control.is-valid, .form-select.is-valid {
      border-color: #1a8c4a;
      box-shadow: 0 0 0 4px rgba(26,140,74,0.10);
    }
    .form-check-input {
      border-radius: 6px;
      border: 1.5px solid #bcc8d6;
      background: white;
    }
    .form-check-input:checked {
      background-color: #1C3F60;
      border-color: #1C3F60;
    }
    .btn-primary-custom {
      background: #1C3F60;
      border: none;
      border-radius: 40px;
      padding: 0.8rem 1.8rem;
      font-weight: 600;
      letter-spacing: 0.3px;
      color: white;
      transition: 0.2s;
      box-shadow: 0 6px 14px rgba(28,63,96,0.25);
    }
    .btn-primary-custom:hover {
      background: #12304a;
      transform: scale(1.01);
      box-shadow: 0 10px 20px rgba(28,63,96,0.3);
    }
    .btn-outline-camera {
      background: rgba(28,63,96,0.06);
      border: 1.5px dashed #1C3F60;
      border-radius: 60px;
      padding: 0.6rem 1.4rem;
      color: #1C3F60;
      font-weight: 500;
      transition: 0.15s;
    }
    .btn-outline-camera:hover {
      background: #1C3F60;
      color: white;
      border: 1.5px solid #1C3F60;
    }
    .card-label {
      font-size: 0.85rem;
      font-weight: 600;
      letter-spacing: 0.4px;
      color: #2d4055;
      margin-bottom: 0.25rem;
    }
    .card-label .required-star {
      color: #d1454a;
      margin-left: 2px;
    }
    #photoPreview {
      border-radius: 24px;
      box-shadow: 0 8px 18px rgba(0,0,0,0.06);
      border: 2px solid white;
      background: #f0f5fe;
      object-fit: cover;
      width: 140px;
      height: 140px;
    }
    .modal-content-modern {
      background: rgba(255,255,255,0.9);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255,255,255,0.8);
      border-radius: 40px;
    }
    .id-hint {
      font-size: 0.75rem;
      color: #4a5f77;
      background: rgba(28,63,96,0.04);
      border-radius: 40px;
      padding: 0.2rem 1rem;
      display: inline-block;
      margin-top: 0.3rem;
    }
    .invalid-feedback {
      font-size: 0.8rem;
      font-weight: 500;
      color: #d1454a;
    }
    .form-check-label a {
      color: #1C3F60;
      font-weight: 600;
      text-decoration: none;
      border-bottom: 1px dashed rgba(28,63,96,0.3);
    }
    .form-check-label a:hover {
      border-bottom: 1px solid #1C3F60;
    }
    .terms-scroll {
      max-height: 340px;
      overflow-y: auto;
      padding-right: 0.5rem;
    }
    .terms-scroll::-webkit-scrollbar { width: 4px; }
    .terms-scroll::-webkit-scrollbar-track { background: #eef2f7; border-radius: 10px; }
    .terms-scroll::-webkit-scrollbar-thumb { background: #b0c6db; border-radius: 10px; }
    /* Error alert */
    .error-alert {
      border-radius: 20px;
      border-left: 6px solid #d1454a;
      background: #fff5f5;
      padding: 0.8rem 1.2rem;
      font-weight: 500;
      display: none;
    }
    .error-alert.show {
      display: block;
    }
    .error-alert ul {
      margin: 0.25rem 0 0 1.2rem;
      padding-left: 0.5rem;
    }
    .error-alert ul li {
      font-weight: 450;
      color: #8a3a3f;
    }
    .photo-required-error {
      color: #d1454a;
      font-size: 0.8rem;
      font-weight: 500;
      margin-top: 0.3rem;
      display: none;
    }
    .photo-required-error.show {
      display: block;
    }
    /* Centered logo header */
    .brand-header {
      text-align: center;
      padding: 0.5rem 0 1.2rem 0;
      border-bottom: 1px solid rgba(28,63,96,0.08);
      margin-bottom: 1.8rem;
    }
    .brand-header img {
      filter: drop-shadow(0 2px 4px rgba(0,0,0,0.05));
      margin-bottom: 0.5rem;
    }
    .brand-header .main {
      font-weight: 700;
      font-size: 1.5rem;
      color: #0a1a2b;
      letter-spacing: -0.3px;
      line-height: 1.2;
    }
    .brand-header .sub {
      font-size: 0.85rem;
      font-weight: 500;
      color: #2d4b6a;
      letter-spacing: 0.3px;
      opacity: 0.85;
    }
    @media (max-width: 576px) {
      .brand-header .main { font-size: 1.2rem; }
      .brand-header .sub { font-size: 0.7rem; }
    }
  </style>
</head>
<body>

<!-- MAIN CARD -->
<div class="container">
  <div class="register-card mx-auto" style="max-width: 860px;">

    <!-- Centered Logo + Office Name -->
    <div class="brand-header">
      <img src="assets/images/MarinaLogo.png" alt="MARINA" width="60" height="68">
      <div class="main">Maritime Industry Authority</div>
      <div class="sub">MARINA · Visitor Registration Management System</div>
    </div>

    <div class="mb-4">
      <h2 class="fw-bold" style="color: #0a1a2b; letter-spacing: -0.3px;">Welcome to MaVRMS</h2>
      <p class="text-secondary-emphasis" style="font-weight: 450;">Please complete your check-in registration below.</p>
    </div>

    <!-- Error Alert Container -->
    <div id="formErrorAlert" class="error-alert mb-3">
      <i class="bi bi-exclamation-triangle-fill me-2" style="color:#d1454a;"></i>
      <strong>Please fix the following errors:</strong>
      <ul id="errorList"></ul>
    </div>

    <form id="registerForm" action="process_register.php" method="POST" novalidate>

      <!-- === ROW: First + Last === -->
      <div class="row g-3">
        <div class="col-md-6">
          <label class="card-label">First name <span class="required-star">*</span></label>
          <input type="text" name="first_name" id="first_name" class="form-control" placeholder="e.g. Juan" required>
          <div class="invalid-feedback">First name is required.</div>
        </div>
        <div class="col-md-6">
          <label class="card-label">Last name <span class="required-star">*</span></label>
          <input type="text" name="last_name" id="last_name" class="form-control" placeholder="e.g. Dela Cruz" required>
          <div class="invalid-feedback">Last name is required.</div>
        </div>
      </div>

      <!-- === ROW: Email + Phone === -->
      <div class="row g-3 mt-1">
        <div class="col-md-6">
          <label class="card-label">Email <span class="required-star">*</span></label>
          <input type="email" name="email" id="email" class="form-control" placeholder="visitor@email.com" required>
          <div class="invalid-feedback">A valid email is required.</div>
        </div>
        <div class="col-md-6">
          <label class="card-label">Phone <span class="required-star">*</span></label>
          <input type="text" name="phone" id="phone" class="form-control" placeholder="+63 912 345 6789" required>
          <div class="invalid-feedback">Phone number is required.</div>
        </div>
      </div>

      <!-- === ROW: Gender + Entry Type === -->
      <div class="row g-3 mt-1 align-items-center">
        <div class="col-md-4">
          <label class="card-label">Sex <span class="required-star">*</span></label>
          <select name="visitor_gender" id="visitor_gender" class="form-select" required>
            <option value="">Select</option>
            <option>Male</option>
            <option>Female</option>
            <option>Others</option>
          </select>
          <div class="invalid-feedback">Please select your sex.</div>
        </div>
        <div class="col-md-8">
          <label class="card-label d-block mb-1">Entry type <span class="required-star">*</span></label>
          <div class="d-flex flex-wrap gap-4 pt-1">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="entry_type" value="Individual" required id="entryInd">
              <label class="form-check-label fw-medium" for="entryInd">Individual</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="entry_type" value="Group" id="entryGrp">
              <label class="form-check-label fw-medium" for="entryGrp">Group</label>
            </div>
          </div>
          <div class="invalid-feedback d-block" style="display:none;" id="entryTypeError">Please select an entry type.</div>
        </div>
      </div>

      <!-- === ROW: Valid ID + ID Number === -->
      <div class="row g-3 mt-1">
        <div class="col-md-6">
          <label class="card-label">Valid ID <span class="required-star">*</span></label>
          <select name="valid_id" id="valid_id" class="form-select" required>
            <option value="">Select ID type</option>
            <option>Driver's License</option>
            <option>SSS</option>
            <option>PagIBIG</option>
            <option>National ID</option>
            <option>Passport</option>
            <option>SRB</option>
            <option>SID</option>
            <option>COA ID</option>
            <option>NBI</option>
          </select>
          <div class="invalid-feedback">Please select a valid ID type.</div>
        </div>
        <div class="col-md-6">
          <label class="card-label">ID Number <span class="required-star">*</span></label>
          <input type="text" name="id_number" id="id_number" class="form-control" placeholder="ID Number" required>
          <div id="id_hint" class="id-hint"></div>
          <div id="id_error" class="invalid-feedback"></div>
        </div>
      </div>

      <!-- === ROW: Visitor Type + Purpose === -->
      <div class="row g-3 mt-1">
        <div class="col-md-6">
          <label class="card-label">Visitor type <span class="required-star">*</span></label>
          <select name="visitor_type" id="visitor_type" class="form-select" required>
            <option value="">Select type</option>
            <option>Seafarer</option>
            <option>Visitor</option>
            <option>Examinee</option>
            <option>Liaison Officer</option>
          </select>
          <div class="invalid-feedback">Please select a visitor type.</div>
        </div>
        <div class="col-md-6">
          <label class="card-label">Purpose <span class="required-star">*</span></label>
          <select name="purpose" id="purposeSelect" class="form-select" required onchange="toggleOtherPurpose()">
            <option value="">Select purpose</option>
            <?php
            // Simulated purposes – in real usage, fetch from DB
            $purposes = [
              ['purpose_id' => 1, 'purpose' => 'Meeting'],
              ['purpose_id' => 2, 'purpose' => 'Exam'],
              ['purpose_id' => 3, 'purpose' => 'Document Submission'],
              ['purpose_id' => 4, 'purpose' => 'Interview'],
            ];
            foreach ($purposes as $o): ?>
              <option value="<?= $o['purpose_id'] ?>"><?= htmlspecialchars($o['purpose']) ?></option>
            <?php endforeach; ?>
            <option value="Others">Others</option>
          </select>
          <div class="invalid-feedback">Please select a purpose.</div>
          <div id="otherPurposeContainer" class="mt-2 d-none">
            <input type="text" name="other_purpose" id="other_purpose" class="form-control" placeholder="Specify other purpose...">
            <div class="invalid-feedback">Please specify your purpose.</div>
          </div>
        </div>
      </div>

      <!-- === PHOTO CAPTURE (REQUIRED) === -->
      <div class="mt-4">
        <label class="card-label d-flex align-items-center gap-2">
          <i class="bi bi-camera-fill"></i> Take your photo <span class="required-star">*</span>
        </label>
        <div class="d-flex flex-wrap align-items-center gap-3 mt-1">
          <button type="button" class="btn btn-outline-camera" data-bs-toggle="modal" data-bs-target="#cameraModal">
            <i class="bi bi-camera-fill me-1"></i> Capture
          </button>
          <button type="button" class="btn btn-outline-secondary d-none" id="retakeBtn" style="border-radius:60px;">
            <i class="bi bi-arrow-repeat me-1"></i> Retake
          </button>
          <div class="ms-2">
            <img id="photoPreview" class="img-fluid rounded d-none" width="140" height="140" style="object-fit:cover;" />
          </div>
        </div>
        <input type="hidden" name="photo_data" id="photo_data" required>
        <div id="photoError" class="photo-required-error">⚠️ Photo is required. Please capture a photo.</div>
        <div id="photoFormatError" class="photo-required-error" style="display:none;">⚠️ Please capture a valid photo.</div>
      </div>

      <!-- === TERMS & SUBMIT === -->
      <div class="mt-4 pt-2 d-flex flex-wrap align-items-center justify-content-between">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="agreeTerms" name="agree_terms" required style="border-radius:5px;">
          <label class="form-check-label" for="agreeTerms">
            I agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terms & Conditions</a> <span class="required-star">*</span>
          </label>
          <div class="invalid-feedback" id="termsError">You must agree to the terms.</div>
        </div>
        <button type="submit" class="btn btn-primary-custom px-5" id="submitBtn">
          <i class="bi bi-check-circle-fill me-2"></i>Register
        </button>
      </div>

    </form>
  </div>
</div>

<!-- === CAMERA MODAL === -->
<div class="modal fade" id="cameraModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content modal-content-modern">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title fw-bold"><i class="bi bi-camera-reels me-2"></i>Take a photo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-center">
        <video id="video" autoplay class="w-100 rounded-4 shadow-sm" style="max-height:460px; background:#11212e;"></video>
        <canvas id="canvas" class="d-none"></canvas>
        <div class="mt-3 d-flex flex-wrap justify-content-center gap-3">
          <button class="btn btn-primary-custom px-4" onclick="takePhoto()"><i class="bi bi-camera me-1"></i> Capture</button>
        </div>
        <div class="mt-3">
          <img id="modalPreview" class="img-fluid rounded-4 d-none" style="max-width:200px; border:2px solid white; box-shadow:0 6px 16px rgba(0,0,0,0.1);">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- === TERMS MODAL === -->
<div class="modal fade" id="termsModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content modal-content-modern">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold"><i class="bi bi-file-text me-2"></i>Terms & Conditions</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body terms-scroll">
        <p><strong>1. Collection of Personal Data</strong></p>
        <p>By accessing the online visitor registration system, you consent to the collection of your personal data, including full name, contact details, photograph, identification, and visit-related information, in accordance with the <strong>Data Privacy Act of 2012</strong>.</p>
        <p><strong>2. Purpose & Use</strong></p>
        <p>Personal data shall be used solely for verification, access control, security, and official record-keeping. No commercial use.</p>
        <p><strong>3. Retention</strong></p>
        <p>Data is retained only as long as necessary for the purposes stated, then securely disposed per NPC guidelines.</p>
        <p><strong>4. Data Privacy</strong></p>
        <p>We implement organizational, physical, and technical security measures. Disclosure is limited to authorized personnel or as required by law.</p>
        <p><strong>5. Data Subject Rights</strong></p>
        <p>You have the right to access, rectify, object, and lodge complaints with the National Privacy Commission.</p>
        <p><strong>6. CCTV</strong></p>
        <p>Premises are monitored by CCTV. Recordings are kept up to 30 days and used for security purposes.</p>
        <p><strong>7. Acceptance</strong></p>
        <p>By registering, you accept these terms. If you do not agree, do not proceed.</p>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius:40px;">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
  // === OTHER PURPOSE TOGGLE ===
  function toggleOtherPurpose() {
    const sel = document.getElementById('purposeSelect');
    const cont = document.getElementById('otherPurposeContainer');
    if (sel.value === 'Others') {
      cont.classList.remove('d-none');
      document.getElementById('other_purpose').setAttribute('required', 'required');
    } else {
      cont.classList.add('d-none');
      document.getElementById('other_purpose').removeAttribute('required');
    }
  }

  // === CAMERA LOGIC ===
  let stream = null;
  const video = document.getElementById('video');
  const photoInput = document.getElementById('photo_data');
  const preview = document.getElementById('photoPreview');
  const retakeBtn = document.getElementById('retakeBtn');
  const cameraModalEl = document.getElementById('cameraModal');
  const photoError = document.getElementById('photoError');
  const photoFormatError = document.getElementById('photoFormatError');

  cameraModalEl.addEventListener('shown.bs.modal', async function() {
    try {
      if (!navigator.mediaDevices?.getUserMedia) { alert('Camera not supported.'); return; }
      if (!stream) {
        stream = await navigator.mediaDevices.getUserMedia({ video: true });
        video.srcObject = stream;
      }
    } catch (e) { console.error(e); alert('Camera permission required.'); }
  });

  cameraModalEl.addEventListener('hidden.bs.modal', function() {
    if (stream) { stream.getTracks().forEach(t => t.stop()); stream = null; }
  });

  function takePhoto() {
    if (!stream) { alert('Camera not active.'); return; }
    const canvas = document.getElementById('canvas');
    canvas.width = video.videoWidth || 640;
    canvas.height = video.videoHeight || 480;
    const ctx = canvas.getContext('2d');
    ctx.drawImage(video, 0, 0);
    const data = canvas.toDataURL('image/png');
    photoInput.value = data;
    preview.src = data;
    preview.classList.remove('d-none');
    retakeBtn.classList.remove('d-none');
    // Clear photo errors when photo is taken
    photoError.classList.remove('show');
    photoFormatError.classList.remove('show');
    bootstrap.Modal.getInstance(cameraModalEl).hide();
  }

  retakeBtn.addEventListener('click', function() {
    photoInput.value = '';
    preview.src = '';
    preview.classList.add('d-none');
    photoError.classList.add('show');
    new bootstrap.Modal(cameraModalEl).show();
  });

  // === FORM VALIDATION (Client-side, prevents redirect) ===
  document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent default submission

    const form = this;
    const errorAlert = document.getElementById('formErrorAlert');
    const errorList = document.getElementById('errorList');
    let errors = [];

    // Reset all validation states
    form.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
    form.querySelectorAll('.is-valid').forEach(el => el.classList.remove('is-valid'));
    errorAlert.classList.remove('show');
    errorList.innerHTML = '';
    document.getElementById('termsError').style.display = 'none';
    photoError.classList.remove('show');
    photoFormatError.classList.remove('show');

    // 1. Check all required fields
    const requiredFields = form.querySelectorAll('[required]');
    requiredFields.forEach(field => {
      if (field.type === 'radio') {
        // Check if any radio in the group is checked
        const name = field.name;
        const radios = form.querySelectorAll(`input[name="${name}"]`);
        const isChecked = Array.from(radios).some(r => r.checked);
        if (!isChecked) {
          const errorMsg = field.closest('.col-md-8')?.querySelector('.invalid-feedback')?.textContent || 
                          field.closest('.form-check')?.querySelector('.invalid-feedback')?.textContent ||
                          'This field is required.';
          errors.push(errorMsg);
          // Highlight the group
          const container = field.closest('.col-md-8') || field.closest('.form-check');
          if (container) container.style.borderLeft = '3px solid #d1454a';
        }
        return;
      }

      if (field.type === 'checkbox' && field.id === 'agreeTerms') {
        if (!field.checked) {
          errors.push('You must agree to the Terms and Conditions.');
          document.getElementById('termsError').style.display = 'block';
        }
        return;
      }

      // For file/hidden/other inputs
      if (field.type === 'hidden' && field.id === 'photo_data') {
        if (!field.value || field.value === '') {
          errors.push('Photo is required. Please capture a photo.');
          photoError.classList.add('show');
        }
        return;
      }

      // Check if field is empty (for text, select, email, etc.)
      if (field.value === '' || field.value === null) {
        field.classList.add('is-invalid');
        const errorMsg = field.closest('.col-md-6')?.querySelector('.invalid-feedback')?.textContent || 
                         field.closest('.col-md-4')?.querySelector('.invalid-feedback')?.textContent ||
                         field.closest('.col-md-8')?.querySelector('.invalid-feedback')?.textContent ||
                         'This field is required.';
        errors.push(errorMsg);
      } else {
        field.classList.add('is-valid');
      }
    });

    // 2. Check ID number format (if ID type selected)
    const validIdSelect = document.getElementById('valid_id');
    const idInput = document.getElementById('id_number');
    const selectedId = validIdSelect.value;
    const idRules = {
      "Driver's License": { pattern: /^[A-Z0-9]{11}$/i, hint: "11 characters, e.g. A01-23-456789" },
      "SSS": { pattern: /^\d{10}$/, hint: "10 digits, e.g. 34-1234567-8" },
      "PagIBIG": { pattern: /^\d{12}$/, hint: "12 digits, e.g. 1234-5678-9012" },
      "National ID": { pattern: /^[A-Z0-9]{16}$/i, hint: "16 alphanumeric, PSN format" },
      "Passport": { pattern: /^[A-Z0-9]{7,9}$/i, hint: "7-9 alphanumeric" },
      "SRB": { pattern: /^[A-Z0-9]{8}$/i, hint: "8 alphanumeric" },
      "SID": { pattern: /^\d{9}$/, hint: "9 digits" },
      "COA ID": { pattern: /^[A-Z0-9]{6,12}$/i, hint: "6-12 alphanumeric" },
      "NBI": { pattern: /^[A-Z0-9]{15,20}$/i, hint: "15-20 alphanumeric" }
    };

    if (selectedId && idRules[selectedId]) {
      const cleaned = (idInput.value || '').replace(/[\s\-]/g, '');
      if (!idRules[selectedId].pattern.test(cleaned)) {
        idInput.classList.add('is-invalid');
        document.getElementById('id_error').textContent = 'Invalid format. Expected: ' + idRules[selectedId].hint;
        errors.push('ID number format is invalid for ' + selectedId);
      } else {
        idInput.classList.remove('is-invalid');
        idInput.classList.add('is-valid');
      }
    }

    // 3. Check other purpose if "Others" selected
    const purposeSelect = document.getElementById('purposeSelect');
    const otherPurposeInput = document.getElementById('other_purpose');
    if (purposeSelect.value === 'Others') {
      if (!otherPurposeInput.value || otherPurposeInput.value.trim() === '') {
        otherPurposeInput.classList.add('is-invalid');
        errors.push('Please specify your purpose.');
      } else {
        otherPurposeInput.classList.remove('is-invalid');
        otherPurposeInput.classList.add('is-valid');
      }
    }

    // If there are errors, show alert
    if (errors.length > 0) {
      errorAlert.classList.add('show');
      errors.forEach(err => {
        const li = document.createElement('li');
        li.textContent = err;
        errorList.appendChild(li);
      });
      // Scroll to error alert
      errorAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
      return;
    }

    // If no errors, submit the form
    this.submit();
  });

  // === ID VALIDATION (real-time hints) ===
  const idRulesFull = {
    "Driver's License": { min:11,max:11,pattern:/^[A-Z0-9]{11}$/i,hint:"11 chars, e.g. A01-23-456789",placeholder:"e.g. A01-23-456789"},
    "SSS": { min:10,max:10,pattern:/^\d{10}$/,hint:"10 digits, e.g. 34-1234567-8",placeholder:"e.g. 34-1234567-8"},
    "PagIBIG": { min:12,max:12,pattern:/^\d{12}$/,hint:"12 digits, e.g. 1234-5678-9012",placeholder:"e.g. 1234-5678-9012"},
    "National ID": { min:16,max:16,pattern:/^[A-Z0-9]{16}$/i,hint:"16 alphanumeric, PSN format",placeholder:"e.g. P143-1234-5678-9012"},
    "Passport": { min:7,max:9,pattern:/^[A-Z0-9]{7,9}$/i,hint:"7-9 alphanumeric",placeholder:"e.g. P1234567"},
    "SRB": { min:8,max:8,pattern:/^[A-Z0-9]{8}$/i,hint:"8 alphanumeric",placeholder:"e.g. A0123457"},
    "SID": { min:9,max:9,pattern:/^\d{9}$/,hint:"9 digits",placeholder:"e.g. 123456789"},
    "COA ID": { min:6,max:12,pattern:/^[A-Z0-9]{6,12}$/i,hint:"6-12 alphanumeric",placeholder:"e.g. COA-123456"},
    "NBI": { min:15,max:20,pattern:/^[A-Z0-9]{15,20}$/i,hint:"15-20 alphanumeric",placeholder:"e.g. NBI123456789012"}
  };

  function normalizeId(v) { return (v||'').replace(/[\s\-]/g,''); }
  function isIdValid(rules,raw) { if(!rules) return true; return rules.pattern.test(normalizeId(raw)); }

  const validIdSelect2 = document.getElementById('valid_id');
  const idInput2 = document.getElementById('id_number');
  const idHint = document.getElementById('id_hint');
  const idError = document.getElementById('id_error');

  function applyIdRules() {
    const sel = validIdSelect2.value;
    const rules = idRulesFull[sel];
    idInput2.value = '';
    idInput2.classList.remove('is-invalid','is-valid');
    idError.textContent = '';
    if (rules) {
      idInput2.setAttribute('placeholder', rules.placeholder);
      idHint.textContent = '📋 ' + rules.hint;
    } else {
      idInput2.setAttribute('placeholder', 'ID Number');
      idHint.textContent = '';
    }
  }

  function validateIdInput() {
    const sel = validIdSelect2.value;
    const rules = idRulesFull[sel];
    const val = idInput2.value.trim();
    if (!rules || !val) {
      idInput2.classList.remove('is-invalid','is-valid');
      idError.textContent = '';
      return;
    }
    if (!isIdValid(rules, val)) {
      idInput2.classList.add('is-invalid');
      idInput2.classList.remove('is-valid');
      idError.textContent = 'Invalid format. Expected: ' + rules.hint;
    } else {
      idInput2.classList.remove('is-invalid');
      idInput2.classList.add('is-valid');
      idError.textContent = '';
    }
  }

  validIdSelect2.addEventListener('change', applyIdRules);
  idInput2.addEventListener('input', validateIdInput);
  idInput2.addEventListener('blur', validateIdInput);
  applyIdRules(); // init placeholder

  // Clear entry type error on selection
  document.querySelectorAll('input[name="entry_type"]').forEach(radio => {
    radio.addEventListener('change', function() {
      const container = this.closest('.col-md-8');
      if (container) container.style.borderLeft = 'none';
      document.getElementById('entryTypeError').style.display = 'none';
    });
  });

  // Clear terms error on check
  document.getElementById('agreeTerms').addEventListener('change', function() {
    if (this.checked) {
      document.getElementById('termsError').style.display = 'none';
    }
  });
</script>
</body>
</html>