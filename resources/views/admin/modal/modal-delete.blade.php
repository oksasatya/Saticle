<div class="modal fade" id="deleteModal{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> Delete
                    Confirmation </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure want to delete ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <form method="POST" action="{{ route('admin.manage-users.destroy', [$user->id]) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-primary" value="delete">
                </form>
            </div>
        </div>
    </div>
</div>
