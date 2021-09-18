<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="container-fluid px-4 mt-4">
        <div class="table-responsive">
            <table class="table table-sm table-dark">
                <thead>
                  <tr>
                    <th style="width:100px; min-width:100px;">#</th>
                    <th scope="col">User Name</th>
                    <th style="width:100px; min-width:200px;" class="text-center">Role</th>
                    <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $user->name }}</td>
                        <td class="text-center">
                            @foreach($user->roles as $role)
                            <span class="badge bg-info">{{ $role->name }}</span>
                            @endforeach
                        </td>
                        <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Second group">
                                <a class="btn btn-sm btn-primary"><i class="fas fa-user-tag"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
