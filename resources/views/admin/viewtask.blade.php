@include('admin.header')

@include('admin.sidebar')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>

    <style>
        .task-item {padding: 10px; border: 1px solid #ddd; margin-bottom: 5px; background: #f8f8f8; cursor: move;}
    </style>
</head>
<body>


    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>View Tasks</h1>
                        
                    </div>
                     <div class="col-sm-6">
                        <form action="{{ route('web.store') }}" method="POST">
                            @csrf
                            <a href="{{ route('web.home') }}" class="btn btn-primary">Add Task</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
             @if (Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif

            @if (Session::get('fail'))
            <div class="alert alert-danger">
            {{ Session::get('fail') }}
            </div>
        @endif
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Drag and Drop to Reorder Tasks</h3>
                </div>
                <div class="card-body">
                    <div id="sortable">
                        @foreach($view_tasks as $view_task)
                            <div class="task-item" data-id="{{ $view_task->id }}">
                                <form action="{{ route('web.update', $view_task->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    <input type="text" name="task_name" value="{{ $view_task->task_name }}">
                                    <button class="btn btn-info" type="submit"><i class="far fa-edit"></i>Update</button>
                                </form>

                                
                                
                                <a href="{{ url('web/destroy/'.$view_task->id) }}" class="btn btn-danger"> <i class="far fa-trash-alt"></i>Delete</button>
                                </a>
                                <a href="{{ route('web.addproject', $view_task->id) }}" class="btn btn-success">Add Product</a>


                                
                            </div>
                        @endforeach
                    </div>          
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </div>

<script>
$(function(){

    $('#sortable').sortable({
        update: function(event, ui){
            let order = [];
            $('.task-item').each(function(){
                order.push($(this).data('id'));
            });

            $.post("{{ route('web.reorder') }}", {
                order: order,
                "_token": "{{ csrf_token() }}"
            }, function(data){
                console.log("Reordered");
            });
        }
    });

});
</script>

</body>
</html>









