    @if(Auth::guard('web')->check())
     <p>You are log as User
     </p>
     @else
          <p>You are log out  User
     </p>
    @endif


        @if(Auth::guard('admin')->check())
     <p>You are log as Admin
     </p>
     @else
          <p>You are log out  Admin
     </p>
    @endif