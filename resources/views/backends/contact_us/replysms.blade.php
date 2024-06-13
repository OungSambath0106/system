<!-- Modal -->
<div class="modal fade" id="staticBackdrop{{ $contact->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h4>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <div class="card">

                        <ul class="list-group">
                            <li class="list-group-item">
                                <b class="ml-5">Name:</b><p class="float-right mr-5">{{ $contact->name }}</p>
                            </li>
                            <li class="list-group-item">
                                <b  class="ml-5">Email:</b><p class="float-right mr-5">{{ $contact->email }}</p>
                            </li>
                            <li class="list-group-item">
                                <b  class="ml-5">Message:</b> <p class="float-right mr-5">{{ $contact->message }}</p>
                            </li>
                            <li class="list-group-item">
                                <b  class="ml-5">Received at:</b> <p class="float-right mr-5">{{ $contact->created_at }}</p>
                            </li>
                        </ul>

                    <div class="replysms">
                        <form method="POST" action="{{ route('admin.messages.sendReply') }}">
                            @csrf
                            <input type="hidden" name="customerEmail" value="{{ $contact->email }}">
                            <div class="form-group">
                                <label for="reply">Your Reply</label>
                                <textarea class="form-control" id="reply" name="replymessage" rows="3" placeholder="reply message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Reply</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div> --}}
        </div>
    </div>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
