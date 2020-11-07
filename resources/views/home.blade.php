@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Chatify Messenger Demo
                    {{-- <p>
                        <a href="./chatify">Messenger</a>
                    </p> --}}
                    <!-- Button trigger modal -->
                    <br>
                    <br>
                    @if (auth()->user()->role == 1)
                        
                        <a href="{{url('/chatify')}}" class="btn btn-success"  >
                            Launch Messenger
                        </a>

                        @else 

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                            Launch Messenger
                        </button>
                    @endif
                    <br>
                    <br> 
                    
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Start Chat</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{url('/start-chat')}}"> 
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                      <label for="">Message</label>
                                      <input type="text" class="form-control" name="message" required>
                                    </div>
                                <button type="submit" class="btn btn-primary btn-sm float-right">Send</button>
                                </form>
                            </div> 
                        </div>
                        </div>
                    </div>
                    search and contact someone to add it to your contacts list
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
