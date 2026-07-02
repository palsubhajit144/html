User Name: {{$name}}<br>
User Age: {{$age}}<br>
User City: {{$city}}<br>
Random Number: {{rand(1,100)}}<br> <!-- php predefined function to generate random number between 1 to 100. -->

<div>
    <h3>Users:(for loop)</h3>
    <ul>
        @for($i=0; $i < count($users); $i++)
            {{ $i + 1 }}. {{ $users[$i] }}<br>
        @endfor
    </ul>
</div>

<div>
    <h3>Users:(foreach loop)</h3>
    <ul>
        @foreach($users as $index =>$user)
            {{ $index + 1 }}. {{ $user }}<br>
        @endforeach
    </ul>
</div>
<div>
    <h3>Users:(loop iteration)</h3>
    <ul>
        @foreach($users as $user)
            {{ $loop->iteration }}. {{ $user }}<br>
        @endforeach
    </ul>
</div>