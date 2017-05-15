<hr/>
<h2>Comments</h2>

@if ( !empty( $comments ) )

    @foreach( $comments as $comment )

        <div class="panel panel-default">
            <div class="panel-body">
                {{ $comment->comment }}
            </div>
            <div class="panel-footer">
                <i> <strong>{{ $comment->name }}</strong> on {{ $comment->created_at }} </i>
            </div>
        </div>
    
    @endforeach

@else

    <p>No Comments. Be the first!</p>


@endif