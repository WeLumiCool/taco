<div class="row">
    <div class="col-12">
        <h2 class="opensans text-center">Пользователи</h2>
    </div>
</div>
<div class="mt-4">
    @foreach($users as $user)
            <div class="row">
                <div class="col-3">
                    {{ $user->name }}
                </div>
                <div class="col-3">
                    {{ $user->email }}
                </div>
            </div>
    @endforeach
</div>

<a href="{{ route('admin/create/user') }}">
    <div class="position-fixed add-widget bg-success text-white">
        <i class="fas fa-user-plus fa-lg"></i>
    </div>
</a>