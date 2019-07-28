@if(Session::has('message'))
    <p class="alert alert-info">{{ Session::get('message') }}</p>
@endif

Attribute create: <br>

<form method="post" action="{{route('create_attribute_submit')}}">
    <input type="text" name="name" placeholder="Name" required> <br>
    <input type="text" name="position" placeholder="position"> <br>
    Required on parent <input type="checkbox" name="parent_required"> <br>
    Required on variation <input type="checkbox" name="variation_required"> <br>
    @csrf
    <button>Create</button>
</form>