@extends('layouts.master_template')
@section('title') All Employee @endsection
@section('content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <h3>Employee </h3>
                        </div>
                        <div class="body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Firstname</th>
                                    <th scope="col">Lastname</th>
                                    <th scope="col">Birthday</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Position</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($information as $c)
                                        <tr>
                                        <th scope="row"><a href="/information/{{$c->id}}">{{$c->id}}</a></th>
                                        <td><a href="/information/{{$c->id}}">{{$c->firstname}}</a></td>
                                            <td><a href="/information/{{$c->id}}">{{$c->lastname}}</a></td>
                                            <td>{{$c->birthday}}</td>
                                            <td>{{$c->age}}</td>
                                            <td>{{$c->position}}</td>
                                        <td><form method="POST" action="{{route('form.edit', [$c->id]) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <button type="submit">Edit</button>
                                            </form>
                                            <form method="POST" action="{{ route('information.delete', [$c->id]) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit">Delete</button>
                                            </form>
                                    </td>
                                        </tr>
                                  @endforeach
                                </tbody>
                              </table>
                              {{$information ->links()}}
                        </div>
                    </div> 
                </div>

            </div>
        </div>


@endsection