

    @section('style')
    @vite('resources/css/welcome.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endsection
    @include('layouts.head')



    @section('logout')
    <button type="submit" class="btn btn-danger">logout</button>
    @endsection

    @section('login')
    <div>
        <a href="/login" class="btn btn-primary">Login</a>
        <a href="/register" class="btn btn-secondary">Register</a>
    </div>
    @endsection

    @section('check')
        <a class="navbar-brand d-flex align-items-center" href="/products">
            <strong>Dashbord</strong>
        </a>
    @endsection
    @include('layouts.app')

    <div class="container mt-4">
        <h2 class="mb-4 fw-bold">My Tasks</h2>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">+ Add Category</a>
        </div>
        <div class="row">
            <!-- Task Category 1 -->
            @if (Auth::check())
                @foreach ($categories as $category)
                <div class="col-md-4">
                    <div class="card p-3">
                        <h5 class="fw-bold">{{ $category->name }}</h5>
                        <div class="list-group mb-3">
                            @foreach ($category->tasks as $task)
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <input type="checkbox" class="form-check-input me-2" onchange="toggleTask(this)">
                                        <strong>{{ $task->name }}</strong>
                                    </div>
                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link text-danger p-0 m-0 align-baseline"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </div>
                                <div class="ms-4">
                                    <small>{{ $task->description }}</small>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a href="{{ route('tasks.create', ['category_id' => $category->id]) }}" class="btn btn-primary">
                            + Add Task
                        </a>
                    </div>
                </div>
                @endforeach
            @else 
                <div class="alert alert-warning" role="alert">
                    Please login to view your tasks
                </div>
            @endif
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
    <script>
        function toggleTask(checkbox) {
            let taskText = checkbox.nextElementSibling;
            if (checkbox.checked) {
                taskText.classList.add("completed");
            } else {
                taskText.classList.remove("completed");
            }
        }
    </script>
    

@include('layouts.footer')



