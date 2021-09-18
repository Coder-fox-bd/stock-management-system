<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container-fluid px-4 mt-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Roles
        </button>
        <div class="table-responsive">
            <table class="table table-sm table-dark">
                <thead>
                  <tr>
                    <th style="width:100px; min-width:100px;">#</th>
                    <th scope="col">Role Name</th>
                    <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($roles as $key => $role)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $role->name }}</td>
                        <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Second group">
                                <a wire:click="editRole({{ $role->id }})" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa fa-edit"></i></a>
                                <a wire:click="delete({{ $role->id }})" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    <!-- Modal -->
    <div wire:ignore.self class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Add Roles</h5>
            <button wire:click="resetPage" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input wire:model="name" class="form-control form-control-lg" type="text" placeholder="Role Name" aria-label=".form-control-lg example">
            </div>
            <div class="modal-footer">
            <button wire:click="resetPage" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            @if($updateMode == true)
            <button wire:click="updateRole()" type="button" class="btn btn-primary">Update</button>
            @else
            <button wire:click="addRole()" type="button" class="btn btn-primary">Save</button>
            @endif
            </div>
        </div>
        </div>
    </div>
</div>
