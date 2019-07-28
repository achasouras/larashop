Create product: <br><br>
<form action="{{route('create_product_submit')}}" method="post">
@csrf
    <input type="text" name="name" placeholder="Name*" required><br>
@php

foreach ($attributes as $attribute){

$attribute->parent_required ? $required = ' required':$required = '';

echo '<input type="text"' . $required . ' name="attid' . $attribute->id . '" placeholder="' . $attribute->name . ($required!==''?'*':'') . '"></input><br>';

}
@endphp
<br>
<button>Create</button>
</form>
