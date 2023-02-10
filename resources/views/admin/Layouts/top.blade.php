<div class="top">
    <i class="uil uil-bars sidebar-toggle"></i>
    <form action="/search" method="get">
      <div class="search-box">
        <i class="uil uil-search"></i>
        <input type="text" name="query" placeholder="Search here..." />
      </div>
      
    </form>
    
    @auth
    <span class="user-detail">Welcome <strong>{{Auth::user()->name}}!</strong></span>
    @endauth
</div>