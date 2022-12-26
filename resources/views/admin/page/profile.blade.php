@extends('layout.admin')

@section('title')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('content')
    <!-- Main row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                <form class="user">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Profile</h1>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="">Name : {{auth()->user()->name}}</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="">NIM : {{auth()->user()->nim}}</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email : {{auth()->user()->email}}</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Fakultas : Fakultas Ekonomi</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jurusan : Perbankan Syariah</label>
                                        </div>
                                    </div>
                                </form>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    @if (session()->has('error'))
                                        <div class="alert alert-danger alert-dismissible show fade">
                                            {{ session('error') }}
                                        </div>
                                    @elseif(session()->has('success'))
                                        <div class="alert alert-success alert-dismissible show fade">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Change Profile</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('user') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                   id="exampleInputEmail" aria-describedby="emailHelp"
                                                   placeholder="Change Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                   id="exampleInputPassword" placeholder="Change Password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                   id="exampleInputPassworda" placeholder="Cofirm Password" name="cpassword">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

@endsection
