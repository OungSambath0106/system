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
            {{-- @foreach ($course as $course)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="
                        @if ($user->image && file_exists(public_path('uploads/users/' . $user->image))) {{ asset('uploads/users/' . $user->image) }}
                        @else
                            {{ asset('uploads/default-profile.png') }} @endif
                        "
                            alt="" class="profile_img_table user-image img-circle elevation-2">
                    </td>
                    <td>{{ $course-> }}</td>
                    <td>{{ $course-> }}</td>
                    <td>
                        <a href="{{ route('admin.product.edit', $course->id) }}" class="btn btn-info btn-sm btn-edit">
                            <i class="fas fa-pencil-alt"></i>
                            {{ __('Edit') }}
                        </a>


                        <form action="{{ route('admin.product.destroy', $course->id) }}"
                            class="d-inline-block form-delete-{{ $course->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" data-id="{{ $course->id }}"
                                data-href="{{ route('admin.product.destroy', $course->id) }}"
                                class="btn btn-danger btn-sm btn-delete">
                                <i class="fa fa-trash-alt"></i>
                                {{ __('Delete') }}
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach --}}
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
