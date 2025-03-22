

  @section('style')
  @vite('resources/css/register.css')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @endsection
  @include('layouts.head')
  


    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            <div class="card-body">
                <h2 class="text-center mb-4 ">Login Form</h2>
                <form action="/login" method="POST">
                    @csrf
                    @METHOD('POST')
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <p class="text-center mt-3">Don't have an account? <a href="/register" class="text-decoration-none" style="color: #6f42c1;">Register</a></p>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                html: '{!! implode("<br>", $errors->all()) !!}',
                confirmButtonText: 'OK'
            });
        });
    </script>
    @endif

    @if(session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session("success") }}',
                confirmButtonText: 'OK'
            });
        });
    </script>
    @endif

</body>

</html>