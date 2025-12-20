<form action="{{url('/userRegistertion')}}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="submit">
</form>
