<form action="#" method="POST">
    <a class="btn btn-secondary" href="#">@include('svg.view')</a>
    
    <a class="btn btn-secondary" href="#">@include('svg.edit')</a>
    
    @csrf
    @method('DELETE')
    
    <button type="submit" class="btn btn-danger">@include('svg.trash')</button>
    
</form>
