  @extends('admin.layouts.main')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">HomeHome</a></li>
              <li class="breadcrumb-item active">Добавление поста</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

<div class="col-12">
      Добавление поста
      <form action="{{route('admin.post.store')}}" method="POST">
        @csrf
        <div class="form-group">

            <input type="text" class="form-control" name="title" id="title"  placeholder="Название поста"
            value="{{old('title')}}">
            @error('title')
            <div class="text-danger">Это поле необходимо для заполнения</div>
            @enderror


<div class="form-group">


    <textarea id="summernote" name="content"></textarea>
</form>

</div>

        {{-- <div class="form-group">

            <input type="text" class="form-control" name="content" id="content"  placeholder="контент" value="{{old('content')}}">
            @error('content')
            <div class="text-danger">Это поле необходимо для заполнения</div>

            @enderror
</div> --}}

      <div class="form-group">
        Категория
            <select class="form-control" id="category" name="category_id">
              @foreach($categories as $category)
            <option

            value="{{$category->id}}">{{$category->title}}</option>
             @endforeach
             </select>

</div>


 Тэги
 <div class="form-group">
<select multiple class="form-control"   id="tags" name="tags[]">
@foreach($tags as $tag)

    <option value="{{$tag->id}}">{{$tag->title}}</option>
    @endforeach
</select>
</div>
@error('tags')
            <div class="text-danger">Это поле необходимо для заполнения</div>
            @enderror



<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Добавить">
</div>
</form>
</div>
          <!-- ./col -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
