@extends('layouts.master_template')
@section('title') EDIT @endsection
@section('content')

<div class="container register">
    <div class="row">
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Edit Employee Data</h3>
                    <div class="row register-form">
                        <form action="{{route('employees.edit', [$id])}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <input type="hidden" name="id" value="{{$id}}">
                            <input type="text" value ="{{$firstname}}" name="firstname" autocomplete="off">
                            <input type="text" value ="{{$lastname}}" name="lastname" autocomplete="off">
                            <input type="date" value ="{{$birthday}}" name="birthday" autocomplete="off">
                            <input type="text" value ="{{$position}}" name="position" autocomplete="off">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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