{{-- import scss html --}}
<link rel="stylesheet" href="{{ mix('css/403.css') }}">
<div class="lock"></div>
<div class="message">
    <h1>Access to this page is restricted</h1>
    <p>You do not have permission to access this page or an error has occurred.</p>
    @role('user')
        <a href="{{ route('user.home') }}" class="button">Back to Dashboard</a>
    @else
        <a href=" {{ route('admin.dashboard') }}" class="button">Back to Dashboard</a>
    @endrole

</div>
