<form action="{{ url('/clients') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="first_name">First Name</label>
    <input type="text" name="first_name" id="first_name">
    
    <br>
    <label for="last_name">Last Name</label>
    <input type="text" name="last_name" id="last_name" >
    <br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <br>
    <label for="password">Password</label>
    <input type="text" name="password" id="password">
    <br>
    <label for="phone_number">Phone Number</label>
    <input type="text" name="phone_number" id="phone_number">
    <br>
    <label for="country">Country</label>
    <input type="text" name="country" id="country">
    <br>
    <label for="city">City</label>
    <input type="text" name="city" id="city">
    <br>

    <label for="adress">Adress</label>
    <input type="text" name="adress" id="adress">
    <br>

    <input type="submit" value="Send">
    <br>
</form>