<div id="side-area-main" class="col-md-2">
    <div id="side-area-container">
        <ul id="side-list">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Add New Post</a></li>
            <li><a href="{{ route('categories.index') }}">Categories</a></li> {{-- notice that i'm using the nickname of the route here and not necessarily the original name of the route --}}
            <li><a href="#">Admin</a></li>

        </ul>
    </div>
</div>
