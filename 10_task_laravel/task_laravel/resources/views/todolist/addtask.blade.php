

  @section('style')
  @vite('resources/css/task.css')
  @endsection
  @include('layouts.head')




    
    <div class="container mt-4">
        <h2 class="mb-4 fw-bold">My Tasks</h2>
        <div class="modal-body">
                        <form action="{{route('tasks.store')}}" method="POST">
                            @csrf
                            @method('POST')
                            <input type="hidden" id="category_id" name="category_id" value="{{ $category_id }}">
                            <div class="mb-3">
                                <label class="form-label">Task Name</label>
                                <input type="text" class="form-control" placeholder="Enter task name" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Details</label>
                                <textarea class="form-control" rows="3" placeholder="Enter task details" name="description"></textarea>
                            </div>
                                <div class="modal-footer d-flex justify-content-between">
                                <a href="/" class="btn btn-secondary" >Cancel</a><br>
                                <button type="submit" class="btn btn-primary">Save Task</button>
                            </div>
                        </form>
                    </div>
        
        
        <!-- Add Task Modal -->
        
    </div>

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