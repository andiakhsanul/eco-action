<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
    <div class="side-header">
        <img src="{{asset('assets/images/logo.png')}}" width="120" height="120">
        <h5 style="margin-top:10px;">Hello, Admin</h5>
    </div>

    <hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131; padding-right:5px">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Home</a>
    <a href="{{route('dashboard.users')}}"><i class="fa fa-users"></i> Users</a>
    <a href="{{route('dashboard.volunteers')}}"><i class="fa fa-heart"></i> Volunteer</a>
    <a href="{{route('dashboard.donations')}}"><i class="fa fa-money"></i> Donation</a>
    <a href="{{route('dashboard.articles')}}"><i class="fa fa-bookmark "></i> Articles</a>
    <a href="{{route('dashboard.feedback')}}"><i class="fa fa-comment "></i> Feedback</a>
    <a href="{{route('logout')}}"><i class="fa fa-caret-square-o-left "></i> Logout</a>
    
</div>

<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>
<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("main-content").style.marginLeft = "250px";
        document.getElementById("main").style.display = "none";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        document.getElementById("main").style.display = "block";
    }
</script>