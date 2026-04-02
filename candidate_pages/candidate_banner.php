
  <style>
.hero-bg {
  background: linear-gradient(90deg, #eef4fc 0%, #edf8f7 100%);
  padding: 40px 0;
}

.hero-title {
  color: #0f172a;
  letter-spacing: -0.02em;
  font-weight: 800;
}
.hero-subtitle {
  color: #475569;
  max-width: 650px;
  font-size: 1.15rem;
}
.custom-badge {
  background-color: #dbeafe;
  color: #3b82f6;
  font-size: 0.75rem;
  letter-spacing: 0.5px;
  font-weight: 600;
}

.search-input-group {
  background-color: #fff;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  height: 56px;
  transition: all 0.2s ease-in-out;
}

.input-primary-border {
  border-color: #a5c8ff; 
}

.search-input-group:focus-within {
  border-color: #3b82f6;
  box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.15);
}

.search-input-group .form-control,
.search-input-group .form-select {
  border: none;
  background: transparent;
  box-shadow: none;
  color: #475569;
}

.search-input-group .input-group-text {
  background: transparent;
  border: none;
  color: #3b82f6; 
}

.btn-search {
  height: 56px;
  border-radius: 12px;
  border: none;
  transition: background-color 0.2s;
}
 
  </style>

 <section class="hero-bg">
  <div class="container px-4 px-lg-5">
    <div class="row justify-content-center justify-content-lg-center">
      <div class="col-xl-9 col-lg-10"> 
        
        <div class="text-center text-lg-start">
          <span class="badge rounded-pill text-uppercase custom-badge px-3 py-2 mb-4">
            Search the talent cloud
          </span>

          <h1 class="hero-title mb-3">Curate shortlists with confidence</h1>
          
          <p class="hero-subtitle mx-auto mx-lg-0">
            Filter by skills, availability, and compensation to surface candidates aligned with your brief.
          </p>
        </div>

        <form>
          <div class="row g-3">
            
            <div class="col-12 col-md-12 col-lg-5">
              <div class="input-group search-input-group input-primary-border overflow-hidden">
                <span class="input-group-text ps-3 pe-1">
                    <i class="fa-solid fa-user"></i>
                </span>
                <input type="text" class="form-control ps-2" placeholder="Name, title or keyword">
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
              <div class="input-group search-input-group overflow-hidden">
                <span class="input-group-text ps-3 pe-1">
                  <i class="fa fa-location-dot"></i>
                </span>
                <select class="form-select ps-2">
                  <option selected>Preferred Location</option>
                  <option value="1">Remote</option>
                  <option value="2">New York</option>
                  <option value="3">USA</option>
                </select>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
              <div class="input-group search-input-group overflow-hidden">
                <span class="input-group-text ps-3 pe-1">
                  <i class="fa-solid fa-tag"></i>
                </span>
                <select class="form-select ps-2">
                  <option selected>Speciality</option>
                  <option value="1">Technology</option>
                  <option value="2">Finance</option>
                  <option value="3">Healthcare</option>
                  <option value="4">Ecommerce</option>
                </select>
              </div>
            </div>

            <div class="col-12 col-md-12 col-lg-1">
              <button class="btn btn-primary btn-search w-100 fs-5 d-flex justify-content-center align-items-center" type="button">
                <i class="fa fa-search"></i>
              </button>
            </div>

          </div>
        </form>

      </div>
    </div>
  </div>
</section>
