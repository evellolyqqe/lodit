 <title>Home Page</title>

</head>
<body>
<style>
        body {
            background-image: url('{{ asset('foto/gayahh.jpg') }}');
            background-size: contain;
            color: #000;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0; 
        }
        </style>
<section id="home" class="bg-light py-5">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6">

    <h1 class="display-4 fw-bold text-primary mb-4">
    The Guarantee to Better Health
    </h1>

    <p class="lead mb-4">
   KIPS will bring you the guarantee to health, medicine, treatments, and everything to make you and your family be happy and healthy together.
    </p>

<div class="d-flex gap-3">

<button id="res" class="btn btn-primary">
<i class="bi bi-calendar-check"></i> Reservations
</button>

<button class="btn btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#facilitiesModal">
<i class="bi bi-building"></i> Our Facilities
</button>
                    
</div>

<div class="mt-4">
<div class="row text-center">
<div class="col-4">

<h3 class="text-primary fw-bold">15+</h3>
<p class="mb-0">Years of Experience</p>

</div>

<div class="col-4">
<h3 class="text-primary fw-bold">8145+</h3>
<p class="mb-0">Satisfied Patients</p>
</div>

<div class="col-4">
<h3 class="text-primary fw-bold">24/7</h3>
<p class="mb-0">Service</p>
</div>

</div>
</div>
</div>

<div class="col-lg-6">
<img width=200% src="foto\logo.jpg"  alt="Clinical" class="img-fluid rounded-3 shadow">
</div>

</div>
</div>
</section>


<!-- ------------------------------------------------------------------------------------------------------- -->
<div class="modal fade" id="facilitiesModal" tabindex="-1">
<div class="modal-dialog modal-xl">
<div class="modal-content">
<div class="modal-header bg-primary text-white">
            <h5 class="modal-title">
            <i class="bi bi-building"></i> Clinical Facilities
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

<div class="modal-body">
<div class="row g-4">
<div class="col-md-6">
            <h6 class="fw-bold mb-3">
            <i class="bi bi-hospital text-primary"></i> Consultation Room
            </h6>
        <p class="text-muted">A Checkup Room where we can help consult your illness(es) and fit you inside of our schedule.</p>
        </div>

<div class="col-md-6">
            <h6 class="fw-bold mb-3">
            <i class="bi bi-virus text-success"></i> Laboratorium
            </h6>
        <p class="text-muted">A Laboratorium filled with over-the-top technologies where we can check your blood type, blood pressure, sugar, health, and etcetera.</p>
        </div>

<div class="col-md-6">
            <h6 class="fw-bold mb-3">
            <i class="bi bi-capsule text-info"></i> Clinic
            </h6>
        <p class="text-muted">The Clinic which is filled with medicine that can be bought or sent to you 24/7 7 days a week.</p>
</div>

<div class="col-md-6">
            <h6 class="fw-bold mb-3">
            <i class="bi bi-activity text-warning"></i> X-Ray Room
            </h6>
        <p class="text-muted">We clear your bodies of your illnesses and check your insides and bones to see any pesticides needed to get removed.</p>
</div>

<div class="col-md-6">
            <h6 class="fw-bold mb-3">
            <i class="bi bi-heart-pulse text-danger"></i> ER
            </h6>
        <p class="text-muted">We check your heartrate to see if youre dying.</p>
</div>

<div class="col-md-6">
            <h6 class="fw-bold mb-3">
            <i class="bi bi-car-front text-secondary"></i> Parking Area
            </h6>
        <p class="text-muted">Just in case you die we can park you inside a cremetarium for a discounted price.</p>
</div>

</div>
<hr>
    <div class="row">
    <div class="col-12">
    <img src="foto\halonew.jpg" alt="Fasilitas Klinik" class="img-fluid rounded">
</div>
</div>
</div>

<div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">
                <i class="bi bi-calendar-check"></i> Make Reservation
                </button>
                </div>
                </div>
                </div>
                </div>

<!-- ------------------------------------------------------------------------------------------------------- -->
<section class="bg-danger text-white py-3">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-md-8">

        <h5 class="mb-0">
        <i class="bi bi-exclamation-triangle-fill"></i> 
                 Emergency Contact 24 Hours - Contact : (081) 0853-5510
        </h5>
    </div>

    <div class="col-md-4 text-md-end mt-2 mt-md-0">
        <button id="con" class="btn btn-light">
        <i class="bi bi-telephone-fill"></i> Contact Now
        </button>
    </div>

    </div>
    </div>
</section>

<!-- ------------------------------------------------------------------------------------------------------- -->
<section id="layanan" class="py-5">
    <div class="container">
    <div class="text-center mb-5">

    <h2 class="display-5 fw-bold">Our Services</h2>
    <p class="lead text-muted">Our services that we can do for you</p>
    </div>

    <div class="row g-4">
  <!-- Card 1 -->
  <div class="col-md-6 col-lg-3">
    <div class="card h-100 border-0 shadow-sm">
      <div class="card-body text-center p-4">
        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
          <i class="bi bi-heart-pulse text-success fs-2"></i>
        </div>
        <h5 class="card-title">Laboratorium</h5>
        <p class="card-text text-muted">Check blood pressure, sugar, blood type, etcetera</p>
        <a href="#" class="btn btn-outline-success">Details →</a>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="col-md-6 col-lg-3">
    <div class="card h-100 border-0 shadow-sm">
      <div class="card-body text-center p-4">
        <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
          <i class="bi bi-tooth text-info fs-2"></i>
        </div><br><br><br>
        <h5 class="card-title">Dental Clinic</h5>
        <p class="card-text text-muted">Check your teeth for cavities</p><br>
        <a href="#" class="btn btn-outline-info">Details →</a>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="col-md-6 col-lg-3">
    <div class="card h-100 border-0 shadow-sm">
      <div class="card-body text-center p-4">
        <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
          <i class="bi bi-eye-fill text-warning fs-2"></i>
        </div>
        <h5 class="card-title">Eye Clinic</h5>
        <p class="card-text text-muted">Check how far your eyeballs can see</p><br>
        <a href="#" class="btn btn-outline-warning">Details →</a>
      </div>
    </div>
  </div>

  <!-- Card 4 -->
  <div class="col-md-6 col-lg-3">
    <div class="card h-100 border-0 shadow-sm">
      <div class="card-body text-center p-4">
        <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
          <i class="bi bi-heart text-danger fs-2"></i>
        </div>
        <h5 class="card-title">Cardiology</h5>
        <p class="card-text text-muted">Check your heart and pulse health</p><br>
        <a href="#" class="btn btn-outline-danger">Details →</a>
      </div>
    </div>
  </div>
</div>

</section>

<!-- ------------------------------------------------------------------------------------------------------- -->
<section id="dokter" class="bg-light py-5">
    <div class="container">
    <div class="text-center mb-5">
        <h2 class="display-5 fw-bold">Our Doctors</h2>
        <p class="lead text-muted">Trusted and professional medical staff</p>
    </div>

    <div class="row g-4">
    <div class="col-md-6 col-lg-3">
    <div class="card border-0 shadow-sm">
    <img src="foto\kaikai.jpg" class="card-img-top" alt="Dokter" width="300px" height="100%">
    <div class="card-body text-center">
        <h5 class="card-title">Dr. Kai </h5>
        <p class="text-muted small">Specializes in Heart-related Illnesses</p>
        <p class="small">Experience: 15 months</p>
        <div class="d-flex justify-content-center gap-2">
            <span class="badge bg-primary">Lowkey Hot</span>
            <span class="badge bg-success">Heart</span>
    </div>
    </div>
    </div>
    </div>

    <div class="col-md-6 col-lg-3">
    <div class="card border-0 shadow-sm">
    <img src="foto\chippy.jpg" class="card-img-top" alt="Dokter" width="300px" height="100%">
            <div class="card-body text-center">
            <h5 class="card-title">Dr.Chips</h5>
            <p class="text-muted small">Specializes in Brain-related Illnesses</p>
            <p class="small">Experience: 18 months</p>
            <div class="d-flex justify-content-center gap-2">
                    <span class="badge bg-info">Brain</span>
                    <span class="badge bg-warning">Confused</span>
            </div>
            </div>
            </div>
            </div>

    <div class="col-md-6 col-lg-3">
    <div class="card border-0 shadow-sm">
    <img src="foto\vandeture.jpg" class="card-img-top" alt="Dokter" width="300px" height="100%">
            <div class="card-body text-center">
                <h5 class="card-title">Dr. Van </h5>
                <p class="text-muted small">Specializes in Mental Related Health</p>
                <p class="small">Experience: 18 months</p>
                <div class="d-flex justify-content-center gap-2">
                        <span class="badge bg-primary">Mental</span>
                        <span class="badge bg-secondary">Physchiatrist</span>
                </div>
                </div>
                </div>
                </div>

    <div class="col-md-6 col-lg-3">
    <div class="card border-0 shadow-sm">
    <img src="foto\thepinkone.jpg" class="card-img-top" alt="Dokter" width="300px" height="100%">
                <div class="card-body text-center">
                    <h5 class="card-title">Dr. Mimi</h5>
                    <p class="text-muted small">Specializes in the medicinal field</p>
                    <p class="small">Experience: 15 months</p>
                <div class="d-flex justify-content-center gap-2">
                    <span class="badge bg-danger">Medicinal</span>
                    <span class="badge bg-info">Mean</span>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
</section>

<!-- ------------------------------------------------------------------------------------------------------- -->
<section id="janji-temu" class="py-5">
  <div class="container">
    <div class="row">
      
      <!-- Left side: Reservation Form -->
      <div class="col-lg-6 mb-4">
        <div class="p-4 border rounded-4 shadow bg-light">
          <h2 class="fw-bold mb-4">Create Reservation</h2>
          <p class="text-muted mb-4">Fill out our form to create your reservation</p>

          <form method="POST" action="{{ route('reservations.store') }}">
            @csrf
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Full Name</label>
                <input type="text" name="patient_name" class="form-control" placeholder="Insert your name" required>
              </div>

              <div class="col-md-6">
                <label class="form-label">Phone Number</label>
                <input type="tel" name="phone" class="form-control" placeholder="XXXX-XXXX-XXXX" required>
              </div>

              <div class="col-md-6">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="email@example.com">
              </div>

              <div class="col-md-6">
                <label class="form-label">Choose your Doctor</label>
                <select name="doctor" class="form-select" required>
                  <option value="">Choose Doctor</option>
                  <option value="Dr. Kai">Dr. Kai</option>
                  <option value="Dr. Chips">Dr. Chips</option>
                  <option value="Dr. Van">Dr. Van</option>
                  <option value="Dr. Mimi">Dr. Mimi</option>
                </select>
              </div>

              <div class="col-md-6">
                <label class="form-label">Date of Reservation</label>
                <input type="date" name="date" class="form-control" required>
              </div>

              <div class="col-12">
                <label class="form-label">Illness or Problem</label>
                <textarea name="complaint" class="form-control" rows="3" placeholder="Explain your symptoms..." required></textarea>
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">
                  <i class="bi bi-send"></i> Send Reservation Request
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- Right side: Operational Info -->
      <div class="col-lg-6 mb-4">
        <div class="bg-light rounded-4 p-4 shadow-sm">
          <h4 class="mb-4">Operational Hours</h4>
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>Monday - Friday</td>
                  <td class="text-end fw-bold">08:00 - 20:00</td>
                </tr>
                <tr>
                  <td>Saturday</td>
                  <td class="text-end fw-bold">07:00 - 20:00</td>
                </tr>
                <tr>
                  <td>Sunday</td>
                  <td class="text-end fw-bold">09:00 - 21:00</td>
                </tr>
                <tr>
                  <td>Emergency Contact</td>
                  <td class="text-end fw-bold text-danger">24 Hours</td>
                </tr>
              </tbody>
            </table>
          </div>
          <hr>
          <h5 class="mb-3">Why Should You Pick Us?</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Trusted and Professional Doctors</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Modern and Complete Facilities</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Polite and Professional Etiquette</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Affordable and Transparent Prices</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Very Strategic and Accessible Location</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>



@if(session('level') == 2 || session('level') == 3)
<div class="container mt-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold">Admin Clinic Panel</h1>
            <p class="lead text-muted">Edit Doctor Data and Customer Reservations</p>
        </div>
        
        <!-- Admin Tabs -->
        <ul class="nav nav-tabs mb-4" id="adminTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="doctors-tab" data-bs-toggle="tab" data-bs-target="#doctors-tab-pane" type="button" role="tab">
                    <i class="bi bi-person-badge"></i> Edit Doctor
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="appointments-tab" data-bs-toggle="tab" data-bs-target="#appointments-tab-pane" type="button" role="tab">
                    <i class="bi bi-calendar-check"></i> Edit Reservations
                </button>
            </li>
        </ul>
        
        <div class="tab-content" id="adminTabsContent">
            <!-- Doctors Tab -->
            <div class="tab-pane fade show active" id="doctors-tab-pane" role="tabpanel">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">
                            <i class="bi bi-people-fill"></i> Doctor Data
                        </h5>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#doctorModal">
                            <i class="bi bi-plus-circle"></i> Add Doctor
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Specialized in</th>
                                        <th>Experience</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="doctorsTable">
                                    <!-- Doctors data will be loaded here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Appointments Tab -->
            <div class="tab-pane fade" id="appointments-tab-pane" role="tabpanel">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">
                            <i class="bi bi-calendar-week"></i> Reservation Data
                        </h5>
                        <div>
                            <button class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                                <i class="bi bi-plus-circle"></i> Add Reservations
                            </button>
                            <button class="btn btn-info" id="exportAppointments">
                                <i class="bi bi-download"></i> Export Data
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Patient Name</th>
                                        <th>Phone Number</th>
                                        <th>Doctor</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="appointmentsTable">
                                    <!-- Appointments data will be loaded here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Doctor Modal -->
    <div class="modal fade" id="doctorModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="doctorModalTitle">
                        <i class="bi bi-person-plus"></i> Add Doctor
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="doctorForm">
                        <input type="hidden" id="doctorId">
                        <div class="mb-3">
                            <label class="form-label">Doctor's Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="doctorName" placeholder="Insert Full Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Specialized in <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="doctorSpecialization" placeholder="Example: Therapist" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Experience <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="doctorExperience" placeholder="Example: 10" min="0" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Photo URL (Optional)</label>
                            <input type="url" class="form-control" id="doctorPhoto" placeholder="https://example.com/photo.jpg">
                            <small class="text-muted">If left empty, it will use the default image</small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle"></i> Cancel
                    </button>
                    <button type="button" class="btn btn-primary" id="saveDoctor">
                        <i class="bi bi-check-circle"></i> Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Appointment Modal
    <div class="modal fade" id="appointmentModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">
                        <i class="bi bi-calendar-plus"></i> Create new Reservation
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="appointmentForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Patient's Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="patientName" placeholder="Input the Patient's Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="patientPhone" placeholder="0XXX-XXXX-XXXX" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="patientEmail" placeholder="email@example.com" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Pick Doctor <span class="text-danger">*</span></label>
                                    <select class="form-select" id="appointmentDoctorSelect" required>
                                        <option value="">-= Pick Doctor =-</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="appointmentDate" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" id="appointmentStatus">
                                        <option value="pending">Pending</option>
                                        <option value="confirmed">Confirmed</option>
                                        <option value="cancelled">Cancelled</option>
                                        <option value="completed">Completed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Illness <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="patientComplaint" rows="3" placeholder="Explain the Patient's Symptoms..." required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle"></i> Cancel
                    </button>
                    <button type="button" class="btn btn-success" id="saveAppointment">
                        <i class="bi bi-check-circle"></i> Save Reservation
                    </button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Appointment Detail Modal -->
    <div class="modal fade" id="appointmentDetailModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title">
                        <i class="bi bi-calendar-check"></i> Reservation Details
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div id="appointmentDetail">
                        <!-- Appointment details will be loaded here -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Notifications</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="toastMessage">
                <!-- Toast message will be displayed here -->
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Initialize data (kosong, akan diisi melalui form)
        let doctors = [];
        let appointments = [];

        // Load data from localStorage if available
        function loadData() {
            const savedDoctors = localStorage.getItem('doctors');
            const savedAppointments = localStorage.getItem('appointments');
            
            if (savedDoctors) {
                doctors = JSON.parse(savedDoctors);
            }
            
            if (savedAppointments) {
                appointments = JSON.parse(savedAppointments);
            }
        }

        // Save data to localStorage
        function saveData() {
            localStorage.setItem('doctors', JSON.stringify(doctors));
            localStorage.setItem('appointments', JSON.stringify(appointments));
        }

        // Show toast notification
        function showToast(message, type = 'success') {
            const toastEl = document.getElementById('liveToast');
            const toastMessage = document.getElementById('toastMessage');
            const toastHeader = toastEl.querySelector('.toast-header');
            
            toastMessage.textContent = message;
            
            // Set header color based on type
            toastHeader.className = 'toast-header';
            if (type === 'success') {
                toastHeader.classList.add('bg-success', 'text-white');
            } else if (type === 'error') {
                toastHeader.classList.add('bg-danger', 'text-white');
            } else if (type === 'warning') {
                toastHeader.classList.add('bg-warning');
            }
            
            const toast = new bootstrap.Toast(toastEl);
            toast.show();
        }

        // Populate doctor select options
        function populateDoctorSelect() {
            const doctorSelect = document.getElementById('appointmentDoctorSelect');
            doctorSelect.innerHTML = '<option value="">-- Pilih Dokter --</option>';
            
            doctors.forEach(doctor => {
                const option = document.createElement('option');
                option.value = doctor.id;
                option.textContent = ${doctor.name} - ${doctor.specialization};
                doctorSelect.appendChild(option);
            });
        }

        // Render doctors table
        function renderDoctorsTable() {
            const table = document.getElementById('doctorsTable');
            table.innerHTML = '';
            
            if (doctors.length === 0) {
                table.innerHTML = `
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            <i class="bi bi-inbox fs-1"></i>
                            <p class="mt-2">Belum ada data dokter</p>
                            <small>Klik tombol "Tambah Dokter" untuk menambah data</small>
                        </td>
                    </tr>
                `;
                return;
            }
            
            doctors.forEach(doctor => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td><span class="badge bg-primary">${doctor.id}</span></td>
                    <td>
                        <img src="${doctor.photo}" alt="${doctor.name}" width="50" height="50" 
                             class="rounded-circle border" onerror="this.src='https://picsum.photos/seed/default/50/50'">
                    </td>
                    <td><strong>${doctor.name}</strong></td>
                    <td>${doctor.specialization}</td>
                    <td>
                        <span class="badge bg-info">${doctor.experience} tahun</span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-warning edit-doctor" data-id="${doctor.id}" title="Edit">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-danger delete-doctor" data-id="${doctor.id}" title="Hapus">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                `;
                table.appendChild(row);
            });
            
            // Add event listeners for edit and delete buttons
            document.querySelectorAll('.edit-doctor').forEach(button => {
                button.addEventListener('click', function() {
                    const id = parseInt(this.getAttribute('data-id'));
                    editDoctor(id);
                });
            });
            
            document.querySelectorAll('.delete-doctor').forEach(button => {
                button.addEventListener('click', function() {
                    const id = parseInt(this.getAttribute('data-id'));
                    deleteDoctor(id);
                });
            });
        }

        // Render appointments table
        function renderAppointmentsTable() {
            const table = document.getElementById('appointmentsTable');
            table.innerHTML = '';
            
            if (appointments.length === 0) {
                table.innerHTML = `
                    <tr>
                        <td colspan="7" class="text-center text-muted py-4">
                            <i class="bi bi-inbox fs-1"></i>
                            <p class="mt-2">Belum ada data janji temu</p>
                            <small>Klik tombol "Tambah Janji Temu" untuk menambah data</small>
                        </td>
                    </tr>
                `;
                return;
            }
            
            appointments.forEach(appointment => {
                const row = document.createElement('tr');
                let statusBadge = '';
                
                if (appointment.status === 'confirmed') {
                    statusBadge = '<span class="badge bg-success">✓ Confirm</span>';
                } else if (appointment.status === 'pending') {
                    statusBadge = '<span class="badge bg-warning">⏱ Waiting...</span>';
                } else if (appointment.status === 'cancelled') {
                    statusBadge = '<span class="badge bg-danger">✗ Cancel</span>';
                } else {
                    statusBadge = '<span class="badge bg-info">✔ Finished</span>';
                }
                
                row.innerHTML = `
                    <td><span class="badge bg-secondary">${appointment.id}</span></td>
                    <td><strong>${appointment.patientName}</strong></td>
                    <td>${appointment.phone}</td>
                    <td>${appointment.doctorName}</td>
                    <td>${appointment.date}</td>
                    <td>${statusBadge}</td>
                    <td>
                        <button class="btn btn-sm btn-info view-appointment" data-id="${appointment.id}" title="Lihat Detail">
                            <i class="bi bi-eye"></i>
                        </button>
                        <button class="btn btn-sm btn-success confirm-appointment" data-id="${appointment.id}" title="Konfirmasi">
                            <i class="bi bi-check"></i>
                        </button>
                        <button class="btn btn-sm btn-danger delete-appointment" data-id="${appointment.id}" title="Hapus">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                `;
                table.appendChild(row);
            });
            
            // Add event listeners for view, confirm and delete buttons
            document.querySelectorAll('.view-appointment').forEach(button => {
                button.addEventListener('click', function() {
                    const id = parseInt(this.getAttribute('data-id'));
                    viewAppointment(id);
                });
            });
            
            document.querySelectorAll('.confirm-appointment').forEach(button => {
                button.addEventListener('click', function() {
                    const id = parseInt(this.getAttribute('data-id'));
                    confirmAppointment(id);
                });
            });
            
            document.querySelectorAll('.delete-appointment').forEach(button => {
                button.addEventListener('click', function() {
                    const id = parseInt(this.getAttribute('data-id'));
                    deleteAppointment(id);
                });
            });
        }

        // CRUD Functions for Doctors
        function addDoctor(doctor) {
            const newId = doctors.length > 0 ? Math.max(...doctors.map(d => d.id)) + 1 : 1;
            doctor.id = newId;
            if (!doctor.photo) {
                doctor.photo = https://picsum.photos/seed/doctor${newId}/300/300;
            }
            doctors.push(doctor);
            saveData();
            renderDoctorsTable();
            populateDoctorSelect();
            showToast('Dokter berhasil ditambahkan!', 'success');
        }

        function editDoctor(id) {
            const doctor = doctors.find(d => d.id === id);
            if (doctor) {
                document.getElementById('doctorId').value = doctor.id;
                document.getElementById('doctorName').value = doctor.name;
                document.getElementById('doctorSpecialization').value = doctor.specialization;
                document.getElementById('doctorExperience').value = doctor.experience;
                document.getElementById('doctorPhoto').value = doctor.photo;
                
                document.getElementById('doctorModalTitle').innerHTML = '<i class="bi bi-pencil"></i> Edit Dokter';
                const doctorModal = new bootstrap.Modal(document.getElementById('doctorModal'));
                doctorModal.show();
            }
        }

        function updateDoctor(id, updatedDoctor) {
            const index = doctors.findIndex(d => d.id === id);
            if (index !== -1) {
                doctors[index] = { ...doctors[index], ...updatedDoctor };
                saveData();
                renderDoctorsTable();
                populateDoctorSelect();
                showToast('Data dokter berhasil diperbarui!', 'success');
            }
        }

        function deleteDoctor(id) {
            if (confirm('Apakah Anda yakin ingin menghapus dokter ini?')) {
                doctors = doctors.filter(d => d.id !== id);
                saveData();
                renderDoctorsTable();
                populateDoctorSelect();
                showToast('Dokter berhasil dihapus!', 'warning');
            }
        }

        // CRUD Functions for Appointments
        function addAppointment(appointment) {
            const newId = appointments.length > 0 ? Math.max(...appointments.map(a => a.id)) + 1 : 1;
            appointment.id = newId;
            appointments.push(appointment);
            saveData();
            renderAppointmentsTable();
            showToast('Janji temu berhasil ditambahkan!', 'success');
        }

        function viewAppointment(id) {
            const appointment = appointments.find(a => a.id === id);
            if (appointment) {
                const detailContainer = document.getElementById('appointmentDetail');
                detailContainer.innerHTML = `
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>ID Janji Temu:</strong>
                                <span class="badge bg-secondary">${appointment.id}</span>
                            </div>
                            <div class="mb-3">
                                <strong>Nama Pasien:</strong><br>
                                ${appointment.patientName}
                            </div>
                            <div class="mb-3">
                                <strong>Telepon:</strong><br>
                                <i class="bi bi-telephone"></i> ${appointment.phone}
                            </div>
                            <div class="mb-3">
                                <strong>Email:</strong><br>
                                <i class="bi bi-envelope"></i> ${appointment.email}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Dokter:</strong><br>
                                <i class="bi bi-person-badge"></i> ${appointment.doctorName}
                            </div>
                            <div class="mb-3">
                                <strong>Tanggal:</strong><br>
                                <i class="bi bi-calendar"></i> ${appointment.date}
                            </div>
                            <div class="mb-3">
                                <strong>Keluhan:</strong><br>
                                <i class="bi bi-chat-text"></i> ${appointment.complaint}
                            </div>
                            <div class="mb-3">
                                <strong>Status:</strong><br>
                                ${appointment.status === 'confirmed' ? '<span class="badge bg-success">Dikonfirmasi</span>' : 
                                  appointment.status === 'pending' ? '<span class="badge bg-warning">Menunggu</span>' :
                                  appointment.status === 'cancelled' ? '<span class="badge bg-danger">Dibatalkan</span>' :
                                  '<span class="badge bg-info">Selesai</span>'}
                            </div>
                        </div>
                    </div>
                `;
                
                const appointmentDetailModal = new bootstrap.Modal(document.getElementById('appointmentDetailModal'));
                appointmentDetailModal.show();
            }
        }

        function confirmAppointment(id) {
            const appointment = appointments.find(a => a.id === id);
            if (appointment) {
                appointment.status = 'confirmed';
                saveData();
                renderAppointmentsTable();
                showToast('Janji temu dikonfirmasi!', 'success');
            }
        }

        function deleteAppointment(id) {
            if (confirm('Apakah Anda yakin ingin menghapus janji temu ini?')) {
                appointments = appointments.filter(a => a.id !== id);
                saveData();
                renderAppointmentsTable();
                showToast('Janji temu dihapus!', 'warning');
            }
        }

        // Event Listeners
        document.addEventListener('DOMContentLoaded', function() {
            loadData();
            renderDoctorsTable();
            renderAppointmentsTable();
            populateDoctorSelect();
            
            // Set minimum date to today for appointment date
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('appointmentDate').setAttribute('min', today);
            
            // Doctor form submission
            document.getElementById('saveDoctor').addEventListener('click', function() {
                const doctorId = document.getElementById('doctorId').value;
                const doctor = {
                    name: document.getElementById('doctorName').value,
                    specialization: document.getElementById('doctorSpecialization').value,
                    experience: parseInt(document.getElementById('doctorExperience').value),
                    photo: document.getElementById('doctorPhoto').value
                };
                
                if (doctorId) {
                    updateDoctor(parseInt(doctorId), doctor);
                } else {
                    addDoctor(doctor);
                }
                
                const doctorModal = bootstrap.Modal.getInstance(document.getElementById('doctorModal'));
                doctorModal.hide();
                
                // Reset form
                document.getElementById('doctorForm').reset();
                document.getElementById('doctorId').value = '';
                document.getElementById('doctorModalTitle').innerHTML = '<i class="bi bi-person-plus"></i> Tambah Dokter';
            });
            
            // Appointment form submission
            document.getElementById('saveAppointment').addEventListener('click', function() {
                const doctorId = parseInt(document.getElementById('appointmentDoctorSelect').value);
                const doctor = doctors.find(d => d.id === doctorId);
                
                const appointment = {
                    patientName: document.getElementById('patientName').value,
                    phone: document.getElementById('patientPhone').value,
                    email: document.getElementById('patientEmail').value,
                    doctorId: doctorId,
                    doctorName: doctor ? doctor.name : '',
                    date: document.getElementById('appointmentDate').value,
                    complaint: document.getElementById('patientComplaint').value,
                    status: document.getElementById('appointmentStatus').value
                };
                
                addAppointment(appointment);
                
                const appointmentModal = bootstrap.Modal.getInstance(document.getElementById('appointmentModal'));
                appointmentModal.hide();
                
                // Reset form
                document.getElementById('appointmentForm').reset();
            });
            
            // Export appointments data
            document.getElementById('exportAppointments').addEventListener('click', function() {
                const dataStr = JSON.stringify(appointments, null, 2);
                const dataUri = 'data:application/json;charset=utf-8,'+ encodeURIComponent(dataStr);
                
                const exportFileDefaultName = appointments_${new Date().toISOString().split('T')[0]}.json;
                
                const linkElement = document.createElement('a');
                linkElement.setAttribute('href', dataUri);
                linkElement.setAttribute('download', exportFileDefaultName);
                linkElement.click();
                
                showToast('Data berhasil diekspor!', 'success');
            });
            
            // Reset doctor modal when hidden
            document.getElementById('doctorModal').addEventListener('hidden.bs.modal', function() {
                document.getElementById('doctorForm').reset();
                document.getElementById('doctorId').value = '';
                document.getElementById('doctorModalTitle').innerHTML = '<i class="bi bi-person-plus"></i> Tambah Dokter';
            });
            
            // Reset appointment modal when hidden
            document.getElementById('appointmentModal').addEventListener('hidden.bs.modal', function() {
                document.getElementById('appointmentForm').reset();
            });
        });
    </script>
    <br><br><br><br><br>
    @endif
<!-- ------------------------------------------------------------------------------------------------------- -->
    <section class="bg-primary text-white py-5">
            <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Patient Tesitonies</h2>
                <p>What did they say about our services</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                <div class="card bg-white text-dark h-100">
                <div class="card-body">
                            <div class="text-warning mb-3">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
            <p class="card-text">"I like the doctor, eventhough they can throw a bit of shade here and there"</p>

                        <footer class="blockquote-footer mb-0">
                                <strong>Noah</strong>
                                <cite title="Source Title">Routine Patient</cite>
                        </footer>
                        </div>
                        </div>
                        </div>

                <div class="col-md-4">
                    <div class="card bg-white text-dark h-100">
                    <div class="card-body">
                            <div class="text-warning mb-3">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                    <p class="card-text">"Theyre great to talk with, although a bit sassy at times"</p>

                            <footer class="blockquote-footer mb-0">
                                <strong>Leiv</strong>
                                <cite title="Source Title">New Patient</cite>
                            </footer>
                            </div>
                            </div>
                            </div>

                <div class="col-md-4">
                    <div class="card bg-white text-dark h-100">
                    <div class="card-body">
                            <div class="text-warning mb-3">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                    <p class="card-text">"Why is it in China?"</p>

                            <footer class="blockquote-footer mb-0">
                                <strong>Withers</strong>
                                <cite title="Source Title">Mental Patient</cite>
                            </footer>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
    </section>

<!---------------------------------------------------------------------------------------------------------- -->
    <section id="contact" class="py-5">
        <div class="container">
        <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Contact Us</h2>
                <p class="lead text-muted">We are ready to fulfill your necessities and needs</p>
        </div>

            <div class="row g-4">
            <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center p-4">
            <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">

                <i class="bi bi-geo-alt-fill text-primary fs-2"></i>
            </div>

                    <h5>Address</h5>
                    <p class="text-muted">Central Plaza, Units L1-3, at 381 Huaihai Middle Road, Huangpu District<br></p>
            </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center p-4">
            <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">

                    <i class="bi bi-telephone-fill text-success fs-2"></i>
            </div>

                            <h5>Phone Number</h5>
                            <p class="text-muted">
                                (015) 0277-3426<br>
                                (081) 0853-5510 (Emergency Contact)
                            </p>
                        </div>
                        </div>
                        </div>

            <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center p-4">
            <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                <i class="bi bi-envelope-fill text-info fs-2"></i>
            </div>

                            <h5>Email</h5>
                            <p class="text-muted">
                                info@kips.com<br>
                                admin@kips.com
                            </p>
                    </div>
                    </div>
                    </div>
                    </div>

            <div class="row mt-5">
            <div class="col-12">
            <div class="ratio ratio-16x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3411.5945710524393!2d121.47395507560012!3d31.231959974347344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35b270427b2234b1%3A0x79ea776c7397d149!2sPop%20Mart!5e0!3m2!1sid!2sid!4v1760245282216!5m2!1sid!2sid"
                                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    </div>
                    </div>
                    </div>
    </section>

<!---------------------------------------------------------------------------------------------------------- -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
        <div class="row g-4">
        <div class="col-lg-4">
                    <h5 class="mb-3">
                        <i class="bi bi-hospital"></i> KIPS
                    </h5>
                    <p class="text-white-50">KIPS will bring you the guarantee to health, medicine, treatments, and everything to make you and your family be happy and healthy together.<br><br>
                                            Established May 25th 2010</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-twitter fs-5"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-instagram fs-5"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-youtube fs-5"></i></a>
                </div>
                </div>

                <div class="col-lg-2">
                    <h6 class="mb-3">Services</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Basic Check-up</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Laboratorium</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Dentical Clinic</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Eye Clinic</a></li>
                </ul>
                </div>

                <div class="col-lg-2">
                    <h6 class="mb-3">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">About Us</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Coureir</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Health Article</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">FAQ</a></li>
                </ul>
                </div>

                <div class="col-lg-4">
                    <h6 class="mb-3">Newsletter</h6>
                    <p class="text-white-50">Get information for our most recent comeuppances and discounts with promos!</p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Insert your Email address">
                        <button class="btn btn-primary" type="button">send</button>
                </div>
                </div>

            </div>
            <hr class="border-secondary my-4">
            <div class="text-center text-white-50">
                <p class="mb-0">&copy; 2025 KIPS. All rights reserved. | 
                    <a href="#" class="text-white-50">Privacy Policy</a> | 
                    <a href="#" class="text-white-50">Terms of Service</a>
                </p>
            </div>
            </div>
    </footer>

<!---------------------------------------------------------------------------------------------------------- -->
    <div class="modal fade" id="appointmentModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">
                        <i class="bi bi-calendar-check"></i> Create your Reservation
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                <form>
                <div class="row g-3">
                <div class="col-md-6">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" required>
                </div>

                <div class="col-md-6">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" required>
                </div>

                <div class="col-md-6">
                            <label class="form-label">Doctor</label>
                            <select class="form-select" required>
                                <option value="">Choose your Doctor</option>
                                <option>Dr. Kai</option>
                                <option>Dr. Chips</option>
                                <option>Dr. Van</option>
                                <option>Dr. Mimi</option>
                            </select>
                </div>

                <div class="col-md-6">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" required>
                </div>

                <div class="col-12">
                            <label class="form-label">Illness</label>
                            <textarea class="form-control" rows="2"></textarea>
                </div>
                </div>
                </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Confirm Reservation</button>
                </div>
                </div>
                </div>
                </div>


<!---------------------------------------------------------------------------------------------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));

    if (target) {
        target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                });
            }
        });
    });

        window.addEventListener('scroll', function() {
        let sections = document.querySelectorAll('section');
        let navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            
        sections.forEach(section => {
                let top = section.offsetTop - 100;
                let height = section.offsetHeight;
                let id = section.getAttribute('id');
                
    if(window.scrollY >= top && window.scrollY < top + height) {
                navLinks.forEach(link => {
                    link.classList.remove('active');

    if(link.getAttribute('href') === '#' + id) {
                    link.classList.add('active');
                    }
                });
            }
        });
    });

    document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you, we will contact you soon.');
            form.reset();
            });
        });



</script>
<script>
        // Initialize data (kosong, akan diisi melalui form)
        let doctors = [];
        let appointments = [];

        // Load data from localStorage if available
        function loadData() {
            const savedDoctors = localStorage.getItem('doctors');
            const savedAppointments = localStorage.getItem('appointments');
            
            if (savedDoctors) {
                doctors = JSON.parse(savedDoctors);
            }
            
            if (savedAppointments) {
                appointments = JSON.parse(savedAppointments);
            }
        }

        // Save data to localStorage
        function saveData() {
            localStorage.setItem('doctors', JSON.stringify(doctors));
            localStorage.setItem('appointments', JSON.stringify(appointments));
        }

        // Show toast notification
        function showToast(message, type = 'success') {
            const toastEl = document.getElementById('liveToast');
            const toastMessage = document.getElementById('toastMessage');
            const toastHeader = toastEl.querySelector('.toast-header');
            
            toastMessage.textContent = message;
            
            // Set header color based on type
            toastHeader.className = 'toast-header';
            if (type === 'success') {
                toastHeader.classList.add('bg-success', 'text-white');
            } else if (type === 'error') {
                toastHeader.classList.add('bg-danger', 'text-white');
            } else if (type === 'warning') {
                toastHeader.classList.add('bg-warning');
            }
            
            const toast = new bootstrap.Toast(toastEl);
            toast.show();
        }

        // Populate doctor select options
        function populateDoctorSelect() {
            const doctorSelect = document.getElementById('appointmentDoctorSelect');
            doctorSelect.innerHTML = '<option value="">-- Pilih Dokter --</option>';
            
            doctors.forEach(doctor => {
                const option = document.createElement('option');
                option.value = doctor.id;
                option.textContent = ${doctor.name} - ${doctor.specialization};
                doctorSelect.appendChild(option);
            });
        }

        // Render doctors table
        function renderDoctorsTable() {
            const table = document.getElementById('doctorsTable');
            table.innerHTML = '';
            
            if (doctors.length === 0) {
                table.innerHTML = `
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            <i class="bi bi-inbox fs-1"></i>
                            <p class="mt-2">Belum ada data dokter</p>
                            <small>Klik tombol "Tambah Dokter" untuk menambah data</small>
                        </td>
                    </tr>
                `;
                return;
            }
            
            doctors.forEach(doctor => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td><span class="badge bg-primary">${doctor.id}</span></td>
                    <td>
                        <img src="${doctor.photo}" alt="${doctor.name}" width="50" height="50" 
                             class="rounded-circle border" onerror="this.src='https://picsum.photos/seed/default/50/50'">
                    </td>
                    <td><strong>${doctor.name}</strong></td>
                    <td>${doctor.specialization}</td>
                    <td>
                        <span class="badge bg-info">${doctor.experience} tahun</span>
                    </td>
                    <td>
                        <button class="btn btn-outline-warning edit-doctor" data-id="${doctor.id}" title="Edit">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-outline-danger delete-doctor" data-id="${doctor.id}" title="Hapus">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                `;
                table.appendChild(row);
            });
            
            // Add event listeners for edit and delete buttons
            document.querySelectorAll('.edit-doctor').forEach(button => {
                button.addEventListener('click', function() {
                    const id = parseInt(this.getAttribute('data-id'));
                    editDoctor(id);
                });
            });
            
            document.querySelectorAll('.delete-doctor').forEach(button => {
                button.addEventListener('click', function() {
                    const id = parseInt(this.getAttribute('data-id'));
                    deleteDoctor(id);
                });
            });
        }

        // Render appointments table
        function renderAppointmentsTable() {
            const table = document.getElementById('appointmentsTable');
            table.innerHTML = '';
            
            if (appointments.length === 0) {
                table.innerHTML = `
                    <tr>
                        <td colspan="7" class="text-center text-muted py-4">
                            <i class="bi bi-inbox fs-1"></i>
                            <p class="mt-2">Belum ada data janji temu</p>
                            <small>Klik tombol "Tambah Janji Temu" untuk menambah data</small>
                        </td>
                    </tr>
                `;
                return;
            }
            
            appointments.forEach(appointment => {
                const row = document.createElement('tr');
                let statusBadge = '';
                
                if (appointment.status === 'confirmed') {
                    statusBadge = '<span class="badge bg-success">✓ Dikonfirmasi</span>';
                } else if (appointment.status === 'pending') {
                    statusBadge = '<span class="badge bg-warning">⏱ Menunggu</span>';
                } else if (appointment.status === 'cancelled') {
                    statusBadge = '<span class="badge bg-danger">✗ Dibatalkan</span>';
                } else {
                    statusBadge = '<span class="badge bg-info">✔ Selesai</span>';
                }
                
                row.innerHTML = `
                    <td><span class="badge bg-secondary">${appointment.id}</span></td>
                    <td><strong>${appointment.patientName}</strong></td>
                    <td>${appointment.phone}</td>
                    <td>${appointment.doctorName}</td>
                    <td>${appointment.date}</td>
                    <td>${appointment.keluhan}</td>
                    <td>${statusBadge}</td>
                    <td>


                        <button class="btn btn-outline-warning edit-appointment" data-id="${appointment.id}" title="Edit">
                            <i class="bi bi-pencil"></i>
                        </button>

                        <button class="btn btn-outline-info view-appointment" data-id="${appointment.id}" title="Lihat Detail">
                            <i class="bi bi-eye"></i>
                        </button>

                        <button class="btn btn-outline-success confirm-appointment" data-id="${appointment.id}" title="Konfirmasi">
                            <i class="bi bi-check"></i>
                        </button>

                        <button class="btn btn-outline-danger delete-appointment" data-id="${appointment.id}" title="Hapus">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                `;
                table.appendChild(row);
            });
            
            // Add event listeners for view, confirm and delete buttons

            document.querySelectorAll('.edit-appointment').forEach(button => {
                button.addEventListener('click', function() {
                    const id = parseInt(this.getAttribute('data-id'));
                    viewAppointment(id);
                });
            });
    
            document.querySelectorAll('.view-appointment').forEach(button => {
                button.addEventListener('click', function() {
                    const id = parseInt(this.getAttribute('data-id'));
                    viewAppointment(id);
                });
            });
            
            document.querySelectorAll('.confirm-appointment').forEach(button => {
                button.addEventListener('click', function() {
                    const id = parseInt(this.getAttribute('data-id'));
                    confirmAppointment(id);
                });
            });
            
            document.querySelectorAll('.delete-appointment').forEach(button => {
                button.addEventListener('click', function() {
                    const id = parseInt(this.getAttribute('data-id'));
                    deleteAppointment(id);
                });
            });
        }

        // CRUD Functions for Doctors
        function addDoctor(doctor) {
            const newId = doctors.length > 0 ? Math.max(...doctors.map(d => d.id)) + 1 : 1;
            doctor.id = newId;
            if (!doctor.photo) {
                doctor.photo = https://picsum.photos/seed/doctor${newId}/300/300;
            }
            doctors.push(doctor);
            saveData();
            renderDoctorsTable();
            populateDoctorSelect();
            showToast('Dokter berhasil ditambahkan!', 'success');
        }

        function editDoctor(id) {
            const doctor = doctors.find(d => d.id === id);
            if (doctor) {
                document.getElementById('doctorId').value = doctor.id;
                document.getElementById('doctorName').value = doctor.name;
                document.getElementById('doctorSpecialization').value = doctor.specialization;
                document.getElementById('doctorExperience').value = doctor.experience;
                document.getElementById('doctorPhoto').value = doctor.photo;
                
                document.getElementById('doctorModalTitle').innerHTML = '<i class="bi bi-pencil"></i> Edit Dokter';
                const doctorModal = new bootstrap.Modal(document.getElementById('doctorModal'));
                doctorModal.show();
            }
        }

        function updateDoctor(id, updatedDoctor) {
            const index = doctors.findIndex(d => d.id === id);
            if (index !== -1) {
                doctors[index] = { ...doctors[index], ...updatedDoctor };
                saveData();
                renderDoctorsTable();
                populateDoctorSelect();
                showToast('Data dokter berhasil diperbarui!', 'success');
            }
        }

        function deleteDoctor(id) {
            if (confirm('Apakah Anda yakin ingin menghapus dokter ini?')) {
                doctors = doctors.filter(d => d.id !== id);
                saveData();
                renderDoctorsTable();
                populateDoctorSelect();
                showToast('Dokter berhasil dihapus!', 'warning');
            }
        }

        // CRUD Functions for Appointments
        function addAppointment(appointment) {
            const newId = appointments.length > 0 ? Math.max(...appointments.map(a => a.id)) + 1 : 1;
            appointment.id = newId;
            appointments.push(appointment);
            saveData();
            renderAppointmentsTable();
            showToast('Janji temu berhasil ditambahkan!', 'success');
        }

        function viewAppointment(id) {
            const appointment = appointments.find(a => a.id === id);
            if (appointment) {
                const detailContainer = document.getElementById('appointmentDetail');
                detailContainer.innerHTML = `
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>ID Janji Temu:</strong>
                                <span class="badge bg-secondary">${appointment.id}</span>
                            </div>
                            <div class="mb-3">
                                <strong>Nama Pasien:</strong><br>
                                ${appointment.patientName}
                            </div>
                            <div class="mb-3">
                                <strong>Telepon:</strong><br>
                                <i class="bi bi-telephone"></i> ${appointment.phone}
                            </div>
                            <div class="mb-3">
                                <strong>Email:</strong><br>
                                <i class="bi bi-envelope"></i> ${appointment.email}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Dokter:</strong><br>
                                <i class="bi bi-person-badge"></i> ${appointment.doctorName}
                            </div>
                            <div class="mb-3">
                                <strong>Tanggal:</strong><br>
                                <i class="bi bi-calendar"></i> ${appointment.date}
                            </div>
                            <div class="mb-3">
                                <strong>Keluhan:</strong><br>
                                <i class="bi bi-chat-text"></i> ${appointment.complaint}
                            </div>
                            <div class="mb-3">
                                <strong>Status:</strong><br>
                                ${appointment.status === 'confirmed' ? '<span class="badge bg-success">Dikonfirmasi</span>' : 
                                  appointment.status === 'pending' ? '<span class="badge bg-warning">Menunggu</span>' :
                                  appointment.status === 'cancelled' ? '<span class="badge bg-danger">Dibatalkan</span>' :
                                  '<span class="badge bg-info">Selesai</span>'}
                            </div>
                        </div>
                    </div>
                `;
                
                const appointmentDetailModal = new bootstrap.Modal(document.getElementById('appointmentDetailModal'));
                appointmentDetailModal.show();
            }
        }

        function confirmAppointment(id) {
            const appointment = appointments.find(a => a.id === id);
            if (appointment) {
                appointment.status = 'confirmed';
                saveData();
                renderAppointmentsTable();
                showToast('Janji temu dikonfirmasi!', 'success');
            }
        }

        function deleteAppointment(id) {
            if (confirm('Apakah Anda yakin ingin menghapus janji temu ini?')) {
                appointments = appointments.filter(a => a.id !== id);
                saveData();
                renderAppointmentsTable();
                showToast('Janji temu dihapus!', 'warning');
            }
        }

         function editAppointment(id) {
            const appointments = appointments.find(d => d.id === id);
            if (appointments) {
                document.getElementById('patientName').value =  appointments.name;
                document.getElementById('phone').value =  appointments.phone;
                document.getElementById('email').value =  appointments.email;
                document.getElementById('doctorName').value =  appointmentsdoctorName;
                document.getElementById('date').value =  appointments.date;
                document.getElementById('complaint').value =  appointments.complaint;

                document.getElementById('appointmentsModalTitle').innerHTML = '<i class="bi bi-pencil"></i> Edit appointments';
                const appointmentsModal = new bootstrap.Modal(document.getElementById('appointmentsModal'));
                appointmentsModal.show();
            }
        }

        // Event Listeners
        document.addEventListener('DOMContentLoaded', function() {
            loadData();
            renderDoctorsTable();
            renderAppointmentsTable();
            populateDoctorSelect();
            
            // Set minimum date to today for appointment date
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('appointmentDate').setAttribute('min', today);
            
            // Doctor form submission
            document.getElementById('saveDoctor').addEventListener('click', function() {
                const doctorId = document.getElementById('doctorId').value;
                const doctor = {
                    name: document.getElementById('doctorName').value,
                    specialization: document.getElementById('doctorSpecialization').value,
                    experience: parseInt(document.getElementById('doctorExperience').value),
                    photo: document.getElementById('doctorPhoto').value
                };
                
                if (doctorId) {
                    updateDoctor(parseInt(doctorId), doctor);
                } else {
                    addDoctor(doctor);
                }
                
                const doctorModal = bootstrap.Modal.getInstance(document.getElementById('doctorModal'));
                doctorModal.hide();
                
                // Reset form
                document.getElementById('doctorForm').reset();
                document.getElementById('doctorId').value = '';
                document.getElementById('doctorModalTitle').innerHTML = '<i class="bi bi-person-plus"></i> Tambah Dokter';
            });
            
            // Appointment form submission
            document.getElementById('saveAppointment').addEventListener('click', function() {
                const doctorId = parseInt(document.getElementById('appointmentDoctorSelect').value);
                const doctor = doctors.find(d => d.id === doctorId);
                
                const appointment = {
                    patientName: document.getElementById('patientName').value,
                    phone: document.getElementById('patientPhone').value,
                    email: document.getElementById('patientEmail').value,
                    doctorId: doctorId,
                    doctorName: doctor ? doctor.name : '',
                    date: document.getElementById('appointmentDate').value,
                    complaint: document.getElementById('patientComplaint').value,
                    status: document.getElementById('appointmentStatus').value
                };
                
                addAppointment(appointment);
                
                const appointmentModal = bootstrap.Modal.getInstance(document.getElementById('appointmentModal'));
                appointmentModal.hide();
                
                // Reset form
                document.getElementById('appointmentForm').reset();
            });
            
            // Export appointments data
            document.getElementById('exportAppointments').addEventListener('click', function() {
                const dataStr = JSON.stringify(appointments, null, 2);
                const dataUri = 'data:application/json;charset=utf-8,'+ encodeURIComponent(dataStr);
                
                const exportFileDefaultName = appointments_${new Date().toISOString().split('T')[0]}.json;
                
                const linkElement = document.createElement('a');
                linkElement.setAttribute('href', dataUri);
                linkElement.setAttribute('download', exportFileDefaultName);
                linkElement.click();
                
                showToast('Data berhasil diekspor!', 'success');
            });
            
            // Reset doctor modal when hidden
            document.getElementById('doctorModal').addEventListener('hidden.bs.modal', function() {
                document.getElementById('doctorForm').reset();
                document.getElementById('doctorId').value = '';
                document.getElementById('doctorModalTitle').innerHTML = '<i class="bi bi-person-plus"></i> Tambah Dokter';
            });
            
            // Reset appointment modal when hidden
            document.getElementById('appointmentModal').addEventListener('hidden.bs.modal', function() {
                document.getElementById('appointmentForm').reset();
            });
        });
    </script>
</body>
</html>