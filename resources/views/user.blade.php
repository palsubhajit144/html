@include('common.header')
<!DOCTYPE html>
<title> {{ $key }} </title>
<body> 
    @if ( $key == "subhajit" )
        <h1>Admin Name is {{ $key }}.</h1>
    @elseif ( $key == "Subhajit" ) 
        <h1>Admin Name is {{ $key }}.</h1>
    @else
        <h1>User Name is {{ $key }}.</h1>
    @endif

<h2> User List</h2>
<ul>
    @for($i=0; $i < count($users); $i++)
        {{ $i +1 }}. {{$users[$i]}} <br>
    @endfor
</ul>
@include('common.footer',['page'=>"View from User Page."])
</body>
</html>
