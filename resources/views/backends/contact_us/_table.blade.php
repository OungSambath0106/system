<div class="card-body p-0 table-wrapper">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th class="">{{ __('Name') }}</th>
                <th>{{ __('Message') }}</th>
                <th>{{ __('Email') }}</th>
                <th>{{ __('isRead') }}</th>
                {{-- <th>{{ __('Action') }}</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>
                        @if ($contact->isRead == 1)
                            <span class="badge text-bg-secondary">readed</span>
                        @else
                            <span class="badge text-bg-danger">unread</span>
                        @endif
                    </td>
                    <td>
                        {{-- <a href="{{ route('admin.contact.replysms', $contact->id) }}"
                            class="btn btn-info btn-sm btn-edit view-btn" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop{{ $contact->id }}">
                            <i id="viewAndReplyIcon" class="fas fa-pencil-alt"></i>
                            {{ __('View_and_Reply') }}
                        </a> --}}
                        <a href="{{ route('admin.contact.replysms', $contact->id) }}"
                            class="btn btn-info btn-sm btn-edit view-btn" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop{{ $contact->id }}" data-id="{{ $contact->id }}">
                            <i id="viewAndReplyIcon" class="fas fa-pencil-alt"></i>
                            {{ __('View_and_Reply') }}
                        </a>
                        <form action="{{ route('admin.contact.destroy', $contact->id) }}"
                            class="d-inline-block form-delete-{{ $contact->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" data-id="{{ $contact->id }}"
                                data-href="{{ route('admin.contact.destroy', $contact->id) }}"
                                class="btn btn-danger btn-sm btn-delete">
                                <i class="fa fa-trash-alt"></i>
                                {{ __('Delete') }}
                            </button>
                        </form>
                    </td>
                </tr>
                @include('backends.contact_us.replysms')
            @endforeach

        </tbody>
    </table>

    <div class="row">
        <div class="col-12 d-flex flex-row flex-wrap">
            <div class="row" style="width: -webkit-fill-available;">
                <div class="col-12 col-sm-6 text-center text-sm-left pl-3" style="margin-block: 20px">
                    {{ __('Showing') }} {{ $contacts->firstItem() }} {{ __('to') }} {{ $contacts->lastItem() }}
                    {{ __('of') }} {{ $contacts->total() }} {{ __('entries') }}
                </div>
                <div class="col-12 col-sm-6 pagination-nav pr-3"> {{ $contacts->links() }}</div>
            </div>
        </div>
    </div>
</div>
