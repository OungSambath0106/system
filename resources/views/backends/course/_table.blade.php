<div class="card-body p-0 table-wrapper">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th class="">{{ __('Title') }}</th>
                <th>{{ __('Description') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td class="col-1">{{ $loop->iteration }}</td>
                    <td class="col-2">{{ $course->title }}</td>
                    <td class="col-7">{{ Str::limit($course->description, 100) }}</td>
                    <td class="col-2">
                        <a href="{{ route('admin.course.edit', $course->id) }}" class="btn btn-info btn-sm btn-edit">
                            <i class="fas fa-pencil-alt"></i>
                            {{ __('Edit') }}
                        </a>
                        <form action="{{ route('admin.course.destroy', $course->id) }}"
                            class="d-inline-block form-delete-{{ $course->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" data-id="{{ $course->id }}"
                                data-href="{{ route('admin.course.destroy', $course->id) }}"
                                class="btn btn-danger btn-sm btn-delete">
                                <i class="fa fa-trash-alt"></i>
                                {{ __('Delete') }}
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-12 d-flex flex-row flex-wrap">
            <div class="row" style="width: -webkit-fill-available;">
                <div class="col-12 col-sm-6 text-center text-sm-left pl-3" style="margin-block: 20px">
                    {{ __('Showing') }} {{ $courses->firstItem() }} {{ __('to') }} {{ $courses->lastItem() }}
                    {{ __('of') }} {{ $courses->total() }} {{ __('entries') }}
                </div>
                <div class="col-12 col-sm-6 pagination-nav pr-3"> {{ $courses->links() }}</div>
            </div>
        </div>
    </div>

</div>
