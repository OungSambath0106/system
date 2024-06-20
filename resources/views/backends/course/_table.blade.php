<div class="card-body p-0 table-wrapper">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th class="">{{ __('Title') }}</th>
                <th>{{ __('Image') }}</th>
                <th>{{ __('Description') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $course->title }}</td>
                    <td>
                        <img width="50%" height="auto"
                            src="
                        @if ($course->image && file_exists(public_path('uploads/course/' . $course->image))) {{ asset('uploads/course/' . $course->image) }}
                        @else
                            {{ asset('uploads/defualt.png') }} @endif
                        "
                            alt="" class="profile_img_table">
                    </td>
                    <td> {{ Str::limit($course->description, 50) }}</td>

                    <td>
                        @if (auth()->user()->can('course.edit'))
                            <a href="{{ route('admin.course.edit', $course->id) }}" class="btn btn-info btn-sm btn-edit">
                                <i class="fas fa-pencil-alt"></i>
                                {{ __('Edit') }}
                            </a>
                        @endif

                        @if (auth()->user()->can('course.delete'))
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
                        @endif
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
