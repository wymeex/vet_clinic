@if ($navType == "landing-page")
    <div class="nav nav1">
        <div class="nav1-logo-div">
           <img src="/assets/media/logos/paw.png" class="nav1-logo" alt="logo">
        </div>
        <div class="nav1-links">
            <a href="/" class="nav1-link {{$activeLink == 1 ? "active" : ""}}"><img src="\assets\media\icons\home.svg" class="nav1-icons" alt="logo">Home</a>
        </div>

        <div class="nav1-sign">
            <a href="/s" class="nav1-link {{$activeLink ==2 ? "active" : ""}}">Sign In</a>
        </div>
    </div>
    @elseif($navType == "client-page")
    <div class="nav nav1">
        <div class="nav1-logo-div">
           <img src="/assets/media/logos/paw.png" class="nav1-logo" alt="logo">
        </div>
        <div class="nav1-links">
            <a href="/" class="nav1-link {{$activeLink == 1 ? "active" : ""}}"><img src="\assets\media\icons\home.svg" class="nav1-icons" alt="logo">Home</a>
            <a href="/" class="nav1-link {{$activeLink == 2 ? "active" : ""}}"><img src="\assets\media\icons\appointment.svg" class="nav1-icons" alt="logo">Book Appointment</a>
            <a href="/" class="nav1-link {{$activeLink == 3 ? "active" : ""}}"><img src="\assets\media\icons\user.svg" class="nav1-icons" alt="logo">Feedback</a>

        </div>

        <div class="nav1-sign nav1-pfp">
            <img class="position-absolute h-100" src="/assets/media/pfp/{{$pfp}}" alt="">
        </div>
    </div>
    @elseif($navType == "admin-page")
    <div class="nav1">
        <div class="nav1-logo">
            <!-- <img src="/assets/media/logos/paw.png" class="position-absolute w-100 h-100" alt="logo"> -->
        </div>
        <div class="nav1-links">
            <a href="/AdminDashboard" class="nav1-link {{$activeLink == 1 ? "active" : ""}}">Home</a>
            <a href="/AdminAnnouncements" class="nav1-link {{$activeLink == 2 ? "active" : ""}}">Announcements</a>
            <a href="/AdminDemographics" class="nav1-link {{$activeLink == 3 ? "active" : ""}}">Demographics</a>
            <a href="/AdminDocuments" class="nav1-link {{$activeLink == 4 ? "active" : ""}}">Documents</a>
            <a href="/AdminResidents" class="nav1-link {{$activeLink == 5 ? "active" : ""}}">Residents</a>
            <a href="/Admins" class="nav1-link {{$activeLink == 6 ? "active" : ""}}">Admins</a>
            <a href="/AdminFeedbacks" class="nav1-link {{$activeLink == 7 ? "active" : ""}}">Feedbacks</a>
        </div>

        <a class="primary-btn-red1" href="/signout">Sign Out</a>
    </div>
    @endif
