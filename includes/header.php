<header class="bg-white py-2 py-md-3 px-3 px-md-5 border-bottom sticky-top">
    <div class="container-fluid">
        <div class="row align-items-center gy-2">
            
            <div class="col-6 col-md-3 text-md-start">
                <a href="#" class="d-inline-block">
                    <img src="./resources/images/logo_pc_worth_v2.png" alt="logo" class="logo img-fluid" style="height: 35px;">
                </a>
            </div>

            <div class="col-md-6 d-none d-md-block">
                <form action="" class="input-group input-group-lg">
                    <span class="input-group-text bg-white border-end-0 rounded-start-pill shadow-none border border-secondary focus-border-primary">
                        <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" class="DocSearch-Search-Icon">
                            <path d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z"
                            stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>

                    <input 
                        type="search" 
                        id="docsearch-input"
                        class="form-control border-start-0 shadow-none border border-secondary focus-border-primary fs-6 fs-md-5"
                        placeholder="Search for product(s)" 
                        aria-label="Search" 
                        autocomplete="off"
                    >

                    <button class="btn text-light fw-semibold px-4 rounded-end-pill" style="background-color: #043b79;">
                        Search
                    </button>
                </form>
            </div>

            <div class="col-6 col-md-3 d-flex justify-content-end align-items-center gap-2 gap-md-3">
                <!-- Search Button (Hidden on md and larger) -->
                <button id="toggleSearchBtn" class="btn btn-light btn-sm rounded-circle d-md-none d-flex justify-content-center align-items-center p-2 p-sm-2"
                        style="width: 32px; height: 32px;">
                    <i class="fa-solid fa-search fs-6 fs-md-5"></i>
                </button>

                <!-- Messenger Button -->
                <button class="btn btn-light btn-sm rounded-circle d-flex justify-content-center align-items-center p-2 p-sm-2"
                        style="width: 32px; height: 32px;">
                    <i class="fa-brands fa-facebook-messenger fs-6 fs-md-5" style="color: #168aff;"></i>
                </button>

                <!-- User Profile Button -->
                <button class="btn btn-light btn-sm rounded-circle d-flex justify-content-center align-items-center p-2 p-sm-2"
                        style="width: 32px; height: 32px;">
                    <i class="fa-solid fa-user fs-6 fs-md-5"></i>
                </button>

                <!-- Shopping Bag Button -->
                <button class="btn btn-light btn-sm rounded-circle d-flex justify-content-center align-items-center p-2 p-sm-2 position-relative"
                        style="width: 32px; height: 32px;">
                    <i class="fa-solid fa-shopping-bag fs-6 fs-md-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        0
                        <span class="visually-hidden">items in cart</span>
                    </span>
                </button>
            </div>
        </div>
    </div>

    <div id="mobileSearchBar" class="container-fluid bg-white py-2 d-none">
        <div class="row">
            <div class="col-12">
                <form action="" class="input-group">
                    <span class="input-group-text bg-white border-end-0 rounded-start-pill shadow-none border border-secondary focus-border-primary">
                        <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" class="DocSearch-Search-Icon">
                            <path d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z"
                            stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>

                    <input 
                        type="search" 
                        id="docsearch-input"
                        class="form-control border-start-0 shadow-none border border-secondary focus-border-primary fs-6 fs-md-5"
                        placeholder="Search for product(s)" 
                        aria-label="Search" 
                        autocomplete="off"
                    >

                    <button class="btn text-light fw-semibold px-4 rounded-end-pill" style="background-color: #043b79;">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>