@if (flash()->message)
<div class="alert alert-{{ flash()->class }}" role="alert">
  {{ flash()->message }}
</div>
@endif