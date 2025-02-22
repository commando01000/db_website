@can('edit-gallery')
    <a class="btn btn-sm small btn btn-primary" href="/cp/gallery/{{ $gallery->id }}/edit" data-bs-toggle="tooltip"
        data-bs-placement="bottom" data-bs-original-title="{{ __('Edit') }}"><i class="ti ti-edit text-white"></i>
    </a>
@endcan
@can('delete-gallery')
    {!! Form::open([
        'method' => 'DELETE',
        'class' => 'd-inline',
        'route' => ['gallery.destroy', $gallery->id],
        'id' => 'delete-form-' . $gallery->id,
    ]) !!}
    <a href="#" class="btn btn-sm small btn btn-danger show_confirm" data-bs-toggle="tooltip" data-bs-placement="bottom"
        id="delete-form-1" data-bs-original-title="{{ __('Delete') }}"><i class="ti ti-trash text-white"></i>
    </a>
    {!! Form::close() !!}
@endcan
