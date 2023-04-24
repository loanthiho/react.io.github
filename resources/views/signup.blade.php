<h1>tinh</h1>
<form method="post" action="/loan">
    @csrf 
    <div class="form-group">
        <input type="text" class="form-control" placehoder="name" name="name"> 

    </div>
    <br>
    <div class="form-group">
        <input type="number" class="form-control" placehoder="age" name="age"> 

    </div>
    <br>
    <div class="form-group">
        <input type="text" class="form-control" placehoder="date" name="date"> 
    </div>
    <br>
    <div class="form-group">
        <input type="text" class="form-control" placehoder="phone" name="phone"> 
    </div>
    <br>
    <div class="form-group">
    <input type="url" class="form-control" placehoder="web" name="web"> 

    </div>
    <div class="form-group">
        <input type="text" class="form-control" placehoder="address" name="address"> 
    </div>
    <div>
        @include('block.error')
</div>
    <br>
    <button type="submit" class="btn btn-promary">Tinh</button>
    <div class="display-infor">
        <p>Name:{{$user['name']}}</p>
        <p>Age:{{$user['age']}}</p>
        <p>Date:{{$user['date']}}</p>
        <p>Phone:{{$user['phone']}}</p>
        <p>Web:{{$user['web']}}</p>
        <p>Address:{{$user['address']}}</p>
    </div>
</form>

