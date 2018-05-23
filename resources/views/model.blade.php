@foreach($result as $make)

<div class="col-sm-12 mt-1">

    <div class="lead">

        <p data-toggle="collapse" data-target="#make_{{ $make['id'] }}" aria-expanded="false" class="head_collapse">
            <span class="action">+</span>
            <span class="name mr-4">{{ $make['name'] }}</span>
            <span class="update btn btn-success btn-sm" data-toggle="modal" data-target="#update_popup" data-url="{{ url('/make/update', $make['id']) }}">U</span>
            <span class="delete btn btn-danger btn-sm" data-url="{{ url('/make/delete', $make['id']) }}">D</span>
        </p>

        <div class="collapse" id="make_{{ $make['id'] }}">
            <div class="ml-3">
            @foreach($make['model'] as $model)

                <p>
                    <span>* </span>
                    <span class="name mr-4">{{ $model['name'] }}</span>
                    <span class="update btn btn-success btn-sm" data-toggle="modal" data-target="#update_popup" data-url="{{ url('/model/update', $model['id']) }}">U</span>
                    <span class="delete btn btn-danger btn-sm" data-url="{{ url('/model/delete', $model['id']) }}">D</span>
                </p>

            @endforeach
            </div>
        </div>

    </div>

</div>

@endforeach