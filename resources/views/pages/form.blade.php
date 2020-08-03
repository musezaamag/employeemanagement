@extends('layouts.master_template')
@section('title') Add employees @endsection
@section('content')

<div class="container register">
    <div class="row">
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Employee Store Data</h3>
                    <div class="row register-form">
                        <form action="/employees" method="post">
                            <h5>Firstname</h5>
                            <input type="text" placeholder="FirstName" name="firstname" autocomplete="off">
                            <h5>Lastname</h5>
                            <input type="text" placeholder="LastName" name="lastname" autocomplete="off">
                            <h5>Birthday</h5>
                            <input type="date" placeholder="Birthday" name="birthday" autocomplete="off">
                            <h5>Position</h5>
                            <input type="text" placeholder="Position" name="position" autocomplete="off">
                            @csrf
                            <button>Submit</button>
                            @error('firstname') {{$message}} @enderror
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</div>
</div>
</div>

@endsection