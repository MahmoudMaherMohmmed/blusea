<div class="modal" id="collection-{{ $collection->id }}-delete-model">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">@lang('collections.dialogs.delete.title')</h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>@lang('collections.dialogs.delete.info')</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('admin.collections.destroy', $collection->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="button" class="btn ripple btn-secondary" data-dismiss="modal">
                        @lang('collections.dialogs.delete.cancel')
                    </button>
                    <button type="submit" class="btn ripple btn-primary">
                        @lang('collections.dialogs.delete.confirm')
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
