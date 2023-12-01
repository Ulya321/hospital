
<div class="main-panel">
    <div class="content-wrapper">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit(); " role="button">
                <i class="fas fa-sign-out-alt"></i>

                {{ __('Log Out') }}
            </a>
        </div>
    </form>
     @include('admin.doctor')
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>