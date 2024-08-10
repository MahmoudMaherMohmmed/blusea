<div class="modal" id="branch-{{ $branch->id }}-delete-model">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">@lang('branches.dialogs.delete.title')</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>@lang('branches.dialogs.delete.info')</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('admin.branches.destroy', $branch->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="button" class="btn ripple btn-secondary" data-dismiss="modal">
                        @lang('branches.dialogs.delete.cancel')
                    </button>
                    <button type="submit" class="btn ripple btn-primary">
                        @lang('branches.dialogs.delete.confirm')
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
