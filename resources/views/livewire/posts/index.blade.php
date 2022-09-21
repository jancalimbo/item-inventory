<div>
    {{-- In work, do what you enjoy. --}}

    <div class="d-flex justify-content-between flex-wrap">
        
       
        <table class="table">
            <thead>
                <tr>
                    <th class="col">Item Name</th>
                    <th class="col">Description</th>
                    <th class="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td><a class="btn btn-primary" href="{{ url('edit', ['post' => $post->id]) }}">Edit</a></td>
                    <td><a class="btn btn-primary" href="{{ url('delete', ['post' => $post->id]) }}" >Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>


    <style>
        /* #post-box{
            background-color: #202382;
            color: white;
        }

        .card-footer{
            background-color: #1A1B41;
            color: white;
        }
        a{
            color: #BAFF29;
            margin-right: 8px;
        } */
    
    
    </style>
</div>


