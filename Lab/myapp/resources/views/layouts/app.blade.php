<!DOCTYPE html>
<html lang="en">

<body>
    <div>
        <a href="/login">Login</a>
        <a href="{{route('registration')}}">Register</a>
        <a href="{{route('registration')}}">Register</a>
        <a href="/student/create">Create Student</a>
        <a href="/student/delete">Delete Student</a>
        <a href="/student/edit">Edit Student</a>
        <a href="/student/get">Get Student</a>
    </div>
    @yield('content')

    <div>Copy Right @copy</div>
</body>
</html>