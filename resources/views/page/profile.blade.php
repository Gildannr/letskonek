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
                        <p class="text-muted">@<i>{{ auth()->user()->fullname }}</i></p>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body text-center">
                        <form action="{{ route('profile.resume') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="resume" accept="application/pdf" required>
                            <button type="submit">Upload Resume</button>
                        </form>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body text-center">
                        @php
                            $latestResume = DB::table('tabel_resume')
                                ->where('users_id', auth()->user()->users_id)
                                ->orderByDesc('created')
                                ->first();
                        @endphp
                        
                        @if ($latestResume)
                            <p>Resume terakhir: 
                                <a href="{{ asset('storage/' . $latestResume->resume_file) }}" target="_blank">
                                    {{ $latestResume->resume_name }}
                                </a>
                            </p>
                        @endif
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

    <div class="wpo-bread-cumb-area" style="padding: 0 60px 60px 60px">
        <div class="row">
            <!-- Order History -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">
                  <h5 class="card-title">History Order</h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                        $orders = App\Models\Order::where('users_id', auth()->user()->users_id)
                                ->with('product')
                                ->orderBy('created', 'desc')
                                ->get();
                      @endphp

                      @forelse($orders as $order)
                      <tr>
                        <th scope="row">
                          @if($order->product && $order->product->thumbnail)
                            <img src="{{ asset('storage/' . $order->product->thumbnail) }}" alt="{{ $order->product->product_name ?? 'Product' }}" width="60">
                          @else
                            <img src="{{ asset('assets/images/shop/shop-single/1.jpg') }}" alt="Product" width="60">
                          @endif
                        </th>
                        <td>
                          <a href="{{ route('order.show', $order->orders_code) }}" class="text-primary fw-bold">
                            {{ $order->product->product_name ?? 'Unknown Product' }}
                          </a>
                        </td>
                        <td>{{ date('d M Y', strtotime($order->tgl_order)) }}</td>
                        <td>Rp {{ number_format($order->total_payment, 0, ',', '.') }}</td>
                        <td>
                          @if($order->status == 1)
                            <span class="badge bg-warning">Pending</span>
                          @elseif($order->status == 2)
                            <span class="badge bg-success">Completed</span>
                          @elseif($order->status == 0)
                            <span class="badge bg-danger">Cancelled</span>
                          @else
                            <span class="badge bg-secondary">Unknown</span>
                          @endif
                        </td>
                      </tr>
                      @empty
                      <tr>
                        <td colspan="5" class="text-center">No order history found</td>
                      </tr>
                      @endforelse
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Order History -->
        </div>
    </div>

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
