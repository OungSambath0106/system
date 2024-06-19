<div class="card-body p-0 table-wrapper">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th class="">{{ __('Title') }}</th>
                <th>{{ __('Category') }}</th>
                <th>{{ __('Description') }}</th>
                <th>{{ __('Status') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lessons as $lesson)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td> {{ $lesson->title }} </td>
                    <td> {{ $lesson->category->title }} </td>
                    <td>
                        {{ Str::limit($lesson->description, 40) }}
                    </td>

                    <td>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input switcher_input status"
                                id="status_{{ $lesson->id }}" data-id="{{ $lesson->id }}"
                                {{ $lesson->status == 1 ? 'checked' : '' }} name="status">
                            <label class="custom-control-label" for="status_{{ $lesson->id }}"></label>
                        </div>
                    </td>
                    <td>
                        @if (auth()->user()->can('lesson.edit'))
                            <a href="{{ route('admin.lesson.edit', $lesson->id) }}"
                                class="btn btn-info btn-sm btn-edit">
                                <i class="fas fa-pencil-alt"></i>
                                {{ __('Edit') }}
                            </a>
                        @endif

                        @if (auth()->user()->can('lesson.delete'))
                            <form action="{{ route('admin.lesson.destroy', $lesson->id) }}"
                                class="d-inline-block form-delete-{{ $lesson->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" data-id="{{ $lesson->id }}"
                                    data-href="{{ route('admin.lesson.destroy', $lesson->id) }}"
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
                    {{ __('Showing') }} {{ $lessons->firstItem() }} {{ __('to') }} {{ $lessons->lastItem() }}
                    {{ __('of') }} {{ $lessons->total() }} {{ __('entries') }}
                </div>
                <div class="col-12 col-sm-6 pagination-nav pr-3"> {{ $lessons->links() }}</div>
            </div>
        </div>
    </div>


</div>
