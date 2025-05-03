@extends('layouts.master')
@section('title', 'Order Produk')
@section('content')
    <section class="wpo-breadcumb-area section-padding">
    <div class="container my-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/images/default-avatar.jpg') }}" class="rounded-circle mb-3" width="150">
                        <p class="text-muted">@<i>{{ auth()->user()->username }}</i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">Profile Details</h5>
                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="fullname"
                                    value="{{ $mergedData['users']->fullname ?? old('fullname', '') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email"
                                    value="{{ $mergedData['users']->email ?? old('email', '') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No. WA</label>
                                <input type="text" class="form-control" name="phone"
                                    value="{{ $mergedData['users']->phone ?? old('phone', '') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Joined Date</label>
                                <input type="text" class="form-control"
                                    value="{{ date('Y-m-d', strtotime(auth()->user()->created ?? now())) }}" readonly>
                            </div>
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                    data-bs-target="#changePasswordModal">
                                    Change Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Change Password Modal -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('profile.change-password') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Current Password</label>
                            <input type="password" class="form-control" name="current_password" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">New Password</label>
                            <input type="password" class="form-control" id="new_password" name="new_password" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="new_password_confirmation" required>
                            <div id="password_message" class="form-text text-danger"></div>
                        </div>
                        <script>
                            document.getElementById('confirm_password').addEventListener('input', function() {
                                const newPassword = document.getElementById('new_password').value;
                                const confirmPassword = this.value;
                                const message = document.getElementById('password_message');
                                const submitButton = this.form.querySelector('button[type="submit"]');
                                
                                if (newPassword !== confirmPassword) {
                                    message.textContent = 'Passwords do not match';
                                    submitButton.disabled = true;
                                } else {
                                    message.textContent = '';
                                    submitButton.disabled = false;
                                }
                            });
                        </script>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
